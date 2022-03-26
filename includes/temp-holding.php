<ul>
    <?php if ( $maxitems == 0 ) : ?>
        <li><?php _e( 'No items', 'wp-anchorfm-importer' ); ?></li>
    <?php else : ?>
        <?php // Loop through each feed item and display each item as a hyperlink. ?>
        <?php foreach ( $rss_items as $item ) :


            ?>
            
            <!-- <li style="margin-left: 300px">
                <h2><a href="<?php echo esc_url( $permalink ); ?>"
                    title="<?php printf( __( 'Posted %s', 'wp-anchorfm-importer' ), $publishDate ); ?>" 
                    episodeID="<?php echo $episodeId?>">
                    <?php echo esc_html( $title ); ?>
                </a></h2>
                <p><?php echo html_entity_decode( $description ); ?></p>
                <?php echo $player ?>
            </li> -->
        <?php endforeach; ?>
    <?php endif; ?>
</ul>