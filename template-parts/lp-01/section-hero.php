<section class="s-hero">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/element-top.svg" alt="Elemento decorativo">
  <div class="container">
    <div class="content">
      <?php 
          require_once __DIR__ . '/../components/caption.php';
          echo render_caption('soluções de crédito'); 
      ?>
    <h1>Já se imaginou como empresário do mercado financeiro</h1>
    <h2>Você pode ser um.</h2>
    <p>Nós temos todas as soluções para você abrir e administrar a sua própria Empresa Simples de Crédito.</p>
    </div>
  </div>
</section>

<section class="s-ctas">
  <div class="container">
    <a href="#" class="btn primary">Abrir minha ESC</a>
    <a href="#" class="btn secondary with-icon">
      <span>Veja como funciona</span>
      <?= render_svg_icon('play-circle-line', 'icon-play-circle-line') ?>
    </a>
  </div>
</section>