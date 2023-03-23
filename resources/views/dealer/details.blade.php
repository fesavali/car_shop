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
  <div class="col-6 col-md-2"  style="background-color: rgba(0,0,0, 0.2); padding-top:10px;">
#
</div>
<div class="col-md-8" style="padding-left : 20px; padding-right : 20px;">
   <h5>Car ID: <b>{{$vehicle->carId}}</b></h5>
   <h5>Plate: <b>{{ strtoupper($vehicle->vin); }}</b></h5>
<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
<!-- Indicators -->
<div class="carousel-indicators">
<button
type="button"
data-mdb-target="#carouselBasicExample"
data-mdb-slide-to="0"
class="active"
aria-current="true"
aria-label="Slide 1"
></button>
<button
type="button"
data-mdb-target="#carouselBasicExample"
data-mdb-slide-to="1"
aria-label="Slide 2"
></button>
<button
type="button"
data-mdb-target="#carouselBasicExample"
data-mdb-slide-to="2"
aria-label="Slide 3"
></button>
<button
type="button"
data-mdb-target="#carouselBasicExample"
data-mdb-slide-to="3"
aria-label="Slide 4"
></button>
<button
type="button"
data-mdb-target="#carouselBasicExample"
data-mdb-slide-to="4"
aria-label="Slide 5"
></button>
<button
type="button"
data-mdb-target="#carouselBasicExample"
data-mdb-slide-to="5"
aria-label="Slide 6"
></button>
</div>

<!-- Inner -->
<div class="carousel-inner">
@php
$price = number_format("$vehicle->price",2);
$make = strtoupper($vehicle->make);
$model = strtoupper($vehicle->model);
$phone = $vehicle->phone;
$place = $vehicle->county;
@endphp
<!-- Single item -->
<div class="carousel-item active">
<img src="{{ url('public/images/' . json_decode($vehicle->images, true)[0]) }}" class="d-block w-100" alt="Sunset Over the City"
style="height:370px;"/>
<div class="carousel-caption d-none d-md-block">
<h5>Car Images </h5>
<p><b>make / model  <i class="fas fa-phone fa-1x"></i>&nbsp;phone
    <i class="fas fa-map-marker-alt fa-1x"></i>&nbsp;place</b></p>
</div>
</div>

<!-- Single item -->
<div class="carousel-item">
<img src="{{ url('public/images/' . json_decode($vehicle->images, true)[1]) }}" class="d-block w-100" alt="Canyon at Nigh" 
style="height:370px;"/>
<div class="carousel-caption d-none d-md-block">
<h5>Car Images </h5>
<p><b>make / model  <i class="fas fa-phone fa-1x"></i>&nbsp;phone
    <i class="fas fa-map-marker-alt fa-1x"></i>&nbsp;place</b></p>
</div>
</div>

<!-- Single item -->
<div class="carousel-item">
<img src="{{ url('public/images/' . json_decode($vehicle->images, true)[2]) }}" class="d-block w-100" alt="Cliff Above a Stormy Sea"
style="height:370px;"/>
<div class="carousel-caption d-none d-md-block">
<h5>Car Images </h5>
<p><b>make / model  <i class="fas fa-phone fa-1x"></i>&nbsp;phone
    <i class="fas fa-map-marker-alt fa-1x"></i>&nbsp;place</b></p>
</div>
</div>

<!-- Single item -->
<div class="carousel-item">
<img src="{{ url('public/images/' . json_decode($vehicle->images, true)[3]) }}" class="d-block w-100" alt="Cliff Above a Stormy Sea"
style="height:370px;"/>
<div class="carousel-caption d-none d-md-block">
<h5>Car Images </h5>
<p><b>make / model  <i class="fas fa-phone fa-1x"></i>&nbsp;phone
    <i class="fas fa-map-marker-alt fa-1x"></i>&nbsp;place</b></p>
</div>
</div>

<!-- Single item -->
<div class="carousel-item">
<img src="{{ url('public/images/' . json_decode($vehicle->images, true)[4]) }}" class="d-block w-100" alt="Cliff Above a Stormy Sea"
style="height:370px;"/>
<div class="carousel-caption d-none d-md-block">
<h5>Car Images </h5>
<p><b>make / model  <i class="fas fa-phone fa-1x"></i>&nbsp;phone
    <i class="fas fa-map-marker-alt fa-1x"></i>&nbsp;place</b></p>
</div>
</div>

<!-- Single item -->
<div class="carousel-item">
<img src="{{ url('public/images/' . json_decode($vehicle->images, true)[5]) }}" class="d-block w-100" alt="Cliff Above a Stormy Sea"
style="height:370px;"/>
<div class="carousel-caption d-none d-md-block">
<h5>Car Images </h5>
<p><b>make / model  <i class="fas fa-phone fa-1x"></i>&nbsp;phone
    <i class="fas fa-map-marker-alt fa-1x"></i>&nbsp;place</b></p>
