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
<div class="banner-top" style="margin-top: 30px">
    <div class="container">
        <h3>
            Login
        </h3>
        <h4>
            <a href="{{route('index')}}">
                Home
            </a>
            <label>
                /
            </label>
            Login
        </h4>
        <div class="clearfix">
        </div>
    </div>
</div>
<!--login-->
<div class="login">
    <div class="main-agileits">
        <div class="form-w3agile">
            <h3>
                Login
            </h3>
            <form action="{{ url('login') }}" method="post">
                {{ csrf_field() }}
                <div class="key">
                    <i aria-hidden="true" class="fa fa-envelope">
                    </i>
                    <input name="email" onblur="if (this.value == '') {this.value = 'Email';}" onfocus="this.value = '';" required="" type="text" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                        <div class="clearfix">
                        </div>
                    </input>
                </div>
                <div class="key">
                    <i aria-hidden="true" class="fa fa-lock">
                    </i>
                    <input name="password" onblur="if (this.value == '') {this.value = 'Password';}" onfocus="this.value = '';" required="" type="password" value="Password">
                        @if ($errors->has('password'))
                        <div class="alert alert-danger">
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                        <div class="clearfix">
                        </div>
                    </input>
                </div>
                <input type="submit" value="Login">
                </input>
            </form>
            <h3>
                ----OR----
            </h3>
            <a href="{{ url('redirect/facebook') }}">
                <img src="{{url('frontend/images/fb-login.png')}}" width="270px"/>
            </a>
            <a href="{{ url('redirect/google') }}">
                <img src="{{url('frontend/images/gg-login.png')}}" width="270px"/>
            </a>
        </div>
        <div class="forg">
            <a class="forg-left" href="{{ url('/password/reset') }}">
                Forgot Password
            </a>
            <a class="forg-right" href="{{ url('/register') }}">
                Register
            </a>
            <div class="clearfix">
            </div>
        </div>
    </div>
</div>
@endsection
