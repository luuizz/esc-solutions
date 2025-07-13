<?php
$social_media = [
  [
    'name' => 'Instagram',
    'link' => 'https://www.instagram.com/escsolutions.ai/',
    'icon' => 'icon-instagram'
  ],
  [
    'name' => 'Youtube',
    'link' => 'https://www.youtube.com/@ESCsolutions-ai1',
    'icon' => 'icon-youtube'
  ]
];
?>

<ul class="social-links">
  <?php foreach ($social_media as $item): ?>
    <li>
      <a href="<?= $item['link']; ?>" target="_blank" aria-label="<?= $item['name']; ?>">
        <?= render_svg_icon(str_replace('icon-', '', $item['icon']), $item['icon']); ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
