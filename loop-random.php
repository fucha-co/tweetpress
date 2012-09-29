        <?php
        $args = array( 'numberposts' => 10, 'orderby' => 'rand' );
        $lastposts = get_posts( $args );
        // Some post-related data is not available to get_posts by default, such as post content through the_content(), or the numeric ID. This is resolved by calling an internal function setup_postdata(), with the $post array as its argument: http://codex.wordpress.org/Template_Tags/get_posts
        foreach($lastposts as $post) : setup_postdata($post); ?>

          <div class="hero-unit tweet" id="post-<?php the_ID(); ?>">
            <div class="heroIn">
              <h2><?php the_content(); ?></h2>
                <p class="statRow">
                  <span class="glyph general">\</span> #<?php echo get_post_meta($post->ID,'incr_number',true); ?>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>

                    <?php do_action( 'mtm_in_reply_to_tweet' ); ?>

                  <span class="glyph social">e</span> <?php echo mtm_time_ago(); ?>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph general">7</span> <?php the_time('g:ia M j, Y') ?>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph general">=</span>
                </p>
            </div>
          </div>

          <hr class="short">

        <?php endforeach; ?>