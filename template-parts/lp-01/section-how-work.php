<section class="s-how-work">
  <div class="container">
    <div class="top">
      <?php 
      require_once __DIR__ . '/../components/caption.php';
      echo render_caption('Como funciona?'); 
      ?>
      <h2>Abra sua ESC do zero com quem entende do assunto</h2>
      <p>Se tornar um empresário de crédito é mais fácil do que você imagina</p>
    </div>

    <div class="area-cards">
      <?php require_once __DIR__ . '/../data.php';
      foreach ($cards_process as $item): ?>
      <div class="card-item">
        <h4><?= $item['title']; ?></h4>
        <p><?= $item['text']; ?></p>
        <div class="number">
          <span>0<?= array_search($item, $cards_process) + 1; ?></span>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>