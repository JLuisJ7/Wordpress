
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>> 
<head>

  <meta charset="utf-8">
  <!-- Use the .htaccess and remove this line to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <link rel='stylesheet' href='<?php bloginfo('stylesheet_url'); ?>' type='text/css' media='screen' />
  
 
    <title>Upworthy: Things that matter. Pass &#39;em on.</title>

    <meta name="description" content="Awesome, fun, interesting videos and graphics about stuff that matters.">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <link href="/favicon.ico" rel="shortcut icon" type="image/ico" />
  <link href="/favicon.ico" rel="icon" type="image/ico" />
  <link rel="apple-touch-icon" href="/assets/apple-touch-icon-420956631c8679031243d6ef7dcfb3ee.png"/>

  <!-- HTML5 Shiv (style HTML5 elements in IE8) -->
  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#browse-button").click(function() {
      $("body").addClass("nav-open");
      $("body").removeClass('nav-hide');
    });

    $("#close-overlay").click(function() {
      $("body").removeClass('nav-open');
       $("body").addClass("nav-hide");
    });
  

$("#subscribe-dropdown").click(function() {
  if ($("#subscribe-top .subscribe").hasClass('open')) {
 $("#subscribe-top .subscribe").removeClass('open');
  }else{
    $("#subscribe-top .subscribe").addClass('open');
  }; 
});

$(window).on('scroll',function(){
    if ($(window).scrollTop()>140) {
      $('#sticky-header').addClass('visible');
    }else{
      $('#sticky-header').removeClass('visible');
    }
  });

$("#transcriptButton").click(function() {

  if ($("#transcriptButton").hasClass('reveal')) {

      $("#transcriptContent").css('display', 'block');
       $("#transcriptButton").removeClass('reveal');
  }else{
     $("#transcriptContent").css('display', 'none');
     $("#transcriptButton").addClass('reveal');
  }; 

  
});

});
  </script>
  <?php wp_head(); ?>