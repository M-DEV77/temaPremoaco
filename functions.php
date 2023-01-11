<?php
// tipos de posts 
require get_template_directory().'./post/imoveis.php';
require get_template_directory().'./post/obras.php';
require get_template_directory().'./post/portfolio.php';

// folhas de estilos e scripts
function premoLoadsScripts(){
    wp_enqueue_style('navbarSlider',get_template_directory_uri().'/css/navbarSlider.css',array(),'','all');
    wp_enqueue_style('wbsys3 - style', get_stylesheet_uri(),array(),filemtime(get_template_directory().'/style.css'),'all');
    wp_enqueue_script('scripts',get_template_directory_uri()."/js/index.js",array(),'2.0',true);
    wp_enqueue_script('scripts2',get_template_directory_uri()."/js/navbarSlider.js",array(),'',true);
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


