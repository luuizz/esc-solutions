<?php
$tab_infos_1 = [
  [
    'icon' => 'swipe',
    'title' => 'Gestão de contratos sem complicação',
    'items' => [
      'Gere contratos de empréstimo, financiamento e desconto com garantias diversas.',
      'Atualização automática de saldo devedor e parcelas vencidas.',
      'Renegocie contratos diretamente no sistema, com histórico completo',
      'Anexe e organize documentos digitalizados de forma segura.',
      'Integração nativa com a registradora CRDC.',
      'Tudo pronto para auditorias, compliance e escala.'
    ]
    ],
    [
      'icon' => 'workbench',
      'title' => 'Inteligência que garante decisões mais seguras',
      'items' => [
        'Dashboard interativo com visão geral da ESC - olhando todo histórico e projeções futuras',
        'Relatórios mensais com apuração de impostos, inadimplência e desempenho.',
        'Visualize indicadores por cliente, por contrato ou por período.',
        'Tome decisões com base em dados — não em achismos.',
      ]
    ],
    [
      'icon' => 'funds',
      'title' => 'App para Seus Clientes: Mais Transparência, Menos Trabalho',
      'items' => [
        'Acompanhe contratos e vencimentos direto do celular (Apple e Android).',
        'Simule novas operações de forma rápida.',
        'Receba notificações automáticas e melhore a comunicação.',
        'Profissionalize seu atendimento e entregue a experiência que os grandes bancos oferecem.'
      ]
    ]
];
?>

<section class="s-solutions s-system">
  <div class="container">
    <div class="top-area">
      <?php 
      require_once __DIR__ . '/../components/caption.php';
      echo render_caption('conheça nosso sistema'); 
      ?>
      <h2>Principais benefícios do ESC System</h2>
    </div>

    <div class="area-tabs">
      <div class="area-buttons">
        <div class="tab-background" id="tab-bg"></div>
        <button class="btn-tab active">Gestão de contratos</button>
        <button class="btn-tab">Inteligência em dados</button>
        <button class="btn-tab">App para clientes</button>
      </div>

      <div class="content-area">
        <?php foreach ($tab_infos_1 as $index => $tab) : ?>
        <main class="tab <?php echo $index === 0 ? 'active' : ''; ?>" id="tab-<?php echo $index + 1; ?>">
            <div class="left-side">
              <div class="icon">
                <?php echo render_svg_icon($tab['icon'], 'icon-' . $tab['icon']); ?>
              </div>
              <h3><?php echo $tab['title']; ?></h3>
              <ul class="list-topics">
                <?php foreach ($tab['items'] as $item) : ?>
                <li>
                  <div class="icon-topic">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-check-line.svg" alt="Ícone de um check">
                  </div>
                  <p><?php echo $item; ?></p>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <div class="right-side">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/print_system.webp" alt="Mulher digitando no computador">
            </div>
        </main>
        <?php endforeach; ?>
      </div>
    </div>

    <a href="#form" class="btn primary">Começar agora</a>
  </div>
</section>