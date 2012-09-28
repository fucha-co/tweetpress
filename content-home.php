<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _s
 * @since _s 1.0
 */
?>


          <div class="hero-unit tweet" id="post-<?php the_ID(); ?>">
            <div class="heroIn">
              <h2><?php the_content(); ?></h2>
                <p class="statRow">
                  <span class="glyph general">\</span> #<?php echo get_post_meta($post->ID,'incr_number',true); ?>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>

                    <?php do_action( 'mtm_in_reply_to_tweet' ); ?>

                  <span class="glyph social">e</span> <?php echo human_time_diff( get_the_time( 'U' ) ); ?> ago
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph general">7</span> <?php the_time('g:ia M j, Y') ?>
                </p>
            </div>
          </div>



          <hr class="short">

        <?php wp_link_pages(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '_s' ), 'after' => '</div>' ) ); ?>

