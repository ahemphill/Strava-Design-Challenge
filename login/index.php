<!DOCTYPE html>
<html lang="en-US" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns="http://www.w3.org/TR/html5" class=" js no-touch history draganddrop localstorage svg fullscreen"><script>FB={api:function(){},ui:function(){},Event:{subscribe:function(){}},UIServer:{},XFBML:{parse:function(){}},init:function(){},__noSuchMethod__:function(){}};</script><script id="facebook-jssdk" async="" src="//connect.facebook.net/en_US/all.js"></script><script>var mpq={track:function(a,b,c){if(typeof c=='function'){window.setTimeout(c,50);}},init:function(){},track_links:function(){},track_forms:function(){}};</script><script>var urchinTracker=function(){},_gaq={push:function(){try {if(arguments[0][0]=='_link')window.location.href=arguments[0][1]}catch(er){}}},_gat={_createTracker:function(){}, _getTracker:function(){return{__noSuchMethod__:function(){},_link:function(o){if(o)location.href=o;},_linkByPost:function(){return true;},_getLinkerUrl:function(o){return o;},_trackEvent:function(){}}}};</script><head>
<meta charset="UTF-8">
<meta content="i-043db657" name="instance_id">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="width = device-width, initial-scale = 1, maximum-scale = 1, user-scalable = yes" name="viewport">
<title>Log In | Strava</title>

<style type="text/css">
.spinner, .spinner .status {
  position: relative; }

.spinner {
  margin-top: 1em;
  margin-bottom: 1em; }
  .spinner .status {
    top: 2px;
    margin-left: 0.5em; }
  .spinner.lg .graphic {
    border-width: 3px;
    height: 32px;
    width: 32px; }
  .spinner.tiny {
    height: 10px;
    width: 10px; }
  .spinner.centered, .spinner.vcentered {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%; }
  .spinner.vcentered {
    left: 0;
    margin-top: -12px;
    position: absolute;
    right: 0;
    text-align: center;
    top: 50%; }

.spinner .graphic, .ajax-loading-image {
  animation: spin 1.2s infinite linear;
  -webkit-animation: spin 1.2s infinite linear;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  border-color: #eeeeee;
  border-radius: 50%;
  border-style: solid;
  border-top-color: #666666;
  border-top-style: solid;
  border-width: 2px;
  content: "";
  display: inline-block;
  height: 20px;
  position: relative;
  vertical-align: middle;
  width: 20px; }

@-webkit-keyframes spin {
  from {
    -webkit-transform: rotate(0deg); }

  to {
    -webkit-transform: rotate(359deg); } }

@keyframes spin {
  from {
    transform: rotate(0deg); }

  to {
    transform: rotate(359deg); } }
</style>

<link href="https://d3nn82uaxijpm6.cloudfront.net/assets/favicon-3578624dbca1eda01ff67d8723f17d5e.ico" rel="icon" type="image/x-icon">
<link href="https://d3nn82uaxijpm6.cloudfront.net/assets/application-66a475bb5321e29e2cbec4a7c50fbc0f.css" media="screen" rel="stylesheet" type="text/css">
<!--[if lte IE 9]>
<link href="https://d3nn82uaxijpm6.cloudfront.net/assets/application-ie-aeee3400cd33aa535edc22bb17531665.css" media="screen" rel="stylesheet" type="text/css" />
<![endif]-->
<!-- / Add Optimizely initialization code in the `before_optimizely` block. -->



<link href="/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
<link href="/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
<link href="/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
<meta content="authenticity_token" name="csrf-param">
<meta content="ZKfQnUWzQ2c8LmPqIepZe/mvbCYV2gkx4+s8JEW61O0=" name="csrf-token">
<script>
	document.addEventListener( 'DOMContentLoaded', function() {
		if ( sessionStorage.getItem( 'loggedIn' ) === '1' ) {
			window.location.href = '/discuss';
		}
	});
	function fakeLogin() {
		sessionStorage.setItem( 'loggedIn', '1' );
		window.location.href = '/discuss';
		return false;
	}
