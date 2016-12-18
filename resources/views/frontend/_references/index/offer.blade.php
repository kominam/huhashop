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
                        <div class="starbox small ghosting">3</div>
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