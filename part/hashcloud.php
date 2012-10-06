<?php
    $tags = get_tags( array('orderby' => 'count', 'order' => 'DESC', 'number' => '15'));
    if (!empty($tags)) {
    foreach($tags as $tag) {
    echo '<a href="#" rel="tooltip" title="' . $tag->count; echo ' Tweets"><code class="pull-left">' . $tag->name; echo '</code></a>';
    }
    }
?>