<footer>
  <div class="block3">
<a href="http://instagram.com/amorypmc" target="_blank"></a>
</div>
<div id="footerbwrap">
<div id="footerb">
<div class="lowerfooter">
<div class="copyright">	
  <div class="center" >Copyright © {{date('Y')}} ELEMEKLERİ Tüm hakları Saklıdır.</div>
</div>
</div>
</div>
</div>	
</footer>	
<!-- Instagram Feed JS -->
<script type="text/javascript">
var sbiajaxurl = "https://everly.premiumcoding.com/wp-admin/admin-ajax.php";
</script>
<link href="https://fonts.googleapis.com/css?family=Lora:700%2C400%7CKarla:700" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

<script type="text/javascript">
if(typeof revslider_showDoubleJqueryError === "undefined") {
function revslider_showDoubleJqueryError(sliderID) {
  var err = "<div class='rs_error_message_box'>";
  err += "<div class='rs_error_message_oops'>Oops...</div>";
  err += "<div class='rs_error_message_content'>";
  err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
  err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
  err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
  err += "</div>";
err += "</div>";
  var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
}
}
</script>
<link rel='stylesheet' id='su-shortcodes-css'  href='{{asset('front/')}}/wp-content/plugins/shortcodes-ultimate/includes/css/shortcodes.css?ver=5.9.6' type='text/css' media='all' />
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/everly.premiumcoding.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.3.2' id='contact-form-7-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/everly/js/jquery.fitvids.js?ver=1' id='fitvids-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/everly/js/retina.min.js?ver=1' id='retina-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/everly/js/custom.js?ver=1' id='everly_customjs-js'></script>
<script type='text/javascript' id='everly_customjs-js-after'>

"use strict"; 
jQuery(document).ready(function($){	
jQuery(".searchform #s").attr("value","Search and hit enter...");	
jQuery(".searchform #s").focus(function() {
  jQuery(".searchform #s").val("");
});

jQuery(".searchform #s").focusout(function() {
  if(jQuery(".searchform #s").attr("value") == "")
    jQuery(".searchform #s").attr("value","Search and hit enter...");
});		
  
});	


</script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/everly/js/jquery.prettyPhoto.js?ver=1' id='jquery.prettyPhoto-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/everly/js/jquery.easing.1.3.js?ver=1' id='jquery.easing-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/everly/js/jquery.cycle.all.min.js?ver=1' id='jquery.cycle.all.min-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/everly/js/gistfile_pmc.js?ver=1' id='istfile_pmc-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/themes/everly/js/pmc_infinity.js?ver=1' id='pmc_infinity-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/jquery/ui/tabs.min.js?ver=1.12.1' id='jquery-ui-tabs-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-includes/js/wp-embed.min.js?ver=5.6' id='wp-embed-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-en.js?ver=2.14' id='wysija-validator-lang-js'></script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.14' id='wysija-validator-js'></script>
<script type='text/javascript' id='wysija-front-subscribers-js-extra'>
/* <![CDATA[ */
var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"https:\/\/everly.premiumcoding.com\/wp-admin\/admin-ajax.php","loadingTrans":"Loading...","is_rtl":""};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.14' id='wysija-front-subscribers-js'></script>
<script type='text/javascript' id='sb_instagram_scripts-js-extra'>
/* <![CDATA[ */
var sb_instagram_js_options = {"font_method":"svg","resized_url":"https:\/\/everly.premiumcoding.com\/wp-content\/uploads\/sb-instagram-feed-images\/","placeholder":"https:\/\/everly.premiumcoding.com\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png"};
/* ]]> */
</script>
<script type='text/javascript' src='{{asset('front/')}}/wp-content/plugins/instagram-feed/js/sbi-scripts.min.js?ver=2.6.2' id='sb_instagram_scripts-js'></script>
</body>
</html>
