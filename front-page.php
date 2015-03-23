<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<aside class="sidebar">
  <header class="top-left top-header">
    <section class="sidebar-header-content">
      <?php get_template_part( 'logo' ); ?>
         <h1 class="entry-title home-title title-resp" id="topTitleResp">Full Stack Factotum</h1>
      <div class="hide socialLinksFixed" id="socialLinksFixed">
        <?php get_template_part( 'social', 'links'); ?>
      </div>
    </section>
  </header>
</aside> 
<div class="right-home-section">
  <div class="top-cap" id="topTitleFixed">
   <h1 class="entry-title home-title mt-50" >Full Stack Factotum</h1>

       <?php /* <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
              <?php endif; ?>
              <h1 class="entry-title home-title" id="topTitleFixed"><a href="#portfolio"><?php the_title(); ?></a></h1>
              <h1 class="entry-title home-title hide" id="topTitleScroll"><a href="#portfolio"><?php the_title(); ?></a></h1>
            </header>
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
          </article>
        <?php endwhile;  ?> */ ?>
      </div>
      <div class="img-wrapper">
        <img class="fullwrap" src="<?php echo get_template_directory_uri(); ?>/imgs/bench.jpg" />
      </div>
      <div class="home-content">
        <?php get_sidebar(); ?>
        <section class="content right-home-section pt-90">
          <div class="top-right">
            <h1 class="entry-title home-title hide mt-neg" id="topTitleScroll">Full Stack Factotum</h1>
          </div>
          <p>I am a software engineer with the penetrating mind of a former philosophy major, the attention to detail and organizational craft of a writer, and the get-it-done mentality of an experienced startup veteran.</p>

          <p>I do my best work at the <a href="http://germinar.io/2015/02/19/learning-engineering-bootcamp/">edge of my comfort zone</a>:</p>
          <ul class="normal">
            <li>Learned Node, Mongo, Express, Angular and Ionic from scratch in one week to lead a team to build <a href="https://github.com/jgerminario/upstarter" target="_blank">Upstarter</a>, a mobile app that helps job hunters choose from over 90,000 startups.</li>
            <li>Built and released an <a href="https://github.com/jgerminario/snip">open source code snippet gem</a> three weeks after learning Ruby.</li>
            <li>Pitched a <a href="https://github.com/noplacelikehome/noplacelikehome_app" target="_blank">renters' rights app</a> to a packed auditorium to win third place among 95 teams in the Developer Week 2015 hackathon, after leading our team's development and product efforts over two days.</li>
          </ul>
          <p>As a former startup growth marketer, I rose through four specialist and leadership positions in two and a half years, with a progressively more technical and product-oriented focus. I work hard for the right product.</p>

          <p>As a recent coding bootcamp graduate, I know more than specific technologies—I know how software is built, how to think about technical problems, and how to collaborate on code. I've delivered five fully-functional apps, gems and websites in the past four months, independently or as the leader of team projects. I learn fast and ship faster.</p>

          <p>Fresh out of 1,000 hours of constant, intensive code bootcamp study, I am looking for a challenge, especially from a fast-moving, agile team: jgerminario [at] gmail [dot] com</p>

          <!-- desktop -->
