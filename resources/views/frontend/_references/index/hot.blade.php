  <div class="product">
    <div class="container">
      <div class="spec ">
        <h3>Hots</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
      </div>
        <div class=" con-w3l">
        @foreach ($all_products as $product)
        @if ( $product->is_hot )
           <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#productModal{{$product->slug}}" class="offer-img">
                    <img src="{{url($product->url_image)}}" class="img-responsive" alt="">
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
                      <div class="add add-2">
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
  </div>