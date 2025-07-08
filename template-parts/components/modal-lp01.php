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
        <a href="https://api.whatsapp.com/send?phone=5561981584546&text=Ol%C3%A1,%20gostaria%20de%20fazer%20um%20or%C3%A7amento" target="_blank" class="btn secondary with-icon">
          <div class="text-btn">Falar no WhatsApp</div>
          <?php echo render_svg_icon('whatsapp-line', 'icon-whatsapp-line') ?>
        </a>
      </div>
    </div>
  </div>
</div>