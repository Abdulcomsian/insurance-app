<?php

namespace App\Repo\AccidentService;

use App\Models\AccidentServiceAssessor;
use App\Models\AccidentServiceRepairer;
use App\Models\AccidentServiceReport;
use App\Models\DemageSectionValue;
use App\Models\DetailAssessmentReport;
use App\Models\SuppsValue;
use App\Traits\Image;
use Exception;
use Illuminate\Support\Facades\DB;

class AccidentService implements AccidentServiceInterface
{
    use Image;
    public function store($data)
    {
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
                $report->overall            =       $data['overall'];
                $report->interior           =       $data['interior'];
                $report->exterior           =       $data['exterior'];
                $report->steering           =       $data['steering'];
                $report->brakes             =       $data['brakes'];
                $report->tyre_depth_unit_front=       $data['tyre_depth_unit_front'];
                $report->tyre_depth_unit_rear =       $data['tyre_depth_unit_rear'];
                $report->rh_front           =       $data['rh_front'];
                $report->lh_front           =       $data['lh_front'];
                $report->rh_rear            =       $data['rh_rear'];
                $report->lh_rear            =       $data['lh_rear'];
                $report->repair_duration_days= $data['repair_duration_days'];

                if(array_key_exists('image', $data))
                    $report->file             =       $this->storeImage(AccidentServiceReport::PATH, $data['image']);
                $report->save();
                self::storeAssessors($data['assessors'],$report->id);
                self::storeRepairers($data['repairers'],$report->id);
                self::storeSupps($data['Sup1_quoted'], $data['Sup1_assessed'], $data['Sup1_variance'],$data['Sup2_quoted'],$data['Sup2_assessed'],$data['Sup2_variance'],$data['Sup3_quoted'],$data['Sup3_assessed'],$data['Sup3_variance'],$report->id);
                // self::storeDemageSectionValues();
                //RR
                if(isset($data['R&R_quoted']))
                {
                    $detail_assessment                                  =  new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['R&R_quoted'] ? $data['R&R_quoted'] : null;
                    $detail_assessment->assessed                        = $data['R&R_quoted'] ? $data['R&R_assessed'] : null;
                    $detail_assessment->variance                        = $data['R&R_quoted'] ? $data['R&R_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 1;
                    $detail_assessment->save();
                }

                //Repair
                if(isset($data['Repair_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Repair_quoted'] ? $data['Repair_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Repair_assessed'] ? $data['Repair_assessed'] : null;
                    $detail_assessment->variance                        = $data['Repair_variance'] ? $data['Repair_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 2;
                    $detail_assessment->save();
                }

                //Paint
                if(isset($data['Paint_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Paint_quoted'] ? $data['Paint_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Paint_quoted'] ? $data['Paint_assessed'] : null;
                    $detail_assessment->variance                        = $data['Paint_quoted'] ? $data['Paint_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 3;
                    $detail_assessment->save();
                }

                //Mechanical
                if(isset($data['Mechanical_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Mechanical_quoted'] ? $data['Mechanical_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Mechanical_assessed'] ? $data['Mechanical_assessed'] : null;
                    $detail_assessment->variance                        = $data['Mechanical_variance'] ? $data['Mechanical_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 4;
                    $detail_assessment->save();
                }

                //Misc Labour
                if(isset($data['Misc_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Misc_quoted'] ? $data['Misc_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Misc_assessed'] ? $data['Misc_assessed'] : null;
                    $detail_assessment->variance                        = $data['Misc_variance'] ? $data['Misc_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 5;
                    $detail_assessment->save();
                }

                //Labour
                if(isset($data['Labour_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Labour_quoted'] ? $data['Labour_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Labour_assessed'] ? $data['Labour_assessed'] : null;
                    $detail_assessment->variance                        = $data['Labour_variance'] ? $data['Labour_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 6;
                    $detail_assessment->save();
                }

                //Parts
                if(isset($data['Parts_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Parts_quoted'] ? $data['Parts_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Parts_assessed'] ? $data['Parts_assessed'] : null;
                    $detail_assessment->variance                        = $data['Parts_variance'] ? $data['Parts_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 7;
                    $detail_assessment->save();
                }

                //Sublet
                if(isset($data['Sublet_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Sublet_quoted'] ? $data['Sublet_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Sublet_assessed'] ? $data['Sublet_assessed'] : null;
                    $detail_assessment->variance                        = $data['Sublet_variance'] ? $data['Sublet_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 8;
                    $detail_assessment->save();
                }

                //Supplementary
                if(isset($data['Supplementary_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Supplementary_quoted'] ? $data['Supplementary_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Supplementary_assessed'] ? $data['Supplementary_assessed'] : null;
                    $detail_assessment->variance                        = $data['Supplementary_variance'] ? $data['Supplementary_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 9;
                    $detail_assessment->save();
                }

                //Sub Total
                if(isset($data['SubTotal_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['SubTotal_quoted'] ? $data['SubTotal_quoted'] : null;
                    $detail_assessment->assessed                        = $data['SubTotal_assessed'] ? $data['SubTotal_assessed'] : null;
                    $detail_assessment->variance                        = $data['SubTotal_variance'] ? $data['SubTotal_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 10;
                    $detail_assessment->save();
                }

                //gst
                if(isset($data['gst_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['gst_quoted'] ? $data['gst_quoted'] : null;
                    $detail_assessment->assessed                        = $data['gst_assessed'] ? $data['gst_assessed'] : null;
                    $detail_assessment->variance                        = $data['gst_variance'] ? $data['gst_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 11;
                    $detail_assessment->save();
                }

                //Total Estimate
                if(isset($data['TotalEstimate_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['TotalEstimate_quoted'] ? $data['TotalEstimate_quoted'] : null;
                    $detail_assessment->assessed                        = $data['TotalEstimate_assessed'] ? $data['TotalEstimate_assessed'] : null;
                    $detail_assessment->variance                        = $data['TotalEstimate_variance'] ? $data['TotalEstimate_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 12;
                    $detail_assessment->save();
                }

                //Reported Items
                if(isset($data['ReportedItems_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['ReportedItems_quoted'] ? $data['ReportedItems_quoted'] : null;
                    $detail_assessment->assessed                        = $data['ReportedItems_assessed'] ? $data['ReportedItems_assessed'] : null;
                    $detail_assessment->variance                        = $data['ReportedItems_variance'] ? $data['ReportedItems_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 13;
                    $detail_assessment->save();
                }

                //Towing
                if(isset($data['Towing_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Towing_quoted'] ? $data['Towing_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Towing_assessed'] ? $data['Towing_assessed'] : null;
                    $detail_assessment->variance                        = $data['Towing_variance'] ? $data['Towing_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 14;
                    $detail_assessment->save();
                }

                //External Sublet
                if(isset($data['ExternalSublet_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['ExternalSublet_quoted'] ? $data['ExternalSublet_quoted'] : null;
                    $detail_assessment->assessed                        = $data['ExternalSublet_assessed'] ? $data['ExternalSublet_assessed'] : null;
                    $detail_assessment->variance                        = $data['ExternalSublet_variance'] ? $data['ExternalSublet_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 15;
                    $detail_assessment->save();
                }

                //Additional
                if(isset($data['Additional_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Additional_quoted'] ? $data['Additional_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Additional_assessed'] ? $data['Additional_assessed'] : null;
                    $detail_assessment->variance                        = $data['Additional_variance'] ? $data['Additional_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 16;
                    $detail_assessment->save();
                }

                //Discount
                if(isset($data['Discounts_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['Discounts_quoted'] ? $data['Discounts_quoted'] : null;
                    $detail_assessment->assessed                        = $data['Discounts_assessed'] ? $data['Discounts_assessed'] : null;
                    $detail_assessment->variance                        = $data['Discounts_variance'] ? $data['Discounts_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 17;
                    $detail_assessment->save();
                }

                //Less ITC
                if(isset($data['LessITC_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['LessITC_quoted'] ? $data['LessITC_quoted'] : null;
                    $detail_assessment->assessed                        = $data['LessITC_assessed'] ? $data['LessITC_assessed'] : null;
                    $detail_assessment->variance                        = $data['LessITC_variance'] ? $data['LessITC_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 18;
                    $detail_assessment->save();
                }

                //Less Contribution
                if(isset($data['LessContribution_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['LessContribution_quoted'] ? $data['LessContribution_quoted'] : null;
                    $detail_assessment->assessed                        = $data['LessContribution_assessed'] ? $data['LessContribution_assessed'] : null;
                    $detail_assessment->variance                        = $data['LessContribution_variance'] ? $data['LessContribution_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 19;
                    $detail_assessment->save();
                }

                //PAV
                if(isset($data['PAV_quoted']))
                {
                    $detail_assessment                                  = new DetailAssessmentReport();
                    $detail_assessment->quoted                          = $data['PAV_quoted'] ? $data['PAV_quoted'] : null;
                    $detail_assessment->assessed                        = $data['PAV_assessed'] ? $data['PAV_assessed'] : null;
                    $detail_assessment->variance                        = $data['PAV_variance'] ? $data['PAV_variance'] : null;
                    $detail_assessment->accident_service_report_id      = (int)$report->id ;
                    $detail_assessment->assessment_report_product_id    = 20;
                    $detail_assessment->save();
                }

                if(isset($data['FrontBumperBar_demage_level']))
                {
                    $demage_values                              = new DemageSectionValue();
                    $demage_values->demage_level                = $data['FrontBumperBar_demage_level'];
                    $demage_values->comment                     = $data['FrontBumperBar_comments'];
                    $demage_values->demage_section_id           = 1;
                    $demage_values->accident_service_report_id  = $report->id;
                    $demage_values->save();
                }

                if(isset($data['LeftFrontGuard_demage_level']))
                {
                    $demage_values                              = new DemageSectionValue();
                    $demage_values->demage_level                = $data['LeftFrontGuard_demage_level'];
                    $demage_values->comment                     = $data['LeftFrontGuard_comments'];
                    $demage_values->demage_section_id           = 2;
                    $demage_values->accident_service_report_id  = $report->id;
                    $demage_values->save();
                }

                if(isset($data['LeftFrontDoor_demage_level']))
                {
                    $demage_values                              = new DemageSectionValue();
                    $demage_values->demage_level                = $data['LeftFrontDoor_demage_level'];
                    $demage_values->comment                     = $data['LeftFrontDoor_comments'];
                    $demage_values->demage_section_id           = 3;
                    $demage_values->accident_service_report_id  = $report->id;
                    $demage_values->save();
                }
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
