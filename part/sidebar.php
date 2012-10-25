

<!-- LEFT -->
          <div class="span3">

              <div class="cBlock bird fixed">

                  <i class="tweetaniOne social foundicon-twitter"></i>
                  <i class="tweetaniTwo social foundicon-twitter"></i>
                  <i class="tweetaniThree social foundicon-twitter"></i>
                  <i class="tweetaniFour social foundicon-twitter"></i>
                  <i class="tweetaniFive social foundicon-twitter"></i>
                  <i class="tweetaniSix social foundicon-twitter"></i>

              </div>
              <div class="logo top"></div>

              <div class="profile-mini" data-spy="affix" data-offset-top="300"> <!-- class="" data-spy="affix" data-offset-top="320" -->

                  <div class="row-fluid taC">
                      <img src="http://avatars.io/twitter/<?php bloginfo( 'name' ); ?>?size=large" alt="#" class="img-polaroid"/>
                      <h2 class="">@<?php bloginfo( 'name' ); ?></h2>
                      <script>Chirp({
                          user:'<?php bloginfo( 'name' ); ?>',
                          max:1,
                          templates: {
                            base: '<div class="chirp">{{tweets}}</div>',
                            tweet: '<h3 class="ffDancing fsMedium">{{user.location}}</h3><p>{{user.description}}</p>'
                            }
                          })
                      </script>

                      <div class="statRow taL">
                          <div class=""><i class="social foundicon-twitter"></i>
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

                                echo '<div class="span12"><i class="general foundicon-lock"></i> Backed Up every '.ozh_ta_seconds_to_words( $freq ) .'</div>'; ?>
                                <div class="span12"><i class="general foundicon-clock"></i> Next BU = <span class="countdown"></span></div>
                      </div>

                  </div>
              </div>

        </div>
