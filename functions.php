<?php

function premoLoadsScripts(){
    wp_enqueue_style('wbsys - style', get_stylesheet_uri(),array(),filemtime(get_template_directory().'/style.css'),'all');
    wp_enqueue_script('scripts',get_template_directory_uri()."/js/index.js",array(),'1.0',true);
}
    add_action("wp_enqueue_scripts","premoLoadsScripts");


