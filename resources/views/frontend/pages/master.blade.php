<!DOCTYPE html>
<html>
  <head>
    <title>Huha Shop| Lavender Flower Shop</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Vide" />
    <meta name="keywords" content="HuHa shop, Lavender HuHa, Dried flower, Hoa Oải Hương
    , Lavender,Hoa Khô Nghệ Thuật" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); }
    </script>

    <!-- //for-mobile-apps -->
    <link href="{{url('frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
     <link rel="stylesheet" href="{{ elixir('css/frontend/jquery-typeahead.css') }}">
    <!-- Custom Theme files -->
    <link href="{{url('frontend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- js -->
   <script src="{{ elixir('js/frontend/general.js') }}"></script>
    <!-- //js -->
    <!-- start-smoth-scrolling -->
   
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="{{url('frontend/css/font-awesome.css')}}" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--- start-rate---->

    <link rel="stylesheet" href="{{url('frontend/css/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
      jQuery(function() {
      jQuery('.starbox').each(function() {
        var starbox = jQuery(this);
          starbox.starbox({
            average: starbox.attr('data-start-value'),
            changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
            ghosting: starbox.hasClass('ghosting'),
            autoUpdateAverage: starbox.hasClass('autoupdate'),
            buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
            stars: starbox.attr('data-star-count') || 5
            }).bind('starbox-value-changed', function(event, value) {
              if(starbox.hasClass('random')) {
              var val = Math.random();
              starbox.next().text(' '+val);
              return val;
            }
          })
        });
      });
    </script>
    <!---//End-rate---->
     <link rel="stylesheet" href="{{ elixir('css/frontend/sweetalert.css') }}">
    <script src="{{ elixir('js/frontend/sweetalert.js') }}"></script>
  </head>

<body>
  @include('frontend._partials.top_block')
  @yield('content')
  @include('frontend._partials.bottom_block')

  <!-- smooth scrolling -->
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear'
      };
    */
      $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  <!-- //smooth scrolling -->
  <!-- for bootstrap working -->
  <script src="{{url('frontend/js/bootstrap.js')}}"></script>
  <!-- //for bootstrap working -->
  <script type='text/javascript' src="{{url('frontend/js/jquery.mycart.js')}}"></script>
  <script type="text/javascript">
    $(function () {
      var goToCartIcon = function($addTocartBtn){
        var $cartIcon = $(".my-cart-icon");
        var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
        $addTocartBtn.prepend($image);
        var position = $cartIcon.position();
        $image.animate({
          top: position.top,
          left: position.left
        }, 500 , "linear", function() {
          $image.remove();
        });
      }

      $('.my-cart-btn').myCart({
        classCartIcon: 'my-cart-icon',
        classCartBadge: 'my-cart-badge',
        affixCartIcon: true,
        checkoutCart: function(products) {
          $.each(products, function(){
            console.log(this);
          });
        },
        clickOnAddToCart: function($addTocart){
          goToCartIcon($addTocart);
        },
        getDiscountPrice: function(products) {
          var total = 0;
          $.each(products, function(){
            total += this.quantity * this.price;
          });
          return total * 1;
        }
      });
    });
  </script>

  <script src="{{ elixir('js/frontend/jquery-typeahead.js') }}"></script>
  <script type="text/javascript" src="{{url('frontend/js/search.js')}}"></script>
</body>
</html>
