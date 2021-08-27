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
            $input = $request->all();
            $request->validate([
            'company_name' => ['required', 'max:255'],
            'country' => ['required', 'max:255'],
            'company_type' => ['required', 'max:255'],
            'company_email_id' => ['required', 'string', 'email', 'max:255',],
            'contact_number' => ['required', 'string', 'max:255'],
            'corporate_details' => ['required', 'max:255'],
            'auditor' => ['required', 'string', 'max:255'],
            'about' => ['required'],
            'employee_count' => ['required'],
            'financial_report' => ['required'],
            'incorporated' => ['required'],
            'incorporated_year' => ['required'],
            'toll_free_number' => ['required'],
            'trade_name' => ['required'],
            'alternative_names' => ['required'],
            ]);
             try
             {
               if(isset($request->edit))
               {
                 CompanyDetail::where('id',$request->company_id)->update([
                       'company_name'=>$request->company_name,
                       'country'=>$request->country,
                       'company_type'=>$request->company_type,
                       'company_email_id'=>$request->company_email_id,
                       'contact_number'=>$request->contact_number,
                       'corporate_details'=>$request->corporate_details,
                       'auditor'=>$request->auditor,
                       'about'=>$request->about
                 ]);
                 $company_id=$request->company_id;
                 toastr()->success('Company details Updated successfully!');
                 return back()->with('company_id',$company_id)->with('step',$request->nextstep);
               }
               else
               {
                   $input['created_by']=Auth::user()->name;
                   $input['status']=0;
                   $company_details_model=CompanyDetail::create($input);
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
             try
             { 
                    for($i=0;$i<count($request->name);$i++)
                    {
                      $boardofdirectormodel = new BoardOfDirector();
                      $boardofdirectormodel->created_by=Auth::user()->name;
                      $boardofdirectormodel->name=$request->name[$i];
                      $boardofdirectormodel->designation=$request->designation[$i];
                      $boardofdirectormodel->company_id=$request->company_id;
                      $boardofdirectormodel->save(); 
                    }
                    toastr()->success('Board Of director saved successfully!');
                     return back()->with('company_id',$request->company_id)->with('step',$request->nextstep);

            }
            catch (\Exception $exception)
            {
                toastr()->error('Something went wrong, try again');
                return back()->with('step',$request->currstep)->with('company_id',$request->company_id);
            }
        }
        //accounting 
        elseif($request->input('currstep')=="accounting")//accounting form submit
        {
          try
          {
              $input['created_by']=Auth::user()->name;
              $input['company_id']=$request->company_id;
              $companyaccountingmodel = CompanyAccounting::create($input);
              $company_accountid=$companyaccountingmodel->id;
              toastr()->success('Compayny Accounting saved successfully!');
              return back()->with('company_id',$request->company_id)->with('caccountid',$company_accountid)->with('step',$request->nextstep);   
          }
          catch (\Exception $exception)
            {
                toastr()->error('Something went wrong, try again');
                return back()->with('step',$request->currstep)->with('company_id',$request->company_id)->with('caccountid',$company_accountid);
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
                return back()->with('step',$request->currstep)->with('company_id',$request->company_id)->with('caccountid',$request->company_accountid);
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
                return back()->with('step',$request->currstep)->with('company_id',$request->company_id)->with('caccountid',$request->company_accountid);
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
                return back()->with('step',$request->currstep)->with('company_id',$request->company_id)->with('caccountid',$request->company_accountid);
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
                return back()->with('step',$request->currstep)->with('company_id',$request->company_id)->with('MarketShare_id',$MarketShare_id);
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
         try {
            $company_details=CompanyDetail::find($id);
            $edit="edit";
            $countries = DB::table('country_information')
                ->orderby('country_name','asc')
                ->get();
            return view('insurance_companies.create',compact('countries','company_details'))->with('edit',$edit);
        }catch (\Exception $exception){
            toastr()->error('Something went wrong, try again');
            return back();
        }
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
