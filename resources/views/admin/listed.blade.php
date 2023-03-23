@extends('layouts.admin')
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
  <div class="container" style="padding-left: 20px;padding-right: 20px;background-color: rgba(0,0,0, 0.6); border-radius:8px; padding-top: 10px; padding-bottom: 20px; color: #fff;">
  @if(!empty($vehicles) && $vehicles->count())
    @foreach($vehicles->all() as $vehicle)
  <table class="table" style="color:#fff;">
  <tbody>
    <tr>
      <th>
      <div class="row">
  <div class="col-3">
  <div class="card" style="width: 18rem; ">
      <img src="{{ url('public/images/' . json_decode($vehicle->images, true)[1]) }}" class="card-img" alt="Car Image" style="height: 13rem;"/>
      </div>
  </div>
  <div class="col-7"style="background-color: rgba(255,255,255, 0.8); border-radius:8px; color: #000;">
  <table class="table">
  <tbody>
    <tr>
      <th>Car Id: <b>{{ $vehicle->carId }}</b></th>
      <th>Plate No. <b>{{ strtoupper($vehicle->vin); }}</b></th>
      <th>Package: <b>{{ $vehicle->package }}</b></th>
    </tr>
    <tr>
      <th>Transaction code: <b>{{ strtoupper($vehicle->trans_id); }}</b></th>
      <th>Dealer Phone: <b>{{ strtoupper($vehicle->phone); }}</b></th>
      <th>Email: <b>{{ $vehicle->email }}</th>
    </tr>
    <tr>
      <th>Dealer Name: <b>{{ strtoupper($vehicle->firstname); }}</b></th>
    </tr>
  </tbody>
</table>
</div>
  <div class="col-2">
  <a href="{{ route('adetail', [$vehicle->id, $admin->id]) }}" class="btn btn-primary">View Car</a> 
</br>
</br>
  <a href="{{ route('edit_vhi', [$vehicle->id, $admin->id]) }}" class="btn btn-primary">Edit Car</a>
</br>
</br>
<a href="{{ route('del_car', [$vehicle->id, $admin->id]) }}" class="btn btn-danger">Delete Car</a>

  </div>
</div>  
      </th>
    </tr>
  </tbody>
</table>
@endforeach
  @else
  <div class="alert alert-success" role="alert">
         Sorry. No Records Found. Try a Different Search.
  </div>
@endif
<div class="pagination" style="color:#fff;">
{{ $vehicles->links() }}
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