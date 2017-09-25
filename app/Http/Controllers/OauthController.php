<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;


class OauthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    function googleOauth(Request $request)
    {
        // get data from request
        $code = $request->get('code');

        // get google service
        $googleService = \OAuth::consumer('Google');

        // check if code is valid

        // if code is provided get user data and sign in
        if ( ! is_null($code))
        {
            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken($code);

            // Send a request with it
            $result = json_decode($googleService->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);

            $findUser = User::where('email', $result['email'])->first();

            if($findUser){
                Auth::login($findUser, true);
                return redirect('posts');
            }
            elseif (array_key_exists('hd', $result) && $result['hd'] === 'ljcds.org') {
                $newUser = new User();
                $newUser->password = Hash::make(str_random(10));
                $newUser->email = $result['email'];
                $newUser->name = $result['name'];
                $newUser->save();
                Auth::login($newUser);
            }
            else{
                //They arent using a student account on the ljdcs domain
                return view('error.invalid-login');
            }

        }
        // if not ask for permission first
        else
        {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();

            // return to google login url
            return redirect((string)$url);
        }
    }
}
