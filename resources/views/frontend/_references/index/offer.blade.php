<div class="content-top ">
    <div class="container ">
        <div class="spec ">
            <h3>
                Special Offers
            </h3>
            <div class="ser-t">
                <b>
                </b>
                <span>
                    <i>
                    </i>
                </span>
                <b class="line">
                </b>
            </div>
        </div>
        <div class="tab-head ">
            <nav class="nav-sidebar">
                <ul class="nav tabs ">
                    @foreach($all_categories as $category)
             @if ($loop->first)
                    <li class="active">
                        <a data-toggle="tab" href="#tab{{$category->slug}}">
                            {{$category->name}}
                        </a>
                    </li>
                    @else
                    <li class="">
                        <a data-toggle="tab" href="#tab{{$category->slug}}">
                            {{$category->name}}
                        </a>
                    </li>
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
                                <a class="offer-img" data-target="#productModal{{$product->slug}}" data-toggle="modal" href="#">
                                    <img alt="" class="img-responsive" src="{{url($product->url_image)}}">
                                        <div class="offer">
                                            <p>
                                                <span>
                                                    -{{$product->getRateAloneSaleNow()->rate}} %
                                                </span>
                                            </p>
                                        </div>
                                    </img>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6>
                                            <a href="{{ route('product.show', ['slugProduct'=>$product->slug, 'slugCategory'=> $product->category->slug]) }}">
                                                {{$product->name}}
                                            </a>
                                            ({{$product->unit}})
                                        </h6>
                                    </div>
                                    <div class="mid-2">
                                        <p>
                                            <label>
                                                {{$product->price}}
                                            </label>
                                            <em class="item_price">
                                                {{$product->getCurrentPrice()}}
                                            </em>
                                        </p>
                                        <div class="block">
                                            <div class="starbox small ghosting">
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b " data-id="{{$product->id}}" data-image="{{url($product->url_image)}}" data-name="{{$product->name}}" data-price="{{$product->getCurrentPrice()}}" data-quantity="1" data-summary="summary {{$product->id}}">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
              @endforeach
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
                <!--    end loop first  -->
                @else
                <div "="" class="tab-pane text-style" id="tab{{$category->slug}}">
                    <div class=" con-w3l">
                        @foreach ($category->products as $product)
                @if($product->isAloneSaleNow())
                        <div class="col-md-3 m-wthree">
                            <div class="col-m">
                                <a class="offer-img" data-target="#productModal{{$product->slug}}" data-toggle="modal" href="#">
                                    <img alt="" class="img-responsive" src="{{url($product->url_image)}}">
                                        <div class="offer">
                                            <p>
                                                <span>
                                                    {{$product->getRateAloneSaleNow()->rate}} %
                                                </span>
                                            </p>
                                        </div>
                                    </img>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                        <h6>
                                            <a href="single.html">
                                                {{$product->name}}
                                            </a>
                                            ({{$product->unit}})
                                        </h6>
                                    </div>
                                    <div class="mid-2">
                                        <p>
                                            <label>
                                                {{$product->price}}
                                            </label>
                                            <em class="item_price">
                                                {{$product->getCurrentPrice()}}
                                            </em>
                                        </p>
                                        <div class="block">
                                            <div class="starbox small ghosting">
                                                3
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b " data-id="{{$product->id}}" data-image="{{url($product->url_image)}}" data-name="{{$product->name}}" data-price="{{$product->getCurrentPrice()}}" data-quantity="1" data-summary="summary {{$product->id}}">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
              @endforeach
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
                @endif
          @endforeach
            </div>
        </div>
    </div>
</div>
