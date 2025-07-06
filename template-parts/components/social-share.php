<div class="socials-share">
    <span>Compartilhar</span>
    <ul class="socials">
        <li>
            <a href="https://api.whatsapp.com/send?text=<?php the_title(); ?>%20<?php the_permalink(); ?>" title="Compartilhar" target="_blank">
              <?php echo render_svg_icon('whatsapp', 'icon-whatsapp') ?>    
            </a>
        </li>
        
        <li>
            <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Compartilhar" target="_blank">
                <?php echo render_svg_icon('facebook', 'icon-facebook') ?>
            </a>
        </li>

        <li>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" title="Compartilhar" target="_blank">
                <?php echo render_svg_icon('linkedin', 'icon-linkedin') ?>
            </a>
        </li>

        <li>
            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" title="Compartilhar" target="_blank">
                <?php echo render_svg_icon('twitter', 'icon-twitter') ?>
            </a>
        </li>
    </ul>
</div>