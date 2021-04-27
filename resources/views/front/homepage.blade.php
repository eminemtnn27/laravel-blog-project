@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')
   <div class="col-md-9 mx-auto">
@include('front.layouts.home')
</div>
@include('front.layouts.sidebar')
<!--include('front.widgets.categoryWidget')-->
 
   @endsection

