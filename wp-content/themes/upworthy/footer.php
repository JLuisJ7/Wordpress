    <footer id="page-footer" data-context="bottom-footer" data-name="utility_footer" data-value="Upworthiest">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 height-fix copyright-info">
        <a href="<?php echo get_option('home'); ?>" id="logo-circle">
          <img alt="UP logo" src="<?php bloginfo('template_url'); ?>/images/assets/upworthy-avatar.svg" />
        </a>
        <p>
          &copy; Cloud Tiger Media.<br />
          All rights reserved.
        </p>
      </div>
        <div class="col-sm-6 height-fix about-up">
          <h3>Upworthy is social media with a mission.</h3>
          <p>
          Sensational and substantial. Entertaining and enlightening. Shocking and significant. That's what you can expect here: no empty calories. Just a steady stream of the most irresistibly shareable stuff you can click on without feeling bad about yourself afterwards. <a href="<?php echo get_option('home'); ?>/about-us">Read more.</a>
          </p>
          <div class="social">
            <h4>Subscribe</h4>
            <ul class="inline">
              <li> <a href="https://www.facebook.com/Upworthy" class="facebook" title="Like Upworthy on Facebook" rel="external" target="_blank"><svg class="icon facebook"><use xlink:href="#ico-facebook" /></svg></a> </li>
              <li> <a href="https://twitter.com/intent/user?screen_name=upworthy" class="twitter" title="Follow Upworthy on Twitter"><svg class="icon twitter"><use xlink:href="#ico-twitter" /></svg></a> </li>
            </ul>
            <div class="prompt">
  <form method="post" action="/holler/back" class="email-form">
    <input class="text_field_tag required email mailcheck" placeholder="Email" title="Email Address" name="email" type="email" required=""><input class="btn" value="I'm in!" type="submit">
    <p class="privacy">
      By submitting above you agree to the Upworthy <a href="<?php echo get_option('home'); ?>/privacy-policy">privacy policy</a>.
    </p>
  </form>
</div>
            <div class="success">Thanks for signing up!</div>
          </div>
        </div>
        <nav class="col-sm-3 height-fix nav-wrap">
          <div class="gen-links">
    <h4>About</h4>
    <ul>
      <li><a class="analytic_event" data-ga-action="About" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/about-us">About Us</a></li>
      <li><a class="analytic_event" data-ga-action="Blog" data-ga-category="General" data-ga-label="pageTitle" href="http://blog.upworthy.com">Blog</a></li>
      <li><a class="analytic_event" data-ga-action="Contact" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/contact/">Contact</a></li>
      <li><a class="analytic_event" data-ga-action="Corrections" data-ga-category="General" data-ga-label="pageTitle" href="/corrections">Corrections</a></li>
      <li><a class="analytic_event" data-ga-action="Best Of" data-ga-category="General" data-ga-label="pageTitle" href="/best-of">Best Of</a></li>
      <li><a class="analytic_event" data-ga-action="Random Nugget" data-ga-category="General" data-ga-label="pageTitle" href="/random">Random</a></li>
      <li><a class="analytic_event" data-ga-action="Feed" data-ga-category="General" data-ga-label="pageTitle" href="http://feeds.feedburner.com/upworthy">RSS Feed</a></li>
    </ul>
</div>
<div class="meta-links">
  <h4>Join Us</h4>
  <ul>
    <li><a class="analytic_event" data-ga-action="Advertise" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/advertise/">Advertise</a></li>
    <li><a class="analytic_event" data-ga-action="Submit Link" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/got-something-upworthy">Submit Link</a></li>
    <li><a class="analytic_event" data-ga-action="Jobs" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/jobs/">Jobs</a></li>
  </ul>
  <div class="legal-links">
    <h4>Legalese</h4>
    <ul>
      <li><a class="analytic_event" data-ga-action="Privacy" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/privacy-policy">Privacy</a></li>
      <li><a class="analytic_event" data-ga-action="TOS" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/terms-of-use">Terms</a></li>
    </ul>
  </div>
</div>

        </nav>
    </nav>
  </div>
