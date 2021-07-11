<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = auth()->user();

        if( isset($user->owner) ){
            $owner = $user->owner;
        }else{
            $owner = NULL;
        }


        if( isset($user->owner->pets) ){
            $pets = $user->owner->pets;
        }else{
            $pets = NULL;
        }

        return view('dashboard', compact('pets', 'owner'));
    }
}
