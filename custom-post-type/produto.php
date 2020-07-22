<?php 

function registrar_cpt_produto() {
    register_post_type('produto', array(
        'label' => 'Produto',
        'description' => 'Produto',
        'public' => true,
        'show_ui' => true,
        'capability_typ' => 'post',
        'rewrite' => array('slug' => 'produto', 'with-front' => true),
        'query_var' => true,
        'supports' => array('custom-fields', 'author', 'title'),
        'publicly_queryble' => true
    ));
}

add_action('init', 'registrar_cpt_produto');
?>