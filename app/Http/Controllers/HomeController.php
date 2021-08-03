<?php

namespace App\Http\Controllers;

use App\Models\CountryInformation;
use App\User;
use App\Utils\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;
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
        return view('home');
    }

    public function customerHistory()
    {
        $users = User::orderby('id','desc')
            ->where('type','<>',UserType::ADMIN)
            ->get();
        return view('customers.history',compact('users'));
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
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            User::create($request->except('_token'));
            return redirect()->route('customers.history')->with('success','Customer Added Successfully!');
        }catch (\Exception $exception){
            return redirect()->route('customers.history')->with('danger','Something went wrong');
        }
    }

    public function customerUpdate(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
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

    public function countriesIndex()
    {
        $countries = DB::table('country_information')->orderby('country_name','asc')->get();
        return view('countries.history',compact('countries'));
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

    public function insuranceCompaniesIndex()
    {
        try {
            $companies = DB::table('company_detail')->orderBy('id','desc')->get();
            return view('insurance_companies.index' ,compact('companies'));
        }catch (\Exception $exception){
            toastr()->error('Server is busy,try again');
            return back();
        }
    }

    public function insuranceCompaniesCreate()
    {
        try {
            $countries = DB::table('country_information')
                ->orderby('country_name','asc')
                ->get();
            return view('insurance_companies.create',compact('countries'));
        }catch (\Exception $exception){
            toastr()->info('Server is busy,try again');
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
            toastr()->info('Server is busy,try again');
        }
    }

    public function insuranceCompaniesEdit()
    {
        return view('insurance_companies.edit');
    }

    public function paymentTransactionsIndex()
    {
        try {
            $transactions = DB::table('transaction')
                ->join('users','transaction.user_id','=','users.id')
                ->join('packages','transaction.package_id','=','packages.id')
                ->orderBy('transaction.id','desc')
                ->select(
                    'transaction.*',
                    'users.name as user_name',
                    'packages.name as package_name')
                ->get();
            return view('payment_transactions.index',compact('transactions'));
        } catch (\Exception $exception){
            return 'Something went wrong';
        }
    }

    public function paymentTransactionsEdit()
    {
        return view('payment_transactions.edit');
    }

    public function ratesIndex()
    {
        $packages = DB::table('packages')->orderBy('id','asc')->get();
        return view('rates.index',compact('packages'));
    }

    public function ratesEdit(Request $request)
    {
        $request['updated_at'] = now();
        $packages = DB::table('packages')
            ->where('id',$request->id)
            ->update($request->except('_token','id'));
        toastr()->success('Package updated successfully!');
        return back();
    }
}
