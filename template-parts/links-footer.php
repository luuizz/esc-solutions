<div class="footer-links">
  <div class="footer-links">
    <?php if( have_rows('_cadastrar_links_col', 'option') ): while ( have_rows('_cadastrar_links_col', 'option') ) : the_row();
    $titulo = get_sub_field('_titulo_coluna');
    
    ?>
    <div class="footer-column">
      <h6><?= $titulo ?></h6>
      <ul>
        <?php if ( have_rows('_cadastrar_link', 'option') ): while ( have_rows('_cadastrar_link', 'option') ) : the_row();
          $link = get_sub_field('_link');
          $label = get_sub_field('_label_link');
        ?>
          <li>
            <?php 
            if ($link) :
              $link_url = $link['url'];
            ?>
            <a href="<?= $link_url ?>">
              <span><?= $label ?></span>
            </a>
            <?php endif; ?>
          </li>
        <?php endwhile; else : endif; ?>
      </ul>
    </div>
    <?php endwhile; else : endif;?>
    <div class="footer-column">
      <h6>Atendimento</h6>
      <ul>
        <li>
          <?php
              $whatsapp_configs = get_field('_whatsapp_configs', 'option');
              if ($whatsapp_configs) :
              $raw_number = $whatsapp_configs['numero_whatsapp'];
              $clean_number = preg_replace('/\D+/', '', $raw_number);
              if (strlen($clean_number) === 11) {
                $clean_number = '55' . $clean_number;
              }
              $message = $whatsapp_configs['_mensagem_whatsapp'];
              $encoded_message = urlencode($message);
              $whatsapp_url = "https://api.whatsapp.com/send?phone={$clean_number}&text={$encoded_message}";
          ?>
          <a href="<?= esc_url($whatsapp_url); ?>">
            <span><?= esc_html($whatsapp_configs['numero_whatsapp']); ?></span>
            <? echo render_svg_icon('whatsapp-line', 'icon-whatsapp-line') ?>
            </a>
          </li>
          <?php endif; ?>
          <li>
            <a href="mailto:<?php echo get_field('_e-mail', 'option') ?>">
              <span><?php echo get_field('_e-mail', 'option') ?></span>
            </a>
          </li>
      </ul>
    </div>
  </div>
</div>
