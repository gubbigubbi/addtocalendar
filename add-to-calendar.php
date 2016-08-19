<?php
/**
 * Plugin Name: WP Add to Calendar
 * Plugin URI: http://breezydesigns.com.au
 * Description: This plugin adds an 'Add to Calendar' button to your to posts or pages using 'Add Events' API
 * Version: 1.0.0
 * Author: Rhys Clay
 * Author URI: http://breezydesigns.com.au
 * License: GPL2
 */

if ( is_admin() ) {
     // We are in admin mode
     require_once( dirname(__file__).'/admin/add-to-calendar_admin.php' );
}

// Register styles and js
function add_my_stylesheet() {
    wp_enqueue_style( 'add-to-style', plugins_url( '/css/add-to-style.css', __FILE__ ) );
}

add_action('init', 'add_my_stylesheet');

function render_add_to_function($atts) {

$output = '';

$add_to_atts = shortcode_atts(array(
    'client-id'      => get_option('client-id'),
    'start-date'     => 'No start date set',
    'start-time'     => 'No start time set',
    'end-date'       => 'No end date set',
    'end-time'       => 'No end time set',
    'event-title'    => 'No title set',
    'event-timezone' => 'Australia/AEST',  
), $atts);

$addThis = 'https://addevent.com/dir/
?client='.wp_kses_post( $add_to_atts[ 'client-id' ] ).'
&start='.wp_kses_post( $add_to_atts[ 'start-date' ] ).'
&starttime='.wp_kses_post( $add_to_atts[ 'start-time' ] ).'
&end='.wp_kses_post( $add_to_atts[ 'end-date' ] ).'
&endtime='.wp_kses_post( $add_to_atts[ 'end-time' ] ).'
&title='.wp_kses_post( $add_to_atts[ 'event-title' ] ).'
&date_format=DD/MM/YYYY
&timezone='.wp_kses_post( $add_to_atts[ 'event-timezone' ] ).'
';

$addThis = preg_replace( "/\r|\n/", "", $addThis );

$output = '<a class="button button__add-to" target="_blank" href="'.$addThis.'">Add to Calendar</a>';
return $output;
}
 
add_shortcode('add-to-calendar','render_add_to_function'); 

