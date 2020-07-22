<?php 

function registrar_cpt_transacao() {
    register_post_type('transacao', array(
        'label' => 'Transacao',
        'description' => 'Transacao',
        'public' => true,
        'show_ui' => true,
        'capability_typ' => 'post',
        'rewrite' => array('slug' => 'transacao', 'with-front' => true),
        'query_var' => true,
        'supports' => array('custom-fields', 'author', 'title'),
        'publicly_queryble' => true
    ));
}

add_action('init', 'registrar_cpt_transacao');
?>