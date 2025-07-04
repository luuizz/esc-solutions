<?php

//Carregat os arquivos CSS
function esc_load_styles() {
    // Estilo do plugin
    wp_enqueue_style( 'esc-plugin-style', get_template_directory_uri() . '/css/plugins.css', array(), '1.0', 'all' );

    // Estilo principal
    wp_enqueue_style( 'esc-style', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all' );
}

//Carregat os arquivos JS
function esc_load_js() {
    // Script do plugin
    wp_register_script( 'plugin-script', get_template_directory_uri() . '/js/plugins.js', array(), '1.0', true );
    wp_enqueue_script( 'plugin-script' );

    // Script principal
    wp_register_script( 'main-script', get_template_directory_uri() . '/js/all.js', array(), '1.0', true );
    wp_enqueue_script( 'main-script' );
}

//Renderizar SVGs
function render_svg_icon($name, $class = '') {
  $filename = "icon-{$name}.svg";
  $filepath = get_template_directory() . "/assets/icons/{$filename}";

  if (file_exists($filepath)) {
    $svg = file_get_contents($filepath);

    if ($class) {
      if (preg_match('/<svg[^>]*class="/', $svg)) {
        $svg = preg_replace('/<svg[^>]*class="/', '<svg class="' . esc_attr($class) . ' ', $svg, 1);
      } else {
        $svg = preg_replace('/<svg([^>]*)>/', '<svg$1 class="' . esc_attr($class) . '">', $svg, 1);
      }
    }

    return $svg;
  }

  return '<!-- Ícone não encontrado: ' . esc_html($name) . ' -->';
}

// Adiciona uma nova coluna chamada "Banner"
add_filter('manage_posts_columns', 'add_thumbnail_column');
function add_thumbnail_column($columns) {
    $new = [];
    foreach($columns as $key => $title) {
        if ($key == 'title') {
            $new['thumbnail'] = 'Banner';
        }
        $new[$key] = $title;
    }
    return $new;
}

// Mostra a thumbnail na nova coluna
add_action('manage_posts_custom_column', 'display_thumbnail_column', 10, 2);
function display_thumbnail_column($column, $post_id) {
    if ($column == 'thumbnail') {
        $thumb = get_the_post_thumbnail($post_id, [80, 80]); // 1:1 com 80px
        echo $thumb ?: '—';
    }
}

// Deixa a nova coluna "Imagem" ordenável
add_filter('manage_edit-post_sortable_columns', function($columns) {
    $columns['thumbnail'] = 'thumbnail';
    return $columns;
});

//Registrar menus
function registrar_menu() {
  register_nav_menus(
      array(
          'menu-principal' => __( 'Menu Principal' ),
      )
  );
}

//Remover os links do head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//Suporte ao tema
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');
add_action('wp_enqueue_scripts', 'esc_load_styles');
add_action( 'wp_enqueue_scripts', 'esc_load_js' );