</footer>


    <!-- NUGGETS: lightbox zooming for large images -->
    <div id="lightbox">
      <div class="controls">
        <a class="close">Close <svg class="icon times"><use xlink:href="#ico-times" /></svg></a>
        <span class="hidden-md hidden-lg instructions">Pinch or double-tap to zoom</span>
      </div>
      <div id="lightbox-content">
        <div id="scroller">
          <img src="#" id="placeholder" alt="Image Detail">
        </div>
        <span class="icon zoomIndicator"></span>
      </div>
    </div>
  </div> <!-- /#upworthy-web-app-wrapper -->

  <!-- IE8 Users: Display Chrome download text -->
  <div id="olderbrowsers">
    <div class="container">
      <p>Hey, Internet Friend. Looks like you're using a crazy old web browser, which is no longer supported. Please consider upgrading to something more modern&mdash;for a better experience, and a safer time online. We only want the best for you.</p>
      <p><a href="https://support.google.com/chrome/answer/95346?hl=en" target="_blank">Download Google Chrome</a>, and try it for a week. Don't think about it, just do it. You'll thank us later.</p>
    </div>
  </div>

  <!-- Full Screen Site Nav Browsing -->
  <div id="nav-overlay">
  <div id="overlay-search" class="wrapper">
    <div class="container">
      <button id="close-overlay" type="button">
        <span class="glyph"><svg class="icon times"><use xlink:href="#ico-times" /></svg></span>
        <span class="label">Close</span>
      </button>
      <form method="get" id="search" action="<?php bloginfo('siteurl'); ?>">
        <input type="text"  value="" name="s" class="search-query analytic_event" placeholder="Search Stories" >
        <button type="submit" id="searchsubmit" value="search" class="btn btn-search"><svg class="icon search"><use xlink:href="#ico-search" /></svg></button>
      </form>

    </div>
  </div>
  <div id="overlay-browse" class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h3>Topics</h3>
        </div>
      </div>
      <div class="row">
        <div class="all-topics col-sm-12">

<ul class="topics">

<?php
$category_ids = get_all_category_ids();
foreach($category_ids as $cat_id) {
  $cat_name = get_cat_name($cat_id);

  $slug=strtolower(str_replace(" ","-", $cat_name));
  ?>
  <li class="<?php echo $cat_name; ?>"><a href="<?php echo get_option('home'); ?>/category/<?php echo  $slug; ?>"><?php echo $cat_name; ?></a></li>
     
  <?php

}
?>

  </ul>

          <div class="static-links">
            <ul>
              <li class="home">
                <a href="<?php echo get_option('home'); ?>"><img alt="UP logo" src="<?php bloginfo('template_url'); ?>/images/assets/upworthy-avatar.svg" /></a>
              </li>

                 <li><a class="analytic_event" data-ga-action="Advertise" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/advertise/">Advertise</a></li>
              <li><a class="analytic_event" data-ga-action="Submit Link" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/got-something-upworthy">Submit Link</a></li>
              <li><a class="analytic_event" data-ga-action="Jobs" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/jobs/">Jobs</a></li>
              <li><a class="analytic_event" data-ga-action="About" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/about-us">About Us</a></li>
              <li><a class="analytic_event" data-ga-action="Contact" data-ga-category="General" data-ga-label="pageTitle" href="<?php echo get_option('home'); ?>/contact/">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<div>


  <!-- JavaScript Includes -->
<script src="<?php bloginfo('template_url'); ?>/js/application.js"></script>
  

  <!-- external analytics & services -->

  <script>window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src= "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);
    return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
  }(document, "script", "twitter-wjs"));</script>

    <!-- Begin Quantcast -->
    <script type="text/javascript">
    var _qevents = _qevents || [];

    (function() {
    var elem = document.createElement('script');
    elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
    elem.async = true;
    elem.type = "text/javascript";
    var scpt = document.getElementsByTagName('script')[0];
    scpt.parentNode.insertBefore(elem, scpt);
    })();

    _qevents.push({
    qacct:"p-46reRfD7EnxVE"
    });
    </script>
    <noscript>
    <div style="display:none;">
    <img src="//pixel.quantserve.com/pixel/p-46reRfD7EnxVE.gif" border="0" height="1" width="1" alt="Quantcast"/>
    </div>
    </noscript>
    <!-- End Quantcast -->

    <!-- START Parse.ly Include: Standard -->
    <div id="parsely-root" style="display: none">
      <div id="parsely-cfg" data-parsely-site="upworthy.com"></div>
    </div>
    <script>
      (function(s, p, d) {
        var h=d.location.protocol, i=p+"-"+s,
            e=d.getElementById(i), r=d.getElementById(p+"-root"),
            u=h==="https:"?"d1z2jf7jlzjs58.cloudfront.net"
            :"static."+p+".com";
        if (e) return;
        e = d.createElement(s); e.id = i; e.async = true;
        e.src = h+"//"+u+"/p.js"; r.appendChild(e);
      })("script", "parsely", document);
    </script>
    <!-- END Parse.ly Include -->


</body>
