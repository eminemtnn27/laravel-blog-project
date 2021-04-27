@extends('front.layouts.master')
@section('title','iletişim')
@section('content')
<div class="title-holder align-left heading-h2 " align="center"><h3 class='section-title' >Lütfen Bize Yazın</h3></div>
<p align="center">İstek, şikayet ve sorularınızı bize iletin.</p>
<div class=" col-md-8 " align="center">
    @if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
      </ul>
    </div>
    @endif
    <form action="{{route('contact.post')}}" method="post" class="wpcf7-form init" novalidate="novalidate" align="center" data-status="init" >
      @csrf 
      <div class="control-group">
          <div class="form-group f controls">
            <input type="text" class="form-control" value="{{old('name')}}"  style="width:800px; height:30px;" placeholder="Adınız Soyadınız"  name="name" required >
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group controls">
            <input type="email" class="form-control" value="{{old('name')}}"  style="width:800px; height:30px;" placeholder="Email Adresiniz" name="email" required >
            <p class="help-block text-danger"></p>
          </div><div class="control-group"> <div class="form-group col-xs-12 controls" >
          <label  >Konu :</label> <br>
          <select text-align="left" class="form-control" name="topic"  style="width:820px; height:30px;">
            <option @if(old('topic')=="Bilgi") selected @endif>Bilgi</option>
            <option @if(old('topic')=="Destek") selected @endif>Destek</option>
            <option @if(old('topic')=="Genel") selected @endif>Genel</option>
          </select>
        </div><br>
        
         
          </div>
        </div>
          <div class="control-group">
            <div class="form-group  controls">
              <textarea class="form-control" style="width:800px; height:200px;" placeholder="Mesajınız" name="message" >{{old('message')}}</textarea>
            </div>
          </div>
          <br>
    <p><input type="submit" value="Gönder" class="wpcf7-form-control wpcf7-submit"  ></p>
    <div class="wpcf7-response-output" aria-hidden="true"></div></form>
    <div class="top-wrapper" >
      <div class="top-wrapper-content" >
    <div class="top-medium " >
      <div class="widget socials" >		<div class="widgett" >		
<div class="social_icons" > 
<a target="_blank"  href="http://twitter.com/elemekleri" title="Twitter"><i class="fa fa-twitter"></i></a><a target="_blank"  href="https://www.facebook.com/elemekleri" title="Facebook"><i class="fa fa-facebook"></i></a><a target="_blank"  href="https://dribbble.com/elemekleri" title="Dribbble"><i class="fa fa-dribbble"></i></a><a target="_blank"  href="https://www.flickr.com/elemekleri" title="Flickr"><i class="fa fa-flickr"></i></a><a target="_blank"  href="http://www.pinterest.com/elemekleri" title="Pinterest"><i class="fa fa-pinterest"></i></a>			</div>
</div>	
</div>		</div></div>		</div>
@endsection
