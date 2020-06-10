<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    /**
     * The function favour hits when he wants to obtain
     * the emails of registered users
     *
     * @return array $users
     */
    public function getMails()
    {
        // give access to only his email
        if (auth()->user()->email==="supersecure@fitnesshackz.com") {
            $users = User::all()->pluck('email');
            return $users;
        }
    }

    /**
     * The thank you page controller
     *
     * @return view
     */
    public function thankYou()
    {
        return view('thank-you');
    }
}
