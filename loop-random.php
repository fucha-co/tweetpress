        <?php
        $args = array( 'numberposts' => 5, 'orderby' => 'rand' );
        $lastposts = get_posts( $args );
        // Some post-related data is not available to get_posts by default, such as post content through the_content(), or the numeric ID. This is resolved by calling an internal function setup_postdata(), with the $post array as its argument: http://codex.wordpress.org/Template_Tags/get_posts
        foreach($lastposts as $post) : setup_postdata($post); ?>

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
                  <span class="spacer"></span><?php
$archive_year  = get_the_time('Y');
$archive_month = get_the_time('m');
$archive_day   = get_the_time('d');
?>
<a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>">This day's posts</a>
                </p>
            </div>
          </div>

          <hr class="short">

        <?php endforeach; ?>
