<?php require_once 'data.php'; ?>

<div class="footer-links">
  <?php foreach ($footer_links as $section): ?>
    <div class="footer-column">
      <h6><?= $section['column']; ?></h6>
      <ul>
        <?php foreach ($section['links'] as $item): ?>
          <li>
            <a href="<?= $item['link']; ?>" target="_blank">
              <span><?= $item['name']; ?></span>
              <?php if (isset($item['icon'])): ?>
                <?= render_svg_icon(str_replace('icon-', '', $item['icon']), $item['icon']); ?>
              <?php endif; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endforeach; ?>
</div>