</script>
<script type="text/javascript" async="" src="https://cdn.mxpnl.com/libs/mixpanel-2.2.min.js"></script><script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script src="https://d3nn82uaxijpm6.cloudfront.net/assets/strava-head-7550a609ec7e994be4d999a668866b97.js" type="text/javascript"></script><style type="text/css"></style>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-6309847-13']);
_gaq.push(['_setDomainName', '.strava.com']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript">
(function(c,a){window.mixpanel=a;var b,d,h,e;b=c.createElement("script");
b.type="text/javascript";b.async=!0;b.src=("https:"===c.location.protocol?"https:":"http:")+
'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';d=c.getElementsByTagName("script")[0];
d.parentNode.insertBefore(b,d);a._i=[];a.init=function(b,c,f){function d(a,b){
var c=b.split(".");2==c.length&&(a=a[c[0]],b=c[1]);a[b]=function(){a.push([b].concat(
Array.prototype.slice.call(arguments,0)))}}var g=a;"undefined"!==typeof f?g=a[f]=[]:
f="mixpanel";g.people=g.people||[];h=['disable','track','track_pageview','track_links',
'track_forms','register','register_once','unregister','identify','alias','name_tag',
'set_config','people.set','people.increment'];for(e=0;e<h.length;e++)d(g,h[e]);
a._i.push([b,c,f])};a.__SV=1.2;})(document,window.mixpanel||[]);
mixpanel.init("b5c499fb64c50380c0a5c12ae742c3c8");
</script>

</head>
<body class="logged-out fullscreen responsive running-background-1">
<div class="container">
<header>
<!--
deploy: strava-deploy/20140527-1
instance: i-043db657
env: 'ec2'
-->
<!--[if lte IE 8]>
<div class='message warning ie7'>
<p>It looks like you're using a version of Internet Explorer that Strava no longer supports. Please <a href='http://www.microsoft.com/en-us/download/ie.aspx?q=internet+explorer'>upgrade your web browser</a> &mdash; <a href='https://strava.zendesk.com/entries/20420212-Supported-Browsers-on-Strava'>Learn more</a>.</p>
</div>
<![endif]-->
<nav class="nav-bar">
<div class="inner-content">
<div class="branding"><a href="/" class="strava-logo" title="Return to the Strava home page">Strava</a></div>
<ul class="user-nav">
<li class="logged_out_nav"><a href="/register?utm_source=login">Sign Up</a></li>
</ul>

</div>
</nav>


</header>

<div class="page">
<div class="pageContent">
<div class="message page-status-message" style="display:none;">Loading …</div>
<div class="login-panel">
<h1>
Log In
</h1>

<form accept-charset="UTF-8" onsubmit="return fakeLogin();" class="website" id="login_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="ZKfQnUWzQ2c8LmPqIepZe/mvbCYV2gkx4+s8JEW61O0="></div>
<h3 class="marginless">Use any credentials (or none)
</h3>
<input id="plan" name="plan" type="hidden">
<input autofocus="autofocus" id="email" name="email" placeholder="Email Address" type="email" value="">
<input id="password" name="password" placeholder="Password" type="password" value="">
<label>
<input id="remember_me" name="remember_me" type="checkbox" value="on">
<span>Remember me</span>
</label>
<button class="alt" type="submit">Log In</button>
<div class="reset-password"><a href="/account/recover">Forgot your password?</a></div>
</form>

</div>

<div class="clear"></div>
</div>
</div>
<footer><div class="media-sm-show mobile-footer-nav">
<ul>
<li class=""><a href="/tour">Features</a></li>
<li class=""><a href="/how-it-works">How It Works</a></li>
</ul>
<div class="inner-content"><a href="/register/free?utm_source=mobile-footer" class="alt button">Sign Up for Free</a></div>
</div>
<div class="footer-global">
<div class="row">
<div class="spans5">
<a href="/" class="strava-logo lg bw">Strava — Built for Athletes</a>
<div class="copyright">
©2014 Strava, Inc
All rights reserved.
</div>
<div class="newsletter inset" id="mc_embed_signup">
<div class="website-sprite email float-left"></div>
<p class="marginless"><a href="http://news.strava.com/pub/sf/ResponseForm?_ri_=X0Gzc2X%3DWQpglLjHJlYQGiSozf7rCHKdWzeYza4mvRze7JejzaRVXMtX%3DWQpglLjHJlYQGtFnreFzc5lDirSNUvB2Ah6PeNn&amp;_ei_=EuI0cB4lm_XSkQyq89oBRyQ" target="_blank">Sign up for our newsletter and get the latest from Strava.</a></p>
</div>
</div>
<div class="spans2 offset1 nav">
<h4>About</h4>
<ul class="unstyled">
<li><a href="/about">About</a></li>
<li><a href="/how-it-works">How It Works</a></li>
<li><a href="/features">Features</a></li>
<li><a href="/running-app">Mobile</a></li>
<li><a href="/premium?source=footer-upgrade">Premium</a></li>
<li><a href="/plans">Plans</a></li>
</ul>
<ul class="unstyled">
<li><a href="/privacy">Privacy Policy</a></li>
<li><a href="/terms">Terms and Conditions</a></li>
</ul>
</div>
<div class="spans2 nav">
<h4>Follow</h4>
<ul class="unstyled">
<li><a href="http://www.facebook.com/StravaRun" target="_blank">Facebook - Run</a></li>
<li><a href="http://www.facebook.com/Strava" target="_blank">Facebook – Cycling</a></li>
<li><a href="http://twitter.com/strava" target="_blank">Twitter</a></li>
<li><a href="http://www.youtube.com/stravainc" target="_blank">YouTube</a></li>
<li><a href="http://blog.strava.com">Blog</a></li>
</ul>
</div>
<div class="spans2 nav">
<h4>Help</h4>
<ul class="unstyled">
<li><a href="https://strava.zendesk.com/home">Support</a></li>
</ul>
</div>
<div class="spans2 nav">
<h4>More</h4>
<ul class="unstyled">
<li><a href="/register?utm_source=footer">Sign Up</a></li>
<li><a href="https://www.strava.com/login">Log In</a></li>
<li><a href="/shop" class="js-content-shop">Strava Store</a></li>
<li><a href="//blog.strava.com/careers">Careers</a></li>
<li><a href="/developers">Developers</a></li>
<li><a href="/pros">Pros on Strava</a></li>
<li><a href="/stand-with-us">Stand With Us</a></li>
</ul>
</div>
<div class="spans2 nav">
<div class="drop-down-menu drop-down-xs float-right enabled" id="language-picker" tabindex="0">
<div class="selection">Language</div>
<ul class="options">
<li>
<a class="clickable language-pick" language-code="en-GB">British English</a>
</li>
<li>
<a class="clickable language-pick" language-code="de-DE">Deutsch</a>
</li>
<li>
<a class="clickable language-pick" language-code="en-US">English</a>
</li>
<li>
<a class="clickable language-pick" language-code="fr-FR">français</a>
</li>
<li>
<a class="clickable language-pick" language-code="pt-BR">português</a>
</li>
</ul>
</div>

</div>
</div>
</div>
<a href="#" class="media-sm-show" id="back-to-top">Top ↑</a>
</footer>


</div>
<script id="lightbox-template" type="text/template">
<div class='lightbox-window'>
<a class='alt remove' href='#'>&times;</a>
</div>
</script>
<script id="popover-template" type="text/template">
<div class='popover'></div>
</script>
<script type="text/javascript">
  //<![CDATA[
    window._asset_host = "https://d3nn82uaxijpm6.cloudfront.net";
    window._measurement_preference = "meters";
    window._date_preference = "%m/%d/%Y";
    window._datepicker_preference_format = "mm/dd/yy"
  //]]>
</script>


<script src="https://d3nn82uaxijpm6.cloudfront.net/assets/strava/i18n/locales/en-US-0901269cde18f32940d03ab7393d535d.js" type="text/javascript"></script>
<script src="https://d3nn82uaxijpm6.cloudfront.net/assets/application-7ab259f92501bb02f933ac5e41843fcf.js" type="text/javascript"></script>


<div id="fb-root"></div>
<script type="text/javascript">
  //<![CDATA[
    window.fbAsyncInit = function() {
      FB.init({appId: "284597785309", status: true, cookie: true, xfbml: true});
      Strava.Share.Controller.getInstance().facebookReady();
      jQuery('#fb-root').trigger('facebook:init');
    };
    (function(d){
      var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement('script'); js.id = id; js.async = true;
      js.src = "//connect.facebook.net/en_US/all.js";
      ref.parentNode.insertBefore(js, ref);
    }(document));
  //]]>
</script>



<script type="text/javascript">
  //<![CDATA[
    jQuery('document').ready(function() {
      setTimeout(function() {
        jQuery('#face-pile').css('visibility', 'visible');
      }, 300);
    });
    var ua = navigator.userAgent;
    var checker = {
      ios: ua.match(/(iPhone|iPod|iPad)/),
      android: ua.match(/Android/)
    };
    
    var regButton = jQuery('#get-started-button');
    if (checker.android || checker.ios) {
      regUrl = regButton.attr('href');
      if (checker.android) {
        regUrl = 'https://market.android.com/details?id=com.strava';
      } else if (checker.ios) {
        regUrl = 'http://itunes.apple.com/app/strava-cycling/id426826309';
      }
      regButton.attr('href', regUrl).text('Get the App');
    }
    regButton.css('visibility', 'visible');
  //]]>
</script>
<script type="text/javascript">
  //<![CDATA[
    var currentAthlete = new Strava.Models.CurrentAthlete({"logged_in":false});
    HAML.globals = function() {
      return {
        currentAthlete: currentAthlete,
        t: {
          distances: {"400m":"400m","805m":"1/2 mile","1000m":"1k","1500m":"1500 meters","1609m":"1 mile","3000m":"3000 meters","3219m":"2 miles","5000m":"5k","10000m":"10k","15000m":"15k","16090m":"10 miles","20000m":"20k","21097m":"Half-Marathon","30000m":"30k","42195m":"Marathon","50000m":"50k","80467m":"50 miles","100000m":"100k","160934m":"100 miles"},
          invites_dialog: {"email":{"addresses":"Email addresses (separated by commas)","send":"Send Invites","sending":"Sending your email...","sent":"Invite sent!","title":"Email","subtitle":"Invite Message","message_label":"Message","message":"I use Strava to track my activities, create running and cycling routes, and participate in Challenges. I think you should join so we can follow each other's training.\n\n - %{inviter_name}"},"gmail":{"unauthenticated":{"title":"Add Your Contacts","message":"Add contacts from your address book by connecting your Gmail with Strava.","disclaimer":"We will never send out any email messages without your consent.","button":"Add Gmail Contacts"},"title":"Your Contacts","sending":"Sending your email...","invite_instructions":"Click the corresponding \"invite\" button to email the message below to your selected contacts."},"title":"Find and Invite Your Friends"},
          profile: {"activity_summary":"Activity Summary Last 4 Weeks","activity_summary_short":"Last 4 Weeks","activity_type":"Activity Type","all_time":"All-Time","all_time_prs":"All-Time PRs","athlete_stats":"%{athlete_name} Stats","biggest_climb":"Biggest Climb","biggest_ride":"Biggest Ride","comments_received":"Comments Received","distance":"Distance","distance_per_week":"Avg Distance / Week","elev_gain":"Elev Gain","estimated_best_efforts":"Estimated Best Efforts","kudos_received":"Kudos Received","max_effort":"Max Effort","my_stats":"My Stats","pro_activity_summary":"%{athlete_name} Activity Last 4 Weeks","recent_achievements":"Recent Achievements","rides":"Rides","rides_per_week":"Avg Rides / Week","running_types":"Running includes runs, hikes, and walks","runs":"Runs","runs_per_week":"Avg Runs / Week","side_by_side_comparison":"Side by Side Comparison","time":"Time","time_per_week":"Avg Time / Week","total_activities":"Total Activities","ytd":"Year-to-Date"},
          'new': "New"
        },
        formatter: {
          formatTimeShort: Strava.Charts.ChartHelper.formatTimeShort
        },
        renderPartial: function(name, context) {
          if (context == null) {
            context = this;
          }
          return JST[name](context);
        }
      }
    }
  //]]>
</script>


<script type="text/javascript">
  //<![CDATA[
    new Strava.Initializer();
  //]]>
</script>
<script type="text/javascript">
  //<![CDATA[
    // Detect if cookies are enabled and throw an error message if it is disabled
    if (!navigator.cookieEnabled) {
      jQuery('h1').after("<div class='error message'>Please enable browser cookies to log in.</div>");
    };
  //]]>
</script>

<script type="text/javascript">
  //<![CDATA[
    jQuery(document).ready(function() {
      jQuery('.language-pick').each(function(index) {
        jQuery( this ).click(function() {
          language = jQuery( this ).attr('language-code');
          expiration = new Date();
          expiration.setTime(expiration.getTime() + (1825 * 24 * 60 * 60 * 1000));
          // Reset any previously set cookie for this page
          document.cookie = 'ui_language= ; expires=Thu, 01 Jan 1970 00:00:01 GMT;'
          // Set a global cookie
          document.cookie = 'ui_language=' + language + '; expires=' + expiration + '; path=/';
          location.reload(true);
        });
      });
    });
  //]]>
</script>
<script type="text/javascript">
  //<![CDATA[
    jQuery(document).ready(function() {
      new Strava.Util.Mixpanel('upsell', null, { channel: 'footer-links', content: 'shop' }).track_links('.footer-global .js-content-shop');
      jQuery('.js-channel-logged-out-homepage').on('click', '.js-channel-banner-left a', function(event) {
        new Strava.Util.Mixpanel('upsell', null, { channel: 'website-banner-left', content: 'mobile' }).trackWithTimeout(event);
      }).on('click', '.js-channel-banner-left-center a', function(event) {
        new Strava.Util.Mixpanel('upsell', null, { channel: 'website-banner-left-center', content: 'shop' }).trackWithTimeout(event);
      }).on('click', '.js-channel-banner-right-center a', function(event) {
        new Strava.Util.Mixpanel('upsell', null, { channel: 'website-banner-right-center', content: 'challenges' }).trackWithTimeout(event);
      }).on('click', '.js-channel-banner-right a', function(event) {
        new Strava.Util.Mixpanel('upsell', null, { channel: 'website-banner-right', content: 'premium' }).trackWithTimeout(event);
      });
    });
  //]]>
</script>




</body></html>