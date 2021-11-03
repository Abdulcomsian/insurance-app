<?php

namespace App\Traits;


use App\Models\AddSearch;
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
            Log::error('Error From Trait curlRequest()',$exception->getMessage());
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
                    'name' => $searchRecord->searchRecord->searchCriteria->name ?: null,
                    'searchType' => $searchRecord->searchRecord->searchType ?: null,
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
            Log::error('Error From Trait AddSearch()',$exception->getMessage());
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
            Log::error('Error From Trait SaveSearch()',$exception->getMessage());
        }
    }

    public function DeleteSearch($id){
        try {
            $request = '{
                "Id": '. $id .'
            }';
            $result = self::curlRequest('DeleteSearch',$request);
        }catch (\Exception $exception){
            Log::error('Error From Trait DeleteSearch()',$exception->getMessage());
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
                            $base64data = base64_decode($sanction->data->document->documentBytes, true);
                            $result = file_put_contents(public_path('data/'.$sanction->data->document->fileName), $base64data);
                        }

                        dd('done pdf');
                    }
                }
            }

        }catch (\Exception $exception){
            Log::error('Error From Trait GetPdfs()',$exception->getMessage());
        }
    }

    public function GetPdf($id){
        try {
            $request = '{
                "Id": '. $id .'
            }';
            return self::curlRequest('GetPdf',$request);
        }catch (\Exception $exception){
            Log::error('Error From Trait GetPdf()',$exception->getMessage());
        }
    }
}
