<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\Caronsells;
use App\Models\Payment;
use Illuminate\Auth\Passwords\PasswordBroker;

class dealerController extends Controller
{
    public function index(){
        return view('dealer.dealerReg');
    }
    
    public function dash($id){
        $user = User::where('id', $id)->first();
        $count = Caronsells::where('email', $user->email)->count();
        $count1 = Caronsells::where('email', $user->email)
                            ->where('trans_id', )
                            ->count();
        $sold = Caronsells::where('email', $user->email)
                            ->where('sold', 'yes')
                            ->count();                    
        return view('dealer.dealer')->with(['user' => $user, 'count' => $count, 'count1' => $count1, 'sold'=>$sold]); 
    }

    public function add($id){
        $user = User::where('id', $id)->first();
        return view('dealer.add_car')->with(['user' => $user]); 
    }

    public function listed($id){
        $user = User::where('id', $id)->first();
        $vehicles = Caronsells::where('email', $user->email)
                                ->where('sold')
                                ->orderBy('created_at', 'desc')
                                ->paginate(3);
        return view('dealer.listed')->with(['user' => $user, 'vehicles' => $vehicles]); 
    }

    public function detail($id, $adm){
        $vehicle = Caronsells::find($id);    
        $user = User::where('id', $adm)->first();
        return view('dealer.details')->with(['vehicle' => $vehicle, 'user' => $user]);
    }

    public function edit_car($id, $adm){
        $vehicle = Caronsells::find($id);    
        $user = User::where('id', $adm)->first();
        return view('dealer.edit')->with(['vehicle' => $vehicle, 'user' => $user]);
    }

    public function sold($id, $adm){
        $update = Caronsells::where('id', $id)
            ->update(['sold' => 'yes']);
    if($update == true){
        $message = 'Vehicle Marked as Sold';
        return redirect(route('dlisted', $adm))->with(['successMsg'=> $message]); 
    }else{
        $message = 'Vehicle Update Failed. Try Again';
        return redirect(route('dlisted', $adm))->with(['errorMsg'=> $message]);
    } 

    }

    public function sells($id){
        $user = User::where('id', $id)->first();
        $vehicles = Caronsells::where('email', $user->email)
                                ->where('sold', 'yes')
                                ->orderBy('created_at', 'desc')
                                ->paginate(3);
        return view('dealer.sells')->with(['user' => $user, 'vehicles' => $vehicles]); 
    }

    public function car($id, $adm, Request $request){
        $this->validate($request, [
        'email' => 'required',    
        'phone' => 'required',
        'amount' => 'required',
        'country' => 'required',
        'county' => 'required',
        'year' => 'required',
        'status' => 'required',
        'miles' => 'required',
        'posted_by' => 'null'
    ]);

    $poste = User::where('id', $adm)->first();
    
    $update = Caronsells::where('id', $id)
            ->update([
                'email' => $request->email,
                'phone' => $request->phone,
                'price' => $request->amount,
                'country' => $request->country,
                'county' => $request->county,
                'year' => $request->year,
                'sold' => $request->status,
                'miles' => $request->miles,
                'updated_by' => $poste->uName
            ]);
    if($update == true){
        $message = 'Vehicle Updated Successfully';
        return redirect(route('dlisted', $adm))->with(['successMsg'=> $message]); 
    }else{
        $message = 'Vehicle Update Failed. Try Again';
        return redirect(route('dlisted', $adm))->with(['errorMsg'=> $message]);
    } 
}

    public function save($id, Request $request){
        $this->validate($request, [
            'title' => 'required',
            'country'  => 'required',
            'county' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'price' => 'required',
            'miles' => 'required',
            'vin' => 'required|unique:caronsells',
            'exterior' => 'required',
            'interior' => 'required',
            'fuel_type' => 'required',
            // 'features' => 'required',
            'transmission' => 'required',
            'vehicle_type' => 'required',
            'description' => 'required',
            'images' => 'required|max:10|min:6',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $user = User::where('id', $id)->first();

        $vehicles = Caronsells::where('vin', $request->vin)->first();
        if($vehicles == true){
            return redirect(route('sellcar'))->with('errorMsg', 'Vehicle Already Listed.');
        }
        
        if($request->hasfile('images'))
        {

           foreach($request->file('images') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/images/', $name);  
               $data[] = $name;  
           }
        }
        $prefix = "CSS";
        $carID = $prefix.rand();

        $carOnSell = new Caronsells;
        $carOnSell->title = $request->title;
        $carOnSell->country = $request->country;
        $carOnSell->county = $request->county;
        $carOnSell->make = $request->make;
        $carOnSell->model = $request->model;
        $carOnSell->year = $request->year;
        $carOnSell->price = $request->price;
        $carOnSell->miles = $request->miles;
        $carOnSell->vin = $request->vin;
        $carOnSell->exterior = $request->exterior;
        $carOnSell->interior = $request->interior;
        $carOnSell->fuel_type = $request->fuel_type;
        // $carOnSell->feartures = json_encode($featdata);
        $carOnSell['features'] = json_encode($request->input('features'));
        $carOnSell->transmission = $request->transmission;
        $carOnSell->vehicle_type = $request->vehicle_type;
        $carOnSell->description = $request->description;
        $carOnSell->images=json_encode($data);
        $carOnSell->firstname = $request->firstname;
        $carOnSell->lastname = $request->lastname;
        $carOnSell->email = $request->email;
        $carOnSell->phone = $request->phone;
        $carOnSell->carId = $carID;
        $carOnSell->save();
        $message= 'Vehicle uploaded successfully';
        return redirect(route('ddash', $id))->with(['successMsg' => $message, 'user' => $user]);
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
            return redirect(route('dlisted', $adm))->with(['successMsg'=> $message]);
        }else{
            $message = 'Vehicle Delete Failed. Try Again';
            return redirect(route('dlisted', $adm))->with(['errorMsg'=> $message]);
        }
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email'  => 'required',
            'number' => 'required',
            'number2' => 'required',
            'county' => 'required',
            'dName' => 'required',
            'pass' => 'required|confirmed|min:8',
            'pass' => 'required|same:pass'
        ]);
       
        $user = User::where('email', $request->email)->first();
        $number = User::where('number', $request->number)->first();
        $dName = User::where('dName', $request->dName)->first();
        if($user == true){
            return redirect(route('dealerreg'))->with('errorMsg', 'Email is already taken');
        }
        if($number == true){
            return redirect(route('dealerreg'))->with('errorMsg', 'Number is already taken');
        }
        if($dName == true){
            return redirect(route('dealerreg'))->with('errorMsg', 'dName is already taken');
        }
        $encpass = Hash::make($request->pass);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->number2 = $request->number2;
        $user->county = $request->county;
        $user->dName = $request->dName;
        $user->password = $encpass;
        $user->save();
        
        return redirect(route('login'))->with('successMsg', 'Car Dealer Registered Successfully. Login');
    }
    public function show(){
        return view('dealer.dealer');
    }
}
