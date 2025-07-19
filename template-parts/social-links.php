<ul class="social-links">
<?php if( have_rows('_cadastrar_redes_sociais', 'option') ): ?>
  <?php while( have_rows('_cadastrar_redes_sociais', 'option') ) : the_row(); 
    $link = get_sub_field('_link_rede_social');
    $icon = get_sub_field('_selecione_rede_social'); // ex: 'facebook', 'instagram', etc.
  ?>
    <li>
      <a href="<?= esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
        <?= render_svg_icon($icon, 'icon-' . $icon); ?>
      </a>
    </li>
  <?php endwhile; ?>
<?php endif; ?>
</ul>
