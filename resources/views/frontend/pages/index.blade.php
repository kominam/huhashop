@extends('layouts.desktop')
@section('content')
  @include('frontend._references.slide')
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
<script src="{{url('frontend/js/jquery.vide.min.js')}}"></script>
@include('frontend._references.index.offer')
@include('frontend._references.index.prefix_category')
@include('frontend._references.index.index_carousel')
@include('frontend._references.index.hot')
@include('frontend._references.modal_product')
 <!-- product -->
@endsection
