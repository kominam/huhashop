@extends('layouts.desktop')
@section('content')
@if (session('statusSendContact')=='success')
  <script type="text/javascript">
  swal({
    title: "Success!",
    text: "Thanks you !",
    type: "success",
    timer:2000,
    confirmButtonText: "OK"
  });
  </script>
@elseif(session('statusSendContact')=='error')
  <script type="text/javascript">
    swal({
    title: "Whoops!",
    text: "Something went wrong !",
    type: "error",
    confirmButtonText: "OK"
  });
  </script>
@endif
 <!--banner-->
<div class="banner-top">
  <div class="container">
    <h3 >Contact</h3>
    <h4><a href="{{route('index')}}">Home</a><label>/</label>Contact</h4>
    <div class="clearfix"> </div>
  </div>
</div>

<!-- contact -->
<div class="contact">
  <div class="container">
    <div class="spec ">
      <h3>Contact</h3>
        <div class="ser-t">
          <b></b>
          <span><i></i></span>
          <b class="line"></b>
        </div>
    </div>
    <div class=" contact-w3">
      <div class="col-md-5 contact-right">
        <img src="{{url('frontend/images/cac.jpg')}}" class="img-responsive" alt="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
      </div>
      <div class="col-md-7 contact-left">
        <h4>Contact Information</h4>
        <p> Quý khách và các bạn có nhu cầu đặt hoa và các sản phẩm của shop vui lòng liên hệ :</p>
        <ul class="contact-list">
          <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 109 Hoang Ngan, Thanh Xuan, Ha Noi</li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:huha.ectl@gmail.com">huha.ectl@gmail.com</a></li>
          <li> <i class="fa fa-phone" aria-hidden="true"></i>(+84) 0968158565</li>
        </ul>
        <div id="container">
          <!--Horizontal Tab-->
          <div id="parentHorizontalTab">
            <ul class="resp-tabs-list hor_1">
              <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
              <li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
              <li> <i class="fa fa-phone" aria-hidden="true"></i></li>
            </ul>
            <div class="resp-tabs-container hor_1">
              <div>
                <form action="{{ route('contact.send') }}" method="post">
                {!! csrf_field() !!}
                  <input type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                  <input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                   <input type="text" value="Subject" name="subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
                  <textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                  {!! Recaptcha::render() !!}
               
                  <input type="submit" value="Submit" >
                </form>
              </div>
              <div>
              <br>
                <div class="map-grid">
                
              </div>
            </div>
          </div>
        </div>

        <!--Plug-in Initialisation-->
        <script type="text/javascript">
        $(document).ready(function() {
          //Horizontal Tab
          $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
              var $tab = $(this);
              var $info = $('#nested-tabInfo');
              var $name = $('span', $info);
              $name.text($tab.text());
              $info.show();
            }
          });

          // Child Tab
          $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
          });

          //Vertical Tab
          $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
              var $tab = $(this);
              var $info = $('#nested-tabInfo2');
              var $name = $('span', $info);
              $name.text($tab.text());
              $info.show();
            }
          });
        });
      </script>

      </div>

    <div class="clearfix"></div>
  </div>
  </div>
</div>
<!-- //contact -->
@endsection
