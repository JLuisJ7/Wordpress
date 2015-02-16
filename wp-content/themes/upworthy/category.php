
<?php get_header(); ?>
<body class="topics ">
<?php include (TEMPLATEPATH . '/includes/icons.php'); ?>
<?php 
$id = $_GET['id'];
$term = $wp_query->queried_object;
 ?>
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
        



<div id="topic-page">
  <div class="row" id="firstRow">
    <section class="col-md-12">

      <div id="page-title">
        <div class="title-preface">Topic</div>
        <h1><?php $categ=wp_title(""); ?></h1>

      </div><!-- /page-title -->

    </section>
  </div><!-- /firstrow-->


  <div class="nugget-grid">
    <?php
$term = $wp_query->queried_object;

?>
<?php
//echo $term->name;
?>
<?php
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
                              <a href="<?php the_permalink(); ?>"></a><a data-ga-action="Nugget Grid" data-ga-category="General" data-ga-label="" data-href="" href="<?php the_permalink(); ?>" rel="analytic_event"><?php the_title(); ?></a>
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