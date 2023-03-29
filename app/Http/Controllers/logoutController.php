<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caronsells;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class logoutController extends Controller
{
       /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        $vehicles = Caronsells::where('sold', )->orderBy('created_at', 'desc')->paginate(6);
        return view('welcome', compact('vehicles'));
    }
}
