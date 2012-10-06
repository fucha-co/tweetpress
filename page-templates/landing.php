<?php
/**
 * Template Name: MyTweetMemories Home
 *
 * @todo Better documentation here.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

add_action( 'wp_head', 'wp_no_robots' );

// Fix for page title
$wp_query->is_404 = false;

function wpmu_signup_stylesheet() {
  ?>
  <style type="text/css">
    .mu_register { width: 90%; margin:0 auto; }
    .mu_register form { margin-top: 2em; }
    .mu_register .error { font-weight:700; padding:10px; color:#333333; background:#FFEBE8; border:1px solid #CC0000; }
    .mu_register input[type="submit"],
      .mu_register #blog_title,
      .mu_register #user_email,
      .mu_register #blogname,
      .mu_register #user_name { width:100%; font-size: 24px; margin:5px 0; }
    .mu_register .prefix_address,
      .mu_register .suffix_address {font-size: 18px;display:inline; }
    .mu_register label { font-weight:700; font-size:15px; display:block; margin:10px 0; }
    .mu_register label.checkbox { display:inline; }
    .mu_register .mu_alert { font-weight:700; padding:10px; color:#333333; background:#ffffe0; border:1px solid #e6db55; }
  </style>
  <?php
}

add_action( 'wp_head', 'wpmu_signup_stylesheet' );

get_header();

do_action( 'before_signup_form' ); ?>



<div class="span12 content">

          <!-- Main hero unit for a primary marketing message or call to action -->
          <div class="hero-unit profile">
            <div class="heroIn">
            <div class="row-fluid">
              <h1>My Tweet Memories</h1>
              <h2>Your personal Twitter savior. <em>Literally</em></h2>
              <img src="<?php bloginfo('template_url'); ;?>/img/tweeted-y.png">
              <p class="headline3">All your Tweets backed-up + organised + searchable!</p>
              <p calss="headline"><?php printf( '<a href="%s" class="">%s</a>', esc_url( get_permalink() ), esc_html( get_blog_count() ) ); ?></p>
              <div class="span12">
                  <div class="row-fluid">
                    <div class="span12 statRow">
                        <div class="span4"><span class="glyph general">\</span> 3,517 Tweets Memories</div>
                        <div class="span4"><span class="glyph general">a</span>
                          <?php if( is_multisite() ): ?> Powering <?php echo get_blog_count(); ?> websites and <?php echo get_user_count(); ?> users.  <?php endif; ?> x Tweets Backed Up</div>
                        <div class="span4"><span class="glyph general">7</span> Next BU = <span class="countdown"></span></div>
                    </div>
                    <div class="span12">

                        <?php get_template_part ('part/signup') ; ?>

                    </div>
                  </div>

              </div>
              </div>
            </div>
          </div>

          <hr class="short">

        <div class="row-fluid">
          <div class="span4">
            <div class="hero-unit tweet">
              <div class="heroIn">
                <h2>Tweet Saver</h2>
                <p class="statRow">
                  <span class="glyph general">\</span> #3501
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph general">[</span> A reply to <a href="#" class="reply" rel="popover" data-original-title="@SomeCoat">@wbond</a>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph social">e</span> 7 days ago
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph general">7</span> 12:21am - Sep 18, 2012
                    <span class="spacer">&nbsp;</span><span class="hidden-desktop"><br></span>
                  <a href="#" class="stats" rel="popover" data-original-title="Extra Tweet Stats"><span class="glyph general">=</span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="span4">
            <div class="hero-unit tweet">
              <div class="heroIn">
                <h2>Tweet Searcher</h2>
                <p class="statRow">
                  <span class="glyph general">\</span> #3501
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph general">[</span> A reply to <a href="#" class="reply" rel="popover" data-original-title="@SomeCoat">@wbond</a>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph social">e</span> 7 days ago
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph general">7</span> 12:21am - Sep 18, 2012
                    <span class="spacer">&nbsp;</span><span class="hidden-desktop"><br></span>
                  <a href="#" class="stats" rel="popover" data-original-title="Extra Tweet Stats"><span class="glyph general">=</span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="span4">
            <div class="hero-unit tweet">
              <div class="heroIn">
                <h2>Tweet Nostalgia</h2>
                <p class="statRow">
                  <span class="glyph general">\</span> #3501
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph general">[</span> A reply to <a href="#" class="reply" rel="popover" data-original-title="@SomeCoat">@wbond</a>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph social">e</span> 7 days ago
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <span class="glyph general">7</span> 12:21am - Sep 18, 2012
                    <span class="spacer">&nbsp;</span><span class="hidden-desktop"><br></span>
                  <a href="#" class="stats" rel="popover" data-original-title="Extra Tweet Stats"><span class="glyph general">=</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>


          <hr class="short">


          <div class="row-fluid">
            <div class="span12">
              <div class="hero-unit tweet">
                <div class="heroIn">
                  <h2>Who's Using My Tweet Memories</h2>
                  <p class="">The 20 newest users</p>
                  <div id="wall" class="wall bgLoad">
      <a href="#" rel="tooltip" data-original-title="@TheLoneCuber"><img class="img-polaroid" src="http://avatars.io/twitter/TheLoneCuber?size=medium" alt="@TheLoneCuber"/></a>
      <a href="#" rel="tooltip" data-original-title="@LanceArmstrong"><img class="img-polaroid" src="http://avatars.io/twitter/LanceArmstrong?size=medium" alt="@LanceArmstrong"/></a>
      <a href="#" rel="tooltip" data-original-title="@ashleeadams"><img class="img-polaroid" src="http://avatars.io/twitter/ashleeadams?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@JanetteLindores"><img class="img-polaroid" src="http://avatars.io/twitter/JanetteLindores?size=medium" alt="@JanetteLindores"/></a>
      <a href="#" rel="tooltip" data-original-title="@BradleyCahill"><img class="img-polaroid" src="http://avatars.io/twitter/BradleyCahill?size=medium" alt="@BradleyCahill"/></a>
      <a href="#" rel="tooltip" data-original-title="@idiot"><img class="img-polaroid" src="http://avatars.io/twitter/idiot?size=medium" alt="@idiot"/></a>
      <a href="#" rel="tooltip" data-original-title="@Imogen_lovell"><img class="img-polaroid" src="http://avatars.io/twitter/Imogen_lovell?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@AlfredApp"><img class="img-polaroid" src="http://avatars.io/twitter/AlfredApp?size=medium" alt="@AlfredApp"/></a>
      <a href="#" rel="tooltip" data-original-title="@BarackObama"><img class="img-polaroid" src="http://avatars.io/twitter/BarackObama?size=medium" alt="@BarackObama"/></a>
      <a href="#" rel="tooltip" data-original-title="@TripleJ"><img class="img-polaroid" src="http://avatars.io/twitter/TripleJ?size=medium" alt="@TripleJ"/></a>
      <a href="#" rel="tooltip" data-original-title="@boyandbear"><img class="img-polaroid" src="http://avatars.io/twitter/boyandbear?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@randfish"><img class="img-polaroid" src="http://avatars.io/twitter/randfish?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@iA"><img class="img-polaroid" src="http://avatars.io/twitter/iA?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@SabrinaMaree"><img class="img-polaroid" src="http://avatars.io/twitter/SabrinaMaree?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@jennajameson"><img class="img-polaroid" src="http://avatars.io/twitter/jennajameson?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@toddsampsonOz"><img class="img-polaroid" src="http://avatars.io/twitter/toddsampsonOz?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@theJezabels"><img class="img-polaroid" src="http://avatars.io/twitter/theJezabels?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@elliotcondon"><img class="img-polaroid" src="http://avatars.io/twitter/elliotcondon?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@rebeccajaram"><img class="img-polaroid" src="http://avatars.io/twitter/rebeccajaram?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@iamspyro"><img class="img-polaroid" src="http://avatars.io/twitter/iamspyro?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@rageabc"><img class="img-polaroid" src="http://avatars.io/twitter/rageabc?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@placeboworld"><img class="img-polaroid" src="http://avatars.io/twitter/placeboworld?size=medium" alt="@"/></a>
      <a href="#" rel="tooltip" data-original-title="@ryancahill2"><img class="img-polaroid" src="http://avatars.io/twitter/ryancahill2?size=medium" alt="@"/></a>
       <a href="#" rel="tooltip" data-original-title="@SRAMjase"><img class="img-polaroid" src="http://avatars.io/twitter/SRAMjase?size=medium" alt="@SRAMjase"/></a>
      <a href="#" rel="tooltip" data-original-title="@CyclingTips"><img class="img-polaroid" src="http://avatars.io/twitter/CyclingTips?size=medium" alt="@CyclingTips"/></a>
      <a href="#" rel="tooltip" data-original-title="@BrittanyTess"><img class="img-polaroid" src="http://avatars.io/twitter/BrittanyTess?size=medium" alt="@BrittanyTess"/></a>
      <a href="#" rel="tooltip" data-original-title="@PandaTwatters"><img class="img-polaroid" src="http://avatars.io/twitter/PandaTwatters?size=medium" alt="@PandaTwatters"/></a>
      <a href="#" rel="tooltip" data-original-title="@AussieGrit"><img class="img-polaroid" src="http://avatars.io/twitter/AussieGrit?size=medium" alt="@AussieGrit"/></a>
   </div>

                </div>
              </div>
            </div>
          </div>


<?php get_footer(); ?>