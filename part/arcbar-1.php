<div class="progress hidden-desktop">
<?php

    $rows = get_posts_by_year();

    $total = array_shift($rows);

    foreach($rows as $row) {

      echo sprintf( '<a href="#"><div class="bar bar-1" style="width: %s;">%s</div></a>', $row->total / $total->total * 100 .'%',  $row->year );

    }

?>
</div>

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
