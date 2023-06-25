<?php

namespace App\Repo\AccidentService;

use App\Models\AccidentServiceAssessor;
use App\Models\AccidentServiceRepairer;
use App\Models\AccidentServiceReport;
use App\Models\SuppsValue;
use Exception;
use Illuminate\Support\Facades\DB;

class AccidentService implements AccidentServiceInterface
{
    public function store($data)
    {
        $RR_quoted                      = array_key_exists('R&R_quoted', $data);
        $RR_assessed                    = array_key_exists('R&R_assessed', $data);
        $RR_variance                    = array_key_exists('R&R_variance', $data);
        $Repair_quoted                  = array_key_exists('Repair_quoted', $data);
        $Repair_assessed                = array_key_exists('Repair_assessed', $data);
        $Repair_variance                = array_key_exists('Repair_variance', $data);
        $Paint_quoted                   = array_key_exists('Paint_quoted', $data);
        $Paint_assessed                 = array_key_exists('Paint_assessed', $data);
        $Paint_variance                 = array_key_exists('Paint_variance', $data);
        $Mechanical_quoted              = array_key_exists('Mechanical_quoted', $data);
        $Mechanical_assessed            = array_key_exists('Mechanical_assessed', $data);
        $Mechanical_variance            = array_key_exists('Mechanical_variance', $data);
        $Misc_quoted                    = array_key_exists('Misc_quoted', $data);
        $Misc_assessed                  = array_key_exists('Misc_assessed', $data);
        $Misc_variance                  = array_key_exists('Misc_variance', $data);
        $Labour_quoted                  = array_key_exists('Labour_quoted', $data);
        $Labour_assessed                = array_key_exists('Labour_assessed', $data);
        $Labour_variance                = array_key_exists('Labour_variance', $data);
        $Parts_quoted                   = array_key_exists('Parts_quoted', $data);
        $Parts_assessed                 = array_key_exists('Parts_assessed', $data);
        $Parts_variance                 = array_key_exists('Parts_variance', $data);
        $Sublet_quoted                  = array_key_exists('Sublet_quoted', $data);
        $Sublet_assessed                = array_key_exists('Sublet_assessed', $data);
        $Sublet_variance                = array_key_exists('Sublet_variance', $data);
        $Supplementary_quoted           = array_key_exists('Supplementary_quoted', $data);
        $Supplementary_assessed         = array_key_exists('Supplementary_assessed', $data);
        $Supplementary_variance         = array_key_exists('Supplementary_variance', $data);
        $SubTotal_quoted                = array_key_exists('SubTotal_quoted', $data);
        $SubTotal_assessed              = array_key_exists('SubTotal_assessed', $data);
        $SubTotal_variance              = array_key_exists('SubTotal_variance', $data);
        $gst_quoted                     = array_key_exists('gst_quoted', $data);
        $gst_assessed                   = array_key_exists('gst_assessed', $data);
        $gst_variance                   = array_key_exists('gst_variance', $data);
        $TotalEstimate_quoted           = array_key_exists('TotalEstimate_quoted', $data);
        $TotalEstimate_assessed         = array_key_exists('TotalEstimate_assessed', $data);
        $TotalEstimate_variance         = array_key_exists('TotalEstimate_variance', $data);
        $ReportedItems_quoted           = array_key_exists('ReportedItems_quoted', $data);
        $ReportedItems_assessed         = array_key_exists('ReportedItems_assessed', $data);
        $ReportedItems_variance         = array_key_exists('ReportedItems_variance', $data);
        $Towing_quoted                  = array_key_exists('Towing_quoted', $data);
        $Towing_assessed                = array_key_exists('Towing_assessed', $data);
        $Towing_variance                = array_key_exists('Towing_variance', $data);
        $ExternalSublet_quoted          = array_key_exists('ExternalSublet_quoted', $data);
        $ExternalSublet_assessed        = array_key_exists('ExternalSublet_assessed', $data);
        $ExternalSublet_variance        = array_key_exists('ExternalSublet_variance', $data);
        $Additional_quoted              = array_key_exists('Additional_quoted', $data);
        $Additional_assessed            = array_key_exists('Additional_assessed', $data);
        $Additional_variance            = array_key_exists('Additional_variance', $data);
        $Discounts_quoted               = array_key_exists('Discounts_quoted', $data);
        $Discounts_assessed             = array_key_exists('Discounts_assessed', $data);
        $Discounts_variance             = array_key_exists('Discounts_variance', $data);
        $LessITC_quoted                 = array_key_exists('LessITC_quoted', $data);
        $LessITC_assessed               = array_key_exists('LessITC_assessed', $data);
        $LessITC_variance               = array_key_exists('LessITC_variance', $data);
        $LessContribution_quoted        = array_key_exists('LessContribution_quoted', $data);
        $LessContribution_assessed      = array_key_exists('LessContribution_assessed', $data);
        $LessContribution_variance      = array_key_exists('LessContribution_variance', $data);
        $PAV_quoted                     = array_key_exists('PAV_quoted', $data);
        $PAV_assessed                   = array_key_exists('PAV_assessed', $data);
        $PAV_variance                   = array_key_exists('PAV_variance', $data);
        try
        {
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
                $report->assessment_date    =       $data['assessment_date'];
                $report->cover_type         =       $data['cover_type'];
                $report->sum_insured        =       $data['sum_insured'];
                $report->market_value       =       $data['market_value'];
                $report->salvage_value      =      $data['salvage_value'];
                $report->settlement         =       $data['settlement'];
                $report->less_excess        =       $data['less_excess'];
                $report->settlement_sub_total =       $data['settlement_sub_total'];
                $report->settlement_gst     =       $data['settlement_gst'];
                $report->settlement_total   =       $data['settlement_total'];
                $report->cash_settled       =       $data['cash_settled'];
                $report->certificate_compliance =       $data['certificate_compliance'];
                $report->salvage_condition  =       $data['salvage_condition'];
                $report->comments           =       $data['comments'];
                $report->total_supps        =       $data['total_supps'];
                $report->save();
                self::storeAssessors($data['assessors'],$report->id);
                self::storeRepairers($data['repairers'],$report->id);
                self::storeSupps($data['Sup1_quoted'], $data['Sup1_assessed'], $data['Sup1_variance'],$data['Sup2_quoted'],$data['Sup2_assessed'],$data['Sup2_variance'],$data['Sup3_quoted'],$data['Sup3_assessed'],$data['Sup3_variance'],$report->id);
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

    public static function storeSupps ($Sup1_quoted, $Sup1_assessed, $Sup1_variance, $Sup2_quoted, $Sup2_assessed, $Sup2_variance, $Sup3_quoted, $Sup3_assessed, $Sup3_variance, $report_id)
    {
        // dd($report_id);
        self::storeSupp1($Sup1_quoted, $Sup1_assessed, $Sup1_variance, $report_id);
        self::storeSupp2($Sup2_quoted, $Sup2_assessed, $Sup2_variance, $report_id);
        self::storeSupp3($Sup3_quoted, $Sup3_assessed, $Sup3_variance, $report_id);
    }

    public static function storeSupp1 ($Sup1_quoted, $Sup1_assessed, $Sup1_variance, $report_id)
    {
        $supp_values                                = new SuppsValue();
        $supp_values->quoted                        = $Sup1_quoted;
        $supp_values->assessed                      = $Sup1_assessed;
        $supp_values->variance                      = $Sup1_variance;
        $supp_values->supp_id                       = 1;
        $supp_values->accident_service_report_id    = $report_id;
        $supp_values->save();
    }

    public static function storeSupp2 ($Sup2_quoted, $Sup2_assessed, $Sup3_variance, $report_id)
    {
        $supp_values                                = new SuppsValue();
        $supp_values->quoted                        = $Sup2_quoted;
        $supp_values->assessed                      = $Sup2_assessed;
        $supp_values->variance                      = $Sup3_variance;
        $supp_values->supp_id                       = 2;
        $supp_values->accident_service_report_id    = $report_id;
        $supp_values->save();
    }

    public static function storeSupp3 ($Sup3_quoted, $Sup3_assessed, $Sup3_variance, $report_id)
    {
        $supp_values                                = new SuppsValue();
        $supp_values->quoted                        = $Sup3_quoted;
        $supp_values->assessed                      = $Sup3_assessed;
        $supp_values->variance                      = $Sup3_variance;
        $supp_values->supp_id                       = 3;
        $supp_values->accident_service_report_id    = $report_id;
        $supp_values->save();
    }
}
