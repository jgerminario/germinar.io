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
         <h1 class="entry-title home-title title-resp" id="topTitleResp">Jesse Germinario</h1>
      <div class="hide socialLinksFixed" id="socialLinksFixed">
        <?php get_template_part( 'social', 'links'); ?>
      </div>
    </section>
  </header>
</aside> 
<div class="right-home-section">
  <div class="top-cap" id="topTitleFixed">
   <h1 class="entry-title home-title mt-50">Jesse Germinario</h1>

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
            <h1 class="entry-title home-title mt-25" id="topTitleScroll">People&nbsp;&nbsp;>&nbsp;&nbsp;Product</h1>
          </div>
          <p>I've been around the block (or three). I started in tech as a copywriter, establishing a brand voice for a growing healthtech startup and bylining articles for Forbes, VentureBeat and FastCompany. I moved into product marketing management and nearly quadrupled traffic to a patient health portal with a tight go-to-market strategy and a drumbeat of growth hacks.</p>

          <p>Sensing that code can be mightier than words, I attended a 9-week intensive programming bootcamp, where I conceived and delivered five fully-functional apps—sometimes independently, mostly as a product or team lead. Since then I've coupled coding with marketing as the director of a hyper-lean marketing team of two at Elevate Labs. We do our own technical stunts, automate relentlessly and test incessantly.</p>

          <p>I'm a product generalist at heart, though. Nothing has as much unexplored potential to improve people's lives as the products we're capable of building today. I want to see them do more with harder problems:</p>
          <ul class="normal">
            <li><a href="#spectrum" target="_self">Reduce political polarization</a></li>
            <li><a href="#happ" target="_self">Tackle the epidemic of depression</a></li>
            <li><a href="#wakely" target="_self">Help people master their habits</a></li>
            <li><a href="#nplh" target="_self">Address inequality and imbalances of information</a></li>
          </ul>

          <p>If you care about the kind of problems we still haven't come close to fixing for everyday people, get in touch: jgerminario[at]gmail[dot]com.</p>

          <h2><a href="https://docs.google.com/document/d/1eTXLht3bJViRUBjEOOGyJN8fTCtdBBKpelhno-AIQuI/edit?usp=sharing" target="_blank">View resume »</a></h2>
          
          <a name="portfolio"></a>
          <h1 class="p-tb-lg two-three-em right-title">Portfolio</h1>

          <section class="portfolio-items">

            <article class="portfolio-item">
                  
              <h2><a name="spectrum" href="https://www.getthespectrum.com">Spectrum</a></h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/spectrum.png" alt="Spectrum"/>A Chrome extension that fights polarization by providing articles about the same topic from other perspectives.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Timeframe: November 2016-present</li>
                <li>Role: Founder, CEO, head of product, currently joined by an engineering cofounder, a design cofounder and two additional engineers</li>
                <li>Achievements: Won first place at the November 2016 Debug Politics hackathon, featured on CBS Nightbeat, <a href="https://www.ft.com/content/8ecc63ea-b4f5-11e6-ba85-95d1533d9a62?accessToken=zwAAAVnJB8YYkdOOzGPqtPUR5tO6hZXRUz2aYg.MEYCIQDGQdpc3aw8WogSZSPFkC9IjkcQe0oUeTsmBl_WV7MZpwIhAM4IRi-MARInUZWvxRsDSXcG8f4VMqg8fmtCJ7Mti3QP&sharetype=gift" target="_blank">Financial Times</a> and <a href="http://www.huffingtonpost.com/entry/5841b3fde4b0cf3f6455894f?timestamp=1480701903887" target="_blank">Huffington Post</a></li>
                <li><a href="https://github.com/spectrum-app">GitHub</a></li>
                <li><a href="https://drive.google.com/open?id=0B4oYHWoyxHvOX18xY1ZfdFpRbGc">Demo video</a></li>
                <li>Technologies: Python/Django, NLP/NLTK, machine learning and AI for article recommendation engine, JavaScript/HTML/CSS for Chrome extension</li>
              </ul>
            </article>

            <article class="portfolio-item">
              <h2><a href="https://github.com/philipshackathon2015" name="happ" target="_blank">Happ</a></h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/happ.png" alt="Happ"/>A mobile app that helps patients with life-changing illnesses maintain a positive mental and behavioral outlook</p>
              <div class="clearfix"></div>
              <ul>
                <li>Timeframe: Two day hackathon project, March 2015</li>
                <li>Role: Team/product lead and data visualization engineer, pitch presenter</li>
                <li>Achievements: Won 5th place in Philips HealthSuite Hackathon</li>
                <li><a href="assets/happ-flow.pptx" target="_blank">Pitch deck</a></li>
                <li><a href="https://www.youtube.com/watch?v=bg_YajlhtAM" target="_blank">Pitch video</a></li>
                <li>Technologies used: Javascript, D3.js, Angular/Ionic,  Node.js, Twitter and Facebook APIs, HP sentiment analysis for parsing user's social feed</li>
              </ul>
            </article>
  

            <article class="portfolio-item">
              <h2><a href="https://github.com/noplacelikehome/noplacelikehome_app" name="nplh" target="_blank">No Place Like Home</a></h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/nplh.png" alt="No Place Like Home"/>A web app equipping San Francisco renters with data to help them respond to landlord buyout offers</p>
              <div class="clearfix"></div>
              <ul>
                <li>Timeframe: Two day hackathon project, February 2015</li>
                <li>Role: Technical/product lead and full-stack engineer for two day Developer Week 2015 hackathon, pitch presenter</li>
                <li>Achievements: Led team to win 3rd place among 95 teams</li>
                <li>Languages: Ruby, Javascript, Angular, Sinatra, PostgreSQL, Zillow API and Mapbox API</li>
              </ul>
            </article>

            <article class="portfolio-item">
                      
              <h2><a href="https://github.com/jgerminario/upstarter" target="_blank">Upstarter</a></h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/upstarter.png" alt="Upstarter"/>A mobile app providing job-hunters investor-grade insight into the heated startup market</p>
              <div class="clearfix"></div>
              <ul>
                <li>Timeframe: Week-long final project, January 2015</li>
                <li>Role: Team/product lead, backend/database engineer and technical architect, pitch presenter</li>
                <li>Achievements: Led the team to learn Node, Mongo, Express, Angular, and Ionic from scratch and deliver a working product covering over 90,000 startups in a week</li>
                <li>Technologies used: Javascript, Angular/Ionic, Node.js/Express, MongoDB, geospatial querying, background jobs, oAuth, algorithmic development of 'Momentum Score'</li>
              </ul>
            </article>

            <article class="portfolio-item">
              <h2><a href="https://github.com/shinshinwu/career-bootcamp" target="_blank">Career Bootcamp</a></h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/careerbootcamp.png" alt="Career Bootcamp"/>A web app helping job hunting engineers prepare for common, crowdsourced technical interview questions.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Timeframe: March 2015-present</li>
                <li>Role: Co-creator and full-stack developer</li>
                <li>Technologies: JavaScript, Ruby, Rails, JavaScript, CSS, Amazon S3, HTML5 getUserMedia API, Record.js, OGG compression</li>
              </ul>
            </article>

            <article class="portfolio-item">
              <h2><a target="_blank" name="wakely" href="https://github.com/jgerminario/wakely">Wakely</a></h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/wakely.png" alt="Wakely"/>A web app designed to embarrass you out of bed in the morning, using Twitter oAuth.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Timeframe: December 2014</li>
                <li>Role: Full-stack development and product ideation/design (solo project)</li>
                <li>Achievements: Succeeded in getting me to wake up earlier in the morning!</li>
                <li>Technologies: Javascript, Ruby, Sinatra, Google Maps API, Twitter oAuth, Redis/Sidekiq-based scheduled background jobs, geolocation distance radius</li>
              </ul>
            </article>

            <article class="portfolio-item">
              <h2><a href="https://github.com/jgerminario/snip">Snip</a></h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/snip.png" alt="Snip gem"/>A Ruby command line gem to help you collect your code for future reference—nearly 1,000 downloads.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Timeframe: December 2014-January 2015</li>
                <li>Role: Team/product lead for initial work, solo engineering contributor for ongoing development</li>
                <li>Achievements: Downloaded over 3,000 times on <a target="_blank" href="https://rubygems.org/gems/snipgem">RubyGems</a></li>
                <li>Technologies: Ruby, BASH</li>
              </ul>
            </article> 

