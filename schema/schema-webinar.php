<?php 
/* 
** Schema Generator for single Webinar pages
*/

// First, let's create a function that can extract the video thumbnail URL from the YouTube video URL.
function getYouTubeThumbnail($url, $quality = 'hqdefault') {
    // Parse the URL and get the query part
    $parsed_url = parse_url($url);

    // Check if the URL has a query parameter for video ID
    if (isset($parsed_url['query'])) {
        parse_str($parsed_url['query'], $query_params);
        if (isset($query_params['v'])) {
            $video_id = $query_params['v'];
        }
    }
    // Check if the URL path contains the video ID (e.g., youtu.be short URL)
    elseif (isset($parsed_url['path'])) {
        $video_id = trim($parsed_url['path'], '/');
    } else {
        return false; // Invalid URL
    }

    // Define available quality levels
    $quality_levels = ['default', 'mqdefault', 'hqdefault', 'sddefault', 'maxresdefault'];

    // Ensure the requested quality level is valid
    if (!in_array($quality, $quality_levels)) {
        $quality = 'hqdefault';
    }

    // Return the thumbnail URL
    return "https://img.youtube.com/vi/{$video_id}/{$quality}.jpg";
}

// Declare a global $schema variable so we can access it in the function
global $schema;

// Prepare the $schema variable as an array. We will store our schema values here and convert them to JSON later in a function.
$schema = array();

// Let's grab our values from custom fields and store them in variables
$video_url = get_field('video_url', false, false);
$video_thumb = getYouTubeThumbnail($video_url);
$transcript = get_field('transcript', false, false);
$date = get_field('webinar_info')['date'];

// If date is empty, use the post date
if (empty($date)) {
  $date = get_the_date('Y-m-d');
}

// Insert the schema fields
$schema[] = array(
  '@context'  	=> 'https://schema.org',
  '@type'     	=> 'Event',
  'name'		=> get_the_title(),
  'eventAttendanceMode' => 'https://schema.org/OnlineEventAttendanceMode',
  'startDate'	=> $date,
  'endDate'		=> $date,
  "location" => array(
    "@type" => "VirtualLocation",
    "url" => get_the_permalink()
  ),
  'subjectOf' => array(
    '@type' => 'VideoObject',
    'name' => get_the_title(),
    'thumbnailUrl' => $video_thumb,
    'contentUrl' => $video_url,
    'uploadDate' => $date,
    'transcript' => $transcript
  )
);

// Here is our function that generates the schema from the $schema array, using json_encode to convert the array to JSON.
function generate_webinar_schema($schema) {
  global $schema;
  echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';
}

// Insert the script in the footer
add_action( 'wp_footer', 'generate_webinar_schema', 100 );