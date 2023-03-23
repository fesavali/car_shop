@extends('layouts.dashboard')
@section('content')
  <!-- show success message -->
  @if (session('successMsg'))
      <div class="alert alert-success" role="alert">
          {{ session('successMsg') }}
      </div>
        @endif
<!-- show error messages -->
  @if ($errors->any())
      @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
         @endforeach
  @endif
  <div class="col-6 col-md-3"  style="background-color: rgba(0,0,0, 0.2); padding-top:10px;">
#
</div>
<div class="col-md-6" style="padding-left : 20px; padding-right : 20px;">
<h5>Car ID: <b>{{$vehicle->carId}}</b></h5>
<h5>Plate: <b>{{ strtoupper($vehicle->vin); }}</b></h5>
<div class="col-md" style="background-color: rgba(0, 0, 0, 0.7); padding-top: 20px; border-radius:10px; padding-right: 10px; padding-left:10px;">
    <span class="badge bg-info" style="width: 100%; padding-top:10px;padding-bottom:10px; background-color: rgba(0, 0, 0, 0.9) !Important;">EDIT LISTING DETAILS</span>
    <form action="{{ route('dupdate_car',[$vehicle->id, $user->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
  <div class="col-6">
  <label>Contact Email</label> 
    <input class="form-control" type="email" id="email" tabindex="24" name="email" value="{{ $vehicle->email }}" placeholder="Enter your e-mail address " required>
  </div>
  <div class="col-6">
  <label>Contact Phone</label> 
    <input class="form-control" type="number" id="phone" tabindex="25" name="phone" value="{{ $vehicle->phone }}" placeholder="Enter phone number" required>
  </div>
</div>
  <div class="row" style="padding-bottom:15px; padding-top:px; padding-right: 10px; padding-left:10px"> 
  <div class="container-fluid" style="padding-top:10px; padding-bottom:15px;">
  <label>Vehicle Price</label> 
    <input id="amount" class="form-control" type="number" name="amount" value="{{ $vehicle->price }}" placeholder="Package Amount" required>
  </div> 
  <div class="row" style="padding-top: 10px; padding-bottom: 10px;">
  <div class="col-6">
  <label>Country</label> 
    <select name="country" id="country" class="gt-select" tabindex="3" 
    style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;" required>
    <option value="-1" selected="selected">{{ $vehicle->country }}</option>
    <option class="level-0" value="Kenya" data-value="41">Kenya</option>
    <option class="level-0" value="Tanzania" data-value="48">Tanzania</option>
    <option class="level-0" value="Uganda" data-value="48">Uganda</option>
    <option class="level-0" value="Rwanda" data-value="48">Rwanda</option>
    <option class="level-0" value="Burundi" data-value="48">Burundi</option>
    <option class="level-0" value="Other" data-value="48">Other</option></select>
  </div>
  <div class="col-6">
  <label>County</label> 
    <select name="county" id="county" tabindex="4" data-value=""
    style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;" required>
        <option value="" data-value="-1" selected="selected">{{ $vehicle->county }}</option>
        <option class="level-0" value="Other" data-value="48">Other</option>
        <option class="level-0" value="Nairobi" data-value="48">Nairobi</option>
        <option class="level-0" value="Mombasa" data-value="48">Mombasa</option>
        <option class="level-0" value="Kwale" data-value="48">Kwale</option>
        <option class="level-0" value="Kilifi" data-value="48">Kilifi</option>
        <option class="level-0" value="Tana River" data-value="48">Tana River</option>
        <option class="level-0" value="Lamu" data-value="48">Lamu</option>
        <option class="level-0" value="Taita–Taveta " data-value="48">Taita–Taveta </option>
        <option class="level-0" value="Garissa" data-value="48">Garissa </option>
        <option class="level-0" value="Wajir" data-value="48">Wajir </option>
        <option class="level-0" value="Mandera" data-value="48">Mandera </option>
        <option class="level-0" value="Marsabit" data-value="48">Marsabit</option>
        <option class="level-0" value="Isiolo" data-value="48">Isiolo</option>
        <option class="level-0" value="Meru" data-value="48">Meru</option>
        <option class="level-0" value="Tharaka-Nithi" data-value="48">Tharaka-Nithi</option>
        <option class="level-0" value="Embu" data-value="48">Embu</option>
        <option class="level-0" value="Kitui" data-value="48">Kitui</option>
        <option class="level-0" value="Machakos" data-value="48">Machakos </option>
        <option class="level-0" value="Makueni" data-value="48">Makueni</option>
        <option class="level-0" value="Nyandarua" data-value="48">Nyandarua</option>
        <option class="level-0" value="Nyeri" data-value="48">Nyeri</option>
        <option class="level-0" value="Kirinyaga" data-value="48">Kirinyaga</option>
        <option class="level-0" value="Murang'a" data-value="48">Murang’a </option>
        <option class="level-0" value="Kiambu" data-value="48">Kiambu</option>
        <option class="level-0" value="Turkana " data-value="48">Turkana </option>
        <option class="level-0" value="West Pokot" data-value="48">West Pokot</option>
        <option class="level-0" value="Samburu" data-value="48">Samburu</option>
        <option class="level-0" value="Trans-Nzoia" data-value="48">Trans-Nzoia </option>
        <option class="level-0" value="Uasin Gishu" data-value="48">Uasin Gishu</option>
        <option class="level-0" value="Elgeyo-Marakwet" data-value="48">Elgeyo-Marakwet</option>
        <option class="level-0" value="Nandi" data-value="48">Nandi</option>
        <option class="level-0" value="Baringo" data-value="48">Baringo </option>
        <option class="level-0" value="Laikipia" data-value="48">Laikipia </option>
        <option class="level-0" value="Nakuru" data-value="48">Nakuru </option>
        <option class="level-0" value="Narok" data-value="48">Narok </option>
        <option class="level-0" value="Kajiado" data-value="48">Kajiado </option>
        <option class="level-0" value="Kericho" data-value="48">Kericho</option>
        <option class="level-0" value="Bomet" data-value="48">Bomet</option>
        <option class="level-0" value="Kakamega" data-value="48">Kakamega </option>
        <option class="level-0" value="Vihiga" data-value="48">Vihiga </option>
        <option class="level-0" value="Bungoma" data-value="48">Bungoma</option>
        <option class="level-0" value="Busia " data-value="48">Busia</option>
        <option class="level-0" value="Siaya " data-value="48">Siaya</option>
        <option class="level-0" value="Kisumu" data-value="48">Kisumu</option>
        <option class="level-0" value="Homa Bay" data-value="48">Homa Bay</option>
        <option class="level-0" value="Migori" data-value="48">Migori</option>
        <option class="level-0" value="Kisii" data-value="48">Kisii</option>
        <option class="level-0" value="Nyamira" data-value="48">Nyamira</option>
    </select>
  </div>
