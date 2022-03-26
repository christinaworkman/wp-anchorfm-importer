<?php
/**
 * TODO
 * check if someone is using classic or block editor
 * if classic: use custom anchor shortcode
 * if block: use custom anchor block to be made
 * 
 */
function wpafmi_create_episode() {
    // Gather post data.
    $my_post = array(
        'post_title'    => 'My post',
        'post_content'  => 'This is my post.',
        'post_status'   => 'publish',
        'post_type'     => 'anchorfm_episode',
    );
 
    // Insert the post into the database.
    wp_insert_post( $my_post );

}

//call function that grabs rss details, 
//use episode data info fromm rss.php : feed into episode data function to get all my post info