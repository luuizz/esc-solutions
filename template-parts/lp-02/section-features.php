<?php
$caption = get_field('_legenda_cta');
$imagem = get_field('_imagem_cta');
$titulo = get_field('_titulo_cta');
$texto = get_field('_texto_cta');

?>

<section class="s-plans s-start-lp02">
  <div class="container">
    <div class="caption">
      <span><?php echo esc_html($caption); ?></span>
    </div>
    <h2><?php echo esc_html($titulo); ?></h2>
    <?php echo $texto; ?>

    <ul class="list-topics features-lp02">
      <?php if( have_rows('_cadastrar_topicos_cta') ): while ( have_rows('_cadastrar_topicos_cta') ) : the_row(); ?>
      <li>
        <div class="icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-check-line.svg" alt="Ícone de um check">
        </div>
        <h5><?php echo get_sub_field('_texto_topicos_cta'); ?></h5>
      </li>
      <?php endwhile; else : endif;?>
    </ul>

    <div class="buttons">
      <a href="#form" class="btn primary js-btn-modal">Começar agora</a>
    </div>
  </div>
</section>