<?php 
$caption = get_field('_legenda_solucoes');
$titulo = get_field('_titulo_solucoes');
$texto = get_field('_descricao_solucoes');
?>

<section class="s-solutions">
  <div class="container">
    <div class="top-area">
      <div class="caption">
        <span><?php echo esc_html($caption); ?></span>
      </div>
      <h2><?php echo esc_html($titulo); ?></h2>
      <p><?php echo esc_html($texto); ?></p>
    </div>

    <div class="area-tabs">
      <div class="area-buttons">
        <div class="tab-background" id="tab-bg"></div>
        <?php if( have_rows('_cadastrar_abas') ): while ( have_rows('_cadastrar_abas') ) : the_row(); ?>
          <button class="btn-tab active"><?php echo get_sub_field('_nome_aba') ?></button>
        <?php endwhile; else : endif;?>
      </div>

      <div class="content-area">
        <?php 
        if( have_rows('_cadastrar_abas') ): 
          $tab_index = 1;
          while ( have_rows('_cadastrar_abas') ) : the_row();
            $icone = get_sub_field('_icone_aba');
            $titulo = get_sub_field('_titulo_aba');
            $subtitulo = get_sub_field('_subtitulo_aba');
            $textos = get_sub_field('_textos_aba');
            $imagem = get_sub_field('_imagem_aba');
        ?>
        <main class="tab <?= $tab_index === 1 ? 'active' : '' ?>" id="tab-<?php echo $tab_index; ?>">
          <div class="left-side">
            <div class="icon">
              <img src="<?php echo $icone; ?>" width="24" height="24" alt="Ícone">
            </div>
            <h3><?php echo esc_html( $titulo ); ?></h3>
              <?php
              $ativar_sanfona = get_sub_field('_ativar_sanfonas_aba');
              if ($ativar_sanfona) {
                ?>
                <ul class="js-questions">
                  <?php $i = 0;
                  if (have_rows('_cadastrar_sanfonas')) : while (have_rows('_cadastrar_sanfonas')) : the_row(); ?>
                    <li class="question <?= $i === 0 ? 'active' : '' ?>">
                      <div class="head-title">
                        <h4><?php echo get_sub_field('_titulo_sanfona_aba'); ?></h4>
                        <?php echo render_svg_icon('arrow-up-s-line', 'icon-arrow-up-s-line') ?>
                      </div>
                      <p><?php echo get_sub_field('_texto_sanfona_aba'); ?></p>
                    </li>
                  <?php $i++; endwhile; endif; ?>
                </ul>
                <?php
              } else {
                ?>
                <h4 class="subtitle"><?php echo esc_html($subtitulo); ?></h4>
               <?php $formatted_textos = str_replace('<p>', '<p class="description">', $textos);
                  echo wp_kses_post($formatted_textos); ?>
                <?php
              }
              ?>
          </div>

          <div class="right-side">
          <?php
          if ($imagem) {
            $url = $imagem['url'];
            $alt = $imagem['alt']; 
            $title = $imagem['title'];
            ?>
            <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>">
          <?php } ?>
          </div>
        </main>
            <?php 
              $tab_index++;
              endwhile; 
            endif;
            ?>
      </div>
    </div>

    <button data-modal-id="modal-abrir-esc" class="btn primary js-btn-modal">Abrir minha ESC</button>
  </div>
</section>