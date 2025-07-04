<?php 
$faq_tab_01 = [
  [
    'question' => 'Gestão de Contratos Simples, Automática e Segura',
    'response' => 'Crie, simule e imprima contratos de empréstimo, financiamento e desconto com diferentes garantias. O sistema calcula saldo devedor, atualiza parcelas em atraso automaticamente e permite renegociações com poucos cliques. Tudo com histórico completo e anexos organizados em um só lugar.'
  ],
  [
    'question' => 'Inteligência para Decisões',
    'response' => 'Content 01'
  ],
    [
    'question' => 'App Exclusivo para Clientes',
    'response' => 'Content 01'
  ],
  [
    'question' => 'Análise de Crédito com Inteligência Artificial',
    'response' => 'Content 01'
  ],
];

$faq_tab_03 = [
  [
    'question' => 'Análise de viabilidade e coleta de documentos',
    'response' => 'Avaliação do enquadramento jurídico, orientação sobre capital social, definição do nome empresarial e endereço.'
  ],
  [
    'question' => 'Consulta de viabilidade na Junta Comercial e Prefeitura',
    'response' => 'Content 01'
  ],
  [
    'question' => 'Elaboração do contrato social e protocolo na Junta Comercial',
    'response' => 'Content 01'
  ],
  [
    'question' => 'Emissão do CNPJ e inscrição municipal',
    'response' => 'Content 01'
  ],
  [
    'question' => 'Inscrição municipal e alvará de funcionamento',
    'response' => 'Content 01'
  ]
];
?>

<section class="s-solutions">
  <div class="container">
    <div class="top-area">
      <?php 
      require_once __DIR__ . '/../components/caption.php';
      echo render_caption('Nossas soluções'); 
      ?>
      <h2>Tecnologia, inteligência e assessoria para sua ESC crescer</h2>
      <p>Mais do que abrir uma ESC, oferecemos um ecossistema completo para você operar com eficiência, segurança e escalabilidade.</p>
    </div>

    <div class="area-tabs">
      <div class="area-buttons">
        <div class="tab-background" id="tab-bg"></div>
        <button class="btn-tab active">Gestão avançada</button>
        <button class="btn-tab">Análise de crédito</button>
        <button class="btn-tab">Assessoria</button>
      </div>

      <div class="content-area">
        <main class="tab active" id="tab-1">
          <div class="left-side">
            <div class="icon">
              <?php echo render_svg_icon('swipe', 'icon-swipe') ?>
            </div>
            <h3>ESC System: Gestão avançada de Empresas Simples de Crédito</h3>
            <ul class="js-questions">
              <?php $i = 0; ?>
              <?php foreach ($faq_tab_01 as $item): ?>
              <li class="question <?= $i === 0 ? 'active' : '' ?>">
                <div class="head-title">
                  <h4><?= $item['question']; ?></h4>
                  <?php echo render_svg_icon('arrow-up-s-line', 'icon-arrow-up-s-line') ?>
                </div>
                <p><?= $item['response']; ?></p>
              </li>
              <?php $i++; endforeach; ?>
            </ul>
          </div>

          <div class="right-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img_01.webp" alt="Mulher digitando no computador">
          </div>
        </main>

        <main class="tab" id="tab-2">
          <div class="left-side">
            <div class="icon">
              <?php echo render_svg_icon('workbench', 'icon-workbench') ?>
            </div>
            <h3>Análise de Crédito com uso de IA</h3>
            <h4 class="subtitle">Decisões mais rápidas, seguras e acessíveis para MEIs e pequenas empresas.</h4>
            <p class="description">Nossa solução realiza consultas automáticas e integradas às bases do SERASA, Receita Federal e todas as instâncias do Judiciário brasileiro. A partir desses dados, aplicamos Inteligência Artificial para gerar relatórios completos, com avaliação baseada em políticas de crédito customizadas ou pré-definidas — tudo em poucos minutos.</p>
            <p class="description">Com foco em MEIs, Micro e Pequenas Empresas, oferecemos uma análise acessível, confiável e pensada para a realidade das ESCs, acelerando a tomada de decisão com mais segurança e controle.</p>
          </div>

          <div class="right-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img_02.webp" alt="Uma mulher vestindo uma camiseta laranja, sorridente e olhando para alguns papéis. A mulher está utilizando um óculos e está em um ambiente corporativo com pessoas usando roupas de trabalho no fundo.">
          </div>
        </main>

        <main class="tab" id="tab-3">
          <div class="left-side">
            <div class="icon">
              <?php echo render_svg_icon('funds', 'icon-funds') ?>
            </div>
            <h3>Assessoria: Contábil, Operacional e Jurídica</h3>
            <ul class="js-questions">
              <?php $i = 0; ?>
              <?php foreach ($faq_tab_03 as $item): ?>
              <li class="question <?= $i === 0 ? 'active' : '' ?>">
                <div class="head-title">
                  <h4><?= $item['question']; ?></h4>
                  <?php echo render_svg_icon('arrow-up-s-line', 'icon-arrow-up-s-line') ?>
                </div>
                <p><?= $item['response']; ?></p>
              </li>
              <?php $i++; endforeach; ?>
            </ul>
          </div>

          <div class="right-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img_03.webp" alt="Mulher com roupa social, sorridente e segurando um papel, com pessoas ao redor de fundo.">
          </div>
        </main>
      </div>
    </div>

    <button data-modal-id="modal-abrir-esc" class="btn primary js-btn-modal">Abrir minha ESC</button>
  </div>
</section>