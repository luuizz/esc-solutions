<?php
$footer_links = [
  [
    'column' => 'Conheça',
    'links' => [
      [ 'name' => 'Buscar crédito', 'link' => '#' ],
      [ 'name' => 'Abrir minha ESC', 'link' => '#' ],
      [ 'name' => 'ESC System', 'link' => '#' ],
      [ 'name' => 'Análise de crédito', 'link' => '#' ],
    ]
  ],
  [
    'column' => 'Conteúdo',
    'links' => [
      [ 'name' => 'Notícias', 'link' => '#blog' ],
      [ 'name' => 'Artigos', 'link' => '#' ],
      [ 'name' => 'Política de Privacidade', 'link' => '#' ],
    ]
  ],
  [
    'column' => 'Atendimento',
    'links' => [
      [
        'name' => '(61) 98158-4546',
        'link' => 'https://api.whatsapp.com/send?phone=5561981584546&text=Ol%C3%A1,%20gostaria%20de%20fazer%20um%20or%C3%A7amento.',
        'icon' => 'icon-whatsapp-line'
      ],
      [
        'name' => 'faleconosco@emprestalegal.com.br',
        'link' => 'mailto:faleconosco@emprestalegal.com.br',
      ],
    ]
  ]
];

?>

<div class="footer-links">
  <?php foreach ($footer_links as $section): ?>
    <div class="footer-column">
      <h6><?= $section['column']; ?></h6>
      <ul>
        <?php foreach ($section['links'] as $item): ?>
          <li>
            <a href="<?= $item['link']; ?>">
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
