<?php
$caption = get_field('_legenda_hero');
$titulo = get_field( '_titulo_hero' );
$subtitulo = get_field( '_subtitulo_hero' );
$texto = get_field( '_descricao_hero' );
$banner_desktop = get_field('_banner_desktop_hero');
$banner_mobile = get_field('_banner_mobile_hero');
?>

<section class="s-hero s-lp-02" id="form">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/element-top.svg" alt="Elemento decorativo">
  <div class="container">
    <div class="content left-area">
      <div class="caption">
        <span><?php echo esc_html($caption); ?></span>
      </div>
      <h1><?php echo esc_html($titulo); ?></h1>
      <h2><?php echo esc_html($subtitulo); ?></h2>
      <p><?php echo esc_html($texto); ?></p>
    </div>
    <div class="right-area">
      <h4 class="js-form-title">Comece hoje mesmo! Gratuito para o cadastro de até 5 contratos</h4>
      <?php get_template_part('template-parts/components/form'); ?>

      <!-- Botão do vídeo de demonstração, que abre o modal -->
      <button data-modal-id="modal-video-01" class="btn secondary with-icon js-btn-modal">
        <span>Veja uma demonstração</span>
        <?= render_svg_icon('play-circle-line', 'icon-play-circle-line') ?>
      </button>
    </div>
  </div>
</section>

<style>
  .s-hero.s-lp-02 {
    background-image: url('<?php echo $banner_desktop; ?>');
  }

  @media (max-width: 768px) {
    .s-hero.s-lp-02 {
      background-image: url('<?php echo $banner_mobile; ?>');
    }
  }
</style>