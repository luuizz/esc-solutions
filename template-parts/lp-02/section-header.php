<?php
$caption = get_field('_legenda_hero');
$titulo = get_field( '_titulo_hero' );
$subtitulo = get_field( '_subtitulo_hero' );
$texto = get_field( '_descricao_hero' );
$banner_desktop = get_field('_banner_desktop_hero');
$banner_mobile = get_field('_banner_mobile_hero');
$link_botao = get_field('_link_do_botao');
$label_botao = get_field('_label_botao');
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
      
      <?php if ($link_botao) {
        $link_url = $link_botao['url'];
        $link_title = $link_botao['title'];
        $link_target = $link_botao['target'] ? $link_botao['target'] : '_self';
        
        ?>
      <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"  class="btn secondary with-icon">
        <span><?php echo esc_html($label_botao); ?></span>
      </a>
      <?php } ?>
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