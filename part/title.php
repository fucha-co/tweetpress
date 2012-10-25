    <div class="nav-title"> <!--data-spy="affix" data-offset-top="450"-->
        <h2 class="">
            <?php
                if ( is_home() ) {
                    printf( __( 'Random MyTweetMemories %s', '_s' ), '<span>' . single_cat_title( '', false ) . '</span>' );

                } elseif ( is_category() ) {
                    printf( __( '%s MyTweetMemories', '_s' ), '<span>' . single_cat_title( '', false ) . '</span>' );

                } elseif ( is_tag() ) {
                    printf( __( '%s MyTweetMemories', '_s' ), '<span>' . single_tag_title( '', false ) . '</span>' );

                } elseif ( is_author() ) {
                    /* Queue the first post, that way we know
                     * what author we're dealing with (if that is the case).
                    */
                    the_post();
                    printf( __( '%s MyTweetMemories', '_s' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
                    /* Since we called the_post() above, we need to
                     * rewind the loop back to the beginning that way
                     * we can run the loop properly, in full.
                     */
                    rewind_posts();

                } elseif ( is_day() ) {
                    printf( __( '%s MyTweetMemories', '_s' ), '<span>' . get_the_date() . '</span>' );

                } elseif ( is_month() ) {
                    printf( __( '%s MyTweetMemories', '_s' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

                } elseif ( is_year() ) {
                    printf( __( '%s MyTweetMemories', '_s' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

                } else {
                    _e( 'Archives', '_s' );

                }
            ?>
        </h2>
    </div>