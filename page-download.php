<?php
//Template Name: Download

get_header();

?>

<section class="s-download-page">
  <div class="container">
    <h1>Seu download está quase pronto!</h1>
    <p>Se o download não começou automaticamente, clique no botão abaixo para baixar sua revista manualmente.</p>
    <?php
    $file = get_field('_anexo_esc', 'option');
    if ($file):
      $filename = $file['filename'];
      $path = $file['url'];
      ?>
      <a class="btn secondary" href="<?php echo esc_url($path); ?>" download>Clique aqui para fazer o download</a>
    <?php endif;
    ?>
  </div>
</section>

<?php require_once 'template-parts/components/blog.php'; ?>

<?php get_footer(); ?>