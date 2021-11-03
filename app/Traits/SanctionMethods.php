<?php

namespace App\Traits;


use App\Models\AddSearch;
use App\Models\ReqForSancStatus;
use App\Models\SancImages;
use App\Utils\SanctionRequestStatus;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use phpDocumentor\Reflection\Types\Self_;

trait SanctionMethods {

    private $apiBaseUrl = "https://api.sanctionssearch.com/v2/json/reply/";

    protected function curlRequest($methodName,$request){
        try {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->apiBaseUrl.$methodName,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                    "request": '.$request.',
                    "authentication": {
                        "apiUserId": "api_malikasif",
                        "apiUserKey": "Bw4XvkW2JCdFyhXQvMZwrIGVb4kMNspZbkS6NpPhoko5Q6kEbvvuQMa31hWCakoqnnDnz2cf8ShguLffTQKr86izkZfGDmge78RDB7ejspw9E4IocRTtJ7tsfedKWGMVLdjx5MNWLB0RIj6qr1EVCWEaOyxx4ExWNKxBUkuAd8Si8MT6jWs6b1sYJjSFoq4hdmd9WDGgGdRFevdcPCoglBUWsJ2LCYmXdKeVIVjPqmz9jXTnfQ1VbX6MBr"
                    }
                }',
                CURLOPT_HTTPHEADER => array(
                    'Accept: application/json',
                    'Content-Type: application/json',
                    'Authorization: Basic Og=='
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            $result = json_decode($response);
            return $result;
        }catch (\Exception $exception){
            Log::error('Error From Trait curlRequest()'.$exception->getMessage().'');
        }
    }

    public function AddSearch($data){
        try {
            $name = trim(preg_replace("/(^|\s+)(\S(\s+|$))+/", " ", $data["name"]));
            $request = '{
                "Name": "'. $name .'",
                "Type": '. $data['type'] .',
                "SelectedLists" : [
                        "ALL"
                    ]
            }';
            $result = self::curlRequest('AddSearch',$request);
            if (isset($result->data) && isset($result->data->searchRecord)){
                $searchRecord = $result->data;
                $addSearch = AddSearch::create([
                    'addSearchId' => $searchRecord->searchRecord->id,
                    'sanc_req_id' => $data['sanctionRequestId'],
                    'name' => $searchRecord->searchRecord->searchCriteria->name,
                    'searchType' => $searchRecord->searchRecord->searchType,
                    'searchTypeId' => $data['searchTypeId'],
                    'isArchived' => $searchRecord->searchRecord->isArchived,
                    'numOfResults' => $searchRecord->searchRecord->numOfResults,
                    'clientInResults' => $searchRecord->searchRecord->clientInResults,
                    'clientNotInResults' => $searchRecord->searchRecord->clientNotInResults,
                    'affectedByUpdate' => $searchRecord->searchRecord->affectedByUpdate,
                    'includesPepSearchRecord' => $searchRecord->includesPepSearchRecord,
                    'responseStatus' => $searchRecord->responseStatus->message,
                ]);
                self::SaveSearch($searchRecord->searchRecord->id);
            }
        }catch (\Exception $exception){
            Log::error('Error From Trait AddSearch() '.$exception->getMessage().'');
        }
    }

    public function SaveSearch($id){
        try {
            $request = '{
                "Id": '. $id .'
            }';
            $result = self::curlRequest('SaveSearch',$request);

            if ($result->data){
                $searchRecord = $result->data;
                AddSearch::where('addSearchId',$id)
                    ->update([
                        'saveSearchSuccess' => $searchRecord->success ?: null,
                        'saveSearchResponseStatusMessage' => $searchRecord->responseStatus->message ?: null,
                        'saveSearchDate' => now(),
                    ]);
            }
        }catch (\Exception $exception){
            Log::error('Error From Trait SaveSearch()'.$exception->getMessage().'');
        }
    }

    public function DeleteSearch($id){
        try {
            $request = '{
                "Id": '. $id .'
            }';
            $result = self::curlRequest('DeleteSearch',$request);
            if ($result->data){
                $deleteRecord = $result->data;
                AddSearch::where('addSearchId',$id)
                    ->update([
                        'deleteSearchSuccess' => $deleteRecord->success ?: null,
                        'deleteSearchResponseStatusMessage' => $deleteRecord->responseStatus->message ?: null,
                        'deleteSearchDate' => now(),
                    ]);
            }
            return $result;
        }catch (\Exception $exception){
            Log::error('Error From Trait DeleteSearch()'.$exception->getMessage().'');
        }
    }

    public function GetPdfs(){
        try {
            $request = '{}';
            $result = self::curlRequest('GetPdfs',$request);
            if (count($result->data->documents) > 0 ){
                foreach ($result->data->documents as $document){
                    if ($document->isReady == true){

                        $sanction = self::GetPdf($document->id);
                        if (!empty($sanction->data->document->documentBytes)) {
                            $pdfResult =  $sanction->data;

                            $addSearch = AddSearch::where('addSearchId',$pdfResult->document->sanctionsSearchId)->first();
                            $base64data = base64_decode($pdfResult->document->documentBytes, true);
                            $filename = $addSearch->name.' - '.$pdfResult->document->fileName;
                            $filePath = 'images/'. $filename;
                            $publicPath = public_path($filePath);

                            file_put_contents("{$publicPath}", $base64data);
                            SancImages::create([
                                'name' => $addSearch->name,
                                'type' => $pdfResult->document->type,
                                'typeId' => $addSearch->searchTypeId,
                                'isReady' => $pdfResult->document->isReady,
                                'file' => $filename,
                                'getPdfResponseStatusMessage' => $pdfResult->responseStatus->message,
                                'documentId' => $pdfResult->document->id,
                                'sanctionsSearchId' => $pdfResult->document->sanctionsSearchId,
                                'sanc_req_id' => $addSearch->sanc_req_id,
                                'add_search_id' => $addSearch->id,
                            ]);
                            $deleteResult = self::DeleteSearch( $pdfResult->document->sanctionsSearchId);
                            self::updateRequestSanctionStaus($addSearch->sanc_req_id);
                        }

                    }
                }
            }

        }catch (\Exception $exception){
            dd($exception->getMessage());
            Log::error('Error From Trait GetPdfs()'.$exception->getMessage().'');
        }
    }

    private function updateRequestSanctionStaus($id){
        try {
            $addSearches = AddSearch::where('sanc_req_id',$id)
                ->where('deleteSearchSuccess',true)
                ->count();
            $requestSanction = ReqForSancStatus::where('id',$id)
                ->first();
            if ($addSearches == $requestSanction->sanctions){
                $requestSanction->status = SanctionRequestStatus::AllResultAttached;
                $requestSanction->save();
            }
        }catch (\Exception $exception){
            dd($exception->getMessage());
        }
    }
    public function GetPdf($id){
        try {
            $request = '{
                "Id": '. $id .'
            }';
            return self::curlRequest('GetPdf',$request);
        }catch (\Exception $exception){
            Log::error('Error From Trait GetPdf() '.$exception->getMessage().'');
        }
    }
}
