<footer>
    <div class="top-area">
      <div class="container">
        <a href="<?php echo home_url(); ?>" title="Ir para página Inicial" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.webp" alt="Logo da ESC Solutions">
        </a>

        <?php require_once 'template-parts/links-footer.php'; ?>
      </div>
    </div>

    <div class="area-copy">
      <div class="container">
        <p>© <?php echo date('Y'); ?> ESC Solutions - Todos os direitos reservados. CNPJ: 00.000.000/0001-00</p>

        <div class="social">
          <?php require_once 'template-parts/social-links.php'; ?>
        </div>
      </div>
    </div>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/element-footer.svg" alt="Diversos quadrados coloridos com as cores da ESC Solutions">
</footer>


<?php wp_footer(); ?>
</body>
</html>