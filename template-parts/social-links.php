<?php require_once 'data.php'; ?>

<ul class="social-links">
  <?php foreach ($social_media as $item): ?>
    <li>
      <a href="<?= $item['link']; ?>" target="_blank" aria-label="<?= $item['name']; ?>">
        <?= render_svg_icon(str_replace('icon-', '', $item['icon']), $item['icon']); ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>