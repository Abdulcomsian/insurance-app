<?php

namespace App\Http\Controllers;

use App\addAssessor;
use App\Http\Requests\AccidentServiceReportRequest;
use App\Repairer;
use App\Repo\AccidentService\AccidentServiceInterface;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

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
                $data = DB::table('transaction')
                    ->join('users','transaction.user_id','=','users.id')
                    ->orderBy('transaction.id','desc')
                    ->select(
                        'transaction.*',
                        'users.name as user_name')
                    ->get();
                return Datatables::of($data)
                    ->addColumn('billing_name',function ($data){
                        return $data->billing_fname. ' ' . $data->billing_sname;
                    })
                    ->editColumn('status',function ($data){
                        if ($data->status == "Paid"){
                            return '<div class="badge badge-success" fw-bolder">'.$data->status.'</div>';
                        }else{
                            return '<div class="badge badge-danger" fw-bolder">'.$data->status.'</div>';
                        }
                    })
                    ->addColumn('action',function ($data){
                        $action = '<a href="'.route('payment_transactions.show',encrypt($data->id)).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <i class="fa fa-eye" title="View" aria-hidden="true"></i>
                            </a>
                            <a href="'.route('payment_transactions.resend_email',encrypt($data->id)).'" class="resend_email btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <i class="fa fa-envelope" title="Resend Email" aria-hidden="true"></i>
                            </a>';
                            if (isset($data->pdf)){
                                $action .= '<a href="'.env('CUSTOMER_DOMAIN'). $data->pdf.'" download="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="fa fa-file-pdf" aria-hidden="true"></i>
                                </a>';
                            }
                            return $action;
                    })
                    ->rawColumns(['status','billing_name','action'])
                    ->make(true);
            }
            return view('payment_transactions.index');
        } catch (\Exception $exception){
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    public function create()
    {
        $data =
        [
            'repairers' => Repairer::all(['id', 'name']),
            'assessors' => addAssessor::all(['id', 'assessor'])
        ];
        return view('accident-service.create', compact('data'));
    }

    public function store (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'invoice_no'                    => 'required',
            'invoice_date'                  => 'required',
            'to'                            => 'required',
            'tax_invoice'                   => 'required',
            'vehicle'                       => 'required',
            'rego'                          => 'required',
            'assessment_fee'                => 'required',
            'sub_total'                     => 'required',
            'gst'                           => 'required',
            'grand_total'                   => 'required',
            'owner_name'                    => 'required',
            'assessment_type'               => 'required',
            'make'                          => 'required',
            'engine_type'                   => 'required',
            'odometer'                      => 'required',
            'model'                         => 'required',
            'engine_size'                   => 'required',
            'paint_group'                   => 'required',
            'series'                        => 'required',
            'engine_no'                     => 'required',
            'paint_code'                    => 'required',
            'month_year'                    => 'required',
            'transmission'                  => 'required',
            'colour'                        => 'required',
            'body_type'                     => 'required',
            'axles'                         => 'required',
            'vin'                           => 'required',
            // 'series'                    => 'required',
            // 'series'                    => 'required',
            // 'series'                    => 'required',
            // 'series'                    => 'required',
            // 'series'                    => 'required',
            // 'series'                    => 'required',
        ]);
        if($validator->fails())
        {
            dd($request->all());
            toastr()->error('Validation Error');
            return redirect()->route('accident-accessing-service.create');
        }
        else
        {
            $report = $this->accident_assessing_report->store($request->all());
            if(!is_null($report))
            {
                toastr()->success("Accident Report Added Successfully");
                return redirect()->route('accident-accessing-service.index');
            }
            else
            {
                toastr()->error('Validation Error');
                return redirect()->route('accident-accessing-service.create');
            }
            // dd("report", $report);
        }
    }
}
