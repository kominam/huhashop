@extends('layouts.desktop')
@section('content')
@if(session('StatusCheckOut')==='success')
  <script>
    swal({
    title: "Success!",
    text: "Check-out Successful!",
    type: "success",
    confirmButtonText: "OK"
  });
  </script>
@endif
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
        <h3>Order History</h3>
          <div class="ser-t">
            <b></b>
            <span><i></i></span>
            <b class="line"></b>
          </div>
      </div>
 <table class="table ">
      <tr>
      <th class="t-head head-it ">Stt</th>
      <th class="t-head">Transaction Date</th>
      <th class="t-head">Total</th>
      <th class="t-head">Detail</th>
      </tr>
      <?php $i=1?>
      @foreach ($orders as $order)
         <tr class="cross">
      <td class="t-data">{{$i}}</td>
      <td class="t-data">{{$order->created_at->diffForHumans()}}</td>
      <td class="t-data">VND {{$order->total}}</td>
      <td class="t-data t-w3l"><a class=" add-1" href="#" data-toggle="modal" data-target="#orderModal{{$order->id}}">Detail</a></td>
      </tr>
      @endforeach
  </table>
  @include('frontend._references.modal_order')
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
