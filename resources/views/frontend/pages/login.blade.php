@extends('layouts.desktop')
@section('content')
<!-- display error when login failed  -->
@if(count($errors)>0)
  <script>
     swal({
        title: "Whoops!",
        text: "Sorry, something went wrong!",
        type: "error",
        confirmButtonText: "OK"
      });
  </script>
@endif
 <!--banner-->
<div class="banner-top">
  <div class="container">
    <h3 >Login</h3>
    <h4><a href="{{route('index')}}">Home</a><label>/</label>Login</h4>
    <div class="clearfix"> </div>
  </div>
</div>
<!--login-->

<div class="login">
  <div class="main-agileits">
    <div class="form-w3agile">
      <h3>Login</h3>
      <form action="{{ url('login') }}" method="post">
       {{ csrf_field() }}
        <div class="key">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" value="{{ old('email') }}">
          @if ($errors->has('email'))
            <div class="alert alert-danger">
                {{ $errors->first('email') }}
            </div>
          @endif
          <div class="clearfix"></div>
        </div>
        <div class="key">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
            @if ($errors->has('password'))
            <div class="alert alert-danger">
                {{ $errors->first('password') }}
            </div>
          @endif
          <div class="clearfix"></div>
        </div>
        <input type="submit" value="Login">
      </form>
    </div>
    <div class="forg">
      <a href="{{ url('/password/reset') }}"" class="forg-left">Forgot Password</a>
      <a href="{{ url('/register') }}" class="forg-right">Register</a>
    <div class="clearfix"></div>
    </div>
  </div>
</div>
@endsection
