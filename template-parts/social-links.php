<?php
$social_media = [
  [
    'name' => 'Linkedin',
    'link' => '#',
    'icon' => 'icon-linkedin'
  ],
  [
    'name' => 'Instagram',
    'link' => '#',
    'icon' => 'icon-instagram'
  ],
  [
    'name' => 'Facebook',
    'link' => '#',
    'icon' => 'icon-facebook'
  ],
  [
    'name' => 'Twitter',
    'link' => '#',
    'icon' => 'icon-twitter'
  ],
  [
    'name' => 'Youtube',
    'link' => '#',
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
