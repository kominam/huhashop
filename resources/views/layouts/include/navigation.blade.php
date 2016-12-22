<div class="header">
  <div class="container">
    <div class="logo">
      <h1 ><a href="{{route('index')}}"><b>T<br>H<br>E</b>Huha Lavender<span>The Artical Lavender Shop Flower</span></a></h1>
    </div>
    <div class="head-t">
        <ul class="card">
          <li><a href="{{route('your-cart')}}" ><i class="fa fa-heart" aria-hidden="true"></i>Your Cart</a></li>
          @if (Auth::check())
             <li><a href="{{ route('logout') }}" ><i class="fa fa-sign-out" aria-hidden="true"></i>Sign Out</a></li>
          @else
             <li><a href="{{route('login')}}" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
              <li><a href="{{ url('register') }}" ><i class="fa fa-arrow-right" aria-hidden="#}"></i>Register</a></li>
          @endif
           @if (Auth::check())
          <li><a href="{{ route('order-history') }}" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
          @endif
          <li><a href="{{ route('shipping') }}" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
        </ul>
    </div>

    <div class="header-ri">
      <ul class="social-top">
        <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
        <li><a href="#" class="icon instagram"><i class="fa fa-instagram" aria-hidden="true"></i><span></span></a></li>
        <li><a href="#" class="icon pinterest"><i class="fa fa-youtube" aria-hidden="true"></i><span></span></a></li>
        <li><a href="#" class="icon google plus"><i class="fa fa-google-plus" aria-hidden="true"></i><span></span></a></li>
      </ul>
    </div>
    <div class="nav-top">
      <nav class="navbar navbar-default">

      <div class="navbar-header nav_2">
        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav ">
          <li class="{{Route::currentRouteNamed('index') ? 'active' : ''}}"><a href="{{route('index')}}" class="hyper"><span>Home</span></a></li>
          @foreach ($all_categories as $category)
             <li class="dropdown ">
            <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>{{$category->name}}<b class="caret"></b></span></a>
            <ul class="dropdown-menu multi">
              <div class="row">
              @foreach ($category->products->chunk(4) as $chunk)
                  <div class="col-sm-3">
                  <ul class="multi-column-dropdown">
                    @foreach ($chunk as $product)
                     <li><a href="{{route('product.show', ['slugProduct'=>$product->slug, 'slugCategory'=> $product->category->slug])}}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{$product->name}}</a></li>
                    @endforeach

                  </ul>

                </div>
              @endforeach
                <div class="col-sm-3 w3l">
                  <a href="#"><img src="{{url('frontend/images/me.png')}}" class="img-responsive" alt=""></a>
                </div>
                <div class="clearfix"></div>
              </div>
            </ul>
          </li>
          @endforeach
         

          <li><a href="{{ route('about') }}" class="hyper"> <span>About</span></a></li>
          <li class="{{Route::currentRouteNamed('contact') ? 'active' : ''}}"><a href="{{route('contact')}}" class="hyper"><span>Contact Us</span></a></li>
        </ul>
      </div>
      </nav>
       <div class="cart" >

        <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
