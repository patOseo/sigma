<?php

global $post;

// Declare a global $schema variable so we can access it in the function
global $schema;

// Prepare the $schema variable as an array. We will store our schema values here and convert them to JSON later in a function.
$schema = array();

$email = get_field('email');
$phone = get_field('phone_1', 'option');
$city = 'London';
$country = 'Canada';
$postalcode = 'N6A 4K3';
$streetaddress = '361 Princess Ave';
$social = get_field('linkedin');
$position = get_field('position');
if(get_field('image')) {
    $member_img = get_field('image');
} else {
    $member_img = 10611;
}

// Insert the schema fields
$schema[] = array(
  '@context'  => 'https://schema.org',
  '@type'     => 'Person',
  'image'     => wp_get_attachment_image_url($member_img, 'full'),
  'jobTitle'  => $position,
  'name'      => get_the_title(),
  'email'   => $email,
  'sameAs'    => $social,
  'telephone' => $phone,
  'url'       => get_permalink(),
  'address'   => array(
    '@type' => 'PostalAddress',
    'addressLocality' => $city,
    'addressRegion'   => $country,
    'postalCode'      => $postalcode
  ),
  'worksFor' => array(
    '@type' => 'Organization',
    'name'  => 'SIGMA Assessment Systems Inc.',
    'url'   => 'https://www.sigmaassessmentsystems.com/'
  )
);


// Here is our function that generates the schema from the $schema array, using json_encode to convert the array to JSON.
function sigma_generate_person_schema($schema) {
  global $schema;
  echo '<script type="application/ld+json">'. json_encode($schema) .'</script>';
}

// Insert the script in the footer
add_action( 'wp_footer', 'sigma_generate_person_schema', 100 );

?>