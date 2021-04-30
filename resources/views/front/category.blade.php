@extends('front.layouts.master') <!--seçilen  kategoriye ait yazılar listeleniyor -->
@section('content')
    <div class="blogpostcategory" >
      @include('front.widgets.articleList') 
    </div> 
@endsection

