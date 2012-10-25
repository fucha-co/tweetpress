<!-- Nav -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">

          <div class="row-fluid">

             <div class="span3">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <a class="brand" href="/">MyTweetMemories</a>
              </div><!--/.span3 -->

              <div class="span9">
                <div class="nav-collapse collapse">
                  <div class="row-fluid">


                    <div class="span8">
                      <ul class="nav">
                        <?php if(is_front_page()):?>
                                  <li class="active"><a href="/">Random</a></li>
                             <?php else: ?>
                                  <li><a href="<?php bloginfo( 'url' ); ?>">Random</a></li>
                        <?php endif;?>
                        <?php wp_get_archives('type=yearly'); ?>
                      </ul>
                    </div><!--/.span4 -->

                    <div class="span4 input-append searchbar  pull-right">
                        <?php get_search_form(); ?>
                    </div><!--/.span8 -->

                  </div><!--/.row-fluid -->
                </div><!--/.nav-collapse -->
              </div><!--/.span9 -->

          </div><!--/.row-fluid -->
        </div><!--/.container -->
      </div><!--/.navbar-inner -->

      <?php if ( ! is_page('home')) {?>
        <?php get_template_part ('part/arcbar') ; ?>
      <?php }?>

    </div><!--/.navbar -->
<!-- /NAV -->