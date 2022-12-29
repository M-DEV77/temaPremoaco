<?php

function premoLoadsScripts(){
    wp_enqueue_style('wbsys2 - style', get_stylesheet_uri(),array(),filemtime(get_template_directory().'/style.css'),'all');
    wp_enqueue_style('style.css',get_template_directory_uri().'/css/style.css',array(),'2','all');
    wp_enqueue_script('scripts',get_template_directory_uri()."/js/index.js",array(),'2.0',true);
}
add_action("wp_enqueue_scripts","premoLoadsScripts");

register_nav_menus(
array(
'wp_premo_menu'=>'Main menu',
'wp_premo_footer'=>'Footer menu',
'wp_premo_lateralEsquerda'=>'Lateral Esquerda',
'wp_premo_lateralDireita'=>'Lateral Direita',
)
);


