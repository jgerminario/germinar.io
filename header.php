<!doctype html>
<html>
<title>Germinar.io</title>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Source+Code+Pro|Open+Sans' rel='stylesheet' type='text/css'>
  <body>
   <main class="wrapper">
    <aside class="sidebar">
      <header class="top-left">
        <div class="logo">
          <a class="img" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/germinario.png" alt="germinar.io">
          </a>
        </div>
        <nav class="sidelinks">
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">about</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#portfolio">portfolio</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">blog</a></li>
          </ul>
        </nav>
        <div class="social">
          <a href="http://www.twitter.com/jgerminario"><img src="<?php echo get_template_directory_uri(); ?>/imgs/twitter.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/imgs/twitter_gr.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/imgs/twitter.png'" alt="Twitter"></a>
          <a href="http://www.linkedin.com/pub/jesse-germinario/15/163/b86/"><img onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/imgs/linkedin_gr.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/imgs/linkedin.png'" src="<?php echo get_template_directory_uri(); ?>/imgs/linkedin.png" alt="LinkedIn"></a>
          <a href="http://github.com/jgerminario"><img src="<?php echo get_template_directory_uri(); ?>/imgs/github.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/imgs/github_gr.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/imgs/github.png'" alt="GitHub" width="24" height="24" style="padding: 0 4px 4px 4px;"></a>
          <a href="/blog/wp-rss2.php"><img src="<?php echo get_template_directory_uri(); ?>/imgs/rss.png" width="32" height="31" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/imgs/rss_gr.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/imgs/rss.png'" alt="RSS feed"></a>
        </div>
      </header>
    </aside>