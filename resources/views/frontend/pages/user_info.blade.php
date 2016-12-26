@extends('layouts.desktop')
@section('content')
<!--banner-->
<div class="banner-top" style="margin-top: 30px">
  <div class="container">
    <h3 >Your Cart</h3>
    <h4><a href="{{route('index')}}">Home</a><label>/</label>Your Cart</h4>
    <div class="clearfix"> </div>
  </div>
</div>
  <!-- contact -->
    <div class="check-out">
    <div class="container">
   <div class="spec ">
        <h3>Your profile</h3>
          <div class="ser-t">
            <b></b>
            <span><i></i></span>
            <b class="line"></b>
          </div>
      </div>
      <h4>{{Auth::user()->name}}</h4>
      <h3>{{Auth::user()->email}}</h3>
      <h5>{{Auth::user()->orders->count()}}</h5>
      <br/>
@endsection
