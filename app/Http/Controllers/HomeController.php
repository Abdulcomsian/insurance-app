<?php

namespace App\Http\Controllers;

use App\DataTables\CompanyDetailsDataTable;
use App\Models\CountryInformation;
use App\Notifications\TransactionEmail;
use App\User;
use App\Utils\EmailStatus;
use App\Utils\UserStatus;
use App\Utils\UserType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Psy\Util\Str;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Button;
use function Symfony\Component\Translation\t;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            //Related to transactions
            $transactions_today = self::getTransactionsReport(Carbon::now()->startOfDay(),Carbon::now()->endOfDay());
            $transactions_weekly = self::getTransactionsReport(Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek());
            $transactions_monthly = self::getTransactionsReport(Carbon::now()->startOfMonth(),Carbon::now()->endOfMonth());
            $transactions_yearly = self::getTransactionsReport(Carbon::now()->startOfYear(),Carbon::now()->endOfYear());

            //Related to users
            $users_today = self::getUsersReport(Carbon::now()->startOfDay(),Carbon::now()->endOfDay());
            $users_weekly = self::getUsersReport(Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek());
            $users_monthly = self::getUsersReport(Carbon::now()->startOfMonth(),Carbon::now()->endOfMonth());
            $users_yearly = self::getUsersReport(Carbon::now()->startOfYear(),Carbon::now()->endOfYear());

            //Companies
            $total_companies = DB::table('company_detail')->count();
            $total_users = DB::table('users')->where('type','<>','Admin')->count();
            $total_packages = DB::table('packages')->count();
            $total_subscriptions = DB::table('subscriptions')->count();

            return view('home',compact(
                'transactions_today',
                'transactions_weekly',
                'transactions_monthly',
                'transactions_yearly',
                'users_today',
                'users_weekly',
                'users_monthly',
                'users_yearly',
                'total_companies',
                'total_users',
                'total_packages',
                'total_subscriptions'

            ));
        }catch (\Exception $exception){
            dd($exception->getMessage());
            toastr()->error('Something went wrong, try again');
        }
    }

    protected function getTransactionsReport($from = null,$to = null){
       return DB::table('transaction')->whereBetween('created_at', [$from, $to])->count();
    }
    protected function getUsersReport($from = null,$to = null){
       return DB::table('users')->where('type','<>','Admin')->whereBetween('created_at', [$from, $to])->count();
    }

    public function customerHistory(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('users')
                ->where('type','<>',UserType::ADMIN)
                ->orderBy('id','desc')
                ->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('status',function ($data){
                    if ($data->status == UserStatus::ACTIVE){
                        return '<div class="badge badge-success" fw-bolder">'.$data->status.'</div>';
                    }else{
                        return '<div class="badge badge-danger" fw-bolder">'.$data->status.'</div>';
                    }
                })
                ->editColumn('email_verified_at',function ($data){
                    if (isset($data->email_verified_at)){
                        return '<div class="badge badge-success" fw-bolder">'.EmailStatus::Verified.'</div>';
                    }else{
                        return '<div class="badge badge-danger" fw-bolder">'.EmailStatus::Unverified.'</div>';
                    }
                })
                ->addColumn('action', function($data){
                    $btn = '<a href="'.route('customers.edit',encrypt($data->id)).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            </a>
                            <form method="POST" id="form_'.$data->id.'" action="'.route('customers.delete',encrypt($data->id)).'">
                            '.method_field('Delete'). csrf_field().'
                            <button type="submit" value="'.$data->id.'" class="deleteBtn btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                    <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                    <!--end::Svg Icon-->
                                </button>
                            </form>';
                    return $btn;
                })
                ->rawColumns(['action','status','email_verified_at'])
                ->make(true);
        }

        return view('customers.index');
    }

    public function customerEdit($id)
    {
        $user = User::where('id',decrypt($id))->first();
        return view('customers.edit', compact('user'));
    }

    public function customerDelete($id){
        try {
            User::where('id',decrypt($id))->first()->delete();
            toastr()->success('Customer Deleted Successfully!');
            return redirect()->route('customers.history');
        }catch (\Exception $exception){
            return redirect()->route('customers.history')->with('danger','Something went wrong');
        }
    }

    public function customerSave(Request $request){
        $request->validate([
            'address' => ['required', 'max:255'],
            'status' => ['required', 'max:255'],
            'company_name' => ['required', 'max:255'],
            'office_number' => ['required', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:255'],
            'country_id' => ['required', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            'country_id.required' => 'The country field is required',
            'status.required' => 'The account status field is required',
        ]);
        try {
            $request['password'] = Hash::make($request['password']);
            User::create($request->except('_token'));
           toastSuccess('Customer Added Successfully!');
            return redirect()->route('customers.history');
        }catch (\Exception $exception){
            toastr()->error('error','Something went wrong!');
            return redirect()->route('customers.history');
        }
    }

    public function customerUpdate(Request $request,$id)
    {
        $decrypt_id = decrypt($id);
        $request->validate([
            'address' => ['required', 'max:255'],
            'status' => ['required', 'max:255'],
            'company_name' => ['required', 'max:255'],
            'office_number' => ['required', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:255'],
            'country_id' => ['required', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($decrypt_id)],


        ],[
            'country_id.required' => 'The country field is required',
            'status.required' => 'The account status field is required',
        ]);
        if(isset($request->password)){
            $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            unset($request['password_confirmation'],$request['_token']);
            $request['password'] = Hash::make($request['password']);
            User::where('id',decrypt($id))->update($request->all());
        }
        else {
            unset($request['password'], $request['password_confirmation'], $request['_token']);
            User::where('id', decrypt($id))->update($request->all());
        }
        toastr()->success('Customer Updated Successfully!');
        return redirect()->route('customers.history');
    }

    public function countriesIndex(Request $request)
    {
        if ($request->ajax()) {
        $data = DB::table('country_information')
            ->orderby('country_name','asc')
            ->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('rate_in_dollar',function ($data){
                return '</td><form style="display: flex;" action="'.route('countries.update',$data->id).'" method="post" >
                    '.csrf_field().'
                        <td><input required class="form-control" name="rate_in_dollar" value="'.$data->rate_in_dollar .'" type="text"></td>
                        <td><button class="btn btn-success" style="margin-left: 10px;" type="submit">Save</button></td>
                    </form>';
            })
            ->addColumn('dollar_rate',function ($data){
                return '<td style="display: none" class="dollar_rate">'.$data->rate_in_dollar.'</td>';
            })
            ->rawColumns(['dollar_rate','rate_in_dollar'])
            ->make(true);
        }
        return view('countries.history');
    }

    public function countriesUpdate(Request $request,$id)
    {
        try {
            DB::table('country_information')
                ->where('id',$id)
                ->update($request->except('_token'));
            toastr()->success('Dollar Rate Updated Successfully!');
            return redirect()->route('countries.index');
        }catch (\Exception $exception){
            toastr()->error('Something went wrong!');
            return back();
        }
    }

    public function countriesEdit()
    {
        return view('countries.edit');
    }


    public function usersIndex()
    {
        return view('users.index');
    }

    public function usersEdit()
    {
        return view('users.edit');
    }

    public function indexWithDatatable(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('company_detail')->orderBy('company_name','asc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '        <a href="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    </svg>
                                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <form method="POST" action="">
                                            <button type="submit"  onclick="return confirm(\'Are you sure you want to delete?\');" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                    <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                            </form>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('insurance_companies.index');
    }

    public function insuranceCompaniesCreate()
    {
        try {
            $countries = DB::table('country_information')
                ->orderby('country_name','asc')
                ->get();
            return view('insurance_companies.create',compact('countries'));
        }catch (\Exception $exception){
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function insuranceCompaniesSave(Request $request){
        try {
            foreach ($request->all() as $field => $value){
              if(str_contains($field,'basic_info_')){
                  $field = str_replace('basic_info_',"",$field);
                  unset($request['basic_info_'.$field]);
                  $basic_info[$field] = $value;
              }

              if(str_contains($field,'acc_')){
                  $field = str_replace('acc_',"",$field);
                  unset($request['acc_'.$field]);
                  $acc_info[$field] = $value;
              }

              if(str_contains($field,'m_s_')){
                  $field = str_replace('m_s_',"",$field);
                  unset($request['m_s_'.$field]);
                  $marked_share_info[$field] = $value;
              }

              if(str_contains($field,'b_o_d_')){
                  $field = str_replace('b_o_d_',"",$field);
                  unset($request['b_o_d_'.$field]);
                  $board_of_director[$field] = $value;
              }

            }
            $id = DB::table('company_detail')->insert($basic_info);
            dump($id);
            dd('here');
//            dump($id);
//            dd($basic_info);
//            dump($acc_info);
//            dump($marked_share_info);
//            dd($board_of_director);

        }catch (\Exception $exception){
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    public function insuranceCompaniesEdit($id)
    {
        try {
            $company = DB::table('company_detail')
                ->where('company_detail.id','=',$id)
                ->join('board_of_director','company_detail.id','=','board_of_director.company_id')
                ->first();
            return view('insurance_companies.edit');
        }catch (\Exception $exception){
            dd($exception->getMessage());
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    //Transactions
    public function paymentTransactionsIndex(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = DB::table('transaction')
                    ->join('users','transaction.user_id','=','users.id')
                    ->join('packages','transaction.package_id','=','packages.id')
                    ->orderBy('transaction.id','desc')
                    ->select(
                        'transaction.*',
                        'users.name as user_name',
                        'packages.name as package_name')
                    ->get();
                return Datatables::of($data)
                    ->addColumn('billing_name',function ($data){
                        return $data->billing_fname. ' ' . $data->billing_sname;
                    })
                    ->addColumn('action',function ($data){
                        $action = '<a href="'.route('payment_transactions.show',encrypt($data->id)).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <i class="fa fa-eye" title="View" aria-hidden="true"></i>
                            </a>
                            <a onclick="return confirm(\'Are you sure you want to resend email to customer?\');" " href="'.route('payment_transactions.resend_email',encrypt($data->id)).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <i class="fa fa-envelope" title="Resend Email" aria-hidden="true"></i>
                            </a>';
                            if (isset($data->pdf)){
                                $action .= '<a href="'.env('CUSTOMER_DOMAIN'). $data->pdf.'" download="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="fa fa-file-pdf" aria-hidden="true"></i>
                                </a>';
                            }
                            return $action;
                    })
                    ->rawColumns(['billing_name','action'])
                    ->make(true);
            }
            return view('payment_transactions.index');
        } catch (\Exception $exception){
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    public function paymentTransactionsResendEmail($id){
        try {
            $transaction = DB::table('transaction')
                ->join('users','transaction.user_id','=','users.id')
                ->join('packages','transaction.package_id','=','packages.id')
                ->where('transaction.id','=',decrypt($id))
                ->select(
                    'transaction.*',
                    'users.name as username',
                    'users.email as email',
                    'users.created_at as reg_date',
                    'packages.name as package_name',
                    'packages.price as package_price',
                    'packages.sanctions as package_sanctions'
                )
                ->first();
            $user = User::find($transaction->user_id)->first();
            $user->notify(new TransactionEmail($user,$transaction));
            toastr()->success('Transaction email sent succesfully to '. $user->name);
            return back();
        }catch (\Exception $exception) {
            dd($exception->getMessage());
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
    public function paymentTransactionsShow($id)
    {
        try {
            $transaction = DB::table('transaction')
                ->join('users','transaction.user_id','=','users.id')
                ->join('packages','transaction.package_id','=','packages.id')
                ->where('transaction.id','=',decrypt($id))
                ->select(
                    'transaction.*',
                    'users.name as username',
                    'users.email as email',
                    'users.created_at as reg_date',
                    'packages.name as package_name',
                    'packages.price as package_price',
                    'packages.sanctions as package_sanctions'
                )
                ->first();
            return view('payment_transactions.show',compact('transaction'));
        }catch (\Exception $exception){
//            dd($exception->getMessage());
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    //Packages
    public function ratesIndex(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = DB::table('packages')->orderBy('id','asc')->get();
                return Datatables::of($data)
                   ->addColumn('action',function ($data){
                        return '<button id="'.$data->id.'" value="Edit" class="action btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"  data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        </svg>
                                    </span>
                                </button>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view('rates.index');
        } catch (\Exception $exception){
            toastr()->error('Something went wrong, try again');
            return back();
        }
        return view('rates.index');
    }

    public function ratesEdit(Request $request)
    {
        try {
            if ($request->has('id')){
                $request['updated_at'] = now();
                $packages = DB::table('packages')
                    ->where('id',$request->id)
                    ->update($request->except('_token','id'));
                toastr()->success('Package updated successfully!');
            }else{
                $request->request->add(
                    ['created_at'=> now(),
                    'updated_at' =>now()]);
                DB::table('packages')->insert(
                    $request->except('_token')
                );
                toastr()->success('Package added successfully!');
            }

            return back();
        }catch (\Exception $exception){
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    //Sanctions Request
    public function sanctionRequestIndex(Request $request){
        try {
            if ($request->ajax()) {
                $data = DB::table('req_for_sanc_status')
                    ->join('users','req_for_sanc_status.user_id','=','users.id')
                    ->join('company_detail','req_for_sanc_status.company_id','=','company_detail.id')
                    ->orderBy('id','desc')
                    ->select(
                        'req_for_sanc_status.*',
                        'users.id as user_id',
                        'users.name as user_name',
                        'company_detail.company_name as company_name')
                    ->get();
                return Datatables::of($data)
//                    ->addColumn('billing_name',function ($data){
//                        return $data->billing_fname. ' ' . $data->billing_sname;
//                    })
                    ->addColumn('action',function ($data){
                        $action = '<a href="'.route('sanction_request.show',encrypt($data->id)).'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                        <i class="fa fa-eye" title="View" aria-hidden="true"></i>
                        </a>';
                        return $action;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view('sanction_request.index');
        } catch (\Exception $exception){
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }

    public function sanctionRequestShow($id){
        try {
            $sanction_request = DB::table('req_for_sanc_status')
                ->where('req_for_sanc_status.id','=',decrypt($id))
                ->join('users','req_for_sanc_status.user_id','=','users.id')
                ->join('company_detail','req_for_sanc_status.company_id','=','company_detail.id')
                ->select(
                    'req_for_sanc_status.*',
                    'users.id as user_id',
                    'users.name as user_name',
                    'company_detail.company_name as company_name')
                ->orderBy('req_for_sanc_status.id','desc')
                ->first();
            return view('sanction_request.show',compact('sanction_request'));

        }catch (\Exception $exception){
            toastr()->error('Something went wrong, try again');
            return back();
        }
    }
}

