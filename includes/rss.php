 <?php // Get RSS Feed(s)
include_once( ABSPATH . WPINC . '/feed.php' );

// Create an input variable to hold the RSS URL
$podcastUrl = 'https://anchor.fm/s/cbe7830/podcast/rss';
 
// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed( $podcastUrl );
 
$maxitems = 0;
 
if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly
 
    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity( 2 ); 
 
    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items( 0, $maxitems );
 
endif;
?>
 
<ul>
    <?php if ( $maxitems == 0 ) : ?>
        <li><?php _e( 'No items', 'wp-anchorfm-importer' ); ?></li>
    <?php else : ?>
        <?php // Loop through each feed item and display each item as a hyperlink. ?>
        <?php foreach ( $rss_items as $item ) :
            // Variables for RSS elements 
            $permalink = $item->get_permalink();
            $publishDate = $item->get_date('j F Y | g:i a');
            $episodeId = $item->get_date('YmdHis');
            $title = $item->get_title();
            $description = $item->get_description();
            $player = "audiofile here";
            ?>
            
            <li style="margin-left: 300px">
                <h2><a href="<?php echo esc_url( $permalink ); ?>"
                    title="<?php printf( __( 'Posted %s', 'wp-anchorfm-importer' ), $publishDate ); ?>" 
                    episodeID="<?php echo $episodeId?>">
                    <?php echo esc_html( $title ); ?>
                </a></h2>
                <p><?php echo html_entity_decode( $description ); ?></p>
                <?php echo $player ?>
            </li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>