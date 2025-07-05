<?php
$feat_plans = [
  ['text' => 'Faça simulações de operações e gere contratos rapidamente'],
  ['text' => 'Consulte nossos relatórios de gestão'],
  ['text' => 'Experimente todas as funcionalidades, sem custo'],
];

?>

<section class="s-plans s-start-lp02">
  <div class="banner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/banner_cta-lp02.webp" alt="Imagem de um homem e uma mulher com segurando uma xícara de café, o homem está olhando para um tablet e realizando um pagamento.">
  </div>
  <div class="container">
    <?php 
    require_once __DIR__ . '/../components/caption.php';
    echo render_caption('comece sem compromisso'); 
    ?>
    <h2>Cadastre até 5 contratos gratuitamente e explore o ESC System na prática.</h2>
    <p>Precisa de mais? Tenha contratos, clientes e usuários ilimitados por apenas <strong>R$ 499/mês.</strong></p>

    <ul class="list-topics features-lp02">
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
      <a href="#form" class="btn primary js-btn-modal">Começar agora</a>
    </div>
  </div>
</section>