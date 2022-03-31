<?php 

/**
 * Returns episode information from the provided Simple Pie object
 * 
 * @param object $episode Simple Pie object
 * @return array $episode_data All of the information needed to display in the Episode post type
 */
function piafm_get_episode_data($episode) {
    $permalink = $episode->get_permalink();
    $publishDate = $episode->get_date('j F Y | g:i a');
    $episodeId = $episode->get_date('YmdHis');
    $title = $episode->get_title();
    $description = $episode->get_description();
    $player = $episode->get_link();
    $embed_url = str_replace("episodes", "embed", $player);
    $episode_data = array(
        "permalink" => $permalink,
        "publishDate" => $publishDate,
        "episodeId" => $episodeId,
        "title" => $title,
        "description" => $description,
        "url" => $embed_url,
    );
    return $episode_data;
}
