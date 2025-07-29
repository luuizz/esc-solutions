<?php get_header(); ?>

<section class="s-404">
  <div class="container">
    <h1>404</h1>

    <p>Esta página não está disponível, o link é inválido ou foi removido. Mas você pode continuar navegando e encontrar o que procura!</p>
    <a class="btn secondary" href="<?php echo home_url(); ?>">Voltar para a home</a>
  </div>
</section>

<?php require_once 'template-parts/components/blog.php'; ?>

<?php require_once 'template-parts/components/magazine.php'; ?>

<?php get_footer(); ?>