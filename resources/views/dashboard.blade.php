@extends('layouts.master')
@section('title', '| Edit Post')
@section('contents')
<div class="container"  style = "height: 70vh;">
  <div class="container" style = "margin-top: 25px; margin-bottom:45px">
    <h4 class="text-center">Welcome to the admin dashboard</h4>
  </div>
  <div class="container" style = "margin-top: 25px; margin-bottom:45px">
  <div class="container-fluid">
    <div class="row">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sapiente deleniti inventore fugit voluptatum et, molestiae exercitationem iure explicabo labore.
      </p>
    </div>
  </div>

  </div>
</div>

  @endsection()

  @section('footer')
     @parent()
  
  @endsection()