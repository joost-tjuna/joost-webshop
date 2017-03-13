<?php

namespace App\Http\Controllers\Auth;

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
        return Validator::make($data, [
            'voornaam' => 'required|max:122',
            'achternaam' => 'required|max:122',
            'straatnaam' => 'required|max:200',
            'postcode' => 'required|max:100',
            'huisnummer' => 'required|max:100',
            'telefoonnr' => 'required|max:100',
            'woonplaats' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'wachtwoord' => 'required|min:6|confirmed'

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        dd('create');
        $user = User::create([
            'voornaam' => $data['voornaam'],
            'achternaam' => $data['achternaam'],
            'straatnaam' => $data['straatnaam'],
            'postcode' => $data['postcode'],
            'huisnummer' => $data['huisnummer'],
            'telefoonnr' => $data['telefoonnr'],
            'woonplaats' => $data['woonplaats'],
            'email' => $data['email'],
            'wachtwoord' => bcrypt($data['wachtwoord'])
        ]);

        dd($user);
    }
}
