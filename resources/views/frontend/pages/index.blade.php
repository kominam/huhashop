@extends('frontend.pages.master')
@section('content')
  <!---->
<div data-vide-bg="frontend/video/video">
    <div class="container">
    <div class="banner-info">
      <h3>It is a long established fact that a reader will be distracted by
      the readable </h3>
      <div class="search-form">
        <form action="#" method="post">
          <input type="text" placeholder="Search..." name="Search...">
          <input type="submit" value=" " >
        </form>
      </div>
    </div>
    </div>
</div>

<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script src="{{url('frontend/js/jquery.vide.min.js')}}"></script>

<!--content-->
<div class="content-top ">
  <div class="container ">
    <div class="spec ">
      <h3>Special Offers</h3>
      <div class="ser-t">
        <b></b>
        <span><i></i></span>
        <b class="line"></b>
      </div>
    </div>
      <div class="tab-head ">
        <nav class="nav-sidebar">
          <ul class="nav tabs ">
          @foreach($all_categories as $category)
             @if ($loop->first)
                  <li class="active"><a href="#tab{{$category->slug}}" data-toggle="tab">{{$category->name}}</a></li>
            @else
                  <li class=""><a href="#tab{{$category->slug}}" data-toggle="tab">{{$category->name}}</a></li>
            @endif
          @endforeach
          </ul>
        </nav>
        <div class=" tab-content tab-content-t ">
        @foreach($all_categories as $category)
     <!--    loop first  -->
             @if ($loop->first)
                  <div class="tab-pane active text-style" id="tab{{$category->slug}}">
            <div class=" con-w3l">
              @foreach ($category->products as $product)
                @if($product->isAloneSaleNow())
                <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#productModal{{$product->slug}}" class="offer-img">
                    <img src="{{url($product->url_image)}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>{{$product->getRateAloneSaleNow()->rate}} %</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{ route('product.show', ['slugProduct'=>$product->slug, 'slugCategory'=> $product->category->slug]) }}">{{$product->name}}</a>({{$product->unit}})</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>{{$product->price}}</label><em class="item_price">{{$product->getCurrentPrice()}}</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="add">
                      <button class="btn btn-danger my-cart-btn my-cart-b " data-id="{{$product->id}}" data-name="{{$product->name}}" data-summary="summary {{$product->id}}" data-price="{{$product->getCurrentPrice()}}" data-quantity="1" data-image="{{url($product->url_image)}}">Add to Cart</button>
                    </div>

                  </div>
                </div>
              </div>
                @endif
              @endforeach
              <div class="clearfix"></div>
             </div>
          </div>
          <!--    end loop first  -->
            @else
          <div class="tab-pane  text-style" id="tab{{$category->slug}}"">
              <div class=" con-w3l">
              @foreach ($category->products as $product)
                @if($product->isAloneSaleNow())
                <div class="col-md-3 m-wthree">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#productModal{{$product->slug}}" class="offer-img">
                    <img src="{{url($product->url_image)}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>{{$product->getRateAloneSaleNow()->rate}} %</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">{{$product->name}}</a>({{$product->unit}})</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>{{$product->price}}</label><em class="item_price">{{$product->getCurrentPrice()}}</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="add">
                      <button class="btn btn-danger my-cart-btn my-cart-b " data-id="{{$product->id}}" data-name="{{$product->name}}" data-summary="summary {{$product->id}}" data-price="{{$product->getCurrentPrice()}}" data-quantity="1" data-image="{{url($product->url_image)}}">Add to Cart</button>
                    </div>

                  </div>
                </div>
              </div>
                @endif
              @endforeach
              <div class="clearfix"></div>
             </div>
          </div>
            @endif
          @endforeach
         
        </div>
      </div>

  </div>
  </div>
  </div>

<!--content-->
<div class="content-mid">
  <div class="container">

    <div class="col-md-4 m-w3ls">
      <div class="col-md1 ">
        <a href="kitchen.html">
          <img src="{{url('frontend/images/co1.jpg')}}" class="img-responsive img" alt="">
          <div class="big-sa">
            <h6>New Collections</h6>
            <h3>Season<span>ing </span></h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 m-w3ls1">
      <div class="col-md ">
        <a href="hold.html">
          <img src="{{url('frontend/images/co.jpg')}}" class="img-responsive img" alt="">
          <div class="big-sale">
            <div class="big-sale1">
              <h3>Big <span>Sale</span></h3>
              <p>It is a long established fact that a reader </p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4 m-w3ls">
      <div class="col-md2 ">
        <a href="kitchen.html">
          <img src="{{url('frontend/images/co2.jpg')}}" class="img-responsive img1" alt="">
          <div class="big-sale2">
            <h3>Cooking <span>Oil</span></h3>
            <p>It is a long established fact that a reader </p>
          </div>
        </a>
      </div>
      <div class="col-md3 ">
        <a href="hold.html">
          <img src="{{url('frontend/images/co3.jpg')}}" class="img-responsive img1" alt="">
          <div class="big-sale3">
            <h3>Vegeta<span>bles</span></h3>
            <p>It is a long established fact that a reader </p>
          </div>
        </a>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!--content-->
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="kitchen.html"> <img class="first-slide" src="{{url('frontend/images/ba.jpg')}}" alt="First slide"></a>

        </div>
        <div class="item">
         <a href="care.html"> <img class="second-slide " src="{{url('frontend/images/ba1.jpg')}}" alt="Second slide"></a>

        </div>
        <div class="item">
          <a href="hold.html"><img class="third-slide " src="{{url('frontend/images/ba2.jpg')}}" alt="Third slide"></a>

        </div>
      </div>

    </div><!-- /.carousel -->

<!--content-->
  <div class="product">
    <div class="container">
      <div class="spec ">
        <h3>Special Offers</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l">
              <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                    <img src="{{url('frontend/images/of16.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Moisturiser</a>(500 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add add-2">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="{{url('frontend/images/of16.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal18" class="offer-img">
                    <img src="{{url('frontend/images/of17.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">  Lady Finger</a>(250 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="4.50" data-quantity="1" data-image="{{url('frontend/images/of17.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal19" class="offer-img">
                    <img src="{{url('frontend/images/of18.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html"> Ribbon</a>(1 pc)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="3.50" data-quantity="1" data-image="{{url('frontend/images/of18.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal20" class="offer-img">
                    <img src="{{url('frontend/images/of19.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Grapes</a>(500 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="0.80" data-quantity="1" data-image="{{url('frontend/images/of19.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal21" class="offer-img">
                    <img src="{{url('frontend/images/of20.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Clips</a>(1 pack)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="{{url('frontend/images/of20.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal22" class="offer-img">
                    <img src="{{url('frontend/images/of21.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Conditioner</a>(250 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="4.50" data-quantity="1" data-image="{{url('frontend/images/of21.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal23" class="offer-img">
                    <img src="{{url('frontend/images/of22.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Cleaner</a>(250 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="3.50" data-quantity="1" data-image="{{url('frontend/images/of22.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal24" class="offer-img">
                    <img src="{{url('frontend/images/of23.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="single.html">Gel</a>(150 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="0.80" data-quantity="1" data-image="{{url('frontend/images/of23.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
             </div>
    </div>
  </div>
<!--footer-->
<!-- product -->
@include('frontend._partials.modal_product')
 <!-- product -->
@endsection
