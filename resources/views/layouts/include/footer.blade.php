<!--footer-->
<div class="footer">
  <div class="container">
    <div class="col-md-3 footer-grid">
      <h3>About Us</h3>
      <p>lavenderhuha shop được thành lập từ 11/2010 được sự tin tưởng của khách hàng trong suốt thời gian hoạt động đến nay cửa hàng ngày một phát triển và xây dựng được thương hiệu trong lòng quý khách ..</p>
    </div>
    <div class="col-md-3 footer-grid ">
      <h3>Menu</h3>
      <ul>
        <li><a href="{{route('index')}}">Home</a></li>
        @foreach ( $all_categories as $category)
          <li><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="col-md-3 footer-grid ">
      <h3>Customer Services</h3>
      <ul>
        <li><a href="{{ route('shipping') }}">Shipping</a></li>
        <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
        <li><a href="faqs.html">Faqs</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>

      </ul>
    </div>
    <div class="col-md-3 footer-grid">
      <h3>My Account</h3>
      <ul>
      @if (Auth::check())
      <li><a href="{{ route('login') }}">Order-History</a></li>
      @else
      <li><a href="{{ route('login') }}">Login</a></li>
      <li><a href="{{ url('register') }}">Register</a></li>
      @endif
      

      </ul>
    </div>
    <div class="clearfix"></div>
      <div class="footer-bottom">
        <h2 ><a href="{{route('index')}}"><b>T<br>H<br>E</b>Huha Lavender<span>The Artical Lavender Shop Flower</span></a></h2>
        <p class="fo-para">Forgiveness is the smell that lavender gives out when you tread on it</p>
        <ul class="social-fo">
          <li><a href="https://www.facebook.com/LavenderHuHa/" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" class=" ins"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#" class=" pin"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
          <li><a href="#" class=" dri"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        </ul>
        <div class=" address">
          <div class="col-md-4 fo-grid1">
              <p><i class="fa fa-home" aria-hidden="true"></i>109 Hoang Ngan, Thanh Xuan, Ha Noi</p>
          </div>
          <div class="col-md-4 fo-grid1">
              <p><i class="fa fa-phone" aria-hidden="true"></i>(+84) 0968158565</p>
          </div>
          <div class="col-md-4 fo-grid1">
            <p><a href="mailto:huha.ectl@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>huha.ectl@gmail.com</a></p>
          </div>
          <div class="clearfix"></div>

          </div>
      </div>
    <div class="copy-right">
      <p> &copy; 2016 Huha Shop. All Rights Reserved | Design by  MyTeam</p>
    </div>
  </div>
</div>
