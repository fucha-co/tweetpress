<?php
/**
 * Template Name: Homepage
 *
 * @todo Better documentation here.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>



        <!-- RIGHT -->
        <div class="span8">
          <div class="row-fluid">
            <div class="lead">
                <div class="cBlock">
                  <p class="headline3">All your Tweets <i class="general foundicon-lock"></i> <span class="white">Backed-up</span></p>
                  <p class="headline3">All your Tweets <i class="general foundicon-calendar"></i> <span class="white">Archived</span> </p>
                  <p class="headline3">All your Tweets <i class="general foundicon-search"></i> <span class="white">Searchable</span></p>
                </div>
                <h3><span class="white">... only</span> $12 per year</span></h3>
                  <h4 class="greyLite"><span class="cta">*</span> Try before you buy. Preview yours for <span class="cta">FREE</span></h4>
                                  <!-- Start Yours in 3 Seconds -->
            </div>
          </div>

          <!?php echo do_shortcode("[create_site]"); ?>

          <?php

          ?>

          <div class="row-fluid">
             <div class="startForm">

                <form id="f1" method="post" class="form-horizontal">

                    <div class="row-fluid cta">
                        <div class="span12">
                          <h3 class="headline"><span class="cta"><i class="cta general foundicon-idea"></i> </span>Preview Yours for <span class="">FREE</span> <small> &nbsp; <strong>No signup, password or credit card needed</strong></small></h3>
                        </div>
                    </div>

                    <div class="row-fluid actions">
                      <div class="span12">
                        <div class="span7">
                          <div class="hero-unit preview" for="title">
                              <input autofocus="autofocus" tabindex="1" name="title" class="span12" size="" type="text" placeholder="">
                          </div>
                          <div class="help-block validate1"><span class="badge">1</span> Type in <strong>your</strong> Twitter name</div>
                        </div>

                        <div class="span5">
                          <div class="hero-unit button">
                            <button tabindex="2" type="button" class="fauxButton" data-toggle="collapse" data-target="#demo">Click Me, Click Me</button>
                          </div>
                          <span class="help-block"><span class="badge">2</span> Click <strong>this</strong> button</span>
                        </div>

                      </div>
                    </div>


                    <div id="demo" class="collapse in">

                        <div class="row-fluid actions">
                          <div class="span12">

                            <div class="span3">
                              <div class="hero-unit preview">
                                  <input tabindex="3" name="domain" class="span12" size="" type="text" placeholder="<?php echo $randomNum1 ;?> + <?php echo $randomNum2 ;?> =">
                              </div>
                              <span class="help-block validate2"><span class="badge">3</span> Prove you're <strong>human</strong></span>
                            </div>


                            <div class="span6">
                              <div class="hero-unit preview">
                                  <input tabindex="3" name="email" class="span12" size="" type="text" placeholder="www.">
                              </div>
                              <span class="help-block validate3"><span class="badge">4</span> Type in <strong>our</strong> website address</span>
                            </div>


                            <div class="span3">
                              <div class="hero-unit button">
                                <input tabindex="4" type="submit" name="create_site" value="Preview Yours" class="fauxButton">
                              </div>
                              <span class="help-block"><span class="badge">5</span> This is the <strong>last</strong> step</span>
                            </div>


                          </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>

          <hr id="example">


          <div class="row-fluid section">
            <h2><small class="super"><i class="colourDarker general foundicon-star"></i></small> Showcase</h2>
          </div>
          <div class="hero-unit">
            <div class="heroIn">
              <div class="row-fluid">
                <div class="span12">
                  <a href="#" rel="tooltip" data-original-title="@_joshnh"><img class="img-polaroid pull-right" src="http://avatars.io/twitter/_joshnh?size=medium" alt="@_joshnh"/></a>
                  <h2>I love the sound of skateboard wheels on the pavement. It makes me really want to go skating, but it's been too long and I don't enjoy pain.</h2>
                </div>
                <div class="span12">
                <p class="statRow">
                  <i class="general foundicon-graph"></i> #3501
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <!--
                  <i class="general foundicon-edit"></i> A reply to <a href="#" class="reply" rel="popover" data-original-title="@SomeCoat">@wbond</a>
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  -->
                  <i class="social foundicon-twitter"></i> 399 days ago
                    <span class="spacer"></span><span class="hidden-desktop"><br></span>
                  <i class="general foundicon-clock"></i> 9:53am - Sep 3, 2011
                    <span class="spacer">&nbsp;</span><span class="hidden-desktop"><br></span>
                  <a href="#" class="stats" rel="popover" data-original-title="Extra Tweet Stats"><i class="general foundicon-search"></i></a>
                </p>
                </div>
              </div>
            </div>
          </div>


          <hr id="benefits" class="short">


          <div class="row-fluid section">
            <h2><small class="super"><i class="colourDarker enclosed foundicon-mic"></i></small> Introduction</h2>
            <h3><!-- <span class="super colourDarker">(1)</span>-->Hello, I'm MyTweetMemories. I back up your Tweets, <!--<span class="super colourDarker">(2)</span>--> Organise them into archives (day/month/year), <!--<span class="super colourDarker">(3)</span>--> Make searching your old Tweets awesome, and <!--<span class="super colourDarker">(4)</span>--> Remind you of Tweets gone by. I'm so easy to use you'll think Apple made me. <span class="hashtag">#iMissSteve</span></h3>
          </div>
          <div class="row-fluid">

            <div class="span4">
              <div class="hero-unit tweet">
                <h3>Protects You</h3>
                <div class="heroIn">
                  <p class="statRow">
                    <i class="enclosed foundicon-checkmark"></i> Daily Backups
                    <br>
                    <i class="enclosed foundicon-checkmark"></i> Hourly BackUps
                    <br>
                    <i class="enclosed foundicon-checkmark"></i> 5min Backups
                    <br>
                    <i class="enclosed foundicon-checkmark"></i> Tweet Export
                  </p>
                </div>
              </div>
            </div>

            <div class="span4">
              <div class="hero-unit tweet">
                <h3>Provides You</h3>
                <div class="heroIn">
                  <p class="statRow">
                      <i class="enclosed foundicon-checkmark"></i> Independence
                      <br>
                      <i class="enclosed foundicon-checkmark"></i> Peace of Mind
                      <br>
                      <i class="enclosed foundicon-checkmark"></i> Better Twitter Search
                    </p>
                </div>
              </div>
            </div>

            <div class="span4">
              <div class="hero-unit tweet">
                <h3>Reminds You</h3>
                <div class="heroIn">
                 <p class="statRow">
                      <i class="enclosed foundicon-checkmark"></i> Relive you Tweets
                      <br>
                      <i class="enclosed foundicon-checkmark"></i> Against Suspension
                      <br>
                      <i class="enclosed foundicon-checkmark"></i> Independent of Twitter
                    </p>
                </div>
              </div>
            </div>

          </div>


          <hr id="startYours" class="short">


          <div class="row-fluid section">
            <h2><small class="super"><i class="colourDarker general foundicon-clock"></i></small> Start Yours in 3 Seconds</h2>
            <h3>How quickly can you type your Twitter name? Because that's all I need to start your very own MyTweetMemories. Just tell me @YourTwitterName and click "Start". I don't need your password, I don't need "Twitter App Authorisation", and I never send you any annoying emails. <span class="hashtag">#Ever</span></h3>
          </div>
          <div class="row-fluid">

            <div class="span4">
              <div class="hero-unit tweet">
                <h3>Easy</h3>
                <div class="heroIn">
                  <p class="statRow">
                    <i class="enclosed foundicon-checkmark"></i> Activate Once
                    <br>
                    <i class="enclosed foundicon-checkmark"></i> Use All Year
                    <br>
                    <i class="enclosed foundicon-checkmark"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="span4">
              <div class="hero-unit tweet">
                <h3>Safe</h3>
                <div class="heroIn">
                  <p class="statRow">
                      <i class="enclosed foundicon-checkmark"></i> No Passwords
                      <br>
                      <i class="enclosed foundicon-checkmark"></i> No Account Access
                      <br>
                      <i class="enclosed foundicon-checkmark"></i> No Risk
                    </p>
                </div>
              </div>
            </div>

            <div class="span4">
              <div class="hero-unit tweet">
                <h3>Simple</h3>
                <div class="heroIn">
                 <p class="statRow">
                      <i class="enclosed foundicon-checkmark"></i> In Case of Hacking
                      <br>
                      <i class="enclosed foundicon-checkmark"></i> Against Suspension
                      <br>
                      <i class="enclosed foundicon-checkmark"></i> Independent of Twitter
                    </p>
                </div>
              </div>
            </div>

          </div>


          <hr class="short">


          <div id="startIdeas" class="row-fluid section">
            <h2><small class="super"><i class="colourDarker enclosed foundicon-plus"></i></small> Start Yours +1</h2>
            <h3>You can start MyTweetMemories for *anyone* on Twitter. And the more you Start the less you pay. So show your love and start MyTweetMemories for your [partner, best friend, office affair, Twitter crush, favourite client, sporting hero, celebrity idol, your entire family, or total Twitter randoms] and pay even less. I'm the cutest, cheapest gift you'll ever give.</h3>
          </div>
          <div id="plans" class="row-fluid taC">

            <div class="span3">
              <div class="hero-unit tweet">
                <h4>Start 1</h4>
                <div class="heroIn">
                  <p class="greyest">1 Twitter Name</p>
                  <h5>$12<span class="super"></span></h5>
                  <p class="greyest">per year</p>
                  <code>$1 per month</code>
                </div>
                <h6>For You</h6>
                <h6>For a Friend</h6>
                <h6>For a Partner</h6>
                <h6>For a Stranger</h6>
              </div>
            </div>

            <div class="span3">
              <div class="hero-unit tweet">
                <h4>Start 2</h4>
                <div class="heroIn">
                  <p class="greyest">2 Twitter Names</p>
                  <h5>$10<span class="super">ea</span></h5>
                  <p class="greyest">per year</p>
                  <code>83&#65504; per month</code>
                </div>
                <h6>You +1</h6>
                <h6>For 2 Friends</h6>
                <h6>Your 2 Sisters</h6>
                <h6>Your 2 Twitter Names</h6>
              </div>
            </div>

            <div class="span3">
              <div class="hero-unit tweet">
                <h4>Start 3</h4>
                <div class="heroIn">
                  <p class="greyest">3 Twitter Names</p>
                  <h5>$8<span class="super">ea</span></h5>
                  <p class="greyest">per year</p>
                  <code>66&#65504; per month</code>
                </div>
                <h6>You +2</h6>
                <h6>For 3 Friends</h6>
                <h6>Your Small Family</h6>
                <h6>Your 3 Twitter Names</h6>
              </div>
            </div>

            <div class="span3">
              <div class="hero-unit tweet">
                <h4>Start More</h4>
                <div class="heroIn">
                  <p class="greyest">4+ Twitter Names</p>
                 <h5>$6<span class="super">ea</span></h5>
                 <p class="greyest">per year</p>
                 <code>50&#65504; per month</code>
                </div>
                <h6>You +3</h6>
                <h6>Your Family of 4</h6>
                <h6>Your 6 Best Clients</h6>
                <h6>For 50 Twitter Fans</h6>
              </div>
            </div>
            <p class="smallPrint">
              <strong>* Yes</strong>, the prices are ridiculously cheap<br>
              <strong>* No</strong>, they are not typos
            </p>

          </div>


          <hr id="start" class="short">

            <div class="row-fluid">
            <div class="lead">
                <div class="cBlock">
                  <p class="headline3"><i class="general foundicon-checkmark"></i> Start Yours <span class="white">Searchable</span></p>
                </div>
            </div>
          </div>

          <hr id="fans" class="short">


          <div class="row-fluid section">
            <h2><small class="super"><i class="colourDarker general foundicon-heart"></i></small> Already Started</h2>
          </div>
          <div class="row-fluid">
            <div class="span12">
              <div class="hero-unit">
                <div class="heroIn">

                  <p class="">Here are 20 new Users. You could be one of them</p>
                  <div id="wall" class="wall bgLoad">
                    <!--
                    <a href="#" rel="tooltip" data-original-title="@_joshnh"><img class="img-polaroid" src="http://avatars.io/twitter/_joshnh?size=medium" alt="@_joshnh"/></a>
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
                    -->
                  </div>

                </div>
              </div>
            </div>
          </div>


          <hr class="short">


          <div id="faqs" class="row-fluid section">
            <h2><small class="super"><i class="colourDarker access foundicon-question"></i></small>Frequently Asked Questions</h2>
            <h3>Do you login to my Twitter account?<small>No way Hozay. You NEVER give me your password, and I never want to know it.</small></h3>
            <h3>Do I need to "Application Authorise" you via Twitter?<small>Get outta here. Authorisations are annoying and risky. That's why you NEVER need to authorise me as an Application - because I'm a risk-free, read-only back-up tool that does nothing but protects your precious Tweets. And organises them. And makes searching them better/easier/faster. Oh yeah, and I'm cute.</small></h3>
            <h3>How many of my Tweets do you archive?<small>I go back and archive your last 3,200 tweets. Then I back-up *every new Tweet* from now until Infinity. ("Now" being the day you start your MyTweetMemories. "Infinity" being every year you pay for)</small></h3>
            <h3>Can I really start MyTweetMemories for someone else?<small>Absolutely. Tweets are public information, and freely available for anyone to read, collect and do-with-them-what-you-want. You're actually doing someone a favour by backing up their Tweets for them.</small></h3>
            <h3>My Tweets are Private. Can I use MyTweetMemories?<small>Yes you can. There's a Private Tweet package (which requires some manual configuration and a $3 surcharge). Tweet me for more info.</small></h3>
            <h3>Can I get a FREE MyTweetMemories?<small>Yes you can. I'm all for bartering, and I also need publicity. So let me know what products/skills/services you have to trade, or how many people you can promote MyTweetMemories to. Nb: Things like holidays, new cars, and MacBook Airs are sure things. Everything else will be considered.</small></h3>
            <h3>How can I contact you?<small>By Twitter, of course. A @reply or DM. * I do not do email as it's been proven that a small #FailWhale dies every time you Send &amp; Receive.</small></h3>
            <h3>Are you on FaceSook?<small> No. Way. * I do not do FaceSook as it's been proven that the entire World gets ten times stoopider every time someone logs in.</small></h3>
            <h3>I love you MyTweetMemories. Will you marry me?<small>I seriously consider all marriage proposals. Tell me your favourite wine and your coffee-of-choice, and I will judge you accordingly.</small></h3>
            <h3>I love this website. Can I buy it?<small>Kind of.</small></h3>
          </div>




<?php get_footer(); ?>