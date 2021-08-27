<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\CompanyDetail;
use App\Models\BoardOfDirector;
use App\Models\CompanyAccounting;
use App\Models\IncomeStatement;
use App\Models\Investment;
use App\Models\Subsidiary;
use App\Models\MarketShare;
use App\Models\Shareholder;

class CompanyDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
     $this->middleware(['auth','verified']);
    }


    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->input('currstep')=="detail")//company details
        {
            //validate input fields
            $request->validate([
            'company_name' => ['required', 'max:255'],
            'basic_info_country' => ['required', 'max:255'],
            'basic_info_company_type' => ['required', 'max:255'],
            'basic_info_company_email_id' => ['required', 'string', 'email', 'max:255',],
            'basic_info_contact_number' => ['required', 'string', 'max:255'],
            'basic_info_corporate_details' => ['required', 'max:255'],
            'basic_info_auditor' => ['required', 'string', 'max:255'],
            'basic_info_about' => ['required'],
            'basic_info_employeee_count' => ['required'],
            'basic_info_financial_report' => ['required'],
            'basic_info_incorporated' => ['required'],
            'basic_info_incorporated_year' => ['required'],
            'basic_info_toll_free_number' => ['required'],
            'basic_info_trade_name' => ['required'],
            'basic_info_alternative_names' => ['required'],
            ]);
             try
             {
               $company_details_model = new CompanyDetail();
               $company_details_model->created_by        =Auth::user()->name;
               $company_details_model->about             =$request->basic_info_about;
               $company_details_model->auditor           =$request->basic_info_auditor;
               $company_details_model->company_email_id  =$request->basic_info_company_email_id;
               $company_details_model->company_name      =$request->company_name;
               $company_details_model->company_type      =$request->basic_info_company_type;
               $company_details_model->contact_number    =$request->basic_info_contact_number;
               $company_details_model->corporate_details =$request->basic_info_corporate_details;
               $company_details_model->country           =$request->basic_info_country;
               $company_details_model->employee_count    =$request->basic_info_employeee_count;
               $company_details_model->financial_report  =$request->basic_info_financial_report;
               $company_details_model->incorporated      =$request->basic_info_incorporated;
               $company_details_model->incorporated_year =$request->basic_info_incorporated_year;
               $company_details_model->toll_free_number  =$request->basic_info_toll_free_number;
               $company_details_model->trade_name        =$request->basic_info_trade_name;
               $company_details_model->alternative_names =$request->basic_info_alternative_names;
               $company_details_model->status            =0;
               if($company_details_model->save())
               {
                 $company_id=$company_details_model->id;
                 toastr()->success('Company details saved successfully!');
                 return back()->with('company_id',$company_id)->with('step',$request->nextstep);
               }
            }
            catch (\Exception $exception){
                toastr()->error('Something went wrong, try again');
                return back()->with('step',$request->currstep);
            }
        }
        //director
        elseif($request->input('currstep')=="director")//director form submit
        {
             $request->validate([
                'b_o_d_name*' => ['required', 'max:255'],
                'b_o_d_designation*' => ['required', 'max:255'],
             ]);
             try
             {
                    
                    for($i=0;$i<count($request->b_o_d_name);$i++)
                    {
                      $boardofdirectormodel = new BoardOfDirector();
                      $boardofdirectormodel->created_by=Auth::user()->name;
                      $boardofdirectormodel->name=$request->b_o_d_name[$i];
                      $boardofdirectormodel->designation=$request->b_o_d_designation[$i];
                      $boardofdirectormodel->company_id=$request->company_id;
                      $boardofdirectormodel->save(); 
                    }
                    toastr()->success('Board Of director saved successfully!');
                     return back()->with('company_id',$request->company_id)->with('step',$request->nextstep);

            }
            catch (\Exception $exception)
            {
                toastr()->error('Something went wrong, try again');
                return back()->with('step',$request->currstep);
            }
        }
        //accounting 
        elseif($request->input('currstep')=="accounting")//accounting form submit
        {
          try
          {
              $companyaccountingmodel = new CompanyAccounting();
              $companyaccountingmodel->financial_strength_rating=$request->acc_financial_strength_rating;
              $companyaccountingmodel->gross_written_premium=$request->acc_gross_written_premium;
              $companyaccountingmodel->gross_written_premium_year=$request->acc_gross_written_premium_year;
              $companyaccountingmodel->issue_credit_rating=$request->acc_issue_credit_rating;
              $companyaccountingmodel->moody_rating=$request->acc_moody_rating;
              $companyaccountingmodel->other_rating=$request->acc_other_rating;
              $companyaccountingmodel->s_andprating=$request->acc_s_andprating;
              $companyaccountingmodel->public_listed_company=$request->acc_public_listed_company;
              $companyaccountingmodel->regulatory_authority=$request->acc_regulatory_authority;
              $companyaccountingmodel->company_id=$request->company_id;
              $companyaccountingmodel->created_by=Auth::user()->name;
              if($companyaccountingmodel->save())
              {
                $company_accountid=$companyaccountingmodel->id;
                toastr()->success('Compayny Accounting saved successfully!');
                return back()->with('company_id',$request->company_id)->with('caccountid',$company_accountid)->with('step',$request->nextstep);

              }
          }
          catch (\Exception $exception)
            {
                toastr()->error('Something went wrong, try again');
                return back()->with('step',$request->currstep);
            }
        }
        //statement
        elseif($request->input('currstep')=="statement")
        {
          try{
                $incomestmodel= new IncomeStatement();
                $incomestmodel->created_by=Auth::user()->name;
                $incomestmodel->name=$request->name;
                $incomestmodel->value=$request->value;
                $incomestmodel->year=$request->year;
                $incomestmodel->company_accounting_id=$request->company_accountid;
                if($incomestmodel->save())
                {
                  $income_statement_id=$incomestmodel->id;
                  toastr()->success('Income Statement saved successfully!');
                  return back()->with('company_id',$request->company_id)->with('caccountid',$request->company_accountid)->with('step',$request->nextstep);
                }
            }
            catch (\Exception $exception)
            {
                toastr()->error('Something went wrong, try again');
                return back()->with('step',$request->currstep);
            }
        }
        //investement
        elseif($request->input('currstep')=="investment")
        {
         try
          {
            $investmentModel= new Investment();
            $investmentModel->created_by=Auth::user()->name;
            $investmentModel->name=$request->name;
            $investmentModel->value=$request->value;
            $investmentModel->year=$request->year;
            $investmentModel->company_accounting_id=$request->company_accountid;
            if($investmentModel->save())
            {
              $invesment_id=$investmentModel->id;
              toastr()->success('Investment saved successfully!');
              return back()->with('company_id',$request->company_id)->with('caccountid',$request->company_accountid)->with('step',$request->nextstep);
            }
          }
          catch (\Exception $exception)
            {
                toastr()->error('Something went wrong, try again');
                return back()->with('step',$request->currstep);
            }

        }
        //subsudaiary
        elseif($request->input('currstep')=="subsudaiary")
        {
          try
          {
                $SubsidiaryModel = new Subsidiary();
                $SubsidiaryModel->created_by=Auth::user()->name;
                $SubsidiaryModel->designation=$request->designation;
                $SubsidiaryModel->company_accounting_id=$request->company_accountid;
                if($SubsidiaryModel->save())
                {
                  $subsudairy_id=$SubsidiaryModel->id;
                  toastr()->success('Subsudaiary saved successfully!');
                  return back()->with('company_id',$request->company_id)->with('caccountid',$request->company_accountid)->with('step',$request->nextstep);
                }
           }
           catch (\Exception $exception)
            {
                toastr()->error('Something went wrong, try again');
                return back()->with('step',$request->currstep);
            }
        }
        //share
        elseif($request->input('currstep')=="share")
        {
            try{
                $MarketShareModel = new MarketShare();
                $MarketShareModel->created_by=Auth::user()->name;
                $MarketShareModel->authorized_shares=$request->auth_share;
                $MarketShareModel->issued_shares=$request->issue_share;
                $MarketShareModel->no_of_shares=$request->no_share;
                $MarketShareModel->paid_up_shares=$request->paid_up_share;
                $MarketShareModel->total_share=$request->total_share;
                $MarketShareModel->company_id=$request->company_id;
                if($MarketShareModel->save())
                {
                    $MarketShare_id=$MarketShareModel->id;
                    toastr()->success('Subsudaiary saved successfully!');
                    return back()->with('company_id',$request->company_id)->with('MarketShare_id',$MarketShare_id)->with('step',$request->nextstep);
                }
               }
           catch (\Exception $exception)
            {
                toastr()->error('Something went wrong, try again');
                return back()->with('step',$request->currstep);
            }

        }
        //holder
        elseif($request->input('currstep')=="holder")
        {
            try
            {
                $ShareholderModel = new Shareholder();
                $ShareholderModel->created_by = Auth::user()->name;
                $ShareholderModel->name=$request->name;
                $ShareholderModel->share_percentage= $request->percentage;
                $ShareholderModel->market_share_id=$request->market_share_id;
                if($ShareholderModel->save())
                {
                    toastr()->success('Holder saved successfully!');
                    return redirect('/insurance-companies');
                }

            }
            catch (\Exception $exception)
            {
                toastr()->error('Something went wrong, try again');
                return back()->with('step',$request->currstep);
            }
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
