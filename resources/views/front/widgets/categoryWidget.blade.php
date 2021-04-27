@isset($categories) <!-- eğer categories diye bir değişken varsa göster --><!-- kategoriler listeleniyor -->
<div class="widget widget_categories"><h3>Kategoriler</h3>
    <div class="widget-line">
    <ul>   @foreach($categories as $category)
        <li class="cat-item cat-item  @if(Request::segment(2)==$category->slug)  active @endif ">
        <a @if(Request::segment(2)!=$category->slug)  active  href="{{ route('category',$category->slug) }}" @endif>{{ $category->name }}</a>
         <span class="badge bg-danger float-right text-white">({{$category->articleCount()}})</span>
</li>
    @endforeach
</ul>
</div>
</div>


    @endif


    


