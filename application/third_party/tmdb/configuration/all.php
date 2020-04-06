<?php

//------------------------------------------------------------------------------
// Configuration to get all data
//------------------------------------------------------------------------------

// Global Configuration
$cnf['apikey'] = '';
$cnf['lang'] = 'en';
$cnf['timezone'] = 'Europe/Berlin';
$cnf['adult'] = false;
$cnf['debug'] = false;

// Data Return Configuration - Manipulate if you want to tune your results
$cnf['appender']['product'] = array('account_states', 'alternative_titles', 'credits', 'images','keywords', 'release_dates', 'Products', 'translations', 'similar', 'reviews', 'lists', 'changes', 'rating');
$cnf['appender']['tvshow'] = array('account_states', 'alternative_titles', 'changes', 'content_rating', 'credits', 'external_ids', 'images', 'keywords', 'rating', 'similar', 'translations', 'Products');
$cnf['appender']['season'] = array('changes', 'account_states', 'credits', 'external_ids', 'images', 'Products');
$cnf['appender']['episode'] = array('changes', 'account_states', 'credits', 'external_ids', 'images', 'rating', 'Products');
$cnf['appender']['person'] = array('product_credits', 'tv_credits', 'combined_credits', 'external_ids', 'images', 'tagged_images', 'changes');
$cnf['appender']['collection'] = array('images');
$cnf['appender']['company'] = array('products');

?>