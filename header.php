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
      <ul class="links">
        <?php 
          $menu_items = wp_get_nav_menu_items('menu-principal');
          $menu = [];
          foreach ($menu_items as $item) {
            if ($item->menu_item_parent == 0) {
              $menu[$item->ID] = [
                'item' => $item,
                'children' => []
              ];
            }
          }

          foreach ($menu_items as $item) {
            if ($item->menu_item_parent != 0 && isset($menu[$item->menu_item_parent])) {
              $menu[$item->menu_item_parent]['children'][] = $item;
            }
          }

        ?>

        <?php foreach ($menu as $entry): 
            $item = $entry['item'];
            $classes = implode(' ', $item->classes);
            $title = trim(strtolower($item->title));
            $has_submenu = !empty($entry['children']);
            $target = !empty($item->target) ? ' target="' . htmlspecialchars($item->target) . '"' : '';
        ?>
            <li class="menu-item <?= $has_submenu ? 'has-submenu' : '' ?> <?= $classes ?>">
              <?php if ($has_submenu): ?>
                <div class="menu-top-level">
                  <span class="menu-title"><?= $item->title ?></span>
                  <?php echo render_svg_icon('arrow-down-s-line', 'icon-arrow-down-s-line') ?>
                </div>
                <ul class="submenu">
                  <?php foreach ($entry['children'] as $child): 
                      $child_target = !empty($child->target) ? ' target="' . htmlspecialchars($child->target) . '"' : '';
                  ?>
                    <li class="submenu-item <?= implode(' ', $child->classes) ?>">
                      <a href="<?= $child->url ?>" class="<?= implode(' ', $child->classes) ?>"<?= $child_target ?>>
                        <?= $child->title ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php else: ?>
                <?php if ($title === 'fale conosco'): ?>
                  <button class="menu-link <?= $classes ?>"<?= $target ?>><?= $item->title ?></button>
                <?php else: ?>
                  <a href="<?= $item->url ?>" class="menu-link <?= $classes ?>"<?= $target ?>>
                    <?= $item->title ?>
                  </a>
                <?php endif; ?>
              <?php endif; ?>
            </li>
        <?php endforeach; ?>
      </ul>

      <a href="#" class="btn secondary small with-icon">
        <span>Login</span>
        <?= render_svg_icon('user', 'icon-user') ?>
      </a>

      <button id="js-btn-menu" class="btn-menu btn secondary small with-icon" tabindex="0" aria-label="Abrir Menu" role="button" aria-controls="navigation">
        <span class="btn-mobile-inner"></span>
      </button>
    </nav>
  </div>
</header>