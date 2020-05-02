<?php

namespace App\Http\Controllers\Auth;
use App\profile;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lname' =>  ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'sex' => ['required','string','max:1'],
            'birth' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ])->each(function($user){
        //     $profile = new profile;
        //     $profile->fanme = Input::get('fname');
        //     $profile->lname = $this->Input::get('lname');;
        //     $profile->sex = $this->Input::get('sex');;
        //     $profile->birth = $this->Input::get('birth');;
        //     $profile->email = $this->Input::get('email');
        //     $user->profile()->create($profile);
        // });



       
    //2éme méthode
       $user = User::create([
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        
        $profile=profile::create([
            'user_id' => $user->id,
            'fname' => $data['name'],
            'lname' => $data['lname'],
            'sex' => $data['sex'],
            'birth' => $data['birth'],
            'email' => $data['email']
        ]);

        return $user;
        
        
    }
}
