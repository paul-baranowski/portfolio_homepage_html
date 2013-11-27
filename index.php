<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8" />
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />
    <meta content="IE=9" http-equiv="X-UA-Compatible">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <?php if (is_search()) { ?>
       <meta name="robots" content="noindex, nofollow" /> 
    <?php } ?>
    <title>
      <?php
        if (function_exists('is_tag') && is_tag()) {
           single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
        elseif (is_archive()) {
           wp_title(''); echo ' Archive - '; }
        elseif (is_search()) {
           echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
        elseif (!(is_404()) && (is_single()) || (is_page())) {
           wp_title(''); echo ' - '; }
        elseif (is_404()) {
           echo 'Not Found - '; }
        if (is_home()) {
           bloginfo('name'); echo ' - '; bloginfo('description'); }
        else {
            bloginfo('name'); }
        if ($paged>1) {
           echo ' - page '. $paged; }
      ?>
    </title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300|Lato:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/less/grid.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/less/main.css" /> 
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script type="text/javascript"> var templateDir = "<?php bloginfo('template_directory') ?>";</script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="header_container">
        <ul id="menu" class="menu-main">
          <li class="trigger">
            <a class="menu_icon"><span>Menu</span></a>
            <nav class="menu-wrapper">
                <div class="scroller">
                  <ul class="sub_menu">
                    <li><a class="icon icon-home" href="<?php echo home_url(); ?>">Home</a></li>
                    <li>
                      <a class="icon icon-case-studies">Case Studies</a>    
                      <ul class="submenu">
                        <?php 
                          $args = array( 'post_type' => 'case_study', 'posts_per_page' => 10 );
                          $loop = new WP_Query( $args );
                          while ( $loop->have_posts() ) : $loop->the_post();
                            echo '<li><a href="'.get_permalink().'" class="icon icon-submenu">';
                            the_title();
                            echo '</a></li>';
                          endwhile;
                        ?>
                      </ul>
                    </li>
                    <li><a class="icon icon-contact" href="<?php echo home_url(); ?>/#contact">Contact</a></li>
                    <li><a class="icon icon-project-planner" href="index.php?page_id=7">Project Planner</a></li>
                  </ul>
              </div>
            </nav>
          </li>
          <li class="logo">
            <h1><span class="pure-hidden-phone">The online portfolio of</span><span class="name">Paul Baranowski</span></h1>
          </li>
        </ul>
      </div>
    </header>
    <section id="landing">
      <div class="pure-g-r">
        <div class="pure-u-3-10 landing_info_wrapper">
          <h2>Hello!</h2>
          <p class="intro_text">
            <?php the_field('intro_text'); ?>
          </p>
          <button class="btn btn_orange"><a href="index.php?page_id=7">Lets plan something</a></button>
          <p>Oh, dont forget to follow me on:</p>
          <ul class="landing_social_icons">
            <li><a data-icon="&#xe60f;" href="http://www.linkedin.com/in/pbaranowski" target="_blank"></a></li>
            <li><a data-icon="&#xe60c;" href="https://twitter.com/pBaranowski" target="_blank"></a></li>
            <li><a data-icon="&#xe60b;" href="https://github.com/derpjelly" target="_blank"></a></li>
            <li class="clearfix"><a data-icon="&#xe611;" href="http://open.spotify.com/user/1226455358/playlist/5iUNfkpf5tSAcRauxWWiuJ" target="_blank"></a></li>
          </ul>
        </div>
        <ul class="pure-u-7-10 landing_potion">
          <li class="potion_0">
            <span class="logo logo_0"></span>
            <div class="bubbles">
              <div class="bubble bubble_0 x1"></div>
              <div class="bubble bubble_0 x2"></div>
              <div class="bubble bubble_0 x3"></div>
              <div class="bubble bubble_0 x4"></div>
              <div class="bubble bubble_0 x5"></div>
            </div>
            <span class="fill fill_0"></span>
          </li>
          <li class="potion_1">
            <span class="logo logo_1"></span>
            <span class="fill fill_1"></span>
            <div class="bubbles">
              <div class="bubble bubble_1 x6"></div>
              <div class="bubble bubble_1 x7"></div>
              <div class="bubble bubble_1 x8"></div>
            </div>
          </li>
          <li class="potion_2">
            <span class="logo logo_2"></span>
            <span class="fill fill_2"></span>
            <div class="bubbles bubbles_2">
              <div class="bubble bubble_2 x1"></div>
              <div class="bubble bubble_2 x5"></div>
              <div class="bubble bubble_2 x7"></div>
            </div>
          </li>
          <li class="potion_3">
            <span class="logo logo_3"></span>
            <span class="fill fill_3"></span>
            <div class="bubbles">
              <div class="bubble bubble_3 x4"></div>
              <div class="bubble bubble_3 x6"></div>
              <div class="bubble bubble_3 x9"></div>
            </div>
          </li>
          <li class="potion_4">
            <span class="logo logo_4"></span>
            <span class="fill fill_4"></span>
            <div class="bubbles bubbles_4">
              <div class="bubble bubble_4 x8"></div>
              <div class="bubble bubble_4 x4"></div>
              <div class="bubble bubble_4 x3"></div>
              <div class="bubble bubble_4 x6"></div>
              <div class="bubble bubble_4 x9"></div>
            </div>
          </li>
        </ul>
      </div>  
    </section>
    <section id="services">
      <div class="pure-g-r services_container">
        <div class="pure-u-1-4 indi_service circle_1">
          <span class="service_content ui">
            <span></span>
          </span>
          <h3 class="ui">UI / UX</h3>
        </div>
        <div class="pure-u-1-4 indi_service circle_2">
          <span class="service_content dev">
            <span></span>
          </span>
          <h3 class="dev">Front &amp; Backend <br> Development</h3>
        </div>
        <div class="pure-u-1-4 indi_service circle_3">
          <span class="service_content mobile"> 
            <span></span>
          </span>
          <h3 class="mobile">Mobile &amp; Responsive <br> Design</h3>
        </div>
        <div class="pure-u-1-4 indi_service circle_4">
          <span class="service_content wp">
            <span></span>
          </span>
          <h3 class="wp">WordPress Theme <br> Design &amp; Development</h3>
        </div>
        <h2 class="pure-u-1 title">Stuff I like to do</h2>
        <h2 class="pure-u-1 desc ui">UI / UX</h2>
        <h2 class="pure-u-1 desc dev">Front &amp; Backend Development</h2>
        <h2 class="pure-u-1 desc mobile">Mobile &amp; Responsive Design</h2>
        <h2 class="pure-u-1 desc wp">WordPress Theme Design &amp; Development</h2>
        <div class="service_bg"></div>
      </div>
    </section>
    <section id="home_work">
      <h2>Case Studies</h2>
      <div class="home_work_container">
        <ul class="pure-g-r">
          <?php 
  	        $args = array( 'post_type' => 'case_study', 'posts_per_page' => 10 );
  	        $loop = new WP_Query( $args );
  	        while ( $loop->have_posts() ) : $loop->the_post();
          ?>
          <li class="pure-u-1-2">
            <div class="home_work_sample">
              <h3 style="color:#<?php the_field('project_color'); ?>"><?php the_title(); ?></h3>
              	<a href="<?php echo get_permalink(); ?>">
                		<?php echo get_the_post_thumbnail($page->ID, 'full'); ?>
                	</a>
              <p><?php the_field('about'); ?></p>
            </div>
          </li>
  		    <?php endwhile; ?>
        </ul>
      </div>
    </section>
    <section id="contact">
      <div class="pure-g-r">
        <h2 class="pure-u-1">Contact me and let’s start something cool!</h2>
        <div class="pure-u-1">
          <form id="contact_form" class="contact_form">
            <div class="contact_form_tier" id="contact_tier0">
              Hi, let start with your name! 
              <span id="fname" contenteditable="true" class="required" data-ph="Tom"/></span>
            </div>
            <div class="contact_form_tier" id="contact_tier1">
              Ok, and how about an email?
              <span id="email" contenteditable="true" class="required" data-ph="enter@here.com"/></span>
            </div>
            <div class="contact_form_tier" id="contact_tier2">
              Sweet, now talk to me!<br>
              <span id="message" contenteditable="true" class="required" data-ph="Message goes here!"/></span><br>
              <button class="contact_submit btn_orange btn" type="submit"></button>
            </div>
          </form>
        </div>
        <div class="pure-u-3-5">
          <h3>Have a project in mind? Click there now!</h3>
        </div>
        <div class="pure-u-1-5 pure-hidden-phone">
          <img class="prjct_planr_arrow" src="<?php echo $upload_dir['baseurl']; ?>/core_img/arrow_0.png"/>
        </div>
        <div class="pure-u-1-5">
          <a class="prjct_planr_btn" href="index.php?page_id=7">
            <img src="<?php echo $upload_dir['baseurl']; ?>/core_img/project_planner_icon.png"/>
          </a>
        </div>
      </div>
    </section>
    <section id="clients">
      <div class="pure-g-r">
        <h2 class="pure-u-1">It was a blast working with</h2>
        <ul class="client_list">
          <li class="pure-u-1-5"><img src="<?php echo $upload_dir['baseurl']; ?>/temp/bloomingdales.png"></li>
          <li class="pure-u-1-5"><img src="<?php echo $upload_dir['baseurl']; ?>/temp/flint_tinder.png"></li>
          <li class="pure-u-1-5"><img src="<?php echo $upload_dir['baseurl']; ?>/temp/lib.png"></li>
          <li class="pure-u-1-5"><img src="<?php echo $upload_dir['baseurl']; ?>/temp/cuny.png"></li>
          <li class="pure-u-1-5"><img src="<?php echo $upload_dir['baseurl']; ?>/temp/yard.jpg"></li>
        </ul>
      </div>
    </section>
    <footer>
      <?php $upload_dir = wp_upload_dir(); ?>
      <div class="pure-g-r">
        <div class="pure-u-1-2">
          <h2>The End</h2>
          <span>Copyright &copy; 2013. All rights reserved.</span>
        </div>
        <div class="pure-u-1-2 pure-hidden-phone">
          <img src="<?php echo $upload_dir['baseurl']; ?>/core_img/footer_vial.png"/>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <script>
      new menu_js( document.getElementById( 'menu' ) );
    </script>
  </body>
</html>
