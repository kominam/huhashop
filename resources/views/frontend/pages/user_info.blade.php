@extends('layouts.desktop')
@section('content')
@if(session('statusChangePwd') == 'fail')
<script>
    swal({
        title: "Whoops!",
        text: "Sorry, something went wrong!",
        type: "error",
        confirmButtonText: "OK"
      });
</script>
@elseif (session('statusChangePwd') == 'success')
<script>
    swal({
        title: "Success!",
        text: "Your password is up-to-date!",
        type: "success",
        timer: 2000,
        confirmButtonText: "OK"
      });
</script>
@endif
<!--banner-->
<div class="banner-top" style="margin-top: 30px">
  <div class="container">
    <h3 >Your Profile</h3>
    <h4><a href="{{route('index')}}">Home</a><label>/</label>Your Profile</h4>
    <div class="clearfix"> </div>
  </div>
</div>
  <!-- contact -->
    <div class="check-out">
    <div class="container">
   <div class="spec ">
        <h3>Your profile</h3>
          <div class="ser-t">
            <b></b>
            <span><i></i></span>
            <b class="line"></b>
          </div>
      </div>
      <h3><i class="fa fa-user"></i>&nbsp Name: {{Auth::user()->name}}</h3>
      <h3><i class="fa fa-envelope"></i>&nbspEmail: {{Auth::user()->email}}</h3>
      <h3><i class="fa fa-calendar"></i>&nbspJoin In: {{Auth::user()->created_at}}</h3>
      <h3><i class="fa fa-line-chart"></i>&nbspOrder Count: {{Auth::user()->orders->count()}}</h3>
      <br/>
        <button class="btn btn-info" data-target="#changePassword" data-toggle="modal" style="margin-right: 5px;" type="button">
                  <i class="fa fa-lock">
                  </i>&nbspChange passsword</button>
         <div aria-labelledby="myModalLabel" class="modal fade" id="changePassword" role="dialog" tabindex="-1">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                              <span aria-hidden="true">
                              ×
                              </span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">
                                 Edit
                              </h4>
                           </div>
                           <div class="modal-body">
                              <form role="form" action="{{route('customer.change-password')}}" method="POST">
                                 {!! csrf_field() !!}
                                 <div class="box-body">
                                    <div class="form-group">
                                       <label for="current_password">Current Password</label>
                                       <input type="password" class="form-control" id="current_password" name="current_password">
                                    </div>
                                     <div class="form-group">
                                       <label for="password">New Password</label>
                                       <input type="password" class="form-control" id="password" name="password" min='6'>
                                    </div>
                                     <div class="form-group">
                                       <label for="password_confirmation">Re-type Password</label>
                                       <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" min='6'>
                                    </div>
                                    <div class="box-footer">
                                       <button type="submit" class="btn btn-primary">Xác nhận</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="modal-footer">
                              <button class="btn btn-default" data-dismiss="modal" type="button">
                              Close
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
        </div>
        </div>
@endsection
