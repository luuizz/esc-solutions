<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png">
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header>
  <div class="container">
    <a href="<?php echo home_url(); ?>" class="logo" title="Ir para página Inicial">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Logo da ESC Solutions">
    </a>
    <?php echo get_template_part('template-parts/components/menu-functions'); ?>

    <nav class="navigation">

      <?php
      $link_login = get_field('_link_de_login', 'option');
      if ($link_login) {
        $link_url = $link_login['url'];
        $link_title = $link_login['title'];
        $link_target = $link_login['target'] ? $link_login['target'] : '_self';
        $rel = $link_login['target'] ? 'noopener noreferrer' : '';
        ?>
      <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" rel="<?php echo esc_attr($rel); ?>"  class="btn secondary small with-icon">
        <span><?php echo esc_html($link_title); ?></span>
        <?= render_svg_icon('user', 'icon-user') ?>
      </a>
      <?php } ?>
      <button id="js-btn-menu" class="btn-menu btn secondary small with-icon" tabindex="0" aria-label="Abrir Menu" role="button" aria-controls="navigation">
        <span class="btn-mobile-inner"></span>
      </button>
    </nav>

    <aside id="js-menu">
      <?php echo get_template_part('template-parts/components/menu-functions'); ?>
    </aside>
  </div>
</header>