<?php

namespace App\Http\Controllers\Auth;

use App\Member;
use App\Firm;
use App\User;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/home';

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $array=[
            'submit'=>'required',
        ];
        Validator::make($data,$array);

        if($data['submit']!='會員註冊'){
            $array=[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'firm'=>'required',
            'address'=>'required',
            'tel'=>'required',
        ];

        }else{
            $array=[
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                    'gender'=>'required',
                ];
        }

        return Validator::make($data,$array);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user=new User();
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password = bcrypt($data['password']);

        if($data['submit']!='會員註冊'){
            Firm::create([
                'firm'=>$data['firm'],
                'address'=>$data['address'],
                'tel'=>$data['tel'],
            ]);

            $userable=Firm::orderByDesc('created_at')->first();

        }else{
            Member::create([
                'gender'=>$data['gender'],
            ]);

            $userable=Member::orderByDesc('created_at')->first();
        }

        $userable->user()->save($user);

        return $user;
    }
}
