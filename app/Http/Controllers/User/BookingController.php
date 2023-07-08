<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    // auth is already defined in route
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){

        return view('user.booking_form');

    }

    public function submit(){

        return 'form submitted';

    }
}
