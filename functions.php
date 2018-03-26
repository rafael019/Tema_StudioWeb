<?php
// Função para carregar estilos e ecripts
    function carrega_scripts(){
        // Função que carrega estilos
        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
        // Função carrega scripts JS
        wp_enqueue_script('bootstrap-js' , get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
        wp_enqueue_script('template' , get_template_directory_uri(). '/js/template.js', array(), null, true);
    }

    add_action('wp_enqueue_scripts', 'carrega_scripts');
?>