      $(document).ready(function() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          function excuteFilter(category, price) {
              $.ajax({
                  url: '/filter',
                  type: 'POST',
                  data: {
                      category: category,
                      price: price
                  },
                  success: function(responses) {
                      $('#listPorudct').empty();
                      $.each(responses, function(key, value) {
                          var newPoroduct = '<div class="col-md-3 pro-1">' + '<div class="col-m">' + '<a href="#" data-toggle="modal" data-target="productModal' + value.name + '" class="offer-img">' + '<img src="' + value.url_image + '" class="img-responsive" alt="">' + '</a>' + '<div class="mid-1">' + '<div class="women">' + '<h6><a href="single.html">' + value.name + '</a>' + value.unit + '</h6>' + '</div>' + '<div class="mid-2">' + '<p ><label>' + value.price + '</label><em class="item_price">' + value.price + '</em></p>' + '<div class="block">' + '<div class="starbox small ghosting">' + '</div>' + '</div>' + '<div class="clearfix"></div>' + '</div>' + '<div class="add add-2">' + '<button class="btn btn-danger my-cart-btn my-cart-b " data-id="' + value.id + '" data-name="' + value.name + '" data-summary="summary ' + value.id + '" data-price="' + value.price + '" data-quantity="1" data-image="' + value.url_image + '">Add to Cart</button>' + '</div>' + '</div>' + '</div>' + '</div>';
                          $('#listPorudct').prepend(newPoroduct);
                      });
                  }
              });
          }
          $('input[type=radio][name=myCategory]').change(function() {
              var category = this.value;
              $("input[type=range][name=price]").change(function() {
                  var price = $("input[type=range][name=price]").val();
                  excuteFilter(category, price);
              });
          });
      });