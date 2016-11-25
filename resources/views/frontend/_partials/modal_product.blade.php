
      @foreach ($all_products as $product)
       <div class="modal fade" id="productModal{{$product->slug}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-info">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                      <div class="item">
                        <img src="{{url($product->url_image)}}" class="img-responsive" alt="">
                      </div>
                </div>
                <div class="col-md-7 span-1 ">
                  <h3>{{$product->name}}({{$product->unit}})</h3>
                  <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                  <div class="price_single">
                    <span class="reducedfrom "><del>VND {{$product->price}}</del>VND {{$product->getCurrentPrice()}}</span>

                   <div class="clearfix"></div>
                  </div>
                  <h4 class="quick">Quick Overview:</h4>
                  <p class="quick_desc"> {{$product->description}}</p>
                   <div class="add-to">
                       <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="{{$product->id}}" data-name="{{$product->name}}" data-summary="summary {{$product->id}}" data-price="{{$product->getCurrentPrice()}}" data-quantity="1" data-image="{{url($product->url_image)}}">Add to Cart</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      
