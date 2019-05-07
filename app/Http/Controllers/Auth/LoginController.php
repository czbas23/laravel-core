<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
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
    protected $redirectTo = '/home';

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
    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGitHubCallback()
    {
        $user = Socialite::driver('github')->user();

        // $user->token;
    }

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // $user->token;
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // $user->token;
    }

    /**
     * Redirect the user to the Twitter authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from Twitter.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleTwitterCallback()
    {
        $user = Socialite::driver('twitter')->user();

        // $user->token;
    }

    /**
     * Redirect the user to the Gitlab authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGitlab()
    {
        return Socialite::driver('gitlab')->redirect();
    }

    /**
     * Obtain the user information from Gitlab.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGitlabCallback()
    {
        $user = Socialite::driver('gitlab')->user();

        // $user->token;
    }

    /**
     * Redirect the user to the Bitbucket authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToBitbucket()
    {
        return Socialite::driver('bitbucket')->redirect();
    }

    /**
     * Obtain the user information from Bitbucket.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleBitbucketCallback()
    {
        $user = Socialite::driver('bitbucket')->user();

        // $user->token;
    }
}
