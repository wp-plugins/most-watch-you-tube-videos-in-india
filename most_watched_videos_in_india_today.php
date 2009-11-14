<?php
/*
Plugin Name: Most watched videos in India today
Plugin URI: http://advertisablearena.com
Description: You tube Most watch videos last week
Version: 1.0
Author: abhijit Gaikwad
Author URI: http://advertisablearena.com
*/

function sampleIndVid() 
{
  echo '<iframe src ="http://advertisablearena.com/youtube/india/youtube_most_watched_videos_india.htm" width="180" height="200" frameBorder="0"> <p>Your browser does not support iframes.</p></iframe>';

}

function widget_myIndVid($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Most watched videos in India today<?php echo $after_title;
  sampleIndVid();
  echo $after_widget;
}

function myIndVid_init()
{
  register_sidebar_widget(__('Most watched videos in India today'), 'widget_myIndVid');     
}
add_action("plugins_loaded", "myIndVid_init");


 
?>