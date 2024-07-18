<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function loginPage()
    {
        return view('pages.auth.login');
    }

    public function dashboardPage()
    {
        if (Auth::check()) {
            return view('pages.dashboard.dashboard');
        } else {
            return redirect('/login')->with('ERROR', 'Silahkan login terlebih dahulu!');
        }
    }

    public function moneyStoragePage()
    {
        return view('pages.money-storage.index');
    }
}
