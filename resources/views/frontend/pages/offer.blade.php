@extends('frontend.pages.master')
@section('content')
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
          <a href="care.html"><img class="second-slide " src="{{url('frontend/images/ba1.jpg')}}" alt="Second slide"></a>

        </div>
        <div class="item">
          <a href="hold.html"><img class="third-slide " src="{{url('frontend/images/ba2.jpg')}}" alt="Third slide"></a>

        </div>
      </div>

    </div>
<!--content-->
<div class="content-top offer-w3agile">
  <div class="container ">
    <div class="spec ">
      <h3>Special Offers</h3>
              <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
    </div>
            <div class=" con-w3l wthree-of">
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                    <img src="{{url('frontend/images/of.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Moong</a>(1 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$2.00</label><em class="item_price">$1.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="{{url('frontend/images/of.png')}}">Add to Cart</button>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                    <img src="{{url('frontend/images/of1.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Sunflower Oil</a>(5 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$10.00</label><em class="item_price">$9.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                        <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Sunflower Oil" data-summary="summary 2" data-price="9.00" data-quantity="1" data-image="{{url('frontend/images/of1.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                    <img src="{{url('frontend/images/of2.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Kabuli Chana</a>(1 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$3.00</label><em class="item_price">$2.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="{{url('frontend/images/of2.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                    <img src="{{url('frontend/images/of3.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Soya Chunks</a>(1 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Mini Soya Chunks" data-summary="summary 4" data-price="3.50" data-quantity="1" data-image="{{url('frontend/images/of3.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                    <img src="{{url('frontend/images/of4.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Lays</a>(100 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="{{url('frontend/images/of4.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                    <img src="{{url('frontend/images/of5.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Kurkure</a>(100 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="{{url('frontend/images/of5.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                    <img src="{{url('frontend/images/of6.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Popcorn</a>(250 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$2.00</label><em class="item_price">$1.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="product 1" data-summary="summary 1" data-price="1.00" data-quantity="1" data-image="{{url('frontend/images/of6.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                    <img src="{{url('frontend/images/of7.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}"> Nuts</a>(250 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="{{url('frontend/images/of7.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                    <img src="{{url('frontend/images/of8.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Banana</a>(6 pcs)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$2.00</label><em class="item_price">$1.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="{{url('frontend/images/of8.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                    <img src="{{url('frontend/images/of9.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Onion</a>(1 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="{{url('frontend/images/of9.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                    <img src="{{url('frontend/images/of10.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}"> Bitter Gourd</a>(1 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$2.00</label><em class="item_price">$1.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="{{url('frontend/images/of10.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                    <img src="{{url('frontend/images/of11.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Apples</a>(1 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="{{url('frontend/images/of11.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
                    <img src="{{url('frontend/images/of12.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Honey</a>(500g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="{{url('frontend/images/of12.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
                    <img src="{{url('frontend/images/of13.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Chocos</a>(250g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="{{url('frontend/images/of13.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal15" class="offer-img">
                    <img src="{{url('frontend/images/of14.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Oats</a>(1 kg)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="{{url('frontend/images/of14.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 pro-1">
                <div class="col-m">
                  <a href="#" data-toggle="modal" data-target="#myModal16" class="offer-img">
                    <img src="{{url('frontend/images/of15.png')}}" class="img-responsive" alt="">
                    <div class="offer"><p><span>Offer</span></p></div>
                  </a>
                  <div class="mid-1">
                    <div class="women">
                      <h6><a href="{{route('single')}}">Bread</a>(500 g)</h6>
                    </div>
                    <div class="mid-2">
                      <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                        <div class="block">
                        <div class="starbox small ghosting"> </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      <div class="add">
                       <button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="{{url('frontend/images/of15.png')}}">Add to Cart</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
             </div>
          </div>
        </div>
@endsection
