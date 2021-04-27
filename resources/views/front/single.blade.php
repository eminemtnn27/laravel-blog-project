@extends('front.layouts.master')<!-- seçilen makalenin kendisi geliyor -->
@section('title',$article->title)

@section('content')
  
<div class="content singledefult">
   <div class="postcontent singledefult" id="post-" class="post-4752 post type-post status-publish format-standard has-post-thumbnail hentry category-decoration category-editors-choice tag-interior-design tag-photography-2 tag-plant">		
      <div class="blogpost">		
         <div class="posttext">
            <div class="topBlog">	
               <div class="blog-category"><em><a>{!!$article->getCategory->name!!}</a></em> </div>
               <h1 class="title"><a  rel="bookmark" title="{!!$article->title!!}">{!!$article->title!!}</a></h1>
               <div class="post-meta">
               <a class="post-meta-time"  >{!!$article->created_at->diffForHumans()!!} </a> <a class="post-meta-author" >by Elemekleri</a> <a ></a>				
               </div>
                <!-- end of post meta -->
            </div>									 
   
 <div class="sentry">			 
   {!!$article->content!!}
         <div class="post-page-links"></div>
               <div class="singleBorder"></div>
            </div>
         </div>
         <div class="bottomBlog">					
            <!-- end of socials -->
<div class="blog_time_read">
Okunma sayısı:<b>{{ $article->hit}}				</div>

</div> 
          <!-- end of blog-info -->
         
          <!-- end of author info -->
         
      </div>						
      
   </div>	
  
 
 @endsection