<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Payment;
use App\Models\User;
use App\Models\Messages;
use App\Models\Caronsells;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function index(){
        return view('admin.adminDash');
    }
    public function reg($id){
        $admin = Admin::where('id', $id)->first();
        return view('admin.adm', compact('admin'));
    }
    public function addPay($id){
        $admin = Admin::where('id', $id)->first();
        return view('admin.addPayment', compact('admin'));
    }
    public function package($id){
        $admin = Admin::where('id', $id)->first();
        $packs = Payment::all();
        return view('admin.packages')->with(['packs' => $packs, 'admin' => $admin]);
    }
    public function admins($id){
        $admin = Admin::where('id', $id)->first();
        $all = Admin::all();
        return view('admin.admins')->with(['admins' => $all, 'admin' => $admin]);
    }
    public function destroy($id, $adm){
        $del = Payment::where('id', $id)->delete();
        if($del == true){
            $message = 'Package Deleted Successfully';
            return redirect(route('packages', $adm))->with(['successMsg'=> $message]);
        }else{
            $message = 'Package Delete Failed. Try Again';
            return redirect(route('packages', $adm))->with(['errorMsg'=> $message]);
        }
    }
    public function destroy_car($id, $adm){
        $car = Caronsells::where('id', $id)->first();
            foreach (json_decode($car->images, true) as $image){
                $file = public_path().'/images/'.$image;
                unlink($file);                
            }
        $car->delete();
        if($car == true){
            $message = 'Vehicle Deleted Successfully';
            return redirect(route('listed', $adm))->with(['successMsg'=> $message]);
        }else{
            $message = 'Vehicle Delete Failed. Try Again';
            return redirect(route('listed', $adm))->with(['errorMsg'=> $message]);
        }
    }
    public function edit_view($id, $adm){
        $pay = Payment::where('id', $id)->first();
        $admin = Admin::where('id', $adm)->first();
        return view('admin.edit_pay')->with(['pay' => $pay, 'admin' => $admin]);
    }
    public function detail($id, $adm){
        $vehicle = Caronsells::find($id);    
        $admin = Admin::where('id', $adm)->first();
        return view('admin.adetails')->with(['vehicle' => $vehicle, 'admin' => $admin]);
    }
