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

<div class="container" style="padding-left: 20px;padding-right: 20px;background-color: rgba(0,0,0, 0.6); border-radius:8px; padding-top: 10px; padding-bottom: 0px; color: #fff; ">
<div class="row">
<div class="alert alert-success" role="alert">
Welcome to Your Profile:  {{ $user->name }}
</div>
  <div class="col-md-12">
  <div class="row">
  <div class="col-md-4" style="padding-bottom:20px; color:#000;">
  <div class="card">
  <img src="{{ url('public/images/bg/user.jpg') }}" class="card-img-top" alt="Fissure in Sandstone"/>
  <div class="card-body">
    <h5 class="card-title"><b>User Details</b></h5>
    <p class="card-text"><b>Dealer Name:</b> {{ $user->dName }}</p>
    <p class="card-text"><b>Email:</b> {{ $user->email }}</p>
    <p class="card-text"><b>Phone:</b> {{ $user->number }}</p>
    <p class="card-text"><b>Sec Phone:</b> {{ $user->number2 }}</p>
    <a href="#!" class="btn btn-primary">Update</a>
  </div>
</div>
  </div>
  <div class="col-md-8" style="color:#000;">
  <div class="card text-center">
  <div class="card-header">Tips to Sell Quicker On Automart EA</div>
  <div class="card-body">
  <h5 class="card-title"> Invest in Quality Product Images</h5>
  <p class="card-text">Given how important appearance is in relation to how we perceive things 
    (including other people), it stands to reason that investing in quality product photography 
    will have a similar effect on visitors to your posts.</p>
    <h5 class="card-title">Be Honest in Your Sales Post</h5>
    <p class="card-text">Not only is honesty in your post crucial to your business&apos; 
      reputation, it also fosters and encourages trust in your brand. Don&apos;t make claims 
      you can&apos;t substantiate, and don&apos;t use hyperbole lightly today&apos;s consumers are
       hypersensitive to marketing BS, so be honest, straightforward, and approachable in all your sales copy, 
       from your homepage to your email campaigns.</p>
  </div>
</div>
<div class="container" style="padding-bottom:20px;padding-top:30px;">
  <div class="row">
    <div class="col-md">
    <div class="card">
  <div class="card-body">Number of Cars: <b><h2>{{ $count }}</h2></b> <a href="{{ route('dcar', $user->id) }}">Add Car</a></div>
</div>
    </div>
    <div class="col-md">
    <div class="card">
  <div class="card-body">Sells: <b><h2>{{ $sold }}</h2></b> <a href="{{ route('dlisted', $user->id) }}">Update</a></div>
</div>
    </div>
    <div class="col-md">
    <div class="card">
  <div class="card-body">Unpaid Posts: <b><h2>{{ $count1 }}</h2></b> <a href="#!">Pay</a></div>
</div>
    </div>
  </div>
</div>
  </div>
</div>
  </div>
</div>
</div>
  </div>
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