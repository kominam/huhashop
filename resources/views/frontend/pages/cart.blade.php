@extends('frontend.pages.master')
@section('content')
<!--banner-->
<div class="banner-top">
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
        <h3>Wishlist</h3>
          <div class="ser-t">
            <b></b>
            <span><i></i></span>
            <b class="line"></b>
          </div>
      </div>
        <script>$(document).ready(function(c) {
          $('.close1').on('click', function(c){
            $('.cross').fadeOut('slow', function(c){
              $('.cross').remove();
            });
            });
          });
         </script>
         </script>
         </script>
 <table class="table ">
      <tr>
      <th class="t-head head-it ">Products</th>
      <th class="t-head">Price</th>
    <th class="t-head">Quantity</th>

      <th class="t-head">Purchase</th>
      </tr>
      @foreach (Cart::content() as $item)
         <tr class="cross">
      <td class="ring-in t-data">
        <a href="#" class="at-in">
          <img src="{{$item->options->url_image}}" class="img-responsive" alt="" width="100px" height="100px">
        </a>
      <div class="sed">
        <h5>{{$item->name}}</h5>
      </div>
        <div class="clearfix"> </div>
        <div class="close1"> <i class="fa fa-times" aria-hidden="true"></i></div>
       </td>
      <td class="t-data">VND{{$item->price}}</td>
      <td class="t-data"><div class="quantity">
                <div class="quantity-select">
                  <div class="entry value-minus">&nbsp;</div>
                    <div class="entry value"><span class="span-1">{{$item->qty}}</span></div>
                  <div class="entry value-plus active">&nbsp;</div>
                </div>
              </div>

      </td>

      <td class="t-data t-w3l"><a class=" add-1" href="#">Add To Cart</a></td>

      </tr>

      @endforeach
     
  </table>
  <a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=gemini.wind285@gmail.com&product_name={{Auth::user()->name}}{{\Carbon\Carbon::now()}}&price={{Cart::subtotal(0,'','')}}&return_url=huhashop.com&comments=Test Order"><img src="https://www.nganluong.vn/css/newhome/img/button/pay-lg.png"border="0" /></a>
     </div>
     </div>

  <!--quantity-->
      <script>
      $('.value-plus').on('click', function(){
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
        divUpd.text(newVal);
      });

      $('.value-minus').on('click', function(){
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
        if(newVal>=1) divUpd.text(newVal);
      });
      </script>
      <!--quantity-->
@endsection
