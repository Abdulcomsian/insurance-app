<?php

namespace App\Http\Controllers;

use App\addAssessor;
use App\Http\Requests\AccidentServiceReportRequest;
use App\Models\AccidentServiceReport;
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
                $data = AccidentServiceReport::select('invoice_no', 'invoice_date', 'to', 'vehicle', 'rego', 'assessment_fee', 'owner_name', 'engine_type', 'created_at')->orderBy('id', 'desc')->get();
                return Datatables::of($data)
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="' . route("assessors.index", $row->id) . '" class="btn btn-sm btn-clean btn-icon" title="View details"><i class="la la-eye"></i></a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
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
            'assessment_date'               => 'required',
            'cover_type'                    => 'required',
            'sum_insured'                   => 'required',
            'market_value'                  => 'required',
            'salvage_value'                 => 'required',
            'settlement'                    => 'required',
            'less_excess'                   => 'required',
            'settlement_sub_total'          => 'required',
            'settlement_gst'                => 'required',
            'settlement_total'              => 'required',
            'cash_settled'                  => 'required',
            'certificate_compliance'        => 'required',
            'salvage_condition'             => 'required',
        ]);
        if($validator->fails())
        {
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
        }
    }
}
