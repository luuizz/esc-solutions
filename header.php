<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo bloginfo('name') . ' | ' . get_the_title(); ?></title>
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header>
  <div class="container">
    <a href="<?php echo home_url(); ?>" class="logo" title="Ir para página Inicial">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.webp" alt="Logo da ESC Solutions">
    </a>

    <nav class="navigation">
      <?php echo get_template_part('template-parts/components/menu-functions'); ?>


      <a href="#" class="btn secondary small with-icon">
        <span>Login</span>
        <?= render_svg_icon('user', 'icon-user') ?>
      </a>

      <button id="js-btn-menu" class="btn-menu btn secondary small with-icon" tabindex="0" aria-label="Abrir Menu" role="button" aria-controls="navigation">
        <span class="btn-mobile-inner"></span>
      </button>
    </nav>

    <aside id="js-menu">
      <?php echo get_template_part('template-parts/components/menu-functions'); ?>
    </aside>
  </div>
</header>