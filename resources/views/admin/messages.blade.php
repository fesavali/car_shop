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
<h4>Messages.</h4>
  <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th><b>Sender Name</b></th>
      <th>Sender Email</th>
      <th>Subject</th>
      <th>Message</th>
      <th>Sent At</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @if(!empty($messages) && $messages->count())
      @foreach($messages as $message)
    <tr>
      <td>{{ $message->name }}</td>
      <td>{{ $message->email }}</td>
      <td>{{ $message->subject }}</td>
      <td>{{ $message->message }}</td>
      <td>{{ $message->created_at }}</td>
      <td>
      <a href="{{ route('view_message', [$message->id, $admin->id]) }}" class="btn btn-danger">View message</a>
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
<div class="pagination">
{{ $messages->links() }}
</div>
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