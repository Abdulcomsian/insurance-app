<?php

namespace App\Http\Controllers;

use App\addAssessor;
use App\Models\AccidentServiceReport;
use App\Repairer;
use App\Repo\AccidentService\AccidentServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use PDF;
use Response;

class AccidentServiceReportController extends Controller
{
    protected $accident_assessing_report = '';

    public function __construct(AccidentServiceInterface $accidentServiceInterface)
    {
        $this->accident_assessing_report = $accidentServiceInterface;
    }
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = AccidentServiceReport::select('id', 'invoice_no', 'invoice_date', 'to', 'vehicle', 'rego', 'assessment_fee', 'owner_name', 'engine_type', 'created_at')->orderBy('id', 'desc')->get();
                return Datatables::of($data)
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="' . route("view-accident-report.index", $row->id) . '" class="btn btn-sm btn-clean btn-icon" target="_blank" title="View Report"><i class="fa fa-eye"></i></a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view('payment_transactions.index');
        } catch (\Exception $exception){
            toastr()->error('Something went wrong, try again'. $exception->getMessage());
            return back();
        }
    }

    public function create()
    {
        $previous_invoice_no = AccidentServiceReport::latest()->pluck('tax_invoice')->first();
        $invoice_no = ++$previous_invoice_no;
        $data =
        [
            'repairers' => Repairer::all(['id', 'name']),
            'assessors' => addAssessor::all(['id', 'assessor']),
            'invoice_no'=> sprintf("%04s",$invoice_no)
        ];
        return view('accident-service.create', compact('data'));
    }

    public function store (Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     // 'invoice_no'                    => 'required',
        //     'invoice_date'                  => 'required',
        //     'to'                            => 'required',
        //     'tax_invoice'                   => 'required',
        //     'vehicle'                       => 'required',
        //     'rego'                          => 'required',
        //     'assessment_fee'                => 'required',
        //     'sub_total'                     => 'required',
        //     'gst'                           => 'required',
        //     'grand_total'                   => 'required',
        //     'owner_name'                    => 'required',
        //     'assessment_type'               => 'required',
        //     'make'                          => 'required',
        //     'engine_type'                   => 'required',
        //     'odometer'                      => 'required',
        //     'model'                         => 'required',
        //     'engine_size'                   => 'required',
        //     'paint_group'                   => 'required',
        //     'series'                        => 'required',
        //     'engine_no'                     => 'required',
        //     'paint_code'                    => 'required',
        //     'month_year'                    => 'required',
        //     'transmission'                  => 'required',
        //     'colour'                        => 'required',
        //     'body_type'                     => 'required',
        //     'axles'                         => 'required',
        //     'vin'                           => 'required',
        //     'assessment_date'               => 'required',
        //     'cover_type'                    => 'required',
        //     'sum_insured'                   => 'required',
        //     'market_value'                  => 'required',
        //     'salvage_value'                 => 'required',
        //     'settlement'                    => 'required',
        //     'less_excess'                   => 'required',
        //     'settlement_sub_total'          => 'required',
        //     'settlement_gst'                => 'required',
        //     'settlement_total'              => 'required',
        //     'cash_settled'                  => 'required',
        //     'certificate_compliance'        => 'required',
        //     'salvage_condition'             => 'required',
        //     'vehicle_and_suspension_condition'=> 'required',
        // ]);
        // if($validator->fails())
        // {
        //     toastr()->error('Validation Error');
        //     return redirect()->route('accident-accessing-service.create');
        // }
        // else
        // {

            $all_input = $request->except('model');

            $report = $this->accident_assessing_report->store($request->all());

            if(!is_null($report))
            {
              //  dd("succ", $request->all());
                toastr()->success("Accident Report Added Successfully");
                return redirect()->route('accident-report.index', ['id'=>$report->id]);
            }
            else
            {
                //dd("errror", $request->all());
                toastr()->error('Validation Error');
                return redirect()->route('accident-accessing-service.create');
            }
        // }
    }

    public function accidentReport ($id)
    {
        $id = (int)$id;
        $accident_service_report = AccidentServiceReport::with('serviceAssessors:id,assessor_id,accident_service_report_id', 'serviceAssessors.assessor', 'serviceRepairers:id,repairer_id,accident_service_report_id', 'serviceRepairers.repairers', 'demageValues:id,demage_level,comment,demage_section_id,accident_service_report_id', 'demageValues.demage:id,name', 'suppValues:id,quoted,assessed,variance,supp_id,accident_service_report_id', 'suppValues.supps:id,name', 'assessmentReports:id,quoted,assessed,variance,book_values,live_market_values,trade_low,market_one,trade,market_twp,retail,market_three,value_avg_kms,market_avg,assessment_report_product_id,accident_service_report_id', 'assessmentReports.reportProduct:id,name')
        ->find($id);
        $data =
        [
            'accident_service_report'=>$accident_service_report
        ];
        $pdf = PDF::loadView('accident-report.report', $data);
        $content = $pdf->download()->getOriginalContent();
        $file_name = 'report-'.$id.'.pdf';
        Storage::put('accident-reports/'.$file_name, $content);
        $accident_report = AccidentServiceReport::find($id);
        $accident_report->pdf_file = $file_name;
        $accident_report->save();

        return redirect()->route('accident-accessing-service.index');
    }

    public function viewReport ($id)
    {
        $id = (int)$id;
        $accident_report = (new AccidentServiceReport())->find($id);
        $file_name = $accident_report->pdf_file;
        $path = Storage::path('accident-reports/'.$file_name);
        if($file_name == '')
        {
            return redirect()->route('accident-accessing-service.index')->with('danger', "No File Found");
        }
        else
        {
            if(file_exists($path))
            {
                return Response::make(file_get_contents($path), 200, [
                    'content-type'=>'application/pdf',
                ]);
            }
            else
            {
                return redirect()->route('accident-accessing-service.index')->with('danger', "No File Found");
            }
        }
    }
}
