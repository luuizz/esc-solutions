<?php
$habilitar_video_hospedado = get_field('_habilitar_video_hospedado_1', 'option');

$poster = get_field('_poster_video_1', 'option');
$video  = get_field('_video_hospedado_1', 'option');
$video_url = is_array($video) ? $video['url'] : $video;

$iframe = get_field('_video_embedado_1', 'option');
$iframe_final = ''; // inicializa vazio

if ($iframe) {
    // Regex para extrair o ID do vídeo do YouTube
    preg_match(
        '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/',
        $iframe,
        $matches
    );

    // Se encontrou o ID, monta o iframe
    if (!empty($matches[1])) {
        $video_id = $matches[1];

        $iframe_final = '<iframe 
            src="https://www.youtube-nocookie.com/embed/' . esc_attr($video_id) . '?vq=hd1080&modestbranding=1&rel=0&fs=0&color=white&controls=0&disablekb=1" 
            width="560" 
            height="315" 
            frameborder="0"
            allowfullscreen>
        </iframe>';
    }
}
?>

<div class="modal" id="modal-video-01">
  <div class="modal-overlay">
    <div class="content video">
      <button class="close js-btn-close">
        <span class="sr-only">Fechar modal</span>
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.99956 7.93906L12.7121 4.22656L13.7726 5.28706L10.0601 8.99956L13.7726 12.7121L12.7121 13.7726L8.99956 10.0601L5.28706 13.7726L4.22656 12.7121L7.93906 8.99956L4.22656 5.28706L5.28706 4.22656L8.99956 7.93906Z" fill="#CC452D"/>
        </svg>
      </button>
      <div class="infos">
        <?php if ($habilitar_video_hospedado): ?>
          <video src="<?php echo esc_url($video['url']); ?>" controls poster="<?php echo esc_url($poster['url']); ?>" style="max-width: 100%; height: auto; aspect-ratio: auto">
          </video>
        <?php elseif ($iframe_final): ?>
          <?php echo $iframe_final; ?>
        <?php else: ?>
          <p>Vídeo não disponível.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
