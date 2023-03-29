<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

class buyerController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email'  => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if($user == true){
            if(Hash::check($request->password, $user->password)){
                    $message = "Log in Successful";
                    return redirect(route('ddash', $user->id))->with(['errorMsg'=> $message]);
            }else{
                return redirect(route('login'))->with('errorMsg', 'Password is Incorrect. Try Again');  
            }
        }else{
            return redirect(route('login'))->with('errorMsg', 'User does not exist.');
        }

    }
}
