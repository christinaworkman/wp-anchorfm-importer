<ul>
    <?php if ( $maxitems == 0 ) : ?>
        <li><?php _e( 'No items', 'pod-import-anchorfm' ); ?></li>
    <?php else : ?>
        <?php // Loop through each feed item and display each item as a hyperlink. ?>
        <?php foreach ( $rss_items as $item ) :


            ?>
            
            <!-- <li style="margin-left: 300px">
                <h2><a href="<?php echo esc_url( $permalink ); ?>"
                    title="<?php printf( __( 'Posted %s', 'pod-import-anchorfm' ), $publishDate ); ?>" 
                    episodeID="<?php echo $episodeId?>">
                    <?php echo esc_html( $title ); ?>
                </a></h2>
                <p><?php echo html_entity_decode( $description ); ?></p>
                <?php echo $player ?>
            </li> -->
        <?php endforeach; ?>
    <?php endif; ?>
</ul>