<?php
/**
 * Homepage
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

			 <div class="span9 content">
          <!-- Main hero unit for a primary marketing message or call to action -->
          <div class="hero-unit profile">
            <div class="heroIn">
            <div class="row-fluid">
              <h1>@<?php bloginfo( 'name' ); ?> <?php global $current_blog; $blog_path = $current_blog->path; echo $blog_path; ?></h1>
              <div class="span12">
                <div class="row-fluid">

                  <div class="span3">
                    <img src="http://avatars.io/twitter/<?php echo tp_NAME; ?>?size=large" alt="#" class="img-polaroid"/>
                  </div>

                  <script src="<?php echo tp_TEMPURL ;?>/js/chirp.min.js"></script>
                    <script>Chirp({
                      user:'<?php echo tp_NAME; ?>',
                      max:1,
                      templates: {
                        base: '<div class="span9 chirp">{{tweets}}</div>',
                        tweet: '<h2 class="">{{user.location}}</h2><p>{{user.description}}</p>'
                      }
                    })</script>

                  <div class="row-fluid">
                    <div class="span12 statRow">
                        <div class="span4"><span class="glyph general">\</span>
                          <?php
                            $published_posts = wp_count_posts();
                            echo $published_posts->publish;
                            ?> Tweets Memories
                        </div>
                        <?php
                              $next = wp_next_scheduled( 'ozh_ta_cron_import' );
                              $freq = $ozh_ta['refresh_interval'];
                              $now = time();
                              if( $next < $now )
                                $next = $now + $freq - 1;

                              echo '<div class="span4"><span class="glyph general">a</span> Backed Up every '.ozh_ta_seconds_to_words( $freq ) .'</div>'; ?>
                              <div class="span4"><span class="glyph general">7</span> Next BU = <span class="countdown"></span></div>
                    </div>
                  </div>

                </div>

              </div>
              </div>
            </div>
          </div>



        <!?php get_template_part ('loop') ; ?>
        <?php get_template_part ('loop-random') ; ?>


<?php get_footer(); ?>