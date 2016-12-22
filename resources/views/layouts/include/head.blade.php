<head>
    <title>Huha Shop| Lavender Flower Shop</title>
    <!-- for-mobile-apps -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
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