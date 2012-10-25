

  <div class="row-fluid section">
      <div class="span12">


      <!-- ArcBar 1 -->
            <?php if(!is_front_page()):?>

                    <?php
                        global $wpdb;
                        $years = $wpdb->get_results("SELECT DISTINCT YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY  year ORDER BY post_date DESC");
                        foreach($years as $year) :
                          $totalposts = $totalposts+$year->post_count;
                        endforeach;
                    ?>

                    <div class="progress visible-phone">
                          <?php foreach($years as $year) :?>
                            <?php if( $year->post_count > 0 ) : ?>
                              <a href="#"><div class="bar bar-1" style="width: <?php echo round(($year->post_count*100)/$totalposts); ?>%;"><?php echo $year->year; ?></div></a>
                            <?php endif ?>
                          <?php endforeach; ?>
                    </div>


            <?php endif;?>




    <!-- ArcBar 2 -->
            <?php if(is_year() || is_month()):?>

                <div class="progress hidden-phone">
                    <a href="#"><div class="bar bar-1" style="width: 5%;">Jan</div></a>
                    <a href="#"><div class="bar bar-2" style="width: 10%;">Feb</div></a>
                    <a href="#"><div class="bar bar-3" style="width: 5%;">Mar</div></a>
                    <a href="#"><div class="bar bar-4" style="width: 10%;">Apr</div></a>
                    <a href="#"><div class="bar bar-5" style="width: 15%;">May</div></a>
                    <a href="#"><div class="bar bar-6" style="width: 5%;">Jun</div></a>
                    <a href="#"><div class="bar bar-7" style="width: 10%;">Jul</div></a>
                    <a href="#"><div class="bar bar-8" style="width: 10%;">Aug</div></a>
                    <a href="#"><div class="bar bar-9" style="width: 10%;">Sep</div></a>
                    <a href="#"><div class="bar bar-10" style="width: 5%;">Oct</div></a>
                    <a href="#"><div class="bar bar-11" style="width: 10%;">Nov</div></a>
                    <a href="#"><div class="bar bar-12" style="width: 5%;">Dec</div></a>
                </div>

                <div class="progress visible-phone">
                    <a href="#"><div class="bar bar-1" style="width: 9%;">J</div></a>
                    <a href="#"><div class="bar bar-2" style="width: 9%;">F</div></a>
                    <a href="#"><div class="bar bar-3" style="width: 8%;">M</div></a>
                    <a href="#"><div class="bar bar-4" style="width: 8%;">A</div></a>
                    <a href="#"><div class="bar bar-5" style="width: 8%;">M</div></a>
                    <a href="#"><div class="bar bar-6" style="width: 8%;">J</div></a>
                    <a href="#"><div class="bar bar-7" style="width: 8%;">J</div></a>
                    <a href="#"><div class="bar bar-8" style="width: 8%;">A</div></a>
                    <a href="#"><div class="bar bar-9" style="width: 8%;">S</div></a>
                    <a href="#"><div class="bar bar-10" style="width: 8%;">O</div></a>
                    <a href="#"><div class="bar bar-11" style="width: 9%;">N</div></a>
                    <a href="#"><div class="bar bar-12" style="width: 9%;">D</div></a>
                </div>

            <?php endif;?>




    <!-- ArcBar 3 -->
            <?php if(is_month()):?>
              <div class="progress hidden-phone arcDays">

                  <a href="#"><div class="bar" style="width: 3.22580645%;">1</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">2</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">3</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">4</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">5</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">6</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">7</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">8</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">9</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">10</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">11</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">12</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">13</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">14</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">15</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">16</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">17</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">18</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">19</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">20</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">21</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">22</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">23</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">24</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">25</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">26</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">27</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">28</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">29</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">30</div></a>
                  <a href="#"><div class="bar" style="width: 3.22580645%;">31</div></a>
              </div>
            <?php endif;?>


      </div>
</div>
