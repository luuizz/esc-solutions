<section class="s-magazine" id="revista">
  <div class="container">
    <div class="left-area">
      <?php 
      require_once __DIR__ . '/../components/caption.php';
      echo render_caption('revista ecs+'); 
      ?>
      <h2>Conteúdo exclusivo para quem vive o dia a dia do crédito</h2>
      <p>A ESC+ é a revista digital da ECS Solutions, feita para quem quer se manter informado, atualizado e à frente no mercado de Empresas Simples de Crédito.</p>
      <button data-modal-id="modal-revista" class="btn primary js-btn-modal">Baixe a revista</button>
    </div>

    <div class="right-area">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/revista.webp" alt="Revista ESC +">
    </div>
  </div>
</section>

<?php get_template_part('template-parts/components/modal-magazine') ?>