</div>
</div>
</div>
<!-- Inner -->

<!-- Controls -->
<button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
<!-- Carousel wrapper --> 
</div>
<div class="col-6 col-md-2"  style="background-color: rgba(0,0,0, 0.2); padding-top:10px;">
#
</div>
</div>
<div class="row" style="padding-left: 20px; padding-top: 10px; padding-bottom: 20px; color: #fff;">
<div class="col-6 col-md-2" style="background-color : rgba(0,0,0, 0.3) !Important;">
#
</div>
  <div class="col-md-8">
<div class="row" style="color:#000; padding-bottom:10px;">
  <div class="col-6 col-sm-3">
    <div class="card">
  <div class="card-body">
      <h5>Price:</h5>
     <h5><b>Ksh.{{ number_format("$vehicle->price"); }}</b></h5> 
  </div>
</div>
  </div>
  <div class="col-6 col-sm-3">
  <div class="card">
  <div class="card-body">
  <h5>Mileage:</h5>
     <h5><b>{{ number_format("$vehicle->miles"); }} Kms</b></h5> 
  </div>
</div>
  </div>
  <div class="col-6 col-sm-3">
  <div class="card">
  <div class="card-body">
      <h5><b><i class="fas fa-map-marker-alt fa-1x"></i>&nbsp;{{ $vehicle->country }}</b></h5>
      <h5><b><i class="fas fa-map-marker-alt fa-1x"></i>&nbsp;{{ $vehicle->county }}</b></h5>
  </div>
</div>
  </div>
  <div class="col-6 col-sm-3">
  <div class="card">
  <div class="card-body">
  <h6><b><i class="fas fa-phone fa-1x"></i>{{ $vehicle->phone }}</b></h6>
<h6><b>{{ $vehicle->email }}</b></h6>
  </div>
</div>
  </div>
</div>
<div class="container-fluid" style="background-color : rgba(0, 0, 0, 0.7) !Important; border-radius:5px;">
<h5 style="font-family:Garamond;">{{ strtoupper($vehicle->title); }}</h5>
</div>
<div class="container-fluid" style="background-color : rgba(0, 0, 0, 0.7) !Important; border-radius:5px; padding-bottom:5px;">
<h4 style="font-family:Garamond;"><b>Vehicle Details</b></h4>
<table class="table" style="color:#fff;">
<tbody>
<tr>
      <td>
       Make/Model:&nbsp;<b>{{ strtoupper($vehicle->make); }}/{{ strtoupper($vehicle->model); }}</b>
      </td>
      <td>
      Year of Manufacture:&nbsp;<b>{{ $vehicle->year }}</b>
      </td>
      <td>
      Transmission:&nbsp;<b>{{ strtoupper($vehicle->transmission); }}</b>
      </td>
    </tr>
    <tr>
      <td>
       Fuel:&nbsp;<b>{{ strtoupper($vehicle->fuel_type); }}</b>
      </td>
      <td>
      Color:&nbsp;<b>{{ strtoupper($vehicle->exterior); }}</b>
      </td>
      <td>
      Vehicle Type:&nbsp;<b>{{ strtoupper($vehicle->vehicle_type); }}</b>
      </td>
    </tr>
    <tr>
    <td>
      Vehicle Regiatration No.&nbsp;:&nbsp;<b>{{ strtoupper($vehicle->vin); }}</b>
      </td>  
    </tr>
  </tbody>
</table>
</div>
&nbsp;
<div class="container-fluid" style="background-color : rgba(0, 0, 0, 0.7) !Important; border-radius:5px; padding-bottom:5px;">
<h4 style="font-family:Garamond;"><b>Vehicle Feartures</b></h4>
 @foreach (json_decode($vehicle->features, true) as $feature)
 <i class='fa fa-check' style='color: #fed925;'></i> |&nbsp;{{ $feature }}&nbsp;|&nbsp;&nbsp;
@endforeach
<table class="table" style="color:#fff;"><tbody><tr><td></td></tr></tbody></table>
</div>
&nbsp;
<div class="container-fluid" style="background-color : rgba(0, 0, 0, 0.7) !Important; border-radius:5px; padding-bottom:5px;">
<h4 style="font-family:Garamond;"><b>Description</b></h4>
 {{ $vehicle->description }}
<table class="table" style="color:#fff;"><tbody><tr><td></td></tr></tbody></table>
</div>
</div>
<div class="col-6 col-md-2" style="background-color : rgba(0,0,0, 0.3) !Important;">
#
</div>
</div>
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
</div>
 
@endsection