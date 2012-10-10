<div class="span3">
          <div class="hero-unit sidenav">
              <h2 class="taC">@<?php bloginfo( 'name' ); ?></h2>
              <ul id="myTab" class="nav nav-tabs">
                <li class="active">
                  <a href="#Archives" data-toggle="tab" rel="tooltip" title="Archives"><span class="glyph general">i</span></a>
                </li>
                <li class="">
                  <a href="#HashTagCloud" data-toggle="tab" rel="tooltip" title="Hashtags"><span class="glyph">#</span></a>
                </li>
                <li>
                  <a href="#Search" data-toggle="tab" rel="tooltip" title="Search"><span class="glyph general">=</span></a>
                </li>
                <li>
                  <a href="#Stats" data-toggle="tab" rel="tooltip" title="Profile"><span class="glyph general">/</span></a>
                </li>
<!--  --> <!--
LIVE
                <li>
                  <a href="#Profile" data-toggle="tab" rel="tooltip" title="Profile"><span class="glyph general">3</span></a>
                </li>
-->
                <li>
                  <a href="#ColourCloud" data-toggle="tab" rel="tooltip" title="Colour Variations"><span class="glyph general">a</span></a>
                </li>
              </ul>

              <div id="myTabContent" class="tab-content">

                <div class="tab-pane fade active in" id="Archives">
                  <h3>Archives</h3>
                  <table class="table table-hover">
                      <tbody>

                        <?php get_template_part ('part-sql-arccloud') ; ?>

                      </tbody>
                  </table>
                </div>

                <div class="tab-pane fade" id="HashTagCloud">
                  <h3>Hashtag Cloud</h3>
                  <table class="table">
                      <tbody>
                        <tr>
                          <td class="datacloud noBord">
                            <div class="cloudContain">

                              <?php get_template_part ('part-sql-hashcloud') ; ?>

                            </div>
                          </td>
                        </tr>
                      </tbody>
                  </table>
                </div>

                <div class="tab-pane fade" id="Search">
                  <h3>Search</h3>
                  <table class="table">
                      <tbody>
                        <tr>
                          <td class="datacloud noBord">
                            <div class="input-append">
                              <input class="input" id="appendedInputButton" size="16" type="text" placeholder="Type to start searching ...">
                              <button class="btn btn-block mt10" type="button">Search</button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                  </table>
                </div>

                <div class="tab-pane fade" id="Stats">
                  <h3>Stats</h3>
                  <table class="table table-hover">
                      <tbody>
                         <tr>
                          <td class="noBord">Name</td>
                          <th class="noBord">TheLoneCuber</th>
                        </tr>
                        <tr>
                          <td>Username</td>
                          <th>@TheLoneCuber</th>
                        </tr>
                        <tr>
                          <td>Tweets</td>
                          <th>3539</th>
                        </tr>
                        <tr>
                          <td>Followers</td>
                          <th>173</th>
                        </tr>
                        <tr>
                          <td>Following</td>
                          <th>714</th>
                        </tr>
                        <tr>
                          <td>Backed Up</td>
                          <th>Every 5mins</th>
                        </tr>
                        <tr>
                          <td>Next Backed Up</td>
                          <th>5mins 20secs</th>
                        </tr>
                      </tbody>
                  </table>
                </div>
<!--
                <div class="tab-pane fade" id="Profile">
                  <table class="table table-hover">
                      <tbody>
                        <tr>
                          <td>First Tweet</td>
                          <th>2010-09-12 14:33</th>
                        </tr>
                        <tr>
                          <td>Listed</td>
                          <th>3</th>
                        </tr>
                        <tr>
                          <td>Link Ratio</td>
                          <th>3%</th>
                        </tr>
                        <tr>
                          <td>Reply Ratio</td>
                          <th>63%</th>
                        </tr>
                      </tbody>
                  </table>
                </div>
-->

                <div class="tab-pane fade" id="ColourCloud">
                  <h3>30 Fresh, Funky Colours</h3>
                  <table class="table">
                      <tbody>
                        <tr>
                          <td class="datacloud noBord">
                            <div class="cloudContain">
                              <a href="#" rel="tooltip bgBlack" title="126 Tweets"><code class="pull-left bgApricot">Apricot</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgAqua">Aqua</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgBlue">Blue</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgBrown">Brown</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgCamel">Camel</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgCox">Cox</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgFig">Fig</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgFrost">Frost</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgGold">Gold</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgGreen">Green</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgGrey">Grey</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgHero">Hero</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgIgloo">Igloo</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgLime">Lime</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgMint">Mint</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgMelon">Melon</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgMocha">Mocha</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgNude">Nude</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgOlive">Olive</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgOrange">Orange</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgOxygen">Oxygen</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgPink">Pink</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgPeach">Peach</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgPurple">Purple</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgRed">Red</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgSalmon">Salmon</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgSand">Sand</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgSlate">Slate</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgSun">Sun</code></a>
                              <a href="#" rel="tooltip" title="126 Tweets"><code class="pull-left bgViolet">Violet</code></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>