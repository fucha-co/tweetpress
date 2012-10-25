<?php
    $year_prev = null;
    $months = $wpdb->get_results( "SELECT DISTINCT MONTH( post_date ) AS month ,
        YEAR( post_date ) AS year,
        COUNT( id ) as post_count FROM $wpdb->posts
        WHERE post_status = 'publish' and post_date <= now( )
        and post_type = 'post'
        GROUP BY month , year
        ORDER BY year DESC, month DESC");
    foreach($months as $month) :
      $year_current = $month->year;
      if ($year_current != $year_prev){
        if ($year_prev != null){?>
          </div>
        </td>
        </tr>
        <?php } ?>
      <tr>
      <td class="specialElite">
        <?php echo $month->year; ?><br>
      </td>
      <td class="datacloud">
        <div class="cloudContain">
      <?php }

      $active_class = $month->month == (int) get_query_var('monthnum') &&  $month->year == (int) get_query_var('year') ? 'class="current_date"' : '';

        ?>

        <a rel="tooltip" title="<?php echo $month->post_count; ?> Tweets" href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
          <code <?php echo $active_class; ?>><?php echo date("M", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></code>
        </a>

    <?php $year_prev = $year_current;
    endforeach; ?>

