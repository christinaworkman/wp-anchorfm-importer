 <?php // Get RSS Feed(s)
include_once( ABSPATH . WPINC . '/feed.php' );

// Create an input variable to hold the RSS URL
$podcastUrl = 'https://anchor.fm/s/cbe7830/podcast/rss';
 
// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed( $podcastUrl );
 
$maxitems = 0;
 
if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly
 
    // Figure out how many total items there are, but limit it to 2. 
    $maxitems = $rss->get_item_quantity( 2 ); 
 
    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items( 0, $maxitems );
    //error_log( '<pre>' . var_export( $rss_items, true) . '</pre>' );

endif;
?>
