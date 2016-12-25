@extends('layouts.desktop')
@section('content')
  <!---->

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 30px">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="care.html"><img class="first-slide" src="{{url('frontend/images/ba2.jpg')}}" alt="First slide"></a>

        </div>
        <div class="item">
          <a href="care.html"><img class="second-slide " src="{{url('frontend/images/ba.jpg')}}" alt="Second slide"></a>

        </div>
        <div class="item">
         <a href="hold.html"> <img class="third-slide " src="{{url('frontend/images/ba1.jpg')}}" alt="Third slide"></a>

        </div>
      </div>

    </div><!-- /.carousel -->

<!--content-->
<div class="kic-top ">
  <div class="container ">
  <div class="kic ">
      <h3>Popular Categories</h3>

    </div>
    <div class="col-md-4 kic-top1">
      <a href="#">
        <img src="{{url('frontend/images/ki6.jpg')}}" class="img-responsive" alt="">
      </a>
      <h6>Clips</h6>
      <p>Nam libero tempore</p>
    </div>
    <div class="col-md-4 kic-top1">
      <a href="#">
        <img src="{{url('frontend/images/ki7.jpg')}}" class="img-responsive" alt="">
      </a>
      <h6>Cleaning Wear</h6>
      <p>Nam libero tempore</p>
    </div>
    <div class="col-md-4 kic-top1">
      <a href="#">
        <img src="{{url('frontend/images/ki8.jpg')}}" class="img-responsive" alt="">
      </a>
      <h6>Toothbrush</h6>
      <p>Nam libero tempore</p>
    </div>
  </div>
</div>

<!--content-->
    <div class="product">
    <div class="container">
    <div class="spec ">
        <h3>{{$category->name}}</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l agileinf">
        @foreach ($category->products as $product)
          <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#productModal{{$product->slug}}" class="offer-img">
                    <img src="{{url($product->url_image)}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{ route('product.show',['slugCategory'=> $product->category->slug, 'slugProduct'=> $product->slug]) }}">{{$product->name}}</a>({{$product->unit}})</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>VND {{$product->price}}</label><em class="item_price">VND {{$product->getCurrentPrice()}}</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="{{$product->id}}" data-name="{{$product->name}}" data-summary="summary {{$product->id}}" data-price="{{$product->getCurrentPrice()}}" data-quantity="1" data-image="{{url($product->url_image)}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
        @endforeach    
          <div class="clearfix"></div>
        </div>
    </div>
  </div>
  <!-- product -->
@include('frontend._references.modal_product')
 <!-- product -->
@endsection
