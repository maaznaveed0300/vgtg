<?php

namespace App\Http\Controllers\Auth;
use Socialite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
      public function redirectToProvider($social)
      {
          return Socialite::driver($social)->redirect();
      }

      /**
       * Obtain the user information from GitHub.
       *
       * @return \Illuminate\Http\Response
       */
      public function handleProviderCallback($social)
      {
          $user = Socialite::driver($social)->user();

          // $user->token;
      }

      /**
       * Get the needed authorization credentials from the request.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return array
       */
        protected function credentials(Request $request)
        {
          if(is_numeric($request->get('email'))){
            return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
          }
          elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return ['email' => $request->get('email'), 'password'=>$request->get('password')];
          }
          return ['username' => $request->get('email'), 'password'=>$request->get('password')];
        }

        public function login(Request $request)
        {
            $input = $request->all();

            $this->validate($request, [
                'email' => 'required',
                'password' => 'required',
            ]);


            if(is_numeric($request->get('email'))){
                $credentials = array('phone' => $input['email'], 'password' => $input['password']);
            }
            else {
                $credentials = array('email' => $input['email'], 'password' => $input['password']);
            }

            // dd($credentials);
            if(auth()->attempt($credentials))
            {
                if (auth()->user()->is_admin == 1) {
                    return redirect('admin/dashboard');
                }else{
                    return redirect('createartist');
                }
            }else{
                return redirect()->route('login')
                    ->with('error','Email-Address And Password Are Wrong.');
            }
        }
}
