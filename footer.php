<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 * @since _s 1.0
 */
?>


	         <div class="row-fluid moreBtn">
            <span class="span8"><!-- Ajax Load More -->
              <button class="btn btn-block"><h2>See More Tweet Memories <span class="glyph general">x</span></h2></button>
            </span>
            <span class="span4"><!-- Ajax Load More -->
              <button class="btn btn-block"><h2>More Info <span class="glyph general">u</span></h2></button>
            </span>
          </div>

          <hr>

          <footer>
            <!-- Example row of columns -->
              <div class="row-fluid">
                <div class="span3">
                  <p>
                    <span class="glyph general">f</span> Free Trial<br>
                    <span class="glyph general">f</span> Easy Peezy<br>
                    <span class="glyph general">f</span> Safe &amp; Secure<br>
                    <span class="glyph general">f</span> $1 per month<br>
                  </p><a href="#">Try it today for free</a><p>
                  </p>
                </div>

                <div class="span9">
                  <p><strong>Don't have your Tweets backed up?</strong><br>Use MyTweetMemories to safely back-up all your tweets. It's easy, instant &amp; secure. It's also 100% independent of Twitter, so if your Twitter account ever gets hacked, banned and you just disappear like the Phantom, all your Tweets are safely stored. <strong>No passwords</strong> or authorisation requests are required. Ever.</p>

                </div>

              </div>
          </footer>


        </div><!-- /span9 -->

      </div><!-- /row -->
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster

    -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap-transition.js"></script>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap-dropdown.js"></script>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap-tab.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap-popover.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap-button.js"></script>


  <script type="text/javascript">
    jQuery(document).ready(function () {
      jQuery('body').tooltip({
          selector:'[rel^=tooltip]',
          placement:'top'
      })
      jQuery("a.username")
        .popover({
            offset: 10,
            trigger: 'hover',
            placement: 'bottom',
            html : true,
            content: function() {
            return jQuery('#username_popover').html();
            }
        })
        .click(function(e) {
            e.preventDefault()
        })
      jQuery("a.reply")
        .popover({
            offset: 10,
            trigger: 'hover',
            placement: 'bottom',
            html : true,
            content: function() {
            return jQuery('#username_popover').html();
            }
        })
        .click(function(e) {
            e.preventDefault()
        })
      jQuery("a.stats")
        .popover({
            offset: 10,
            trigger: 'hover',
            placement: 'bottom',
            html : true,
            content: function() {
            return jQuery('#extrastats_popover').html();
            }
        })
        .click(function(e) {
            e.preventDefault()
        })
    });
  </script>



      <div id="extrastats_popover" style="display: none">
        <table class="table table-condensed table-striped">
          <tbody>
            <tr>
              <td>ID</td>
              <td>#53575965498015744</td>
            </tr>
            <tr>
              <td>Client</td>
              <td>Echofon</td>
            </tr>
            <tr>
              <td>3</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>

  <script type="text/javascript">
        jQuery(function () {
          jQuery('.countdown').countdown(
            {until: '"<?php echo ozh_ta_next_update_in() ;?>"', format: 'hms', labels: ['Year', 'Month', 'Week', 'days', 'h ', 'm ', 's'], labels1: ['Year', 'Month', 'Week', 'day', 'h ', 'm ', 's']});
        });
  </script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>js/jquery.countdown.js"></script>


<?php wp_footer(); ?>

</body>
</html>