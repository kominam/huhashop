@extends('layouts.desktop')
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
          <a href="#"><img class="first-slide" src="{{url('frontend/images/ba.jpg')}}" alt="First slide"></a>

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
        <br>
        <br>
        <input type="range" min="30000" max="1200000" name="price" id="myFilter">
            @foreach ($all_categories as $category)
               <input type="radio" name="myCategory" value="{{ $category->id}}">{{ $category->name }}
            @endforeach
    </div>
            <div class=" con-w3l wthree-of">
            <script type="text/javascript">
              $(document).ready(function() {
                  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function excuteFilter(category, price)
  {
    $.ajax({
    url: '/filter',
    type:'POST',
    data:{category: category, price:price },
    success: function(responses){
      $('#listPorudct').empty();
     $.each( responses, function( key, value ) {
      var newPoroduct = '<div class="col-md-3 pro-1">'+

                '<div class="col-m">'+
               '<a href="#" data-toggle="modal" data-target="productModal'+ value.name +'" class="offer-img">' +
                    '<img src="'+ value.url_image +'" class="img-responsive" alt="">'+
                  '</a>'+
                  '<div class="mid-1">'+
                    '<div class="women">' + 
                      '<h6><a href="single.html">'+ value.name +'</a>' + value.unit +'</h6>' +
                    '</div>' +
                    '<div class="mid-2">'+
                      '<p ><label>' + value.price + '</label><em class="item_price">' + value.price + '</em></p>'+
                        '<div class="block">'+
                        '<div class="starbox small ghosting">' + '</div>' +
                      '</div>' +
                      '<div class="clearfix"></div>' +
                    '</div>' +
                      '<div class="add add-2">'+
                      '<button class="btn btn-danger my-cart-btn my-cart-b " data-id="' + value.id +'" data-name="'+value.name+'" data-summary="summary '+ value.id +'" data-price="'+ value.price+'" data-quantity="1" data-image="'+ value.url_image+'">Add to Cart</button>'+
                   '</div>' +
                  '</div>' +
                '</div>' +
            '</div>';
                     $('#listPorudct').prepend(newPoroduct);

});
    }
  });
  }  
  $('input[type=radio][name=myCategory]').change(function() {
      var category = this.value;
  $("input[type=range][name=price]").change(function(){
          var price=  $("input[type=range][name=price]").val();
          excuteFilter(category,price);
        });
    });

  
});
            </script>
         <div id="listPorudct">
            @foreach ($all_products as $product)
               @if ( $product->is_hot )
           <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#productModal{{$product->slug}}" class="offer-img">
                    <img src="{{url($product->url_image)}}" class="img-responsive" alt="">
                      <div class="offer"><p><span>hot</span></p></div>
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
        @elseif($product->is_new)
         <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#productModal{{$product->slug}}" class="offer-img">
                    <img src="{{url($product->url_image)}}" class="img-responsive" alt="">
                      <div class="offer"><p><span>new</span></p></div>
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
        @elseif($product->isAloneSaleNow())
         <div class="col-md-3 pro-1">
                <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#productModal{{$product->slug}}" class="offer-img">
                    <img src="{{url($product->url_image)}}" class="img-responsive" alt="">
                      <div class="offer"><p><span>-{{$product->getRateAloneSaleNow()->rate}} %</span></p></div>
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
        @else
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
         </div>
             
             
              <div class="clearfix"></div>
             </div>
          </div>
        </div>
@include('frontend._references.modal_product')
@endsection
