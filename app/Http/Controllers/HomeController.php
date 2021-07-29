<?php

namespace App\Http\Controllers;

use App\Models\CountryInformation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $users = User::orderby('id','desc')->paginate(20);
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
            return redirect()->route('customers.history')->with('success','Customer Deleted Successfully!');
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
        else{
            unset($request['password'],$request['password_confirmation'],$request['_token']);
            User::where('id',decrypt($id))->update($request->all());
        }
        return $this->customerHistory();
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
            return redirect()->route('countries.index');
        }catch (\Exception $exception){
            return 'Something went wrong';
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
        return view('insurance_companies.index');
    }

    public function insuranceCompaniesEdit()
    {
        return view('insurance_companies.edit');
    }

    public function paymentTransactionsIndex()
    {
        return view('payment_transactions.index');
    }

    public function paymentTransactionsEdit()
    {
        return view('payment_transactions.edit');
    }

    public function ratesIndex()
    {
        return view('rates.index');
    }

    public function ratesEdit()
    {
        return view('rates.edit');
    }
}
