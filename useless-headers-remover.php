<?php
/*
 * Plugin Name: Useless Headers Remover
 * Description: Remove useless headers from pages
 * Version: 1.0
 * */

# <link rel="EditURI" type="application/rsd xml" title="RSD"
remove_action('wp_head', 'rsd_link');
# <link rel="wlwmanifest" type="application/wlwmanifest+xml"
remove_action('wp_head', 'wlwmanifest_link');
# <link rel='shortlink' 
remove_action('wp_head', 'wp_shortlink_wp_head');
# <meta name="generator" content="WordPress 3.4.2">
remove_action('wp_head', 'wp_generator');
# RSS feeds
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
?>
