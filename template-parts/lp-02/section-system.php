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
$caption = get_field('_legenda_sistema');
$titulo = get_field('_titulo_sistema');

?>

<section class="s-solutions s-system">
  <div class="container">
    <div class="top-area">
      <div class="caption">
        <span><?php echo esc_html($caption); ?></span>
      </div>
      <h2><?php echo esc_html($titulo); ?></h2>
    </div>

    <div class="area-tabs">
      <div class="area-buttons">
        <div class="tab-background" id="tab-bg"></div>
        <?php if( have_rows('_cadastrar_abas') ): while ( have_rows('_cadastrar_abas') ) : the_row(); ?>
          <button class="btn-tab active"><?php echo get_sub_field('_nome_aba') ?></button>
        <?php endwhile; else : endif;?>
      </div>

      <div class="content-area">
        <?php if( have_rows('_cadastrar_abas') ): 
          $tab_index = 1;
          while ( have_rows('_cadastrar_abas') ) : the_row(); 
          $icone = get_sub_field('_icone_aba');
          $titulo = get_sub_field('_titulo_aba');
          $imagem = get_sub_field('_imagem_aba');
        ?>
        <main class="tab <?= $tab_index === 1 ? 'active' : '' ?>" id="tab-<?php echo $tab_index; ?>">
            <div class="left-side">
              <div class="icon">
                <?php if ($icone) {
                  $url = $icone['url'];
                  $alt = $icone['alt']; 
                  ?>
                <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                <?php } ?>
              </div>
              <h3><?php echo esc_html($titulo); ?></h3>
              <ul class="list-topics">
                <?php if( have_rows('_cadastrar_topicos_aba') ): while ( have_rows('_cadastrar_topicos_aba') ) : the_row(); ?>
                <li>
                  <div class="icon-topic">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-check-line.svg" alt="Ícone de um check">
                  </div>
                  <p><?php echo get_sub_field('_texto_topico'); ?></p>
                </li>
                <?php endwhile; else : endif;?>
              </ul>
            </div>

            <div class="right-side">
              <img src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>" title="<?php echo esc_attr($imagem['title']); ?>">
            </div>
        </main>
        <?php $tab_index++; endwhile; else : endif;?>
      </div>
    </div>

    <a href="#form" class="btn primary">Começar agora</a>
  </div>
</section>