<div class="modal lp" id="modal-abrir-esc">
  <div class="modal-overlay">
    <div class="content">
      <button class="close js-btn-close">
        <span class="sr-only">Fechar modal</span>
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.99956 7.93906L12.7121 4.22656L13.7726 5.28706L10.0601 8.99956L13.7726 12.7121L12.7121 13.7726L8.99956 10.0601L5.28706 13.7726L4.22656 12.7121L7.93906 8.99956L4.22656 5.28706L5.28706 4.22656L8.99956 7.93906Z" fill="#CC452D"/>
        </svg>
      </button>
      <div class="infos">
        <h4>Entre em contato agora</h4>
        <span>Preencha os dados abaixo para agendar a reunião com um de nossos representantes</span>
        <?php echo do_shortcode('[wpforms id="25"]') ?>
        <p class="separator">Ou</p>
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
          <a class="btn secondary with-icon js-whatsapp-link" target="_blank" href="<?= esc_url($whatsapp_url); ?>">
            <div class="text-btn">Falar no WhatsApp</div>
            <?php echo render_svg_icon('whatsapp-line', 'icon-whatsapp-line') ?>
          </a>
      <?php endif; ?>
      </div>
    </div>
  </div>
</div>