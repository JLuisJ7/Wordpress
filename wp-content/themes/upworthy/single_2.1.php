
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="ie ie6 lt-ie10 lt-ie9 lt-ie8 lt-ie7 no-js" lang="en" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie10 lt-ie9 lt-ie8 no-js" lang="en" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie10 lt-ie9 no-js" lang="en" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9 lt-ie10 no-js"lang="en" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>
  <script type="text/javascript">
    if (typeof window.performance === "undefined") {
      window._startTime = +(new Date());
    } else {
      window._startTime = performance.now();
    }
  </script>

  <meta charset="utf-8">
  <!-- Use the .htaccess and remove this line to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-5.newrelic.com","errorBeacon":"bam.nr-data.net","licenseKey":"63497445bb","applicationID":"3835034","transactionName":"IAtfRUdYXVVcExpcFAQDVEVGGEJRVhY=","queueTime":3,"applicationTime":106,"agent":"js-agent.newrelic.com/nr-515.min.js"}</script>
<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(n,t,e){function r(e){if(!t[e]){var o=t[e]={exports:{}};n[e][0].call(o.exports,function(t){var o=n[e][1][t];return r(o?o:t)},o,o.exports)}return t[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({QJf3ax:[function(n,t){function e(n){function t(t,e,a){n&&n(t,e,a),a||(a={});for(var u=c(t),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,e);return s}function a(n,t){f[n]=c(n).concat(t)}function c(n){return f[n]||[]}function u(){return e(t)}var f={};return{on:a,emit:t,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=n("gos");t.exports=e()},{gos:"7eSDFh"}],ee:[function(n,t){t.exports=n("QJf3ax")},{}],gos:[function(n,t){t.exports=n("7eSDFh")},{}],"7eSDFh":[function(n,t){function e(n,t,e){if(r.call(n,t))return n[t];var o=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(n,t,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return n[t]=o,o}var r=Object.prototype.hasOwnProperty;t.exports=e},{}],D5DuLP:[function(n,t){function e(n,t,e){return r.listeners(n).length?r.emit(n,t,e):(o[n]||(o[n]=[]),void o[n].push(t))}var r=n("ee").create(),o={};t.exports=e,e.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(n,t){t.exports=n("D5DuLP")},{}],XL7HBI:[function(n,t){function e(n){var t=typeof n;return!n||"object"!==t&&"function"!==t?-1:n===window?0:i(n,o,function(){return r++})}var r=1,o="nr@id",i=n("gos");t.exports=e},{gos:"7eSDFh"}],id:[function(n,t){t.exports=n("XL7HBI")},{}],loader:[function(n,t){t.exports=n("G9z0Bl")},{}],G9z0Bl:[function(n,t){function e(){var n=v.info=NREUM.info;if(n&&n.licenseKey&&n.applicationID&&f&&f.body){c(d,function(t,e){t in n||(n[t]=e)}),v.proto="https"===l.split(":")[0]||n.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var t=f.createElement("script");t.src=v.proto+n.agent,f.body.appendChild(t)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=n("handle"),c=n(1),u=window,f=u.document,s="addEventListener",p="attachEvent",l=(""+location).split("?")[0],d={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-515.min.js"},v=t.exports={offset:i(),origin:l,features:{}};f[s]?(f[s]("DOMContentLoaded",o,!1),u[s]("load",e,!1)):(f[p]("onreadystatechange",r),u[p]("onload",e)),a("mark",["firstbyte",i()])},{1:11,handle:"D5DuLP"}],11:[function(n,t){function e(n,t){var e=[],o="",i=0;for(o in n)r.call(n,o)&&(e[i]=t(o,n[o]),i+=1);return e}var r=Object.prototype.hasOwnProperty;t.exports=e},{}]},{},["G9z0Bl"]);</script>
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
 <link rel='stylesheet' href='<?php bloginfo('stylesheet_url'); ?>' type='text/css' media='screen' />
  
  <script id="config" type="application/json">
    {
      "environment" : "production",

      "mixpanelId" : "",
      "googleAnalyticsId" : "UA-30098361-1",
      "youtubeChannelId" : "UCswDowOOvJ-fkCgH9YAITjQ",

      "facebookId" : "153163221468956",
      "facebookDomain" : "upworthy.com",

      "siloUri" : "http://analytics.upworthy.com",
      "geoipUri" : "https://www.upworthy.com/api/geo.json",

      "attentionGranularity" : "10",
      "attentionDecay" : "5"
    }
  </script>
  <script id="pageMetadata" type="application/json">
    {
      "environment" : "production",
      "asset_path"  : "/assets/"
    }
  </script>
    <script id="pageType" type="application/json">"nugget"</script>
<script id="nuggetMetadata" type="application/json">
  {
    "id"          : "54d992bf353864000c2a0000",
    "baseUrl"     : "<?php  ?>",
    "slug"        : "a-2-minute-story-about-why-we-need-to-send-more-dogs-to-prison-for-a-really-good-reason-lw2-7b",
    "status"      : "testing",
    "author"      : "Lori White",
    "gplusId"     : "+LoriWhite",
    "pubDate"     : "",
    "format"      : "multi-item",
    "topics"      : ["environment", "guns-crime"],
    "campaign"    : "",
    "sponsorId"   : "",
    "sponsorSlug" : "",
    "promoted"    : "false",
    "dfp"         : "false",
    "surveyChance": "0",
    "simplereach" : "false"
  }
</script>


  <!-- Disable no-js styles if javascript is turned on. http://paulirish.com/2009/avoiding-the-fouc-v3/ -->
  <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>

    <title><?php wp_title(""); ?></title>

    <meta name="description" content="Things that matter. Pass &#39;em on. ">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <link href="/favicon.ico" rel="shortcut icon" type="image/ico" />
  <link href="/favicon.ico" rel="icon" type="image/ico" />
  <link rel="apple-touch-icon" href="/assets/apple-touch-icon-420956631c8679031243d6ef7dcfb3ee.png"/>
  <link rel="alternate" type="application/rss+xml" title="Upworthy (RSS2.0)" href="http://feeds.feedburner.com/upworthy"/>
  <link rel="publisher" href="https://plus.google.com/103863989923615589024">

      <link rel="canonical" href="http://www.upworthy.com/a-2-minute-story-about-why-we-need-to-send-more-dogs-to-prison-for-a-really-good-reason-lw2-7b">
  <link rel="author" href="https://plus.google.com/+LoriWhite">
  <meta property="og:title" content="<?php the_title(); ?>">
  <meta property="og:description" content="Things that matter. Pass &#39;em on. ">
  <meta property="og:url" content="http://www.upworthy.com/a-2-minute-story-about-why-we-need-to-send-more-dogs-to-prison-for-a-really-good-reason-lw2-7b">
  <meta property="og:image" content="http://upw-prod-images.global.ssl.fastly.net/nugget/54d9966e39383800283b0000/facebook_1200_cage-fde2b9c20b25d05c7f7ec67701650135.jpg">
  <meta property="og:site_name" content="Upworthy">
  <meta property="og:type" content="article">
  <meta property="article:publisher" content="https://www.facebook.com/Upworthy">
  <meta property="article:author" content="https://www.facebook.com/lolololori">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@Upworthy">
  <meta name="twitter:creator" content="@lolololori">
  <meta name="twitter:url" content="http://www.upworthy.com/a-2-minute-story-about-why-we-need-to-send-more-dogs-to-prison-for-a-really-good-reason-lw2-7b">
  <meta name="twitter:title" content="A 2 Minute Story About Why We Need To Send More Dogs To Prison For A Really Good Reason">
  <meta name="twitter:description" content="Things that matter. Pass &#39;em on. ">
  <meta name="twitter:image:src" content="http://upw-prod-images.global.ssl.fastly.net/nugget/54d9966e39383800283b0000/twitter_880_cage-fde2b9c20b25d05c7f7ec67701650135.jpg" />
  <meta name='parsely-page' content='{"title":"A 2 Minute Story About Why We Need To Send More Dogs To Prison For A Really Good Reason","link":"http://www.upworthy.com/54d992bf353864000c2a0000","image_url":"//upw-prod-images.global.ssl.fastly.net/nugget/54d9966e39383800283b0000/cage-fde2b9c20b25d05c7f7ec67701650135.jpg","type":"post","post_id":"54d992bf353864000c2a0000","pub_date":"2015-02-11T23:26:07Z","section":"animals","author":"Lori White","tags":["animals", "guns-violence-cops-prisons", "environment", "guns-crime", "multi-item", "inspiring"]}'>

    <meta property='fb:admins' content='12800023' />
    <meta property='fb:admins' content='3904222' />
    <meta property='fb:admins' content='3616674' />
    <meta property='fb:admins' content='1342020065' />
    <meta property='fb:admins' content='717159202' />
    <meta property='fb:admins' content='707140716' />
    <meta property='fb:admins' content='14702274' />
    <meta property='fb:admins' content='13806670' />
  <meta property="fb:app_id" content="153163221468956">

  <script type="text/javascript" src="https://www.upworthy.com/api/geo.js"></script>
  <script src="/assets/ads/ads-b3e6932d2d82fc37bc2faede8ac52d54.js"></script>
  <!-- DFP -->
  <script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>


<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/47017164/RecommendedContentNuggetPreview', [360, 324], 'div-gpt-ad-14236971673810-71').setCollapseEmptyDiv(true).setTargeting('page_type', 'recommended_content').addService(googletag.pubads());

googletag.pubads().setTargeting('nugget', '54d992bf353864000c2a0000');

googletag.pubads().addEventListener('slotRenderEnded', function(event) {
  $(window).trigger('resize');
  $('.dfp-show-after-render').each(function() {
    var $container = $(this)
    /* Make sure the ad is not collapsed */
    if ($container.find($container.data('element-with-ad')).css('display') !== 'none') {
      var $hide = $($(this).data('hide-after-render'));
      $container.hide();
      $hide.hide();
      $container.fadeIn(1000);
    }
  });
  $('.dfp-preserve-ratio-slot').each(function() {
    var $ad = $(this).find('iframe');
    var ratio = $ad.height() / $ad.width();
    $container = $(this).closest('div');
    $container.css({'position':'relative', 'padding-bottom': (ratio * 100) + '%'});
  });
  $('.dfp-responsive-width-slot').each(function() {
    var $ad = $(this).find('iframe');
    $ad.attr({'width': '100%'})
  });
  $('.dfp-responsive-height-slot').each(function() {
    var $ad = $(this).find('iframe');
    $ad.attr({'height': '100%'}).css({'position':'absolute', 'top':'0', 'left': '0'});
  });
  $('.dfp-responsive-slot').each(function() {
    var $ad = $(this).find('iframe');
    $ad.attr({'width': '100%', 'height': '100%'}).css({'position':'absolute', 'top':'0', 'left': '0'});
  });
});
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>


  

  <!-- HTML5 Shiv (style HTML5 elements in IE8) -->
  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body class="nugget ">

  <script>
var _comscore = _comscore || [];
_comscore.push({ c1: "2", c2: "18410289", c3: "", c4: "http://www.upworthy.com/a-2-minute-story-about-why-we-need-to-send-more-dogs-to-prison-for-a-really-good-reason-lw2-7b?c=click" });
(function() {
var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true; s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js"; el.parentNode.insertBefore(s, el);
})(); </script>
<noscript>
  <img src="http://b.scorecardresearch.com/p?c1=2&c2=18410289&c3=&c4=http://www.upworthy.com/a-2-minute-story-about-why-we-need-to-send-more-dogs-to-prison-for-a-really-good-reason-lw2-7b?c=click" />
</noscript>


  
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="display: none;">

  <symbol id="ico-navicon" viewBox="0 0 28 28">
    <path d="M0 26.286v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804zM0 17.143v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804zM0 8v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804z"></path>
  </symbol>

  <symbol id="ico-twitter" viewBox="0 0 30 28">
    <path d="M0.786 24.839q0.625 0.071 1.393 0.071 4.018 0 7.161-2.464-1.875-0.036-3.357-1.152t-2.036-2.848q0.589 0.089 1.089 0.089 0.768 0 1.518-0.196-2-0.411-3.313-1.991t-1.313-3.67v-0.071q1.214 0.679 2.607 0.732-1.179-0.786-1.875-2.054t-0.696-2.75q0-1.571 0.786-2.911 2.161 2.661 5.259 4.259t6.634 1.777q-0.143-0.679-0.143-1.321 0-2.393 1.688-4.080t4.080-1.688q2.5 0 4.214 1.821 1.946-0.375 3.661-1.393-0.661 2.054-2.536 3.179 1.661-0.179 3.321-0.893-1.196 1.75-2.893 2.982 0.018 0.25 0.018 0.75 0 2.321-0.679 4.634t-2.063 4.438-3.295 3.759-4.607 2.607-5.768 0.973q-4.839 0-8.857-2.589z"></path>
  </symbol>

  <symbol id="ico-facebook" viewBox="0 0 18 30">
    <path d="M1.696 16.161v-5.286h4.554v-3.893q0-3.321 1.857-5.152t4.946-1.83q2.625 0 4.071 0.214v4.714h-2.804q-1.536 0-2.071 0.643t-0.536 1.929v3.375h5.232l-0.696 5.286h-4.536v13.554h-5.464v-13.554h-4.554z"></path>
  </symbol>

  <symbol id="ico-angle-down" viewBox="0 0 21 28">
    <path d="M1.375 13.143q0-0.232 0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l7.018 7.018 7.018-7.018q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411t-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411z"></path>
  </symbol>

  <symbol id="ico-angle-up" viewBox="0 0 21 28">
    <path d="M1.375 21.143q0-0.232 0.179-0.411l8.321-8.321q0.179-0.179 0.411-0.179t0.411 0.179l8.321 8.321q0.179 0.179 0.179 0.411t-0.179 0.411l-0.893 0.893q-0.179 0.179-0.411 0.179t-0.411-0.179l-7.018-7.018-7.018 7.018q-0.179 0.179-0.411 0.179t-0.411-0.179l-0.893-0.893q-0.179-0.179-0.179-0.411z"></path>
  </symbol>

  <symbol id="ico-times" viewBox="0 0 25 28">
    <path d="M1.964 23.607q0-0.714 0.5-1.214l5.25-5.25-5.25-5.25q-0.5-0.5-0.5-1.214t0.5-1.214l2.429-2.429q0.5-0.5 1.214-0.5t1.214 0.5l5.25 5.25 5.25-5.25q0.5-0.5 1.214-0.5t1.214 0.5l2.429 2.429q0.5 0.5 0.5 1.214t-0.5 1.214l-5.25 5.25 5.25 5.25q0.5 0.5 0.5 1.214t-0.5 1.214l-2.429 2.429q-0.5 0.5-1.214 0.5t-1.214-0.5l-5.25-5.25-5.25 5.25q-0.5 0.5-1.214 0.5t-1.214-0.5l-2.429-2.429q-0.5-0.5-0.5-1.214z"></path>
  </symbol>

  <symbol id="ico-magnify" viewBox="0 0 30 32">
    <path d="M0 14.857q0-2.554 0.991-4.884t2.679-4.018 4.018-2.679 4.884-0.991 4.884 0.991 4.018 2.679 2.679 4.018 0.991 4.884q0 3.929-2.214 7.125l6.125 6.125q0.661 0.661 0.661 1.607t-0.67 1.616-1.616 0.67q-0.964 0-1.607-0.679l-6.125-6.107q-3.196 2.214-7.125 2.214-2.554 0-4.884-0.991t-4.018-2.679-2.679-4.018-0.991-4.884zM4.571 14.857q0 3.304 2.348 5.652t5.652 2.348 5.652-2.348 2.348-5.652-2.348-5.652-5.652-2.348-5.652 2.348-2.348 5.652zM6.857 15.429v-1.143q0-0.232 0.17-0.402t0.402-0.17h4v-4q0-0.232 0.17-0.402t0.402-0.17h1.143q0.232 0 0.402 0.17t0.17 0.402v4h4q0.232 0 0.402 0.17t0.17 0.402v1.143q0 0.232-0.17 0.402t-0.402 0.17h-4v4q0 0.232-0.17 0.402t-0.402 0.17h-1.143q-0.232 0-0.402-0.17t-0.17-0.402v-4h-4q-0.232 0-0.402-0.17t-0.17-0.402z"></path>
  </symbol>

  <symbol id="ico-search" viewBox="0 0 30 32">
    <path d="M0 14.857q0-2.554 0.991-4.884t2.679-4.018 4.018-2.679 4.884-0.991 4.884 0.991 4.018 2.679 2.679 4.018 0.991 4.884q0 3.929-2.214 7.125l6.125 6.125q0.661 0.661 0.661 1.607 0 0.929-0.679 1.607t-1.607 0.679q-0.964 0-1.607-0.679l-6.125-6.107q-3.196 2.214-7.125 2.214-2.554 0-4.884-0.991t-4.018-2.679-2.679-4.018-0.991-4.884zM4.571 14.857q0 3.304 2.348 5.652t5.652 2.348 5.652-2.348 2.348-5.652-2.348-5.652-5.652-2.348-5.652 2.348-2.348 5.652z"></path>
  </symbol>

  <symbol id="ico-check-circle" viewBox="0 0 28 30">
    <path d="M0 16q0-3.732 1.839-6.884t4.991-4.991 6.884-1.839 6.884 1.839 4.991 4.991 1.839 6.884-1.839 6.884-4.991 4.991-6.884 1.839-6.884-1.839-4.991-4.991-1.839-6.884zM4.5 16.339q0 0.482 0.321 0.804l6.464 6.464q0.339 0.339 0.804 0.339 0.482 0 0.821-0.339l9.696-9.696q0.321-0.321 0.321-0.804 0-0.5-0.321-0.821l-1.625-1.607q-0.339-0.339-0.804-0.339t-0.804 0.339l-7.286 7.268-4.036-4.036q-0.339-0.339-0.804-0.339t-0.804 0.339l-1.625 1.607q-0.321 0.321-0.321 0.821z"></path>
  </symbol>

  <symbol id="ico-caret-up" viewBox="0 0 18 23">
    <path d="M0 21.714q0-0.464 0.339-0.804l8-8q0.339-0.339 0.804-0.339t0.804 0.339l8 8q0.339 0.339 0.339 0.804t-0.339 0.804-0.804 0.339h-16q-0.464 0-0.804-0.339t-0.339-0.804z"></path>
  </symbol>

  <symbol id="ico-caret-down" viewBox="0 0 18 23">
    <path d="M0 12.571q0-0.464 0.339-0.804t0.804-0.339h16q0.464 0 0.804 0.339t0.339 0.804-0.339 0.804l-8 8q-0.339 0.339-0.804 0.339t-0.804-0.339l-8-8q-0.339-0.339-0.339-0.804z"></path>
  </symbol>

  <symbol id="ico-ban" viewBox="0 0 28 30">
    <path d="M0 15.946q0-2.804 1.089-5.348t2.92-4.384 4.375-2.929 5.33-1.089 5.33 1.089 4.375 2.929 2.92 4.384 1.089 5.348-1.089 5.357-2.92 4.393-4.375 2.929-5.33 1.089-5.33-1.089-4.375-2.929-2.92-4.393-1.089-5.357zM4 15.946q0 2.893 1.589 5.339l13.482-13.464q-2.411-1.625-5.357-1.625-2.643 0-4.875 1.304t-3.536 3.554-1.304 4.893zM8.411 24.125q2.446 1.589 5.304 1.589 1.982 0 3.777-0.777t3.098-2.080 2.071-3.116 0.768-3.795q0-2.875-1.554-5.268z"></path>
  </symbol>

  <symbol id="ico-angle-right" viewBox="0 0 11 28">
    <path d="M0.232 24.571q0-0.232 0.179-0.411l7.018-7.018-7.018-7.018q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l8.321 8.321q0.179 0.179 0.179 0.411t-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-0.893-0.893q-0.179-0.179-0.179-0.411z"></path>
  </symbol>

  <symbol id="ico-angle-left" viewBox="0 0 11 28">
    <path d="M0.804 17.143q0-0.232 0.179-0.411l8.321-8.321q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411t-0.179 0.411l-7.018 7.018 7.018 7.018q0.179 0.179 0.179 0.411t-0.179 0.411l-0.893 0.893q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411z"></path>
  </symbol>

  <symbol id="ico-ellipsis" viewBox="0 0 31 12">
    <path d="M4.8 12.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5c0-1.9-1.6-3.5-3.5-3.5zM16 12.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5c0-1.9-1.6-3.5-3.5-3.5zM27.2 12.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5c0-1.9-1.6-3.5-3.5-3.5z"></path>
  </symbol>

  <symbol id="ico-help" viewBox="0 0 32 32">
    <path d="M0 16q0-3.7 1.8-6.9t5-5 6.9-1.8 6.9 1.8 5 5 1.8 6.9-1.8 6.9-5 5-6.9 1.8-6.9-1.8-5-5-1.8-6.9zM7.4 10.7q-0.3 0.4 0.1 0.8l2.4 1.8q0.1 0.1 0.3 0.1 0.3 0 0.4-0.2 0.9-1.2 1.5-1.6 0.6-0.4 1.5-0.4 0.9 0 1.5 0.5t0.7 1.1q0 0.7-0.4 1.1t-1.2 0.8q-1.1 0.5-2.1 1.5t-0.9 2.2v0.6q0 0.3 0.2 0.4t0.4 0.2h3.4q0.3 0 0.4-0.2t0.2-0.4q0-0.3 0.4-0.9t1-0.9q0.6-0.3 0.9-0.5t0.8-0.6 0.8-0.9 0.5-1.1 0.2-1.4q0-1.6-1-2.9t-2.5-2.1-3-0.7q-4.3 0-6.6 3.8zM11.4 24.6q0 0.3 0.2 0.4t0.4 0.2h3.4q0.3 0 0.4-0.2t0.2-0.4v-3.4q0-0.2-0.2-0.4t-0.4-0.2h-3.4q-0.2 0-0.4 0.2t-0.2 0.4v3.4z"></path>
  </symbol>

  <symbol id="ico-info" viewBox="0 0 32 32">
    <path d="M0 16q0-3.7 1.8-6.9t5-5 6.9-1.8 6.9 1.8 5 5 1.8 6.9-1.8 6.9-5 5-6.9 1.8-6.9-1.8-5-5-1.8-6.9zM9.1 24.6q0 0.3 0.2 0.4t0.4 0.2h8q0.3 0 0.4-0.2t0.2-0.4v-2.9q0-0.2-0.2-0.4t-0.4-0.2h-1.7v-9.1q0-0.2-0.2-0.4t-0.4-0.2h-5.7q-0.2 0-0.4 0.2t-0.2 0.4v2.9q0 0.3 0.2 0.4t0.4 0.2h1.7v5.7h-1.7q-0.2 0-0.4 0.2t-0.2 0.4v2.9zM11.4 8.6q0 0.3 0.2 0.4t0.4 0.2h3.4q0.3 0 0.4-0.2t0.2-0.4v-2.9q0-0.2-0.2-0.4t-0.4-0.2h-3.4q-0.2 0-0.4 0.2t-0.2 0.4v2.9z"></path>
  </symbol>

  <symbol id="ico-check" viewBox="0 0 32 24">
    <line stroke-width="1" x1="" y1="" x2="" y2="" stroke="#449FDB" opacity=""/><path d="M2.2 16.6q0-0.7 0.5-1.2l2.4-2.4q0.5-0.5 1.2-0.5t1.2 0.5l5.3 5.3 11.7-11.7q0.5-0.5 1.2-0.5t1.2 0.5l2.4 2.4q0.5 0.5 0.5 1.2t-0.5 1.2l-15.4 15.4q-0.5 0.5-1.2 0.5t-1.2-0.5l-8.9-8.9q-0.5-0.5-0.5-1.2z"></path>
  </symbol>
</svg>

  <div id="upworthy-web-app-wrapper">

    <header id="primary-nav" class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="nav-container">
              <nav>
  <!-- hamburger menu -->
  <button id="browse-button" type="button" class="analytic_event">
    <svg class="icon navicon"><use xlink:href="#ico-navicon" /></svg>
  </button>
  <!-- topics -->
    <div id="current-topics" class="hidden-xs hidden-sm">
      <ul class="topics">
        <?php

         foreach((get_the_category()) as $category) { 

            $slug=strtolower(str_replace(" ","-",$category->cat_name));
          ?>

      <li><a href="<?php echo get_option('home'); ?>/category/<?php echo $slug; ?>"><?php echo $category->cat_name ; ?></a></li>

                        <?php     
                            }
                            
                            ?>      
</ul>

    </div>
    <div id="topic-dropdown" class="dropdown hidden-xs hidden-sm">
      <button type="button" class="analytic_event dropdown-toggle" data-toggle="dropdown">
        <svg class="icon ellipsis"><use xlink:href="#ico-ellipsis" /></svg>
        <svg class="icon angle-down"><use xlink:href="#ico-angle-down" /></svg>
      </button>
      <div class="dropdown-menu" role="menu" aria-labelledby="topic-dropdown">
        <ul class="topics">
       <?php

         foreach((get_the_category()) as $category) { 

            $slug=strtolower(str_replace(" ","-",$category->cat_name));
          ?>

      <li><a href="<?php echo get_option('home'); ?>/category/<?php echo $slug; ?>"><?php echo $category->cat_name ; ?></a></li>

                        <?php     
                            }
                            
                            ?>   
</ul>

      </div>
    </div>

</nav>

              <!-- branding -->
              <div id="branding">
               <a href="<?php echo get_option('home'); ?>" class="analytic_event" data-ga-category="General" data-ga-action="Header Logo" data-ga-label="pageTitle" id="logo"></a>
                <div class="tagline">
                  <span class="default">Things That Matter. Pass &lsquo;Em On.</span>
                  <span class="climate">Upworthy supports Climate Summit 2014</span>
                </div>
              </div>
              <!-- /branding -->
            </div>
          </div>
        </div>
      </div>
    </header>

        <div class="modal fade" id="holler">
      <!-- populated by javascript -->
    </div><!-- /holler -->
  <div id="survey" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="ctrl-bar">
  <a class="close" data-dismiss="modal">Close <svg class="icon times"><use xlink:href="#ico-times" /></svg></a>
</div>
        </div>
        <div class="modal-body survey">
        </div>
      </div>
    </div>
  </div>


    

    <div class="wrapper">
      <div class="container">
        





<div id="sticky-header">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a data-url="https://www.facebook.com/dialog/feed?app_id=153163221468956&amp;display=popup&amp;link=URL_TO_SHARE&amp;picture=http%3A%2F%2Fupw-prod-images.global.ssl.fastly.net%2Fnugget%2F54d9966e39383800283b0000%2Ffacebook_1200_cage-fde2b9c20b25d05c7f7ec67701650135.jpg&amp;redirect_uri=http%3A%2F%2Fwww.upworthy.com%2Ffb-share" target="_new" rel="share_popup" data-ga-category="Nugget" data-ga-action="Top Share Facebook" data-ga-label="pageTitle" data-share-to='facebook' data-placement='top' data-windowstyle="facebook" data-device="mobile" class="btn btn-share facebook_button analytic_event">
          <span class="text-node"><svg class="icon facebook"><use xlink:href="#ico-facebook" /></svg><span class="preface">Share on</span> Facebook</span>
        </a>
      </div>
      <div class="col-md-8">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </div>
</div>





<div class="row">
  <div class="col-md-12">
    <div id="rc-header-container" class="recommended-content">
    </div>
  </div>
</div>


<div id="nuggetPage" class="row  ">

  <article class="col-md-8" id="content">

    <!-- Headline/author/sponsor -->
    <header>
      <h1><?php the_title(); ?></h1>
      <div id="byline">
          <div class="author-wrap">
            <address>
              <a href="/lori-white" id="avatar"><img alt="Lori White" src="//upw-prod-images.global.ssl.fastly.net/account/533067f6cfaa917b6e000086/web_66_PM-775e5e5b554a16a400ea355c22a86cea.png" /></a>
              Curator:
              <a href="/lori-white" rel="author" class="name analytic_event" data-ga-category="Nugget" data-ga-action="More From Curator" data-ga-label="pageTitle">
                Lori White
              </a>
            </address>
          </div>
          <div class="follow-buttons">
              <span class="follow-button facebook">
                <div id='fb-curator_nugget' class='fb-like desktop' data-href='http://www.facebook.com/lolololori?pos=nugget' data-action='like' data-show-faces='false' data-share='false' data-colorscheme='light' data-layout='button' data-width='200'></div>
              </span>
              <span class="follow-button twitter">
                <a href='https://twitter.com/lolololori' class='twitter-follow-button' data-show-count='false' data-size='small' data-show-screen-name='false'>Follow @lolololori</a>
              </span>
          </div>
      </div>
    </header>


    <div id="lede">
      <p>Wow. Saving these dogs' lives saves these mens' lives. </p>
    </div>

    <div id="subscribe-top">
  <div class="dropdown subscribe">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="subscribe-dropdown">
      Subscribe <span class="hidden-xs hidden-md">to Upworthy</span> <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
      <li>
        <div id="dropdown-email-ask" class="col-xs-7" data-name="utility_subscribe_dropdown" data-context="NuggetPage" data-value="Upworthiest">
          <div class="subscribe-msg">
            <div id="subscribe-email">First one is free... so are  <br class="visible-xs">the rest. Daily.</div>
          </div>
          <div class="prompt">
  <form method="post" action="/holler/back" class="email-form">
    <input class="text_field_tag required email mailcheck" placeholder="Email" title="Email Address" name="email" type="email" required=""><input class="btn" value="I'm in!" type="submit">
    <p class="privacy">
      By submitting above you agree to the Upworthy <a href="/privacy">privacy policy</a>.
    </p>
  </form>
</div>
          <div class="success">
            <h2>Thanks for signing up!</h2>
          </div>
        </div>
        <div id="dropdown-facebook-ask" class="col-xs-5">
          <div id="subscribe-facebook">
            <div class="subscribe-msg">Like Upworthy on <strong>Facebook</strong></div>
            <div class="btn-spacer"><div id='fb-subscribe_dropdown' class='fb-like ' data-href='http://www.facebook.com/upworthy?pos=subscribe_dropdown' data-action='like' data-show-faces='false' data-share='false' data-colorscheme='light' data-layout='button_count' data-width='150'></div></div>
          </div>
        </div>
        <div id="dropdown-youtube-ask" class="col-xs-5">
          <div id="subscribe-youtube">
            <div class="subscribe-msg">Subscribe to our <strong>YouTube</strong> channel</div>
            <div class="btn-spacer"><div class='up-ytsubscribe' data-channel="upworthy" data-layout="default" data-count="default" data-placement="dropdown"></div></div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<div id="share-top" class="share">
  <div class="share-button-wrapper">
    <a data-url="https://www.facebook.com/dialog/feed?app_id=153163221468956&amp;display=popup&amp;link=URL_TO_SHARE&amp;picture=http%3A%2F%2Fupw-prod-images.global.ssl.fastly.net%2Fnugget%2F54d9966e39383800283b0000%2Ffacebook_1200_cage-fde2b9c20b25d05c7f7ec67701650135.jpg&amp;redirect_uri=http%3A%2F%2Fwww.upworthy.com%2Ffb-share" data-popup-width="625" data-popup-height="380" rel="share_popup" data-ga-category="Nugget" data-ga-action="Top Share Facebook" data-ga-label="pageTitle" data-share-to='facebook' data-placement='top' data-windowstyle="facebook" class="btn btn-share facebook_button analytic_event hidden-ios">
      <span class="text-node"><svg class="icon facebook"><use xlink:href="#ico-facebook" /></svg>Share<span class="hidden-xs hidden-sm hidden-md"> On Facebook</span></span>
    </a>
  </div>
  <div class="share-button-wrapper">
    <a data-url="http://twitter.com/intent/tweet?related=upworthy%2Clolololori&amp;text=They+Were+Going+To+Kill+This+Doggie+Mama.+Instead+They+Sent+Her+To+Prison.+%28via+%40Upworthy%29&amp;url=URL_TO_SHARE" data-popup-width="625" data-popup-height="300" rel="share_popup" data-ga-category="Nugget" data-ga-action="Top Share Twitter" data-ga-label="pageTitle" data-share-to='twitter' data-placement='top' data-windowstyle="twitter" class="btn btn-share twitter_button analytic_event">
      <span class="text-node"><svg class="icon twitter"><use xlink:href="#ico-twitter" /></svg><span class="hidden-xs hidden-sm hidden-md">Share On Twitter</span><span class="hidden-lg">Tweet</span></span>
    </a>
  </div>
</div>


    <div id="nuggetBody" class="multi-item" >
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div> <!-- /#content -->

      <div id="share-bottom" class="visible-sm visible-md visible-lg">
    <div class="share-button-wrapper">
      <a data-url="https://www.facebook.com/dialog/feed?app_id=153163221468956&amp;display=popup&amp;link=URL_TO_SHARE&amp;picture=http%3A%2F%2Fupw-prod-images.global.ssl.fastly.net%2Fnugget%2F54d9966e39383800283b0000%2Ffacebook_1200_cage-fde2b9c20b25d05c7f7ec67701650135.jpg&amp;redirect_uri=http%3A%2F%2Fwww.upworthy.com%2Ffb-share" data-popup-width="625" data-popup-height="380" rel="share_popup" data-ga-category="Nugget" data-ga-action="Bottom Share Facebook" data-ga-label="pageTitle" data-share-to='facebook' data-placement='bottom' data-windowstyle="facebook" class="btn btn-share facebook_button analytic_event">
        <span class="text-node"><svg class="icon facebook"><use xlink:href="#ico-facebook" /></svg><span class="preface">Share on</span> Facebook</span>
      </a>
    </div>
    <div class="share-button-wrapper">
      <a data-url="http://twitter.com/intent/tweet?related=upworthy%2Clolololori&amp;text=They+Were+Going+To+Kill+This+Doggie+Mama.+Instead+They+Sent+Her+To+Prison.+%28via+%40Upworthy%29&amp;url=URL_TO_SHARE" data-popup-width="625" data-popup-height="300" rel="share_popup" data-ga-category="Nugget" data-ga-action="Bottom Share Twitter" data-ga-label="pageTitle" data-share-to='twitter' data-placement='bottom' data-windowstyle="twitter" class="btn btn-share twitter_button analytic_event">
        <span class="text-node"><svg class="icon twitter"><use xlink:href="#ico-twitter" /></svg><span class="preface">Share on</span> Twitter</span>
      </a>
    </div>
  </div><!-- /share-bottom -->

  <div id="share-row-sticky" class="visible-xs">
    <a data-url="https://www.facebook.com/dialog/feed?app_id=153163221468956&amp;display=popup&amp;link=URL_TO_SHARE&amp;picture=http%3A%2F%2Fupw-prod-images.global.ssl.fastly.net%2Fnugget%2F54d9966e39383800283b0000%2Ffacebook_1200_cage-fde2b9c20b25d05c7f7ec67701650135.jpg&amp;redirect_uri=http%3A%2F%2Fwww.upworthy.com%2Ffb-share" target="_new" rel="share_popup" data-ga-category="Nugget" data-ga-action="Top Share Facebook" data-ga-label="pageTitle" data-share-to='facebook' data-placement='top' data-windowstyle="facebook" data-device="mobile" class="btn btn-share facebook_button analytic_event">
      <span class="text-node"><svg class="icon facebook"><use xlink:href="#ico-facebook" /></svg><span class="preface">Share on</span> Facebook</span>
    </a>
  </div>


    <footer id="meta-data">
      

      
<!-- attribution text -->
<div id="attribution">
  <dl>
    <dt>About:</dt>
    <dd><p><a href="https://www.youtube.com/watch?v=8SEiZSVflNU&amp;feature=youtu.be" target="_blank">ORIGINAL</a> by film, <a href="http://www.dogsontheinside.com/" target="_blank">Dogs On The Inside</a>, which just came out on digital VOD! Although the program featured in the film no longer exists, <a href="http://newleashonlife-usa.org/about-us/" target="_blank">New Leash On Life USA</a> is carrying on the torch, bringing prisoners and shelter pups together still.  </p></dd>
    <!-- facet list -->
      <dt>Topics:</dt>
      <dd>      
        <ul class="topics">
          <?php
            foreach((get_the_category()) as $category) { 
              $slugatrib=strtolower(str_replace(" ","-",$category->cat_name));
          ?>
          <li><a href="<?php echo get_option('home'); ?>/category/<?php echo $slugatrib; ?>"><?php echo $category->cat_name ; ?></a></li>

         <?php } ?>      
        </ul>
      </dd>
  </dl>
</div>

      
    </footer>

    

    <div class="hidden-xs">
      <!-- desktop engagement box -->
      
    </div>

    <div id="footer-engagement-box" class="visible-xs">
      <!-- mobile engagement box -->
      
    </div>

    <section id="clickability">
  <h4 class="section-title">Next bit of Upworthiness:</h4>
  <div class="slide-content">
  <div class="pkg analytic_event" data-ga-category="Nugget" data-ga-action="Suggested Nugget Click">
    <div class="thumb"></div>
    <div class="info">
      <a href="#" class="title"></a>
      <span class="excerpt"></span>
    </div>
  </div>
</div>

</section>


    <div id="rc-footer-container" class="recommended-content"></div>


    <section id="footer-email-signup" data-name="utility_footer" data-context="staticBottom"> <!-- footer email signups -->
  <div class="prompt">
      <h2>Want more stuff like this?</h2>
      <p>We're on a mission to spread meaningful content far and wide. Try our daily email, <strong>The Upworthiest</strong>, and see for yourself!</p>
    <div class="hidden-xs">
      <form method="post" action="/holler/back">
        <input id="email" class="text_field_tag required email mailcheck" placeholder="Email Address" title="Email Address" name="email" type="email" required=""><input id="submit" class="btn" value="Sign Up!" type="submit">
        <div id="error_container">
          <ul></ul>
        </div>
        <p class='privacy'>
          By submitting above you agree to the Upworthy <a href="/privacy">privacy policy</a>.
        </p>
      </form>
    </div>
    <div class="visible-xs one-click">
  <a class="btn btn-primary one-click-subscribe" data-holler-id="52fce379d624102e5e000022" data-placement="nuggetFooter" encode="hex" href="mailto:mailer@upworthy.com?cc=subscribe%40upworthy.com&amp;body=Hit%20send%20to%20subscribe%20to%20The%20Upworthiest%2C%20our%20daily%20email%21%20For%20more%20info%2C%20read%20on.%0A%0ASo%20what%E2%80%99s%20going%20on%20here%3F%20We%20know%20typing%20on%20mobile%20devices%20isn%E2%80%99t%20very%20fun%2C%20so%20this%20is%20our%20way%20of%20making%20the%20subscription%20process%20way%20easier.%20Instead%20of%20typing%20out%20your%20email%20address%20on%20that%20tiny%20screen%2C%20all%20you%20have%20to%20do%20is%20hit%20send%20and%20we%27ll%20subscribe%20you%20to%20The%20Upworthiest%2C%20our%20daily%20email%20that%20will%20fill%20your%20inbox%20with%20meaning%20%28psst%2C%20when%20you%20do%20that%2C%20you%27re%20agreeing%20to%20our%20privacy%20policy%2C%20which%20you%20can%20read%20here%3A%20http%3A%2F%2Fwww.upworthy.com%2Fprivacy%29.%0A%0AOf%20course%2C%20if%20you%20do%20like%20typing%2C%20we%20wouldn%E2%80%99t%20want%20to%20stop%20you.%20So%2C%20feel%20free%20to%20write%20us%20a%20comment%20below%20this%20line.%20In%20fact%2C%20we%27d%20be%20tickled%20pink%20to%20hear%20from%20you%21%20%28Just%20don%27t%20change%20the%20subject%20line%2C%20address%20or%20subscriber%20ID%20so%20we%20know%20you%20really%20want%20to%20sign%20up.%29%0A%0A________________________________%0A%0A%0A%0A%0A%0A%0A%0A%0A%0A%0A%0A%0ASubscriber%20ID%3A52fce379d624102e5e000022%3A54d992bf353864000c2a0000%3A54db8ce06364390034ec6300&amp;subject=I%27m%20in%21">One-Click Subscribe</a>
  <div class="message">
    <p>No time to type on that tiny screen? No problem! Click subscribe above, then hit send when the email pops up. Boom, you're done.</p>
  </div>
</div>

  </div>
  <div class="success">
    <h2>Thanks for signing up!</h2>
    <div class="facebook-ask">
      <p class="message">Nice! Like us on Facebook to add daily goodness to your feed:</p>
      <div class="social-spacer">
        <div id='fb-nugget_footer' class='fb-like ' data-href='http://www.facebook.com/upworthy?pos=footer_signup_form' data-action='like' data-show-faces='true' data-share='false' data-colorscheme='light' data-layout='standard' data-width='50'></div>
      </div>
    </div>
    <div class="youtube-ask">
      <p class="message">Nice! Subscribe to our YouTube channel to stay tuned to the most meaningful videos on the web.</p>
      <div class="social-spacer">
        <div class='up-ytsubscribe' data-channel="upworthy" data-layout="default" data-count="default" data-placement="footer"></div>
      </div>
    </div>
  </div>
</section>

    <section id="footer-youtube-subscribe" data-name="utility_footer" data-context="staticBottom"> <!-- footer youtube subscribe -->
  <div class="prompt">
    <h2>Want More Good Stuff?</h2>
    <p>Subscribe to our YouTube channel to stay tuned to the most meaningful videos on the web.</p>
    <div class='up-ytsubscribe' data-channel="upworthy" data-layout="default" data-count="default" data-placement="footer"></div>
  </div>
</section>

  </article><!-- /#nuggetContent -->

  <div id="recommended-content-element-template" class="hidden">
  
  <li class="clickable impressionable "
>
    <a class="eyecatcher-link" href="">
      <div class="promoted-flag hidden"></div>
      <img class="eyecatcher" src="" style="background-image:url()">
    </a>
    <div class="info">
      <h3 class="title">
        <a href=""></a>
      </h3>
    </div>

    <div class="dfp-pixel" style="display:none"></div>
  </li>


</div>
<aside id="sidebar" class="col-md-4">
  <div id="sidebar-content">
    <h2 class="visible-xs visible-sm">One More? C&#39;mon…</h2>
              <!-- RecommendedContentNuggetPreview -->
      <div id='div-gpt-ad-14236971673810-71'
           class=" dfp-responsive-slot dfp-preserve-ratio-slot"
           style=" margin-left: auto; margin-right: auto;margin-bottom: 30px">
      <script type='text/javascript'>
        googletag.cmd.push(function() { googletag.display('div-gpt-ad-14236971673810-71'); });
        
      </script>
      </div>

    <div id="rc-sidebar-container"></div>
  </div>
</aside>



  
  </div><!-- /nuggetPage -->

<!-- Hidden Snippet: flash video error message -->

<div id="flash-embed-message">
  <div class="content">
    <h3>Flash Video Embed</h3>
    <p>This video is not supported by your device. <b><a href="http://www.upworthy.com">Continue browsing</a></b> to find other stuff you'll love!</p>
  </div>
</div>


      </div><!-- /container -->
    </div><!-- /wrapper -->

    
<?php get_footer(); ?>