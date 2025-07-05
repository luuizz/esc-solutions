<section class="s-hero s-lp-02" id="form">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/element-top.svg" alt="Elemento decorativo">
  <div class="container">
    <div class="content left-area">
      <?php 
          require_once __DIR__ . '/../components/caption.php';
          echo render_caption('esc system'); 
      ?>
      <h1>Gestão de ESCs de forma simples, inteligente e automatizada.</h1>
      <h2>Tudo em um único sistema.</h2>
      <p>Transforme a gestão da Sua ESC com tecnologia de ponta, contratos automatizados, decisões inteligentes e experiência digital para seus clientes — tudo em um único sistema.</p>
    </div>
    <div class="right-area">
      <h4>Comece hoje mesmo! Gratuito para o cadastro de até 5 contratos</h4>
      <?php get_template_part('template-parts/components/form'); ?>

      <!-- Botão do vídeo de demonstração, que abre o modal -->
      <button data-modal-id="modal-video" class="btn secondary with-icon js-btn-modal">
        <span>Veja uma demonstração</span>
        <?= render_svg_icon('play-circle-line', 'icon-play-circle-line') ?>
      </button>
    </div>
  </div>
</section>