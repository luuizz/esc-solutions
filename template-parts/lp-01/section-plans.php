<?php
$legenda = get_field('_legenda_plano');
$titulo = get_field('_titulo_plano');
$descricao = get_field('_descricao_plano');
$banner_plano = get_field('_banner_plano');

?>

<section class="s-plans">
  <div class="banner">
    <?php
      if ($banner_plano) {
        $url = $banner_plano['url'];
        $title = $banner_plano['title'];
        $alt = $banner_plano['alt'];
    ?>
    <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>">
    <?php } ?>

  </div>
  <div class="container">
      <div class="caption">
        <span><?php echo esc_html($caption); ?></span>
      </div>
    <h2><?php echo esc_html($titulo); ?></h2>
    <p><?php echo esc_html($descricao); ?></p>

    <ul>
      <?php if( have_rows('_cadastrar_topicos_planos') ): while ( have_rows('_cadastrar_topicos_planos') ) : the_row(); ?>
      <li>
        <div class="icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-check-line.svg" alt="Ícone de um check">
        </div>
        <h5><?php echo get_sub_field('_titulo_topicos_planos') ?></h5>
      </li>
      <?php endwhile; else : endif;?>
    </ul>

    <div class="buttons">
      <button data-modal-id="modal-abrir-esc" class="btn primary js-btn-modal">Começar agora</button>
    </div>
  </div>
</section>