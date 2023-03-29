<?php

namespace App\Http\Controllers;

use App\Models\Caronsells;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
            $vehicles = Caronsells::where('sold', )->orderBy('created_at', 'desc')->paginate(6);
            return view('welcome', compact('vehicles'));
    }

}
