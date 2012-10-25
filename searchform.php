<?php
/**
 * The template for displaying search forms in _s
 *
 * @package _s
 * @since _s 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">

   <input id="s" name="s" class="field" value="<?php echo esc_attr( get_search_query() ); ?>" size="16" type="text" placeholder="Search @<?php bloginfo( 'name' ); ?>'s Tweets">
   <button class="btn" type="submit" name="submit" id="searchsubmit">Search</button>

	</form>

