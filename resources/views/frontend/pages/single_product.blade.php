@extends('layouts.desktop')
@section('content')
 <!--banner-->
<div class="banner-top">
  <div class="container">
    <h3 >Lorem</h3>
    <h4><a href="{{route('index')}}">Home</a><label>/</label>Lorem</h4>
    <div class="clearfix"> </div>
  </div>
</div>
    <div class="single">
      <div class="container">
            <div class="single-top-main">
        <div class="col-md-5 single-top">
        <div class="single-w3agile">

<div id="picture-frame">
      <img src="{{url($product->url_image)}}" data-src="{{url($product->url_image)}}" alt="" class="img-responsive"/>
    </div>
<script src="{{url('frontend/js/jquery.zoomtoo.js')}}"></script>
<script>
  $(function() {
  $("#picture-frame").zoomToo({
    magnify: 1
    });
  });
</script>
      </div>
      </div>
      <div class="col-md-7 single-top-left ">
                <div class="single-right">
        <h3>{{$product->name}}</h3>


         <div class="pr-single">
          <p class="reduced "><del>VND{{$product->price}}</del>VND{{$product->getCurrentPrice()}}</p>
        </div>
        <div class="block block-w3">
          <div class="starbox small ghosting"> </div>
        </div>
        <p class="in-pa"> {{$product->description}} </p>

        <ul class="social-top">
          <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
          <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
          <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
          <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
        </ul>
          <div class="add add-3">
             <button class="btn btn-danger my-cart-btn my-cart-b" data-id="{{$product->id}}" data-name="{{$product->name}}" data-summary="summary {{$product->id}}" data-price="{{$product->getCurrentPrice()}}" data-quantity="1" data-image="{{url($product->url_image)}}">Add to Cart</button>
          </div>
      <div class="clearfix"> </div>
      </div>
      </div>
       <div class="clearfix"> </div>
     </div>
  </div>
</div>
    <!---->
<div class="content-top offer-w3agile">
  <div class="container ">
      <div class="spec ">
        <h3>Related Products</h3>
          <div class="ser-t">
            <b></b>
            <span><i></i></span>
            <b class="line"></b>
          </div>
      </div>
            <div class=" con-w3l wthree-of">
            @foreach ($related_products as $r_product)
                <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#productModal{{$product->slug}}" class="offer-img">
                    <img src="{{url($r_product->url_image)}}" class="img-responsive" alt="">
                    @if($r_product->isAloneSaleNow())
                     <div class="offer"><p><span>{{$product->getRateAloneSaleNow()->rate}} %</span></p></div>
                    @else
                       @if($r_product->is_hot==1)
                         <div class="offer"><p><span>Hot</span></p></div>
                        @elseif($r_product->is_new==1)
                         <div class="offer"><p><span>New</p></div>
                        @endif
                    @endif
                   
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{ route('product.show', ['slugProduct'=>$r_product->slug, 'slugCategory'=> $r_product->category->slug]) }}">{{$r_product->name}}</a>({{$r_product->unit}})</h6>
                    </div>
                    <div class="mid-2">
                       @if($r_product->isAloneSaleNow())
                          <p ><label>VND {{$r_product->price}}</label><em class="item_price">VND {{$r_product->getCurrentPrice()}}</em></p>
                       @else
                        <p ><em class="item_price">VND {{$r_product->getCurrentPrice()}}</em></p>
                       @endif
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="{{$r_product->id}}" data-name="{{$r_product->name}}" data-summary="summary {{$r_product->id}}" data-price="{{$r_product->getCurrentPrice()}}" data-quantity="1" data-image="{{url($r_product->url_image)}}">Add to Cart</button>
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
