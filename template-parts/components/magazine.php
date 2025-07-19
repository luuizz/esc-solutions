<?php
$caption = get_field('_legenda_esc', 'option');
$titulo = get_field('_titulo_esc', 'option');
$texto = get_field('_descricao_esc', 'option');
?>

<section class="s-magazine" id="revista">
  <div class="container">
    <div class="left-area">
      <div class="caption">
        <span><?php echo esc_html($caption); ?></span>
      </div>
      <h2><?php echo esc_html($titulo); ?></h2>
      <p><?php echo esc_html($texto); ?></p>
      <button data-modal-id="modal-revista" class="btn primary js-btn-modal">Baixe a revista</button>
    </div>

    <div class="right-area">
      <?php
      $image = get_field('_imagem_esc', 'option');

      if ($image) {
        $url = $image['url'];
        $alt = $image['alt'];
        $title = $image['title'];
        ?>
        <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>">
      <?php } ?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/components/modal-magazine') ?>

<script>
  <?php
  $file = get_field('_anexo_esc', 'option');
  if ($file):
    $filename = $file['filename'];
    $path = $file['url'];
  
   ?>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#wpforms-form-8');
    if (form) {
      form.addEventListener('submit', function (event) {
        event.preventDefault();
        const pdfUrl = '<?php echo esc_url($path); ?>';
        const link = document.createElement('a');
        link.href = pdfUrl;
        link.download = '<?php echo esc_attr($filename); ?>';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
      });
    }
  });
  <?php endif; ?>
</script>