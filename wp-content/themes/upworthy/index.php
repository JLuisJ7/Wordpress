
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

<body class="home ">
<?php include (TEMPLATEPATH . '/includes/icons.php'); ?>

  <div id="upworthy-web-app-wrapper">

    <header id="primary-nav" class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="nav-container">
              <nav>
  <!-- hamburger menu -->
  <button id="browse-button" type="button" class="analytic_event loaded">
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


      </div><!-- /container -->
    </div><!-- /wrapper -->

 <?php get_footer(); ?>   


