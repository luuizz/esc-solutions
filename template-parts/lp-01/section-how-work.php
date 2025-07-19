<?php
$caption = get_field('_legenda_dobra_02');
$titulo = get_field('_titulo_dobra_02');
$descricao = get_field('_descricao_dobra_02');
?>

<section class="s-how-work">
  <div class="container">
    <div class="top">
      <div class="caption">
        <span><?php echo esc_html($caption); ?></span>
      </div>
      <h2><?php echo esc_html($titulo); ?></h2>
      <p><?php echo esc_html($descricao); ?></p>
    </div>

    <div class="area-cards">
      <?php 
      $i = 1;
      if( have_rows('_cadastrar_etapas') ): while ( have_rows('_cadastrar_etapas') ) : the_row(); 
      ?>
      <div class="card-item">
        <h4><?php echo get_sub_field('_titulo_etapa'); ?></h4>
        <p><?php echo get_sub_field('_descricao_etapa'); ?></p>
        <div class="number">
          <span><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></span>
        </div>
      </div>
      <?php $i++; endwhile; else : endif;?>
    </div>
  </div>
</section>