<?php
$php = "i am silly";
/*
 * Plugin Name: Thomas First Plugin
 */

 function wpb_follow_us($asdf) {
 
    // Only do this when a single post is displayed
    if ( is_single() ) { 
        echo "HELLO THERE";
        echo $php;
    // Message you want to display after the post
    // Add URLs to your own Twitter and Facebook profiles
     
    $asdf .= '<p class="follow-us">If you liked this article, then please follow us on <a href="http://twitter.com/wpbeginner" title="WPBeginner on Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://www.facebook.com/wpbeginner" title="WPBeginner on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>';
     
    } 
    // Return the content
    return $asdf; 
     
    }
    // Hook our function to WordPress the_content filter
    add_filter('the_content', 'wpb_follow_us');