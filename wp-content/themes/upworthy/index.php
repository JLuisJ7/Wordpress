
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
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-5.newrelic.com","errorBeacon":"bam.nr-data.net","licenseKey":"63497445bb","applicationID":"3835034","transactionName":"IAtfRUdYXVVcExpcFAQDVEVGGFhXXQRN","queueTime":6,"applicationTime":268,"agent":"js-agent.newrelic.com/nr-515.min.js"}</script>
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
      <script id="pageType" type='application/json'>"homepage"</script>


  <!-- Disable no-js styles if javascript is turned on. http://paulirish.com/2009/avoiding-the-fouc-v3/ -->
  <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>

    <title>Upworthy: Things that matter. Pass &#39;em on.</title>

    <meta name="description" content="Awesome, fun, interesting videos and graphics about stuff that matters.">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <link href="/favicon.ico" rel="shortcut icon" type="image/ico" />
  <link href="/favicon.ico" rel="icon" type="image/ico" />
  <link rel="apple-touch-icon" href="/assets/apple-touch-icon-420956631c8679031243d6ef7dcfb3ee.png"/>
  <link rel="alternate" type="application/rss+xml" title="Upworthy (RSS2.0)" href="http://feeds.feedburner.com/upworthy"/>
  <link rel="publisher" href="https://plus.google.com/103863989923615589024">

        <meta property="og:image" content="http:/assets/up-f4f7cec43e2f45b70fc02d42452a4bf5.png" />
    <meta property="og:site_name" content="Upworthy: Things that matter. Pass 'em on." />
    <meta property="og:title" content="Upworthy: Things that matter. Pass 'em on." />
    <meta property="og:description" content="Awesome, fun, interesting videos and graphics about stuff that matters." />
    <meta property="og:url" content="http://www.upworthy.com/" />
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Upworthy">
    <meta name="twitter:url" content="http://www.upworthy.com/" />
    <meta name="twitter:title" content="Upworthy: Things that matter. Pass 'em on." />
    <meta name="twitter:image" content="/assets/up-f4f7cec43e2f45b70fc02d42452a4bf5.png" />
    <meta name="twitter:description" content="Upworthy is social media with a mission: to make meaningful stuff go viral." />
    <meta property="twitter:account_id" content="524396430" />

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
googletag.defineSlot('/47017164/HomepageFeaturedNuggetPreview', [360, 324], 'div-gpt-ad-14236921588232-16').setCollapseEmptyDiv(true).addService(googletag.pubads());

googletag.pubads().setTargeting('page_type', 'homepage_featured');

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
<body class="home ">

  <script>
var _comscore = _comscore || [];
_comscore.push({ c1: "2", c2: "18410289", c3: "", c4: "http://www.upworthy.com/" });
(function() {
var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true; s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js"; el.parentNode.insertBefore(s, el);
})(); </script>
<noscript>
  <img src="http://b.scorecardresearch.com/p?c1=2&c2=18410289&c3=&c4=http://www.upworthy.com/" />
</noscript>


<?php include (TEMPLATEPATH . '/includes/icons.php'); ?>

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

    

    

    <div class="wrapper">
      <div class="container">
        

 

<!-- featured nuggets -->
  <!-- featured nugget slideshow -->
<div id="featured-nuggets">
  <?php
  $contFeature=0;
            while (have_posts()) : the_post();
            $fullimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            $urlfullimage = $fullimage['0'];
            $contFeature=$contFeature+1;
            ?>
            <?php if ($contFeature<=2): ?>
 <div id='nugget-54d2c943656339000c190000' class='slide clickable analytic_event ' data-href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $urlfullimage; ?>)" data-sponsor-slug="false">
  <div class="promoted-flag"></div>
  <div class="featured-flag hidden-sm hidden-md hidden-lg">Featured</div>
  <div class='nugget-info'>
    <h2>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
  </div>
</div><!-- /nugget -->             
            <?php endif ?>

   <?php endwhile; ?> 
</div>


<div class="homepage">
  <!-- nugget grid -->
  <div class="nugget-grid" id="page-content">
     
      
      <?php
                  query_posts(array(
                  'orderby' => 'asc',
                   'ignore_sticky_posts' => 1,
               
               
                  ));                       
               $controw=0;
            while (have_posts()) : the_post();
            $fullimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            $urlfullimage = $fullimage['0'];
            $controw=$controw+1;
            ?>

            <?php if ($controw==1): ?>
              <div class="row">
                <div class="col-md-12"> 
            <?php endif ?>
                
                                
                <div id="nugget" class="nugget clickable analytic_event " data-ga-category="General" data-ga-action="Nugget Grid" data-ga-label="" data-href="<?php the_permalink(); ?>" data-sponsor-slug="false">
                    <a href="<?php the_permalink(); ?>" class="nugget-image" style="background-image:url(<?php echo $urlfullimage; ?>)"></a>
                    <div class="nugget-info">
                      <div class="avatar">
                        <div class="promoted-flag"></div>
                          <div class="top-spacer"></div>                          
                          <?php echo get_avatar( get_the_author_meta('email'), '53' ); ?>
                      </div>
                        <div class="title">
                            <div class="category">
                              <?php $cont=0; ?>
                            <?php foreach((get_the_category()) as $category) {
                              if ($cont<1) {
                                echo $category->cat_name . ' ';
                              }

                              $cont=$cont+1;
                            }

                            
                            ?>
                            </div>
                          <h3>
                              <a href="<?php the_permalink(); ?>"></a>
                              <a data-ga-action="Nugget Grid" data-ga-category="General" data-ga-label="" data-href="" href="<?php the_permalink(); ?>" rel="analytic_event"><?php the_title(); ?></a>
                          </h3>
                          <div class="author">
                            By <?php the_author(); ?> 
                          </div>
                        </div>
                    </div>
                </div><!-- /nugget -->
                         <?php if ($controw/3==1): ?>
                  </div>
                </div>
                <!-- $controw  = 3  -->
                  <?php $controw=0; ?>
              <?php endif ?>
              <?php endwhile; ?>  
              <?php if($controw < 3 && $controw > 0) { ?>
                 </div>
                </div>
                <!-- $controw < 3 && $controw >0 -->
             <?php } ?> 
  </div><!--nugget-grid-->
</div><!-- topic-page -->
<nav class="pagination pagination-centered">
  <ul>
    
    <li><a rel="next" href="/page/2">Next &raquo;</a></li>
  </ul>
</nav>

      </div><!-- /container -->
    </div><!-- /wrapper -->

 <?php get_footer(); ?>   


