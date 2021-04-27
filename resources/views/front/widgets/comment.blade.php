@isset($articles)
	<div class="post-comments-title">
	  <h4 class="post-comments">Bir Yorum Yap</h4>
	</div>
	  <div id="respond" class="comment-respond" align="center">
		<h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.htm#respond" style="display:none;">İptal Et</a></small></h3><form action="{{route('comment.post')}} " method="post" id="commentform" class="comment-form">
		   @csrf<div class="commentfield"><br><input id="author" style="width:800px; height:30px;" placeholder="Adınız Soyadınız(*)"  name="name" required type="text" value="" tabindex="1"></div>
	<div class="commentfield"><br><input id="email" style="width:800px; height:30px;" placeholder="Email Adresiniz(*)"  name="email" required type="text" value="" tabindex="2"></div>
	<div><textarea id="comment" name="comment"  style="width:800px; height:200px;" placeholder="Mesajınız" name="message"  ></textarea></div>
	<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Yorumu Gönder"> <input type='hidden' name='comment_post_ID' value='2501' id='comment_post_ID'>
	<input type='hidden' name='comment_parent' id='comment_parent' value='0'>
	</p></form>	</div><!-- #respond -->
	  </div>	
	  
<ol class="commentlist">	
<div class="titleborderOut">
  <div class="titleborder"></div>
</div>
<div class="post-comments-title">
  <h4 class="post-comments" id="comments">Yorumlar</h4>	
</div>
   <li class="comment even thread-even depth-1" id="li-comment-10">
 
<ul class="children">
 <li class="comment odd alt depth-2" id="li-comment-11">
<div class="specificComment" id="comment-11">
<div class="blogAuthor">
  <a href="../../../../author/admin-polka/index.htm"><img src="../../../../wp-content/uploads/2016/07/avatar2-1-150x150.jpg" width="100" height="100" alt="Avatar" class="avatar avatar-100wp-user-avatar wp-user-avatar-100 alignnone photo avatar-default"></a>
</div>
<div class="right-part">
  <div class="comment-meta">
	<span class="authorBlogName">	
	  Amory  
	</span>
	<span class="commentsDate"> December 3, 2014 at 6:23 pm				<a rel='nofollow' class='comment-reply-link' href='index-2.htm?replytocom=11#respond' data-commentid="11" data-postid="2501" data-belowelement="comment-11" data-respondelement="respond" data-replyto="Reply to Amory" aria-label='Reply to Amory'>Cevapla</a>			</span>	
  </div>
  <div class="commenttext"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh classica ed euismod tincidunt ut laoreet dolore magna vertolori. Claritas est etiam.</p>
</div>
</div>
</div>
<ul class="children">
 <li class="comment even depth-3" id="li-comment-14">
<div class="specificComment" id="comment-14">
<div class="blogAuthor">
  <a href="../../../../author/admin-polka/index.htm"><img src="../../../../wp-content/uploads/2016/07/avatar2-1-150x150.jpg" width="100" height="100" alt="Avatar" class="avatar avatar-100wp-user-avatar wp-user-avatar-100 alignnone photo avatar-default"></a>
</div>
<div class="right-part">
  <div class="comment-meta">
	<span class="authorBlogName">	
	  Amory  
	</span>
	<span class="commentsDate"> December 3, 2014 at 6:24 pm				<a rel='nofollow' class='comment-reply-link' href='index-3.htm?replytocom=14#respond' data-commentid="14" data-postid="2501" data-belowelement="comment-14" data-respondelement="respond" data-replyto="Reply to Amory" aria-label='Reply to Amory'>Reply</a>			</span>	
  </div>
  
  <div class="commenttext"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh classica ed euismod tincidunt ut laoreet dolore magna vertolori.</p>
</div>
</div> 
</div>
</li><!-- #comment-## -->
</ul><!-- .children -->
</li><!-- #comment-## -->
</ul><!-- .children -->
</li> 
 
</ol>
<div class="commentnav">
  <div class="alignleft"></div>
  <div class="alignright"></div>
</div>
<div id="commentform">
<div class="titleborderOut">
  <div class="titleborder"></div>
</div>

   <!-- end of post navigation -->
  </div>	
</div>
</div>
@endif