@extends('layouts.admin')
@section('content')
  <!-- show success message -->
  @if (session('successMsg')) 
      <div class="alert alert-success" role="alert">
          {{ session('successMsg') }}
      </div>
        @endif
        @if (session('errorMsg'))
      <div class="alert alert-danger" role="alert">
          {{ session('errorMsg') }}
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
  <div class="container" style="padding-left: 20px;padding-right: 20px;background-color: rgba(0,0,0, 0.6); border-radius:8px; padding-top: 10px; padding-bottom: 20px; color: #fff; ">
<h4>Admins.</h4>
  <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th><b>Name</b></th>
      <th>Email</th>
      <th>Created At</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @if(!empty($admins) && $admins->count())
      @foreach($admins as $admi)
    <tr>
      <td>{{ $admi->uName }}</td>
      <td>{{ $admi->email }}</td>
      <td>{{ $admi->created_at }}</td>
      <td>
      <a href="{{ route('del_admin', [$admi->id, $admin->id]) }}" class="btn btn-danger">Delete Admin</a>
      </td>
    </tr>
  
    @endforeach
    @else
  <div class="alert alert-success" role="alert">
         Sorry. No Records Found.
  </div>
@endif
  </tbody>
</table>

</br>
  <a href="{{ route('adminReg', $admin->id) }}" class="btn btn-primary">New Admin</a>
</br>
</br>
<div>
<footer class="">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0,0,0, 0.5); border-radius: 10px;">
  © 2023 Copyright:
    <a class="text-center p-3" href="{{ route('logout')}}">Car Sell Site</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
</div>

<!-- end dash -->
  
@endsection