<!--             <article class="portfolio-item">
              <h2>New Jersey Patent Law</h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/njpl.png" alt="New Jersey Patent Law"/>A responsive, WordPress-integrated website for the law firm of Thomas J Germinario.</p>
              <div class="clearfix"></div>
              <ul>
                <li>Timeframe: September-October 2014</li>
                <li>Role: All development, UX/graphic design and marketing (SEO, SEM, content)</li>
                <li>Websites: <a target="_blank" href="http://www.newjerseypatentlaw.com">Live site (Bluehost-hosted)</a>, <a target="_blank" href="https://github.com/jgerminario/newjerseypatentlaw">GitHub (template)</a></li>
                <li>Languages: HTML, CSS, PHP, Javascript</li>
                <li>Back-end: WordPress CMS</li>
                <li>Database: MySQL</li>
              </ul>
            </article>

            <article class="portfolio-item">
              <h2>Germinar.io</h2>
              <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/germinario-port.png" alt="Germinar.io"/>My responsive professional portfolio site (where you are right now).</p>
              <div class="clearfix"></div>
              <ul>
                <li>Timeframe: November 2014-February 2015</li>
                <li>Role: All design and development</li>
                <li>Websites: <a href="http://germinar.io" target="_blank">Live deployment (Bluehost)</a>, <a target="_blank" href="https://github.com/jgerminario/germinario">GitHub (template)</a></li>
                <li>Languages: HTML, CSS, PHP, Javascript</li>
                <li>Back-end: WordPress CMS</li>
                <li>Database: MySQL</li>
              </ul>
            </article> -->

          </div>
        </section>
      </div>
    </div>
  </main>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js" type="text/javascript"></script>
  <?php get_footer(); ?>

<!-- <$> Snip </$> ->
