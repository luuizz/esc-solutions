<?php
$caption = get_field('_legenda_hero');
$titulo = get_field('_titulo_hero');
$subtitulo = get_field('_subtitulo_hero');
$texto = get_field('_descricao_hero');
$banner_desktop = get_field('_banner_desktop_hero');
$banner_mobile = get_field('_banner_mobile_hero');
?>

<section class="s-hero">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/element-top.svg" alt="Elemento decorativo">
  <div class="container">
    <div class="content">
      <div class="caption">
        <span><?php echo esc_html($caption); ?></span>
      </div>
    <h1><?php echo esc_html($titulo); ?></h1>
    <h2><?php echo esc_html($subtitulo); ?></h2>
    <p><?php echo esc_html($texto); ?></p>
    </div>
  </div>
</section>

<section class="s-ctas">
  <div class="container">
    <button data-modal-id="modal-abrir-esc" class="btn primary js-btn-modal">Abrir minha ESC</button>
    <button data-modal-id="modal-video" class="btn secondary with-icon js-btn-modal">
      <span>Veja como funciona</span>
      <?= render_svg_icon('play-circle-line', 'icon-play-circle-line') ?>
    </button>
  </div>
</section>

<style>
  .s-hero {
    background-image: url(<?php echo esc_url($banner_desktop); ?>);
  }

  @media (max-width: 768px) {
    .s-hero {
      background-image: url(<?php echo esc_url($banner_mobile); ?>);
    }
  }

</style>