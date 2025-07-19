<?php
$imagem = get_field('_poster_video');
?>

<section class="s-video js-btn-modal" data-modal-id="modal-video">
  <div class="poster" id="js-video-poster">
    <img src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>" title="<?php echo esc_attr($imagem['title']); ?>">
    <button class="btn-play js-btn-modal" data-modal-id="modal-video">
      <span class="sr-only">Reproduzir video</span>
      <div class="wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-play-mini-fill-lp02.svg" alt="Ícone de Play">
      </div>
    </button>
  </div>
</section>