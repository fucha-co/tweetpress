<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
              <h1>@TheLoneCuberXXX</h1>
              <div class="span12">

                <div class="row-fluid">
                  <div class="span3">
                    <img src="http://avatars.io/twitter/TheLoneCuber?size=large" alt="#" class="img-polaroid"/>
                      </div>
                  <div class="span9">
                    <h2>I cube from a land Down Under</h2>
                    <p>I'm an average Cuber, and an average Coder. I've done nothing with my life, and I have nothing to show for it.</p>
                  </div>

                  <div class="row-fluid">
                    <div class="span12 statRow">
                        <div class="span4"><span class="glyph general">\</span> 3,517 Tweets Saved</div>
                        <div class="span4"><span class="glyph general">7</span> Backed up every 5mins</div>
                        <div class="span4"><span class="glyph general">a</span> Next Back-up = 4mins</div>
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