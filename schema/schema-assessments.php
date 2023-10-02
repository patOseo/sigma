<?php 

/* 
** Schema Generator for single Assessment pages
*/

// Declare a global $schema variable so we can access it in the function
global $schema;

// Prepare the $schema variable as an array. We will store our schema values here and convert them to JSON later in a function.
$schema = array();


// Insert the schema fields
$schema[] = array(
  '@context'  	=> 'https://schema.org',
  '@type'     	=> 'Product',
  'name'		=> $abbr,
  'image'		=> get_the_post_thumbnail_url(),
  'description' => get_the_excerpt(),
  'brand'		=> array(
  	'@type' => 'Brand',
  	'name'	=> 'SIGMA Assessment Systems'
  ),
  'offers'		=> array(
  	'@type'	=> 'Offer',
  	'url'	=> get_permalink(),
  	'priceCurrency' => 'CAD',
  	'price' => get_field('price_cad')
  )
);

// Here is our function that generates the schema from the $schema array, using json_encode to convert the array to JSON.
function generate_assessment_schema($schema) {
  global $schema;
  echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';
}

// Insert the script in the footer
add_action( 'wp_footer', 'generate_assessment_schema', 100 );