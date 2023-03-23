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
<h4>Message.</h4>
  
  @if(!empty($message) && $message->count())
      
  <div class="card text-center" style="color: #000;">
  <div class="card-header">Message</div>
  <div class="card-body">
    <h5 class="card-title">{{ $message->subject }}</h5>
    <p class="card-text">{{ $message->message }}</p>
    <a href="{{ route('messages', $admin->id) }}" class="btn btn-primary">Back</a>
  </div>
  <div class="card-footer text-muted">{{ $message->created_at }}</div>
</div>
  
    @else
  <div class="alert alert-success" role="alert">
         Sorry. No Records Found.
  </div>
@endif
  </tbody>
</table>


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
</div>

<!-- end dash -->
  
@endsection