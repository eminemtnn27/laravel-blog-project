@extends('front.layouts.master')
@section('content')

@include('front.widgets.sliderWidget')

<!-- main content start -->
<div class="mainwrap blog home sidebar default">
<div class="main clearfix">
<div class="pad"></div>			
<div class="content blog">
    <div class="blogpostcategory">
        @foreach($articles as $article)
    <div class="topBlog">	
        <div class="blog-category"><em><a href="{{route('category',[$article->getCategory->slug])}}" >{{$article->getCategory->name}}</a></em> </div>
        <h2 class="title"><a href="{{route('single',[$article->getCategory->slug,$article->slug])}}" rel="bookmark" title="{{$article->title}}">{{$article->title}}</a></h2>
            <div class = "post-meta">
            <a class="post-meta-time" href="">{{$article->updated_at}}</a> <a class="post-meta-author" href="">by Elemekleri</a> <a  > </a>		
            </div>
             <!-- end of post meta -->
    </div>					
        <a class="overdefultlink" href="">
        <div class="overdefult">
        </div>
        </a>
        <div class="blogimage">	
            <div class="loading"></div>		
            <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}" rel="bookmark" title="{{$article->title}}"><img width="800" height="400" src="{{$article->image}}" class="attachment-everly-postBlock size-everly-postBlock wp-post-image" alt="" loading="lazy" /></a>
        </div>					
    <div class="entry">
    <div class = "meta">		
    <div class="blogContent">
    <div class="blogcontent"><p> {{\Illuminate\Support\Str::limit($article->content,300)}}</p>
    <div class="everly-read-more"><a class="more-link" @if(Request::segment(2)!=$article->slug)  active  href="{{route('single',[$article->getCategory->slug,$article->slug])}}" @endif>Okumaya Devam</a></div>
    </div>						
    <div class="bottomBlog">					
        <div class="blog_social"> Paylaş: <div class="addthis_toolbox"><div class="custom_images"><a class="addthis_button_facebook" addthis:url="" addthis:title="Vintage Dinner Reservation" ><i class="fa fa-facebook"></i></a><a class="addthis_button_twitter" addthis:url="" addthis:title="Vintage Dinner Reservation"><i class="fa fa-twitter"></i></a><a class="addthis_button_pinterest_share" addthis:url="https://everly.premiumcoding.com/2014/06/06/vintage-dinner-renovation/" addthis:title="Vintage Dinner Reservation"><i class="fa fa-pinterest"></i></a><a class="addthis_button_google_plusone_share" addthis:url="https://everly.premiumcoding.com/2014/06/06/vintage-dinner-renovation/" g:plusone:count="false" addthis:title="Vintage Dinner Reservation"><i class="fa fa-google-plus"></i></a><a class="addthis_button_stumbleupon" addthis:url="https://everly.premiumcoding.com/2014/06/06/vintage-dinner-renovation/" addthis:title="Vintage Dinner Reservation"><i class="fa fa-stumbleupon"></i></a></div><script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js"></script></div></div>
                             <!-- end of socials -->
              <div class="blog_time_read">
                Okunma sayısı:<b>{{ $article->hit}}				</div>
    </div> 
    </div>
    </div>		
    </div>  @endforeach
    <div class="wp-pagenavi">{!!$articles->links()!!}
    </div>
    </div>

</div>
<!-- sidebar -->
@include('front.layouts.sidebar')

</div>

</div>	


        
        </div>
    </div> 







@endsection