<?php get_header();
//Template Name: Politica de Privacidade

?>

<section class="s-header-politica">
  <div class="container">
    <h1>Política de Privacidade</h1>
  </div>
</section>

<section class="s-content-post s-content-privacy">
  <div class="container">
    <div class="left-content">
      <h6>Navegue por tópicos</h6>
      <ul class="topics-post js-topics">
      </ul>
    </div>

    <div class="right-content">
      <div class="content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>


<?php require_once 'template-parts/components/blog.php'; ?>
<?php require_once 'template-parts/components/magazine.php'; ?>

<?php get_footer(); ?>