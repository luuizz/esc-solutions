<?php get_header() ?>

<section class="s-hero-posts">
  <div class="container">
    <div class="top-area">
      <a class="link-home" href="<?php echo home_url(); ?>">
        Voltar para página inicial
      </a>
      <ul class="breadcrumbs">
        <li>
          <a href="<?php echo home_url(); ?>">Home</a>
        </li>

        <li>
          /
        </li>

        <li>
          <span><?php the_title(); ?></span>
        </li>
      </ul>
    </div>

    <div class="main-area">
      <div class="left-area">
        <h1><?php the_title(); ?></h1>
        <ul class="meta">
          <li>
            <div class="icon">
              <?php echo render_svg_icon('calendar', 'icon-calendar') ?>
            </div>
            <span><?php echo get_the_date('j, M, Y'); ?></span>
          </li>

            <li>
              <div class="icon">
                <?php echo render_svg_icon('tag', 'icon-tag') ?>
              </div>
              <span>
                <?php $category = get_the_category(); echo $category[0]->name; ?>
              </span>
          </li>
        </ul>
      </div>

      <div class="right-area">
         <?php the_post_thumbnail('full', array('class' => 'post-thumbnail')); ?>
      </div>
    </div>

  </div>
</section>

<section class="s-content-post">
  <div class="container">
    <div class="left-content">
      <h6>Navegue por tópicos</h6>
      <ul class="topics-post js-topics">
      </ul>
      <?php echo get_template_part('template-parts/components/social-share'); ?>
    </div>

    <div class="right-content">
      <div class="content">
        <?php the_content(); ?>
      </div>
      <?php echo get_template_part('template-parts/components/social-share'); ?>
    </div>
  </div>
</section>

<?php
  $categories = get_the_category();
  $category_ids = array();

  foreach ($categories as $category) {
      $category_ids[] = $category->term_id;
  }

  $args = array(
      'post_type' => 'post',
      'order' => 'DESC',
      'posts_per_page' => 6,
      'category__in' => $category_ids,
      'post__not_in' => array(get_the_ID()),
  );

  $the_query = new WP_Query($args);

  if ($the_query->have_posts()) :
?>
<section class="s-related-posts">
  <div class="container">
    <div class="top">
      <div class="caption">
        <span>A ESC Recomenda!</span>
      </div>
      <h2>Conteúdos relacionados</h2>
    </div>

    <div class="area-posts">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

      <a href="<?php the_permalink(); ?>" class="card-post-related">
          <div class="banner-post">
            <?php the_post_thumbnail('full'); ?>
          </div>

          <div class="infos">
            <div class="category">
              <span><?php echo get_the_category()[0]->name; ?></span>
            </div>
            <h3><?= the_title(); ?></h3>
            <span class="read-more">Leia mais</span>
          </div>

      </a>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php
  endif;
  wp_reset_postdata();
?>

<?php require_once 'template-parts/components/magazine.php'; ?>

<?php get_footer() ?>