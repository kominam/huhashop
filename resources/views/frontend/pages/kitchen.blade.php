@extends('layouts.desktop')
@section('content')
  <!---->

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
           <a href="{{route('kitchen')}}"><img class="first-slide" src="{{url('frontend/images/ba.jpg')}}" alt="First slide"></a>

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
<div class="kic-top ">
  <div class="container ">
  <div class="kic ">
      <h3>Popular Categories</h3>

    </div>
    <div class="col-md-4 kic-top1">
      <a href="#">
        <img src="{{url('frontend/images/ki.jpg')}}" class="img-responsive" alt="">
      </a>
      <h6>Dal</h6>
      <p>Nam libero tempore</p>
    </div>
    <div class="col-md-4 kic-top1">
      <a href="#">
        <img src="{{url('frontend/images/ki1.jpg')}}" class="img-responsive" alt="">
      </a>
      <h6>Snacks</h6>
      <p>Nam libero tempore</p>
    </div>
    <div class="col-md-4 kic-top1">
      <a href="#">
        <img src="{{url('frontend/images/ki2.jpg')}}" class="img-responsive" alt="">
      </a>
      <h6>Spice</h6>
      <p>Nam libero tempore</p>
    </div>
  </div>
</div>

<!--content-->
    <div class="product">
    <div class="container">
      <div class="spec ">
        <h3>Products</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l agileinf">
              <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                    <img src="{{url('frontend/images/of24.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Wheat</a>(500 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="24" data-name="Wheat" data-summary="summary 24" data-price="6.00" data-quantity="1" data-image="{{url('frontend/images/of24.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                    <img src="{{url('frontend/images/of25.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#"> Peach Halves</a>(250 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="25" data-name="Peach Halves" data-summary="summary 25" data-price="4.50" data-quantity="1" data-image="{{url('frontend/images/of25.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                    <img src="{{url('frontend/images/of26.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Banana</a>(1 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="26" data-name="Banana" data-summary="summary 26" data-price="3.50" data-quantity="1" data-image="{{url('frontend/images/of26.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                    <img src="{{url('frontend/images/of27.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Rice</a>(500 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="27" data-name="Rice" data-summary="summary 27" data-price="0.80" data-quantity="1" data-image="{{url('frontend/images/of27.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                    <img src="{{url('frontend/images/of28.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Oil</a>(500 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="28" data-name="Oil" data-summary="summary 28" data-price="6.00" data-quantity="1" data-image="{{url('frontend/images/of28.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                    <img src="{{url('frontend/images/of29.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Biscuits</a>(250 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="29" data-name="Biscuits" data-summary="summary 29" data-price="4.50" data-quantity="1" data-image="{{url('frontend/images/of29.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                    <img src="{{url('frontend/images/of30.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Nuts</a>(1 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="30" data-name="Nuts" data-summary="summary 30" data-price="3.50" data-quantity="1" data-image="{{url('frontend/images/of30.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                    <img src="{{url('frontend/images/of31.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Rice</a>(500 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="31" data-name="Rice" data-summary="summary 31" data-price="0.80" data-quantity="1" data-image="{{url('frontend/images/of31.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
                <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                    <img src="{{url('frontend/images/of32.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Noodles</a>(500 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="32" data-name="Noodles" data-summary="summary 32" data-price="6.00" data-quantity="1" data-image="{{url('frontend/images/of32.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                    <img src="{{url('frontend/images/of33.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Tea</a>(250 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="33" data-name="Tea" data-summary="summary 33" data-price="4.50" data-quantity="1" data-image="{{url('frontend/images/of33.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                    <img src="{{url('frontend/images/of34.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Seafood</a>(1 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="34" data-name="Seafood" data-summary="summary 34" data-price="3.50" data-quantity="1" data-image="{{url('frontend/images/of34.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                    <img src="{{url('frontend/images/of35.png')}}" class="img-responsive" alt="">
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="#">Oats Idli</a>(500 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="35" data-name="Oats Idli" data-summary="summary 35" data-price="0.80" data-quantity="1" data-image="{{url('frontend/images/of35.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
             </div>
    </div>
  </div>
@endsection
