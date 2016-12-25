@extends('layouts.desktop')
@section('content')
   <!--display when register failed-->
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
<div class="banner-top" style="margin-top: 30px">
  <div class="container">
    <h3 >Register</h3>
    <h4><a href="{{ route('index') }}">Home</a><label>/</label>Register</h4>
    <div class="clearfix"> </div>
  </div>
</div>

<!--login-->

  <div class="login">
    <div class="main-agileits">
        <div class="form-w3agile form1">
          <h3>Register</h3>
          <form action="{{ url('/register') }}" method="post">
          {{ csrf_field() }}
            <div class="key">
              <i class="fa fa-user" aria-hidden="true"></i>
              <input  type="text" value="Username" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
              @if ($errors->has('name'))
                <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                </div>
              @endif
              <div class="clearfix"></div>
            </div>
            <div class="key">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
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
              @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('password') }}
                </div>
              @endif
              <div class="clearfix"></div>
            </div>
            <div class="key">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <input  type="password" value="Confirm Password" name="password_confirmation" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
              <div class="clearfix"></div>
            </div>
            <input type="submit" value="Submit">
          </form>
        </div>
        
      </div>
    </div>
@endsection
