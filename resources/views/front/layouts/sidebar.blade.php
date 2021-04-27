
<div class="sidebar">	
    <div class="widget widget_text"><h3>Hakkımda</h3><div class="widget-line"></div>			<div class="textwidget"><img src="{{asset('front/')}}/minimal/wp-content/uploads/2016/05/avatar1-1.jpg" alt="image">
Merhaba, ben Eda <b>.</b> Gaziantep'te yaşayan bir blog yazarıyım. Burası el işleriyle ilgili yazılar paylaştığım blog. Yeni yazıları kaçırmayın.</div>
</div><div class="widget socials"><h3>Bizi takip et</h3><div class="widget-line"></div>		<div class="widgett">		
<div class="social_icons">
<a target="_blank" href="http://twitter.com/Elemekleri" title="Twitter"><i class="fa fa-twitter"></i></a><a target="_blank" href="facebook.com/Elemekleri" title="Facebook"><i class="fa fa-facebook"></i></a><a target="_blank" href="dribble.com/Elemekleri" title="Dribbble"><i class="fa fa-dribbble"></i></a><a target="_blank" href="flickr.com/Elemekleri" title="Flickr"><i class="fa fa-flickr"></i></a><a target="_blank" href="http://www.pinterest.com/Elemekleri" title="Pinterest"><i class="fa fa-pinterest"></i></a>			</div>
</div>	
</div>
<div class="widget category_posts"><h3>Popüler Yazılar</h3><div class="widget-line"></div>	
@foreach($articles as $popular)	
@if($popular->hit >5)
<div class="widgett">		
    
<div class="imgholder">
<a href="{{route('single',[$popular->getCategory->slug,$popular->slug])}}" rel="bookmark" title="{{$popular->slug}}">
<img src="{{$popular->image}}" alt="{{$popular->title}}" width="285" height="155"> 	
</a>
</div>
<div class="wttitle"><h4><a href="{{route('single',[$popular->getCategory->slug,$popular->slug])}}" rel="bookmark" title="{{$popular->slug}}">{{$popular->title}}</a></h4></div>
<div class="widget-date">{{$popular->created_at->format('d,y')}}</div>
</div>	@endif
@endforeach
</div>
<div class="widget recent_posts"><h3>Son Yazılar</h3><div class="widget-line"></div>	
@foreach($articles as $recent)	
@if($loop->last)
<div class="widgett">		
<div class="imgholder">
<a href="{{route('single',[$recent->getCategory->slug,$recent->slug])}}" rel="bookmark" title="{{$recent->slug}}">
<img src="{{$recent->image}}" alt="{{$recent->title}}" width="285" height="155"> 	
</a>
</div>
<div class="wttitle"><h4><a href="{{route('single',[$recent->getCategory->slug,$recent->slug])}}" rel="bookmark" title="{{$recent->slug}}">{{$recent->title}}</a></h4></div>
<div class="widget-date">{{$recent->created_at->format('d,m')}}</div>
</div>	
@endif
@endforeach
</div>
@include('front.widgets.categoryWidget')

<div class="widget widget_wysija"><h3>Bültenimize Kaydol</h3><div class="widget-line">
    </div><div class="widget_wysija_cont"><div id="msg-form-wysija-3" class="wysija-msg ajax"></div>
    
        @if (\Session::has('success'))
          <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
          </div><br />
         @endif
         @if (\Session::has('failure'))
          <div class="alert alert-danger">
            <p>{{ \Session::get('failure') }}</p>
          </div><br />
         @endif
    <form  method="post" action="{{url('newsletter')}}" >
        @csrf
    Güncellemeleri almak için kaydolun ve Elemekleri Blog'undaki yenilikleri görmek için abonemize katılın!
<p class="wysija-paragraph">        
<input type="text" name="email"  title="Email" placeholder="Email" value="">
<span class="abs-req">
<input type="text" name="emaill"  value="">
</span>
</p>
<input class="btn btn-success" type="submit" value="Abone ol!">
<input type="hidden" name="form_id" value="1">
<input type="hidden" name="action" value="save">
<input type="hidden" name="controller" value="subscribers">
<input type="hidden" value="1" name="wysija-page">
<input type="hidden" name="wysija[user_list][list_ids]" value="1">
</form></div></div>

<div class="widget widget_tag_cloud"><h3>Etiket Bulutu</h3><div class="widget-line"></div>

<div class="tagcloud">
    @foreach($articles as $tag)
    <a @if(Request::segment(2)!=$tag->slug)  active  href="{{$tag->tag}}" @endif  style="font-size: 8pt;" >{{$tag->tag}}</a>
    @endforeach
</div>


</div>

<div class="widget category_select_slider_posts"><h3>Post Kaydırıcı</h3>
    <div class="widget-line"></div>		
    <div class="category_select_slider_posts-widget-2" style="float:left;">
<script>

</script>		
<ul class="bxslider-category_select_slider_posts-widget-2">	@foreach($articles as $article)		
<li>
<div class="widgett">
    	  
<div class="imgholder">
<a href="{{route('single',[$article->getCategory->slug,$article->slug])}}" rel="bookmark" title="{{$article->title}}">
<img width="220" height="150" src="{{$article->image}}" class="attachment-everly-widget size-everly-widget wp-post-image" alt="" loading="lazy">		
</a>
</div>
<div class="wttitle"><h4><a href="{{route('single',[$article->getCategory->slug,$article->slug])}}" rel="bookmark" title="{{$article->title}}">{{$article->title}}</a></h4></div>
        @endforeach</div>	
</li>

</ul>
</div>
</div>	</div>
