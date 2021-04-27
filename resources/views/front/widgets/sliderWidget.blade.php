@isset($articles)

<div class="sidebars-wrap top">
  <div class="sidebars">
      <div class="sidebar-left-right" >
        </a>
          <div class="left-sidebar">
              </div>
          <div class="right-sidebar">
              </div>
      </div>					
      <div class="sidebar-fullwidth">
      </div>				
  </div>
</div>
<div id="everly-slider-wrapper" > 
  
    <div id="everly-slider"  >
      @foreach($articles as $article)	
      @if($loop->last)
      <p class="rs-p-wp-fix "></p>
        <rs-module-wrap  id="rev_slider_1_1_wrapper" data-source="post" style="background:#111111;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:1180;">
          <rs-module id="rev_slider_1_1" style="" data-version="6.3.5">
            <rs-slides>    
              <rs-slide   data-key="rs-6195" data-title="" data-thumb="" data-anim="ei:d;eo:d;s:d;t:fade;sl:d;" data-firstanim="t:fade;s:1500;sl:7;" data-p1="Editor&#039;s choice, Int">
                <img src="{{$article['image']}}" title="amory7" width="1200" height="800" data-lazyload="" class="rev-slidebg" data-no-retina="">
                --><rs-layer id="{{$article->id}}" class="tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:c;y:c;" data-text="w:normal;fw:700;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_0="tp:600;" data-frame_1="tp:600;st:1000;sp:1500;" data-frame_999="o:0;tp:600;st:w;sp:1000;" style="z-index:5;background-color:rgba(0,0,0,0.50);"> 
                </rs-layer><!--
                --><rs-layer  id="slider-1-slide-6195-layer-1"  class="Newspaper-Title" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:150px;y:193px;" data-text="w:normal;s:30;l:55;fw:700;" data-dim="w:600px;" data-padding="b:10;" data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:1000;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="st:w;sp:1000;auto:true;" data-frame_999_mask="u:t;" style="z-index:6;font-family:Lora;letter-spacing:3px;font-style:italic;">{{$article->title}} 
                </rs-layer><!--
                --><rs-layer id="slider-1-slide-6195-layer-2" class="Newspaper-Subtitle" data-type="text" data-color="rgba(187,187,187,1)" data-rsp_ch="on" data-xy="x:150px;y:181px;" data-text="s:14;l:20;fw:700;" data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:1000;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="st:w;sp:1000;auto:true;" data-frame_999_mask="u:t;" style="z-index:7;font-family:Karla;text-transform:uppercase;letter-spacing:3px;">{{$article->created_at}}
                </rs-layer><!--
                --><a id="slider-1-slide-6195-layer-5" class="rs-layer Newspaper-Button rev-btn " @if(Request::segment(2)!=$article->slug)  active  href="{{ route('category',$article->slug) }}" @endif target="_self" data-type="button" data-color="rgba(255,255,255,1)" data-xy="x:151px;y:280px;" data-text="s:13;l:17;fw:700;" data-rsp_bd="off" data-padding="t:12;r:35;b:12;l:35;" data-border="bor:20px,20px,20px,20px;" data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:1000;sp:1500;" data-frame_1_mask="u:t;" data-frame_999="st:w;sp:1000;auto:true;" data-frame_999_mask="u:t;" data-frame_hover="bgc:rgba(197,161,121,0.70);bor:20px,20px,20px,20px;bos:solid;bow:0px,0px,0px,0px;oX:50;oY:50;e:power1.inOut;" style="z-index:8;background-color:rgba(197,161,121,1);font-family:Karla;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:3px;<br/>">DEVAMINI OKU 
                </a><!--
  -->					
  
  @endif
  @endforeach	</rs-slide>
            </rs-slides> 
           </rs-module> 
           
          <script type="text/javascript">
            setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1024,778,480],el:[],gw:[1180],gh:[500],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
            var	revapi1,
              tpj;
            function revinit_revslider11() {
            jQuery(function() {
              tpj = jQuery;
              revapi1 = tpj("#rev_slider_1_1");
              if(revapi1==undefined || revapi1.revolution == undefined){
                revslider_showDoubleJqueryError("rev_slider_1_1");
              }else{
                revapi1.revolution({
                  visibilityLevels:"1240,1024,778,480",
                  gridwidth:1180,
                  gridheight:500,
                  lazyType:"smart",
                  perspectiveType:"local",
                  responsiveLevels:"1240,1024,778,480",
                  progressBar: {
                    color:"rgba(0,0,0,0.15)",
                    vertical:"top",
                    size:5
                  },
                  navigation: {
                    mouseScrollNavigation:false,
                    onHoverStop:false,
                    touch: {
                      touchenabled:true,
                      swipe_min_touches:50
                    },
                    arrows: {
                      enable:true,
                      style:"uranus",
                      left: {
                        h_offset:30
                      },
                      right: {
                        h_offset:30
                      }
                    }
                  },
                  fallbacks: {
                    allowHTML5AutoPlayOnAndroid:true
                  },
                });
              }
              
            });
            } // End of RevInitScript
          var once_revslider11 = false;
          if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11 ) { once_revslider11 = true; revinit_revslider11();}});} else {once_revslider11 = true; revinit_revslider11();}
          </script>
          <script>
            var htmlDivCss = unescape("%23rev_slider_1_1_wrapper%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1_wrapper%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1_wrapper%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A");
            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
            if(htmlDiv) {
              htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            }else{
              var htmlDiv = document.createElement('div');
              htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
              document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
            }
          </script>
          <script>
            var htmlDivCss = unescape("%0A");
            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
            if(htmlDiv) {
              htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            }else{
              var htmlDiv = document.createElement('div');
              htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
              document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
            }
          </script>
        </rs-module-wrap>
        <!-- END REVOLUTION SLIDER -->
                  </div>
                </div> 
            
              </header>	
              <div class="sidebars-wrap top">
          <div class="sidebars"  >
          <div class="sidebar-left-right" >
          <div class="left-sidebar" >
                                          </div>
          <div class="right-sidebar">
                                          </div>
          </div>					
          <div class="sidebar-fullwidth">
                                  </div>				
          </div>
          </div>      
@endisset
