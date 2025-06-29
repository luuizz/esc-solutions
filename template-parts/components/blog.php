<section class="s-blog">
  <div class="container">
    <div class="top">
      <?php 
      require_once __DIR__ . '/../components/caption.php';
      echo render_caption('novidades'); 
      ?>
      <h2>Últimas notícias e artigos</h2>
    </div>
    
    <div class="area-posts">
      <?php 
      $args = array (
        'post_type' => 'post',
        'order' => 'DESC',
        'status' => 'publish',
        'posts_per_page' => 3
      );

      $the_query = new WP_Query($args);
      
      ?>

      <?php 
        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
        <a class="card-post" href="<?php the_permalink(); ?>">
          <div class="banner">
            <?php the_post_thumbnail('full'); ?>
          </div>

          <div class="content">
            <div class="category">
              <span><?php echo get_the_category()[0]->name; ?></span>
            </div>
            <h3><?= the_title(); ?></h3>
          </div>
        </a>
      <?php endwhile; else: endif; ?>
      <?php wp_reset_query(); wp_reset_postdata(); ?>
    </div>
  </div>
</section>