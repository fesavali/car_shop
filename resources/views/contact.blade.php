@extends('layouts.main')
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

  <div class="row" style="padding-bottom:0px;">
  <div class="col-6" style="background-color : rgba(0,0,0, 0.3) !Important; padding-top: 10px; padding-bottom: 10px;">
      <div class="card text-center" style="color: #000;">
      <div class="card-header">
      <i class="fas fa-map-marker-alt fa-2x"></i>
      <h3 style="color: #006544">Our Address</h3>
      </div>
      <div class="card-body">
        <h5 class="card-title">South B, Nairobi, Kenya</h5>
      </div>
    </div>
    <div class="row">
   <div class="col-6" style="background-color : rgba(0,0,0, 0.3) !Important; padding-top: 10px; padding-bottom: 10px;">
      <div class="card text-center" style="color: #000;">
      <div class="card-header">
      <i class="fas fa-envelope-square fa-2x"></i>
      <h3 style="color: #006544">Email Us</h3>
      </div>
      <div class="card-body">
        <p>felixnzioki99@gmail.com<br>felixsavali1@outlook.com</p>
      </div>
    </div>
   </div>
   <div class="col-6" style="background-color : rgba(0,0,0, 0.3) !Important; padding-top: 10px; padding-bottom: 10px;">
   <div class="card text-center" style="color: #000;">
      <div class="card-header">
      <i class="fas fa-phone fa-2x"></i>
       <h3 style="color: #006544">Call Us</h3>
      </div>
      <div class="card-body" style="padding-top:50px;">
      <p><b><i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;+254 792 567 464</b></p>
      </div>
    </div>
   </div>
</div>
  </div>
 
  <div class="col-6" style="padding-left:15px; padding-top:15px;">
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
  <form action="{{ route('store') }}" method="POST">
  {{ csrf_field() }}
    <div class="row" style="padding-bottom:15px;">
    <div class="col-6">
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
    </div>
    <div class="col-6">
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
    </div>
  </div>
  <div class="container-fluid" style="padding-top:12px; padding-bottom:15px;">
      <input type="text" class="form-control" name="subject" id="subject" 
      placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
  </div>
    <div class="form-outline" style="padding-top:10px; padding-bottom:15px;">
    <textarea class="form-control" required placeholder="Type your message here" id="message" name="message" rows="4"  style="background: #fff;" required></textarea>
    <label class="form-label" for="message"><b><h4 style="color: #fed935">message</h4></b></label>
  </div>  
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4"><h6>Send Message</h6></button>
  </div>
  </form>
  </div>

@endsection