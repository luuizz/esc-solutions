<footer>
  <div class="top-area">
    <div class="container">
      <a href="<?php echo home_url(); ?>" title="Ir para página Inicial" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Logo da ESC Solutions">
      </a>

      <?php require_once get_template_directory() . '/template-parts/data.php'; ?>
      <?php require_once get_template_directory() . '/template-parts/links-footer.php'; ?>
    </div>
  </div>

  <div class="area-copy">
    <div class="container">
      <p>© <?php echo date('Y'); ?> ESC Solutions é uma marca registrada da Xmodem Tecnologia LTDA - CNPJ: 09.504.616/0001-74</p>

      <div class="social">
        <?php require_once get_template_directory() . '/template-parts/social-links.php'; ?>
      </div>
    </div>
  </div>

  <img src="<?php echo get_template_directory_uri(); ?>/assets/element-footer.svg" alt="Elementos decorativos do rodapé">
</footer>

<?php get_template_part('template-parts/components/modal-lp01') ?>

<?php wp_footer(); ?>
</body>
</html>
