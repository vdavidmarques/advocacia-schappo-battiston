<?php
    
    // Registrar Custom Post Type Áreas de atuação
    function registrar_planos_saude_custom_post() {
        $labels = array(
            'name'               => 'Áreas de atuação',
            'singular_name'      => 'Área de Atuação',
            'menu_name'          => 'Áreas de atuação',
            'name_admin_bar'     => 'Área de Atuação',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo Área de Atuação',
            'new_item'           => 'Novo Área de Atuação',
            'edit_item'          => 'Editar Área de Atuação',
            'view_item'          => 'Ver Área de Atuação',
            'all_items'          => 'Todos os Áreas de atuação',
            'search_items'       => 'Pesquisar Áreas de atuação',
            'parent_item_colon'  => 'Áreas de atuação Pai:',
            'not_found'          => 'Nenhum Área de Atuação encontrado.',
            'not_found_in_trash' => 'Nenhum Área de Atuação encontrado na lixeira.'
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'area-de-atuacao' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon'          => 'dashicons-businessman' 
        );
        
        register_post_type( 'area-de-atuacao', $args );
        
    }
    add_action( 'init', 'registrar_planos_saude_custom_post' );

// Registrar Custom Post Type Equipe
function registrar_equipe_custom_post() {
    $labels = array(
        'name'               => 'Equipe',
        'singular_name'      => 'Membro da Equipe',
        'menu_name'          => 'Equipe',
        'name_admin_bar'     => 'Membro da Equipe',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Membro da Equipe',
        'new_item'           => 'Novo Membro da Equipe',
        'edit_item'          => 'Editar Membro da Equipe',
        'view_item'          => 'Ver Membro da Equipe',
        'all_items'          => 'Todos os Membros da Equipe',
        'search_items'       => 'Pesquisar Membros da Equipe',
        'parent_item_colon'  => 'Membro da Equipe Pai:',
        'not_found'          => 'Nenhum Membro da Equipe encontrado.',
        'not_found_in_trash' => 'Nenhum Membro da Equipe encontrado na lixeira.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'equipe' ), 
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ), 
        'menu_icon'          => 'dashicons-groups'
    );

    register_post_type( 'equipe', $args );
}
add_action( 'init', 'registrar_equipe_custom_post' );


// Registrar Custom Post Type cliente
function registrar_cliente_custom_post() {
    $labels = array(
        'name'               => 'Clientes',
        'singular_name'      => 'Depoimento do cliente',
        'menu_name'          => 'Depoimento dos clientes',
        'name_admin_bar'     => 'Depoimento dos clientes',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Depoimento do cliente',
        'new_item'           => 'Novo Depoimento do cliente',
        'edit_item'          => 'Editar Depoimento do cliente',
        'view_item'          => 'Ver Depoimento do cliente',
        'all_items'          => 'Todos os Membros do cliente',
        'search_items'       => 'Pesquisar Membros do cliente',
        'parent_item_colon'  => 'Depoimento do cliente Pai:',
        'not_found'          => 'Nenhum Depoimento do cliente encontrado.',
        'not_found_in_trash' => 'Nenhum Depoimento do cliente encontrado na lixeira.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cliente' ), 
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ), 
        'menu_icon'          => 'dashicons-testimonial'
    );

    register_post_type( 'cliente', $args );
}
add_action( 'init', 'registrar_cliente_custom_post' );

// Registrar Custom Post Type pergunta
function registrar_perguntas_custom_post() {
    $labels = array(
        'name'               => 'Perguntas Frequentes',
        'singular_name'      => 'Pergunta Frequente',
        'menu_name'          => 'Perguntas Frequentes',
        'name_admin_bar'     => 'Pergunta Frequente',
        'add_new'            => 'Adicionar Pergunta',
        'add_new_item'       => 'Adicionar Nova pergunta',
        'new_item'           => 'Nova pergunta',
        'edit_item'          => 'Editar pergunta',
        'view_item'          => 'Ver pergunta',
        'all_items'          => 'Todas as perguntas',
        'search_items'       => 'Pesquisar perguntas',
        'parent_item_colon'  => 'pergunta Pai:',
        'not_found'          => 'Nenhum pergunta encontrada.',
        'not_found_in_trash' => 'Nenhum pergunta encontrada na lixeira.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'perguntas-frequentes' ), 
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor'), 
        'menu_icon'          => 'dashicons-info-outline'
    );

    register_post_type( 'perguntas-frequentes', $args );
}
add_action( 'init', 'registrar_perguntas_custom_post' );
?>