<!--           <object class="full-scr-pdf" data="<?php echo get_template_directory_uri(); ?>/imgs/resume.pdf#view=FitH" type="application/pdf" width="50%" height="50%">
              <param name="zoom" value="50%" />
              <param name="src" value="<?php echo get_template_directory_uri(); ?>/imgs/resume.pdf?#view=FitH" />
              <param name="type" value="application/pdf" /> -->
            <h2><a href="https://drive.google.com/file/d/0B4oYHWoyxHvORmY2bTFEUUVyQ2c/view?usp=sharing" target="_blank">View resume »</a></h2>
          <!-- </object> -->
          <!-- mobile -->
    <!--       <h2><a class="mobile-pdf" href="https://drive.google.com/file/d/0B4oYHWoyxHvORmY2bTFEUUVyQ2c/view?usp=sharing" target="_blank">View resume »</a></h2> -->
          
          <a name="portfolio"></a>
          <h1 class="p-tb-lg two-three-em right-title">Portfolio</h1>

          <section class="portfolio-items">

            <article class="portfolio-item">
            
              <h2>Upstarter</h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/upstarter.png" alt="Upstarter"/>A mobile app providing job-hunters investor-grade insight into the heated startup market.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Role: Team lead, backend/database engineer and technical architect for this week-long final project</li>
                <li>Websites: <a href="http://upstarter-client.herokuapp.com" target="_blank">Heroku (live deployment)</a>, <a href="https://github.com/jgerminario/upstarter" target="_blank">GitHub</a></li>
                <li>Languages: Javascript</li>
                <li>Front-end: Angular/Ionic</li>
                <li>Back-end: Node.js/Express</li>
                <li>Database: MongoDB + Mongoose ORM</li>
                <li>APIs: LinkedIn oAuth, Crunchbase API</li>
                <li>Additional technology: Geospatial querying using MongoDB, Node.js background jobs, algorithm development for startup 'Momentum Score'
                </li>
              </ul>
            </article>
              
            <article>
              <h2>Happ</h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/happ.png" alt="Happ"/>A mobile app that helps patients with life-changing illnesses maintain a positive mental and behavioral outlook.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Role: Team lead and data visualization engineer, led team to win 5th place in Philips HealthSuite Hackathon</li>
                <li>Websites: <a href="https://github.com/philipshackathon2015" target="_blank">GitHub organization (five interlinked apps built over the weekend)</a>, <a href="https://github.com/philipshackathon2015/visualizations" target="_blank">data visualization component</a>, <a href="https://drive.google.com/file/d/0B4oYHWoyxHvOU1JHM1RRRk1qT3c/view" target="_blank">pitch deck</a></li>
                <li>Languages: Javascript</li>
                <li>Front-end: Angular/Ionic</li>
                <li>Back-end: Node.js</li>
                <li>Database: MongoDB</li>
                <li>APIs: Twitter and Facebook</li>
                <li>Additional technology: HP sentiment analysis for parsing user's social feed.</li>
              </ul>
            </article>
  

            <article class="portfolio-item">
              <h2>No Place Like Home</h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/nplh.png" alt="No Place Like Home"/>A web app equipping San Francisco renters with data to help them response to landlord buyout offers.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Role: Technical/product lead and full-stack engineer for two day Developer Week 2015 hackathon, led team to win 3rd place among 95 teams</li>
                <li>Websites: <a href="https://github.com/noplacelikehome/noplacelikehome_app" target="_blank">GitHub</a>, <a target="_blank" href="http://noplacelikehome.co">Heroku (live deployment)</a></li>
                <li>Languages: Ruby, Javascript</li>
                <li>Front-end: Angular</li>
                <li>Back-end: Sinatra</li>
                <li>Database: PostgreSQL</li>
                <li>APIs: Zillow, Mapbox</li>
              </ul>
            </article>

            <article class="portfolio-item">
              <h2>Snip</h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/snip.png" alt="Snip gem"/>A Ruby command line gem to help you collect your code for future reference—nearly 1,000 downloads.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Role: Team lead for initial work, solo engineering contributor for ongoing development
                <li>Websites: <a target="_blank" href="https://rubygems.org/gems/snipgem">RubyGems</a>, <a target="_blank" href="https://github.com/jgerminario/snip">GitHub</a></li>
                <li>Languages: Ruby</li>
                <li>Environment: CLI/filesystem</li>
              </ul>
            </article> 

            <article class="portfolio-item">
              <h2>Wakely</h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/wakely.png" alt="Wakely"/>A web app designed to embarrass you out of bed in the morning, using the Twitter API.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Role: All development (full-stack) and design (solo project)</li>
                <li>Websites: <a target="_blank" href="http://wakely.herokuapp.com">Heroku (live deployment)</a>, <a target="_blank" href="https://github.com/jgerminario/wakely">GitHub</a></li>
                <li>Languages: Javascript, Ruby</li>
                <li>Front-end: Native Javascript + ERB (server-side rendering)</li>
                <li>Back-end: Sinatra</li>
                <li>Database: PostgreSQL</li>
                <li>APIs: Google Maps, Twitter oAuth</li>
                <li>Additional technology: Redis/Sidekiq-based scheduled background jobs, geolocation distance radius</li>
              </ul>
            </article>

            <article class="portfolio-item">
              <h2>New Jersey Patent Law</h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/njpl.png" alt="New Jersey Patent Law"/>A responsive, WordPress-integrated website for the law firm of Thomas J Germinario.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Role: All development, UX/graphic design and marketing (SEO, SEM, content)</li>
                <li>Websites: <a target="_blank" href="http://www.newjerseypatentlaw.com">Live site (Bluehost-hosted)</a>, <a target="_blank" href="https://github.com/jgerminario/newjerseypatentlaw">GitHub (template)</a></li>
                <li>Languages: HTML, CSS, PHP, Javascript</li>
                <li>Back-end: WordPress CMS</li>
                <li>Database: MySQL</li>
              </ul>
            </article>

          </div>
        </section>
      </div>
    </div>
  </main>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js" type="text/javascript"></script>
  <?php get_footer(); ?>

<!-- <$> Snip </$> ->
