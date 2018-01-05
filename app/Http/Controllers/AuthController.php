<?php

namespace App\Http\Controllers;


use Socialite;

class AuthController extends Controller
{
	/**
	 * Redirect the user to the GitHub authentication page.
	 *
	 * @return Response
	 */
	public function redirectToProvider()
	{
		return Socialite::driver('line')->redirect();
	}

	/**
	 * Obtain the user information from GitHub.
	 *
	 * @return Response
	 */
	public function handleProviderCallback()
	{
		$user = Socialite::driver('line')->user();

		$lineid = $user->getId();
		return view('qr')->with('id',$lineid);
		// $user->token;
	}
    //
}
