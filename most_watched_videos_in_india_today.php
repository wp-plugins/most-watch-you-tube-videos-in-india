<?php
/*
Plugin Name: You tube Most watch videos last week
Plugin URI: http://advertisablearena.com
Description: You tube Most watch videos last week
Version: 1.0
Author: abhijit Gaikwad
Author URI: http://advertisablearena.com
*/

function sampleHelloWorld() 
{
  echo '<iframe src ="http://advertisablearena.com/youtube/india/youtube_most_watched_videos_india.htm" width="180" height="200" frameBorder="0"> <p>Your browser does not support iframes.</p></iframe>';

}

function widget_myHelloWorld($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Most watched videos this week<?php echo $after_title;
  sampleHelloWorld();
  echo $after_widget;
}

function myHelloWorld_init()
{
  register_sidebar_widget(__('Hello World'), 'widget_myHelloWorld');     
}
add_action("plugins_loaded", "myHelloWorld_init");


 
?>