        <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <div class="hero-unit tweet" id="post-<?php the_ID(); ?>">
            <div class="heroIn">
              <h2><?php the_content(); ?></h2>
                <p class="statRow">
                  <i class="social foundicon-twitter"></i> #<?php echo get_post_meta($post->ID,'incr_number',true); ?>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                    <?php do_action( 'mtm_in_reply_to_tweet' ); ?>
                  <i class="general foundicon-clock"></i> <?php echo mtm_time_ago(); ?>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <i class="general foundicon-edit"></i> <?php the_time('g:ia M j, Y') ?>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <a href="#" class="stats" rel="popover" data-original-title="Extra Tweet Stats"><i class="general foundicon-search"></i></a>
                </p>
            </div>
          </div>

          <hr class="short">

        <?php endwhile; ?>

        <?php endif; ?>