<?php 
$faq_tab_01 = [
  [
    'question' => 'Gestão de Contratos Simples, Automática e Segura',
    'response' => 'Crie, simule e imprima contratos de empréstimo, financiamento e desconto com diferentes garantias. O sistema calcula saldo devedor, atualiza parcelas em atraso automaticamente e permite renegociações com poucos cliques. Tudo com histórico completo e anexos organizados em um só lugar.'
  ],
  [
    'question' => 'Inteligência para Decisões',
    'response' => 'Tenha uma visão clara e estratégica da sua ESC. Com nosso painel de Business Intelligence (BI), você acompanha o desempenho geral da operação, além de acessar relatórios completos sobre clientes e contratos, além de resultados operacionais e cálculo de impostos.'
  ],
    [
    'question' => 'App Exclusivo para Clientes',
    'response' => 'Ofereça aos seus clientes um aplicativo completo (iOS e Android) para acompanhamento dos contratos, alertas de vencimento, simulações e muito mais. Profissionalize o relacionamento com seus clientes com uma experiência digital que antes só estava disponível nos grandes bancos.'
  ],
  [
    'question' => 'Análise de Crédito com Inteligência Artificial',
    'response' => 'Nossa análise de crédito combina tecnologia e profundidade: consulta automática à Receita Federal, Serasa e processos judiciais em todas as instâncias. O sistema gera relatórios completos com base nos 5Cs do Crédito, aplicando inteligência artificial para uma avaliação precisa, rápida e totalmente integrada ao sistema de gestão da ESC.'
  ],
];

$faq_tab_03 = [
  [
    'question' => 'Análise de viabilidade e coleta de documentos',
    'response' => 'Avaliação do enquadramento jurídico, orientação sobre capital social, definição do nome empresarial e endereço.'
  ],
  [
    'question' => 'Consulta de viabilidade na Junta Comercial e Prefeitura',
    'response' => 'Verificação de disponibilidade do nome e regularidade do endereço para atividades financeiras.'
  ],
  [
    'question' => 'Elaboração do contrato social e protocolo na Junta Comercial',
    'response' => 'Estruturação do ato constitutivo conforme a Lei Complementar 167/2019 e protocolo de registro.'
  ],
  [
    'question' => 'Emissão do CNPJ e inscrição municipal',
    'response' => 'Integração automática via Redesim após deferimento do registro societário. (Até 10 dias úteis para completar as 4 primeiras etapas)'
  ],
  [
    'question' => 'Solicitação de inscrição municipal e alvará de funcionamento junto à Prefeitura/ Administração',
    'response' => 'Acompanhamento completo da tramitação junto ao órgão responsável. Prazo variável (conforme o município).'
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