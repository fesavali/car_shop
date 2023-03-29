<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caronsells;


class carController extends Controller
{
    public function index(){  
        $vehicles = Caronsells::where('sold', )->orderBy('created_at', 'desc')->paginate(9);
        return view('all', compact('vehicles'));   
    }
    public function indexs(){
        $vehicles = Caronsells::where('sold', )->orderBy('created_at', 'desc')->paginate(6);
        return view('welcome', compact('vehicles'));
    }

    public function show($id){
        $vehicle = Caronsells::find($id);
        return view('details', compact('vehicle'));
    }

    public function search(Request $request){
        $this->validate($request, [
            'make'  => 'required',
            'model' => 'required',
            'from_year' => 'nullable',
            'to_year' => 'nullable',
            'min_mileage' => 'nullable',
            'max_mileage' => 'nullable',
            'min_engine' => 'nullable',
            'max_engine' => 'nullable',
            'min_price' => 'nullable',
            'max_price' => 'nullable',
        ]);  

        $vehicles = Caronsells::where('make', $request->make)
        ->where('model', $request->model)
        ->where('sold', )
        ->paginate(9);

      
        return view('search', compact('vehicles'));
             
    }
}
