<?php
$feat_plans = [
  ['text' => 'Abertura da ESC'],
  ['text' => 'Assessoria Contábil'],
  ['text' => 'ESC System'],
  ['text' => 'Assessoria Jurídica'],
];

?>

<section class="s-plans">
  <div class="banner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img_plans.webp" alt="Imagem de um homem e uma mulher com segurando uma xícara de café, o homem está olhando para um tablet e realizando um pagamento.">
  </div>
  <div class="container">
    <?php 
    require_once __DIR__ . '/../components/caption.php';
    echo render_caption('oferta por tempo limitado'); 
    ?>
    <h2>Plano de adesão ESC Solutions</h2>
    <p>Tenha uma estrutura robusta e especializada para começar certo, com economia, agilidade e suporte em todas as etapas.</p>

    <ul>
      <?php foreach ($feat_plans as $item): ?>
      <li>
        <div class="icon">
          <? echo render_svg_icon('check-line', 'icon-check-line') ?>
        </div>
        <h5><?= $item['text']; ?></h5>
      </li>
      <?php endforeach; ?>
    </ul>

    <div class="buttons">
      <a href="#" class="btn primary">Começar agora</a>
      <a href="#" class="btn secondary">Fale conosco</a>
    </div>
  </div>
</section>