<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/photo/add';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm(Request $request)
    {

        $totalPlan = DB::table('plans')->get();

        $plan = $request->get('plan');
        if ($plan == 'basic') {
            $planName      = 'Basic Plan';
            $planData = DB::table('plans')
                        ->where('id', '=', 2)
                        ->get();
            foreach ($planData as $data){
                $title = $data->title;
                $amountMonthly = $data->price;
                $featureData = $data->feature_list;
                $feature = explode('|', $featureData);
                $amountYearly =  $data->price*12;
                $totalPayable = $data->price;
            }
            //dump($feature);
        } elseif ($plan == 'medium') {
            $planName      = 'Medium Plan';
            $planData = DB::table('plans')
                ->where('id', '=', 3)
                ->get();
            foreach ($planData as $data){
                $title = $data->title;
                $amountMonthly = $data->price;
                $featureData = $data->feature_list;
                $feature = explode('|', $featureData);
                $amountYearly =  $data->price*12;
                $totalPayable = $data->price;
            }

        } else {
            $planName      = 'Free Plan';
            $planData = DB::table('plans')
                ->where('id', '=', 1)
                ->get();
            foreach ($planData as $data){
                $title = $data->title;
                $amountMonthly = $data->price;
                $featureData = $data->feature_list;
                $feature = explode('|', $featureData);
                $amountYearly =  $data->price*12;
                $totalPayable = $data->price;
            }
        }
        //dump($plan);
        return view('auth.register', compact('title','planName', 'amountMonthly', 'amountYearly', 'totalPayable', 'feature', 'totalPlan'));

    }

}
