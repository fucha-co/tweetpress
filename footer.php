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

          <hr class="short">


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
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo template_url ; ?>/assets/js/jquery.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-button.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo template_url ; ?>/assets/js/bootstrap-typeahead.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $('body').tooltip({
          selector:'[rel^=tooltip]',
          placement:'top'
      })
      $("a[rel=popover]")
        .popover({
            offset: 10,
            trigger: 'hover',
            placement: 'bottom'
        })
        .click(function(e) {
            e.preventDefault()
        })
    });
  </script>

<?php wp_footer(); ?>

</body>
</html>