<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
{

    public function home() : View
    {
        return view('homepage');
    }


    public function about(): View
    {
        return view('about');
    }

    public function contact(): View
    {
        return view('contact');
    }


    public function admin(): View
    {
        if (Auth::check()) {
            return view('homepage');
        }
        return view('auth.login');
    }


}
