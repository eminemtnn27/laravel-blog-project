@if(count($articles)>0)
@foreach($articles as $article)

  <div class="content blog" >
<div class="topBlog" >	
  <div class="blog-category" ><em ><a href="{{route('category',[$article->getCategory->slug])}}" ><p class="post-meta">Kategori: {{$article->getCategory->name}}</a></p></em> </div>
  <h2 class="title"><a href="{{route('single',[$article->getCategory->slug,$article->slug])}}" rel="bookmark" title="{{$article->title}}">{{$article->title}}</a></h2>
      <div class = "post-meta">
      <a class="post-meta-time" >   </a> <a class="post-meta-author" >by Elemekleri</a> <a  ><span class="float-right"> {{ $article->created_at ->diffForHumans()}}</span></a>		
      </div>
       <!-- end of post meta -->
</div>					
  <a class="overdefultlink"  >
  <div class="overdefult">
  </div>
  </a>
  <div class="blogimage">	
      <div class="loading"></div>		
      <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}" rel="bookmark" title="{{$article->title}}"></a>
  </div>					
<div class="entry">
<div class = "meta">		
<div class="blogContent">
<div class="blogcontent"><p>{!!  Str::limit($article->content,300)!!}</p>
<div class="everly-read-more"><a class="more-link" @if(Request::segment(2)!=$article->slug)  active  href="{{route('single',[$article->getCategory->slug,$article->slug])}}" @endif>Okumaya Devam</a></div>
</div>						
<div class="bottomBlog">					 <div class="blog_time_read">
  Okunma sayısı:<b>{{ $article->hit}}				</div>
                       <!-- end of socials -->
       
</div> 
</div> 
</div>
</div> 
</div> 
</div>		
</div>		
 
        @if(!$loop->last)
        <hr>
        @endif
        @endforeach 
        <div class="col-md-12" align="center">
{{ $articles->links() }}
      </div>
      @else
        <div class="alert alert-danger">
            <h1>Bu Kategoriye Ait Yazı Bulunamadı.</h1>
       </div>
@endif
