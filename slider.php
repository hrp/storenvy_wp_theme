<?php
 
// Enqueue Flexslider Files
 
  function wptuts_slider_scripts() {
    wp_enqueue_script( 'jquery' );
 
    wp_enqueue_style( 'flex-style', get_template_directory_uri() . '/library/css/flexslider.css' );
 
    wp_enqueue_script( 'flex-script', get_template_directory_uri() .  '/library/js/jquery.flexslider-min.js', array( 'jquery' ), false, true );
  }
  add_action( 'wp_enqueue_scripts', 'wptuts_slider_scripts' );

  function wptuts_slider_initialize() { ?>
    <script type="text/javascript" charset="utf-8">
      jQuery(window).load(function() {
        jQuery('.flexslider').flexslider({
          animation: "fade",
          direction: "horizontal",
          slideshowSpeed: 7000,
          animationSpeed: 600
        });
      });
    </script>
  <?php }
  add_action( 'wp_head', 'wptuts_slider_initialize' );

   function wptuts_slider_template() {
 
        // Query Arguments
        $args = array(
            'post_type' => 'slides',
            'posts_per_page' => 5
        ); 
 
        // The Query
        $the_query = new WP_Query( $args );
 
        // Check if the Query returns any posts
        if ( $the_query->have_posts() ) {
 
            // Start the Slider ?>
            <div class="flexslider">
                <ul class="slides">
 
                    <?php
                    // The Loop
                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li class='post slider-view'>
 
                          <?php // Check if there's a Slide URL given and if so let's a link to it
                          if ( get_post_meta( get_the_id(), 'wptuts_slideurl', true) != '' ) { ?>
                            <a href="<?php echo esc_url( get_post_meta( get_the_id(), 'wptuts_slideurl', true) ); ?>">
                            <?php } ?>
                            <div class='article-thumbnail'>
                              <?php  echo the_post_thumbnail('full'); ?>
                            </div>
                            <h2 class='article-title'><?php the_title() ;?></h2>
                            <p class='article-content'>
                              <?php echo the_excerpt(); ?>
                              <a href=<?php echo the_permalink(); ?> class='excerpt-read-more'>Read On</a>
                            </p>
                            <?php 
                        // Close off the Slide's Link if there is one
                          if ( get_post_meta( get_the_id(), 'wptuts_slideurl', true) != '' ) { ?>
                            </a>
                          <?php } ?>
 
                        </li>
                    <?php endwhile; ?>
 
                </ul><!-- .slides -->
            </div><!-- .flexslider -->
 
        <?php }
 
        // Reset Post Data
        wp_reset_postdata();
    }