</div> 
<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
  <div class="col-6">
  <label>Year of Manufacture</label>
<select name="year" id="year" tabindex="4" required
    style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;">
<option value="-1" selected="selected">{{ $vehicle->year }}</option>
<option value="2021">2021</option><option value="2020">2020</option>
<option value="2019">2019</option><option value="2018">2018</option>
<option value="2017">2017</option><option value="2016">2016</option>
<option value="2015">2015</option><option value="2014">2014</option>
<option value="2013">2013</option><option value="2012">2012</option>
<option value="2011">2011</option><option value="2010">2010</option>
<option value="2009">2009</option><option value="2008">2008</option>
<option value="2007">2007</option><option value="2006">2006</option>
<option value="2005">2005</option><option value="2004">2004</option>
<option value="2003">2003</option><option value="2002">2002</option>
<option value="2001">2001</option><option value="2000">2000</option>
</select>
  </div>
  <div class="col-6">
  <label>Vehile Mileage (Kms)</label> 
  <input class="form-control" type="number" id="miles" name="miles" value="{{ $vehicle->miles }}" placeholder="Enter mileage (Kms)" required>
  </div>
</div>
<div class="container-fluid" style="padding-top:10px; padding-bottom:15px;">
<label>Vehicle Status: Sold or Not</label>
<select name="status" id="status" tabindex="4" required
    style="width: 100%; background-color: rgba(0,0,0, 0.6); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;" required>
<option value="yes" selected="selected">{{ $vehicle->sold }}</option>
<option value="yes">Yes</option><option value="no">No</option>
</select>
  </div> 
  <div class="container-fluid" style="padding-top:10px; padding-bottom:15px;">
  <label>Updated By</label>
  <input
    class="form-control"
    id="formControlDisabled"
    type="text"
    name="posted_by"
    value="{{ $user->uName }}"
    placeholder="Disabled input"
    aria-label="disabled input example"
    disabled
  />
  <!-- <label class="form-label" for="formControlDisabled">{{ $user->uName }}</label> -->
</div>
</div>
  <!-- Submit button -->
  <div style="padding-right: 10px; padding-left:10px; padding-bottom: 10px;">
  <button type="submit" class="btn btn-primary btn-block mb-4"><h6>Update Vehicle</h6></button>
  </div>
  
  </form>
    </div>

</div>
<div class="col-6 col-md-3"  style="background-color: rgba(0,0,0, 0.2); padding-top:10px;">
#
</div>
</div>
</br>
<div>
  <footer class="">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0,0,0, 0.5); border-radius: 10px;">
  © 2022 Copyright:
    <a class="text-center p-3" href="{{ route('logout')}}">Automart East Africa</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
<!-- end dash -->
 
@endsection