//     edit
    public function edit_car($id, $adm){
        $vehicle = Caronsells::find($id);    
        $admin = Admin::where('id', $adm)->first();
        return view('admin.edit_car')->with(['vehicle' => $vehicle, 'admin' => $admin]);
    }
    public function rm_admin($id, $adm){
        if($id == $adm){
            $message = 'You Cannot Delete Your Account';
            return redirect(route('admins1', $adm))->with(['errorMsg'=> $message]);  
        }
        $del = Admin::where('id', $id)->delete();
        if($del == true){
            $message = 'Admin Deleted Successfully';
            return redirect(route('admins1', $adm))->with(['successMsg'=> $message]);
        }else{
            $message = 'Package Delete Failed. Try Again';
            return redirect(route('admins1', $adm))->with(['errorMsg'=> $message]);
        }
    }
    public function save($id, Request $request){
        $this->validate($request, [
            'name' => 'required|unique:payments',
            'amount' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'posted_by' => 'null'
        ]);

        $poste = Admin::where('id', $id)->first();

        $payment = new Payment;
        $payment->name = $request->name;
        $payment->amount = $request->amount;
        $payment->description = $request->description;
        $payment->duration = $request->duration;
        $payment->posted_by = $poste->uName;
        $payment->save();

        $admin = Admin::where('id', $id)->first();
        $message = 'Package added Successfully';
        return redirect(route('packages', $id))->with(['admin' => $admin, 'successMsg'=> $message]);
    }
    public function store($id, Request $request){
        $this->validate($request, [
            'email'  => 'required|unique:admins',
            'uName' => 'required|unique:admins',
            'pass' => 'required|confirmed|min:8',
            'pass' => 'required|same:pass'
        ]);
       
        $encpass = Hash::make($request->pass);
        $user = new Admin;
        $user->email = $request->email;
        $user->uName = $request->uName;
        $user->password = $encpass;
        $user->save();
        
        return redirect(route('admins1', $id))->with('successMsg', 'Admin Registered Successfully');
        
    }

    public function update($id, $adm, Request $request){
        $this->validate($request, [
            'name' => 'required|unique:payments',
            'amount' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'posted_by' => 'null'
        ]);

        $poste = Admin::where('id', $adm)->first();
        
        $update = Payment::where('id', $id)
                ->update([
                    'name' => $request->name,
                    'amount' => $request->amount,
                    'description' => $request->description,
                    'duration' => $request->duration,
                    'posted_by' => $poste->uName
                ]);
        if($update == true){
            $message = 'Package Updated Successfully';
            return redirect(route('packages', $adm))->with(['successMsg'=> $message]); 
        }else{
            $message = 'Package Update Failed. Try Again';
            return redirect(route('packages', $adm))->with(['errorMsg'=> $message]);
        }        
    }

    public function car($id, $adm, Request $request){
            $this->validate($request, [
            'email' => 'required',    
            'phone' => 'required',
            'amount' => 'required',
            'country' => 'required',
            'county' => 'required',
            'year' => 'required',
            'miles' => 'required',
            'trans_id' => 'required',
            'package' => 'required',
            'posted_by' => 'null'
        ]);

        $poste = Admin::where('id', $adm)->first();
        
        $update = Caronsells::where('id', $id)
                ->update([
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'price' => $request->amount,
                    'country' => $request->country,
                    'county' => $request->county,
                    'year' => $request->year,
                    'miles' => $request->miles,
                    'trans_id' => $request->trans_id,
                    'package' => $request->package,
                    'updated_by' => $poste->uName
                ]);
        if($update == true){
            $message = 'Vehicle Updated Successfully';
            return redirect(route('listed', $adm))->with(['successMsg'=> $message]); 
        }else{
            $message = 'Vehicle Update Failed. Try Again';
            return redirect(route('listed', $adm))->with(['errorMsg'=> $message]);
        } 
    }       

    public function log(Request $request){
        $this->validate($request, [
            'email'  => 'required',
            'password' => 'required',
        ]);
        $admin = Admin::where('email', $request->email)->first();
        if($admin == true){
            if(Hash::check($request->password, $admin->password)){
                // check usertype and redirect
                return redirect(route('adash', $admin->id));
                // return view('admin', compact('admin'));
            }else{
                return redirect(route('admin'))->with('errorMsg', 'Password is incorrect. Try Again.'); 
            }
        }else{
            return redirect(route('admin'))->with('errorMsg', 'User does not exist.');
        }
    }
    
    public function dash($id){
        $count = Caronsells::count();
        $users = User::count();
        $sold = Caronsells::where('sold', 'yes')
                            ->count();  
        $admin = Admin::where('id', $id)->first();
        return view('admin.admin')->with(['admin' => $admin, 'count'=>$count, 'sold'=>$sold, 'users'=>$users]); 
    }

    public function listed($id){
        $admin = Admin::where('id', $id)->first();
        $vehicles = Caronsells::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.listed')->with(['admin' => $admin, 'vehicles' => $vehicles]);
    }

    public function getMessages($adm){
        $admin = Admin::where('id', $adm)->first();
        $messges = Messages::orderBy('created_at', 'desc')->paginate(10); 
        return view('admin.messages')->with(['admin' => $admin, 'messages' => $messges]);
    }

    public function viewMessage($id, $adm){
        $admin = Admin::where('id', $adm)->first();
        $messges = Messages::where('id', $id)->first();
        return view('admin.view')->with(['admin' => $admin, 'message' => $messges]); 
    }
}
