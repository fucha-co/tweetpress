<?php
/**
 * Homepage
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

        <div class="span9 content">

          <div class="hero-unit profile">
            <div class="heroIn">
            <div class="row-fluid">
              <h1>@<?php bloginfo( 'name' ); ?></h1>
              <div class="span12">
                <div class="row-fluid">

                  <div class="span3">
                    <img src="http://avatars.io/twitter/<?php bloginfo( 'name' ); ?>?size=large" alt="#" class="img-polaroid"/>
                  </div>

                  <script>Chirp({
                    user:'<?php bloginfo( 'name' ); ?>',
                    max:1,
                    templates: {
                      base: '<div class="span9 chirp">{{tweets}}</div>',
                      tweet: '<h2 class="">{{user.location}}</h2><p>{{user.description}}</p>'
                    }
                  })</script>

                  <div class="row-fluid">
                    <div class="span12 statRow">
                        <div class="span4"><i class="social foundicon-twitter"></i>
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

                              echo '<div class="span4"><i class="general foundicon-lock"></i> Backed Up every '.ozh_ta_seconds_to_words( $freq ) .'</div>'; ?>
                              <div class="span4"><i class="general foundicon-clock"></i> Next BU = <span class="countdown"></span></div>
                    </div>
                  </div>

                </div>

              </div>
              </div>
            </div>
          </div>


          <div id="tweets">

            <?php get_template_part ('part/title') ; ?>

            <?php if ( is_home() ) {
                // Returns true when 'about.php' is being used.
                 get_template_part ('loop-random') ;
                } else {
                  // Returns false when 'about.php' is not being used.
                 get_template_part ('loop') ; }
            ;?>
          </div>

          <?php get_template_part ('part/page-nav') ; ?>

        </div>

<?php get_footer(); ?>