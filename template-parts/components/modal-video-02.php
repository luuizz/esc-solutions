<?php
$habilitar_video_hospedado = get_field('_habilitar_video_hospedado_2', 'option');

$poster = get_field('_poster_video_2', 'option');
$poster_url = is_array($poster) ? $poster['url'] : $poster;

$video = get_field('_video_hospedado_2', 'option');
$video_url = is_array($video) ? $video['url'] : $video;

$iframe = get_field('_video_embedado_2', 'option');

if ($iframe && !$habilitar_video_hospedado) {
    preg_match('/src="(.+?)"/', $iframe, $matches);

    if (!empty($matches[1])) {
        $src = $matches[1];

        $params = array(
            'controls'  => 0,
            'hd'        => 1,
            'autohide'  => 1
        );
        $new_src = add_query_arg($params, $src);

        $iframe = str_replace($src, $new_src, $iframe);
        $iframe = str_replace('></iframe>', ' frameborder="0"></iframe>', $iframe);
    }
}
?>


<div class="modal" id="modal-video-02">
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
        <?php elseif ($iframe): ?>
          <?php echo $iframe; ?>
        <?php else: ?>
          <p>Vídeo não disponível.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>