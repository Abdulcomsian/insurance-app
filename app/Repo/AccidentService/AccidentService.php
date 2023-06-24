<?php

namespace App\Repo\AccidentService;

use App\Models\AccidentServiceAssessor;
use App\Models\AccidentServiceRepairer;
use App\Models\AccidentServiceReport;
use Exception;
use Illuminate\Support\Facades\DB;

class AccidentService implements AccidentServiceInterface
{
    public function store($data)
    {
        try
        {
            // dd($data['assessors']);
            $report = new AccidentServiceReport();
            DB::transaction( function () use ($data, $report) {
                $report->invoice_no         =       $data['invoice_no'];
                $report->invoice_date       =       $data['invoice_date'];
                $report->to                 =       $data['to'];
                $report->tax_invoice        =       $data['tax_invoice'];
                $report->vehicle            =       $data['vehicle'];
                $report->rego               =       $data['rego'];
                $report->assessment_fee     =       $data['assessment_fee'];
                $report->sub_total          =       $data['sub_total'];
                $report->gst                =       $data['gst'];
                $report->grand_total        =       $data['grand_total'];
                $report->owner_name         =       $data['owner_name'];
                $report->assessment_type    =       $data['assessment_type'];
                $report->make               =       $data['make'];
                $report->engine_type        =       $data['engine_type'];
                $report->odometer           =       $data['odometer'];
                $report->model              =       $data['model'];
                $report->engine_size        =       $data['engine_size'];
                $report->paint_group        =       $data['paint_group'];
                $report->series             =       $data['series'];
                $report->engine_no          =       $data['engine_no'];
                $report->paint_code         =       $data['paint_code'];
                $report->month_year         =       $data['month_year'];
                $report->transmission       =       $data['transmission'];
                $report->colour             =       $data['colour'];
                $report->body_type          =       $data['body_type'];
                $report->axles              =       $data['axles'];
                $report->vin                =       $data['vin'];
                $report->save();
                self::storeAssessors($data['assessors'],$report->id);
                self::storeRepairers($data['repairers'],$report->id);
            } );
            return $report;

        }
        catch (Exception $ex)
        {
            toastr()->error('Something went wrong, try again'. $ex->getMessage());
        }
    }

    public static function storeAssessors($assessors,$report_id)
    {
        foreach($assessors as $assessor)
        {
            $accident_assessor = new AccidentServiceAssessor();
            $accident_assessor->assessor_id                  =   (int)$assessor;
            $accident_assessor->accident_service_report_id   =   (int)$report_id;
            $accident_assessor->save();
        }
    }

    public static function storeRepairers($repairers,$report_id)
    {
        foreach($repairers as $repairer)
        {
            $accident_repairer = new AccidentServiceRepairer();
            $accident_repairer->repairer_id                  =   (int)$repairer;
            $accident_repairer->accident_service_report_id   =   (int)$report_id;
            $accident_repairer->save();
        }
    }
}
