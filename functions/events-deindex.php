<?php
add_filter( 'wpseo_robots', function ( $robots ) {

	// Single Event pages
	if ( is_singular( 'tribe_events' ) ) {
		return 'noindex,nofollow';
	}

	// Event Category archives
	if ( is_tax( 'tribe_events_cat' ) ) {
		return 'noindex,nofollow';
	}

	// Event Tag archives
	if ( is_tax( 'post_tag' ) && get_query_var( 'post_type' ) === 'tribe_events' ) {
		return 'noindex,nofollow';
	}

	// Event archive & calendar views
	if ( is_post_type_archive( 'tribe_events' ) ) {
		return 'noindex,nofollow';
	}

	return $robots;
});
