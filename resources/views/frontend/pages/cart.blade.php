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
        <h3>Preview Your Order</h3>
          <div class="ser-t">
            <b></b>
            <span><i></i></span>
            <b class="line"></b>
          </div>
      </div>
      <h4>List Items</h4>
      <br/>
 <table class="table ">
      <tr>
      <th class="t-head head-it ">Products</th>
      <th class="t-head">Price</th>
    <th class="t-head">Quantity</th>

      <th class="t-head">To Money</th>
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
        </div>
       </td>
      <td class="t-data">VND{{$item->price}}</td>
      <td class="t-data">{{$item->qty}}</td>
      <td class="t-data">VND {{ $item->price*$item->qty}}</td>
      </tr>
      @endforeach
  </table>
        <h4>Summary</h4>
        <br/>
  <table class="table" style="width: 240px">
    <tr>
      <th class="t-head">Subtotal</th>
      <th class="t-head">VAT(10%)</th>
      <th class="t-head">Total</th>
    </tr>
    <tr class="cross">
    <td class="t-data">{{Cart::subtotal(0,'','')}}</td>
    <td class="t-data">{{(Cart::subtotal(0,'','')/100)*10}}</td>
    <td class="t-data">{{Cart::subtotal(0,'','') + ((Cart::subtotal(0,'','')/100)*10)}}</td>
    </tr>
  </table>
    <form action="{{ route('checkout') }}" method="POST" role="form">
    {!! csrf_field() !!}
    <div class="form-group">
        <label>Receiver Name</label>
        <input type="text" name="name" class="form-control" required="">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" required="">
    </div>
     <div class="form-group">
        <label>Telephone</label>
        <input type="text" name="telephone" class="form-control" required="">
    </div>
<script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_MoVxTydZUv9dvlhwisSt6CPK"
    data-amount="{{Cart::subtotal(0,'','') + ((Cart::subtotal(0,'','')/100)*10)}}"
    data-name="Huhashop"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
</form>
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
