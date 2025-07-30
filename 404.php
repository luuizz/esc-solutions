<?php get_header(); ?>

<section class="s-404">
  <div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/404.svg" alt="Imagem de erro mostrando uma paisagem e com o número 404.">

    <p>Esta pagina não está disponivel.</p>
    <a class="btn secondary" href="<?php echo home_url(); ?>">Voltar para a home</a>
  </div>
</section>

<?php require_once 'template-parts/components/blog.php'; ?>

<?php require_once 'template-parts/components/magazine.php'; ?>

<?php get_footer(); ?>