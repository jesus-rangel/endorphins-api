@extends('layouts.app')
@section('content')
<div class="container text-center bg-light rounded">
  <h1 class="my-2">Yoda translator</h1>
  <div class="row">
    <div class="col-md-4 offset-md-4 col-6 offset-3">
      <img src="{{ asset('images/yoda.jpg') }}" alt="" class="img-fluid rounded">
    </div>
    <div class="row">
      <form action="">
        <div class="row">
          <div class="col-lg-6">
            <input type="text" name="language_input" id="language_input" placeholder="You would say something this way..." class="w-100 m-3 pb-5">
          </div>
          <div class="col-lg-6">
            <input type="text" name="language_output" id="language_output" placeholder="Say it this way, Yoda would..." class="w-100 m-3 pb-5">
          </div>
        </div>
      </form>
   </div>
  </div>
</div>
@endsection