<?php

function asc_aviso_register($wp_customize){

    $wp_customize->add_section('aviso', array(
        'title' => __('Aviso do site','ascorsan'),
        'description' => __('Aviso do site','ascorsan'),
        'capability' => 'edit_theme_options',
        'priority' => 99,
    ));

    $wp_customize->add_setting('add-aviso',array(
        'default' => _x('','ascorsan'),
        'type' => 'theme_mod'

    ));

    $wp_customize->add_control('add-aviso',array(
        'type' => 'checkbox',
        'label' => __('Ativar avisos na pagina inicial?','ascorsan'),
        'section' => 'aviso',
        'priority' => 1,
    )); 

    $wp_customize->add_setting('titulo-aviso',array(
        'default' => _x('','ascorsan'),
        'type' => 'theme_mod'

    ));

    $wp_customize->add_control('titulo-aviso',array(
        'label' => __('Titulo do aviso','ascorsan'),
        'section' => 'aviso',
        'priority' => 2,
    ));

    $wp_customize->add_setting('corpo-aviso',array(
        'default' => _x('','ascorsan'),
        'type' => 'theme_mod'

    ));

    $wp_customize->add_control('corpo-aviso',array(
        'type' => 'textarea',
        'label' => __('Corpo do aviso','ascorsan'),
        'section' => 'aviso',
        'priority' => 3,
    ));
// Adicionando imagem ao aviso

    $wp_customize->add_setting('img-aviso', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'img-aviso', array(
        'section' => 'aviso',
        'description' => 'A imagem que irá no aviso quando ele estiver ativo.',
        'label' => 'Imagem do aviso',
        'mime_type' => 'image'
    )));

}

add_action('customize_register','asc_aviso_register');


?>