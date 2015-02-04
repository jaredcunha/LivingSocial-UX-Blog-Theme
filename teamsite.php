<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php
/*
Template Name: My Custom Page
*/
?>

<head>
  <meta charset="utf-8">
  <title>Meet UX</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <link rel="stylesheet" href="/wp-content/themes/lsuxblog/teamsite_assets/css/style.css">
  <script src="/wp-content/themes/lsuxblog/teamsite_assets/js/libs/modernizr.js"></script>
  <!--[if lte IE 8]> <script src="js/libs/respond.js"></script><![endif]-->
</head>

<?php /*
 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endwhile; ?> */ ?>


<body>
   
  <footer id="lsHeader">
    <div class="wrap">
      <address>
        <p><a href="http://livingsocial.com"><img class="ls-logo" src="/wp-content/themes/lsuxblog/teamsite_assets/images/logo.svg" alt="LivingSocial"></a></p>
      </address>
    </div>
  </footer>

  <header id="introduction" class="module module-highlighted">
    <div class="wrap">
      <h1>
        Hi. Meet UX. 
      </h1>
      <figure>
        <img src="/wp-content/themes/lsuxblog/teamsite_assets/images/ux-app-phone.svg" alt="">
        <img src="/wp-content/themes/lsuxblog/teamsite_assets/images/ux-app-screen.svg" alt="">
        <img src="/wp-content/themes/lsuxblog/teamsite_assets/images/pizza-cat.png" alt="">
      </figure>
      <p>
        an app for people who build things with pixels 
      </p>
      <a href="#designThinking" class="btn">take a look</a>
    </div><!-- end: .wrap-->
  </header> 

  <section id="designThinking" class="module module-dark">
    <div class="wrap">
      <div class="cols-1-to-3">
        <div class="item">
          <img class="topic-icon" src="/wp-content/themes/lsuxblog/teamsite_assets/images/beaker.svg" alt="">
          <h2>
            user research
          </h2>
          <p>
            talks with users to inform content and design
          </p>
        </div><!-- end: .item -->
        <div class="item">
          <img class="topic-icon" src="/wp-content/themes/lsuxblog/teamsite_assets/images/group.svg" alt="">
          <h2>
            user interaction
          </h2>
          <p>
            makes sure that form follows user-friendly function
          </p>
        </div><!-- end: .item -->
        <div class="item">
          <img class="topic-icon" src="/wp-content/themes/lsuxblog/teamsite_assets/images/pencil.svg" alt="">
          <h2>
            studio
          </h2>
          <p>
            keeps the brand looking great in print and on the web
          </p>
        </div><!-- end: .item -->
      </div><!-- end: .cols-1-to-3 -->
      <div id='slider' class='swipe'>
        <div class='swipe-wrap'>
          <div><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/ux_site_01.jpg" alt="iPhone app"></div>
          <div><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/ux_site_02.jpg" alt="LivingSocial.com"></div>
          <div><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/ux_site_03.jpg" alt="escapes search"></div>
          <div><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/ux_site_04.jpg" alt="the love quiz"></div>
          <div><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/ux_site_05.jpg" alt="iPhone app"></div>
          <div><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/ux_site_06.jpg" alt="merchant center"></div>
          <div><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/ux_site_07.jpg" alt="cupcakes"></div>
        </div> <!-- /.swipe-wrap -->
        <ul id='position' class="bullets">
          <li class='on'></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <button id='prev' class="slider-controls prev" title="previous slide">previous</button>
        <button id='next' class="slider-controls next" title="next slide">next</button>
      </div><!-- /.swipe -->
    </div><!-- end: .wrap -->
  </section>

  <section id="turnByTurn" class="module module-highlighted">
    <div class="wrap">
      <div class="app-preview">
        <div class="desc pos-alpha">
          <h2>
            turn-by-turn directions
          </h2>
          <p>
            Features a full suite of art directors to help guide you to your destination or get you completely lost in a mist of 20% opacity.
          </p>
          </div>
        <figure>
          <img src="/wp-content/themes/lsuxblog/teamsite_assets/images/phone1.svg" alt="">
          <figcaption>so easy, it’s like someone is standing over your shoulder the whole time! <span class="arrow" id="arrowLToR"></span></figcaption>
        </figure>
      </div>
    </div><!-- end: .wrap -->
  </section>

  <section id="platforms" class="module module-light"> 
    <div class="wrap">
      <figure id="swissArmy">
        <img src="/wp-content/themes/lsuxblog/teamsite_assets/images/swiss-tool.svg" alt="">
        <img src="/wp-content/themes/lsuxblog/teamsite_assets/images/swiss-arrow.svg" alt="">
        <img src="/wp-content/themes/lsuxblog/teamsite_assets/images/swiss-pencil.svg" alt="">
        <img src="/wp-content/themes/lsuxblog/teamsite_assets/images/swiss-body.svg" alt="">
      </figure>
      <div class="content-row-wide">
        <h2 id="swissArmyTrigger">
          optimized across multiple platforms
        </h2>
        <p>
          Enjoy the skills and flexibility of a User Experience Swiss Army Knife without that useless miniature saw.
        </p>
      </div>
    </div>
  </section>

  <section id="gratuitousParallax" class="module" data-type="background" data-speed="8">
    <div class="wrap">
      <h2>Gratuitous Parallax</h2>
    </div>
  </section>

  <section id="socialNetworking" class="module module-highlighted">
    <div class="wrap">
      <div class="app-preview">
        <div class="desc pos-beta">
          <h2>
            social networking IRL
          </h2>
          <p>
            Sure, social media is great. But at the end of the day, a refill beats the hell out of a retweet. “LOL”, you say? <strong>Prove it.</strong></strong>
          </p>
        </div>
        <figure>
          <img src="/wp-content/themes/lsuxblog/teamsite_assets/images/phone2.svg" alt="">
          <figcaption>interact with the people that are on the team, not weirdos on twitter!<span class="arrow" id="arrowRToL"></span></figcaption>
        </figure>
      </div>
    </div><!-- end: .wrap -->
  </section>

  <section id="cloudConnected" class="module module-light">
    <div class="wrap">
      <figure id="cloudVisual">
        <img src="images/cloud.svg" alt="">
        <span class="cloud-item cloud-item-1"><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/gif.svg" alt=""></span>
        <span class="cloud-item cloud-item-2"><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/cat.svg" alt=""></span>
        <span class="cloud-item cloud-item-3"><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/bike.svg" alt=""></span>
        <span class="cloud-item cloud-item-4"><img src="/wp-content/themes/lsuxblog/teamsite_assets/images/pizza.svg" alt=""></span>
      </figure>
      <div class="content-row-wide">
        <h2 id="cloudVisualTrigger">
          connected to the cloud
        </h2>
        <p>
          Imagine a cloud full of cats and bourbon and GIFs and pizza and grids and bikes and probably more pizza. <strong class="block">Best. Cloud. Ever.</strong>
        </p>
      </div>
    </div>
  </section>

  <section id="etcHighlights" class="module module-dark">
    <div class="wrap">
      <div class="cols-1-to-2">
        <div class="item">
          <img class="topic-icon" src="/wp-content/themes/lsuxblog/teamsite_assets/images/bolt.svg" alt="">
          <h2>
            faster than superfast
          </h2>
          <p>
            Deadlines that turn lumps of strategy brief coal into diamonds faster than you can imagine—now, that’s working well under pressure.
          </p>
        </div>
        <div class="item">
          <img class="topic-icon" src="/wp-content/themes/lsuxblog/teamsite_assets/images/dart.svg" alt="">
          <h2>
            knows you personally
          </h2>
          <p>
            Knows you better than you know yourself due to extensive user research and definitely not from hiding in your bushes at night.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="callToAction" class="module module-highlighted">
    <div class="wrap">
      <div class="content-row-narrow">
        <h2>
          like our app?
        </h2>
        <p>
          fill out an app of your own
        </p>
        <p>
          <a href="https://corporate.livingsocial.com/browsealljobs?deep_link=/jobs/search?category=Design" class="btn">view jobs</a>
        </p>
      </div>
    </div>
  </section>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="/wp-content/themes/lsuxblog/teamsite_assets/js/libs/raphael.min.js"></script>
  <script src="/wp-content/themes/lsuxblog/teamsite_assets/js/plugins.js"></script>
  <script src="/wp-content/themes/lsuxblog/teamsite_assets/js/main.js"></script>

  <!-- NOTE: PUT ANALYTICS -->
  
</body>
</html>
