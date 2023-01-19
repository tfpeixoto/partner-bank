<?php

/**
 * Template name: Home
 */
$estiloPagina = 'home.css';
require_once 'header.php';
?>

<?php get_template_part('partials/banner'); ?>

<section class="c-digital">
  <div class="container">
    <p class="titulo wow fadeInDown pb-2">
      Modalidades de serviços de pagamentos
    </p>
    <div id="carousel-c-digital">
      <div class="owl-carousel owl-default owl-theme">

        <div class="item">
          <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-2 c-digital__icon wow fadeInDown">
              <img src="<?= get_template_directory_uri(); ?>/images/conta-digital-partner-bank.png" width="160" height="165" alt="ícone conta digital no smartphone" />
            </div>

            <div class="col-12 col-md-6 c-digital__content wow fadeInDown" data-wow-delay=".2s">
              <h2>Condomínio Garantido</h2>
              <p class="aviso">Inadimplência nunca mais!</p>
              <p class="lead">O PartnerBank tem a melhor solução para zerar a inadimplência das taxas condominias e entregar um fluxo de caixa saudável.</p>
            </div>

            <div class="col-12 col-md-4 c-digital__cta wow fadeInDown" data-wow-delay=".4s">
              <a type="button" href="https://materiais.partnerbank.com.br/conta-digital" target="_blank" rel="noopener noreferrer" class="btn btn-lg">Clique aqui e solicite a sua conta digital</a>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-2 c-digital__icon wow fadeInDown">
              <img src="<?= get_template_directory_uri(); ?>/images/conta-digital-partner-bank.png" width="160" height="165" alt="ícone conta digital no smartphone" />
            </div>

            <div class="col-12 col-md-6 c-digital__content wow fadeInDown" data-wow-delay=".2s">
              <h2>Conta Digital Partner Bank</h2>
              <p class="lead">Toda operação e controle financeiro na palma da sua mão.</p>
              <p class="lead">Mais praticidade e segurança. Você precisa, o Partner faz!</p>
            </div>

            <div class="col-12 col-md-4 c-digital__cta wow fadeInDown" data-wow-delay=".4s">
              <a type="button" href="https://materiais.partnerbank.com.br/conta-digital" target="_blank" rel="noopener noreferrer" class="btn btn-lg">Clique aqui e solicite a sua conta digital</a>
            </div>
          </div>
        </div>

        <div class="item ">
          <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-2 c-digital__icon">
              <img src="<?= get_template_directory_uri(); ?>/images/Icones-03.png" width="160" height="165" alt="Receita" />
            </div>

            <div class="col-12 col-md-6 c-digital__content">
              <h2>Emissão e Gestão de Boletos</h2>
              <p class="lead">
                Emissão de boletos gratuita e ilimitada, envio de remessas automáticas para o banco, conciliação direta no seu ERP,
                recebimento em D+1, cashback e controle de inadimplência!
              </p>
              <p class="aviso">Sem taxa de manutenção!</p>
            </div>

            <div class="col-12 col-md-4 c-digital__cta">
              <a type="button" href="https://materiais.partnerbank.com.br/conheca-o-partner-bank" target="_blank" rel="noopener noreferrer" class="btn btn-lg">Clique aqui e converse com os nossos consultores</a>
            </div>
          </div>
        </div>

        <div class="item ">
          <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-2 c-digital__icon">
              <img src="<?= get_template_directory_uri(); ?>/images/Icones-02.png" width="160" height="160" alt="Receita" />
            </div>

            <div class="col-12 col-md-6 c-digital__content">
              <h2>Controle de inadimplência! Parcelamento de acordos no cartão de crédito</h2>
              <p class="lead">
                Com o Partner Bank seus clientes podem parcelar os boletos e acordos do condomínio em até 12x no cartão de crédito.
              </p>
            </div>

            <div class="col-12 col-md-4 c-digital__cta">
              <a type="button" href="https://materiais.partnerbank.com.br/conheca-o-partner-bank" target="_blank" rel="noopener noreferrer" class="btn btn-lg">Clique aqui e converse com os nossos consultores</a>
            </div>
          </div>
        </div>

        <div class="item ">
          <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-2 c-digital__icon">
              <img src="<?= get_template_directory_uri(); ?>/images/Icones-01.png" width="160" height="111" alt="Receita" />
            </div>

            <div class="col-12 col-md-6 c-digital__content">
              <h2>Crédito</h2>
              <p class="lead">
                Iniciar ou finalizar uma obra, fazer uma melhoria no seu condomínio ou pagar algum débito ficou mais fácil com o Partner Bank!
                Agora os nossos clientes também podem aproveitar o Crédito!
              </p>
            </div>

            <div class="col-12 col-md-4 c-digital__cta">
              <a type="button" href="https://materiais.partnerbank.com.br/precisa-de-credito" target="_blank" rel="noopener noreferrer" class="btn btn-lg">Clique aqui e converse com os nossos consultores</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="depoimentos">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center wow fadeInDown">
        <h2 class="text-azure mb-5">O que dizem os nossos clientes</h2>
      </div>
    </div>

    <div class="row">
      <div class="owl-carousel owl-default owl-theme wow fadeInDown" data-wow-delay=".2s">
        <div class="depoimentos__box">
          <div class="depoimentos__box__foto">
            <img src="<?= get_template_directory_uri(); ?>/images/foto-ronaldo-sandri.png" width="240" height="240" class="my-2" alt="Ronaldo Vitale Sandri - Diretor Predicon Condomínios" title="Ronaldo Vitale Sandri" />
          </div>

          <div class="depoimentos__box__texto">
            <p>"O partner bank é sensacional, melhorou todo minha rotina operacional de cobrança (envio de boletos e baixas), bem como, trouxe grande segurança contra fraudes.</p>
            <p>Outro ponto importante foi a redução de tarifas bancárias para nossos clientes, especialmente na área de condomínios."</p>

            <h3>Ronaldo Vitale Sandri</h3>
            <p class="cargo">Diretor Predicon Condomínios</p>
          </div>
        </div>

        <div class="depoimentos__box">
          <div class="depoimentos__box__foto">
            <img src="<?= get_template_directory_uri(); ?>/images/foto-cristiane-pierre.png" width="240" height="240" class="my-2" alt="Cristiane Pierre - Eficaz Assessoria e Administração de Condomínios" title="Cristiane Pierre" />
          </div>

          <div class="depoimentos__box__texto">
            <p>"O Partner Bank veio para revolucionar a gestão da administradora. Desde que comecei a utilizar eliminamos vários processos de importação e exportação de arquivos para efetuar as baixas de boletos. Hoje com o Partner Bank não precisamos nos incomodar com esse processo está tudo automatizado dentro do Condomínio 21. Sou parceira do Partner Bank, indico para quem precisar dessa funcionalidade."</p>

            <h3>Cristiane Pierre</h3>
            <p class="cargo">Eficaz Assessoria e Administração de Condomínios</p>
          </div>
        </div>

        <div class="depoimentos__box">
          <div class="depoimentos__box__foto">
            <img src="<?= get_template_directory_uri(); ?>/images/foto-denise-arns.png" width="240" height="240" class="my-2" alt="Denise Arns - Diretora ADC Condomínios" title="Denise Arns" />
          </div>

          <div class="depoimentos__box__texto">
            <p>"Faz um ano que iniciamos a utilização e só há pontos positivos a relatar. A PartnerBank otimizou toda a parte de retorno dos pagamentos, que antes era manual. A rapidez no registro dos boletos viabilizou o pagamento logo após a emissão. O crédito em conta no dia seguinte ao pagamento foi um benefício fundamental para atender a rotina financeira dos condomínios. Sem contar o atendimento da equipe que é maravilhoso, muito atenciosos e sempre disponíveis para auxiliar.</p>
            <p>Super recomendado para facilitar o trabalho e adquirir um diferencial a mais à empresa, que reflete diretamente ao cliente. Obrigada equipe Partner Bank!"</p>

            <h3>Denise Arns</h3>
            <p class="cargo">Diretora ADC Condomínios</p>
          </div>
        </div>

        <div class="depoimentos__box">
          <div class="depoimentos__box__foto">
            <img src="<?= get_template_directory_uri(); ?>/images/renata-mellem.jpg" width="240" height="240" class="my-2" alt="Denise Arns - Diretora ADC Condomínios" title="Denise Arns" />
          </div>

          <div class="depoimentos__box__texto">
            <p>"Com a implantação do PartnerBank no início do ano de 2020 automatizamos 90% dos processos do Contas a Receber. Isso fez com que nossos colaboradores ficassem mais focados na qualidade da nossa prestação de serviços.</p>
            <p>Os resultados foram imediatos! Hoje, não são necessários os processos manuais e diários de atualização do nosso sistema financeiro e ter o sistema atualizado automaticamente reflete na agilidade das informações financeiras e de cobrança.</p>
            <p>O crédito automático do valor financeiro na conta individualiza em D+1 foi um recurso essencial para a habilitação aos nossos clientes e os relatórios de recebimentos são detalhados e transparentes, o que garante a transparência financeira da gestão.</p>
            <p>O suporte é rápido e eficaz, com atendentes atenciosos e sempre dispostos a nos auxiliar nas demandas.</p>
            <p>Recomento a integração com o sistema financeiro da sua empresa.</p>
            <p>Com o Partnerbank você vai garantir uma automatização que só tende a somar e agregar valor aos seus processos operacionais. Agradeço toda a equipe do Partnerbank."</p>

            <h3>Renata Mellem</h3>
            <p class="cargo">Administradora Élis Administradora de Condomínios</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="frase">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-10 col-md-10 wow fadeInDown">
        <p class="lead">Com o <span class="font-weight-bold">PartnerBank</span> é possível automatizar processos, facilitar o acesso aos meios de pagamentos e gerir as cobranças de todos os seus clientes e condôminos.</p>
      </div>
    </div>
  </div>
</section>

<section id="institucional" class="institucional">
  <div class="container">
    <div class="row d-flex justify-content-center justify-content-md-between institucional__box">
      <div class="col-8 col-md-5 institucional__imagem wow fadeInDown">
        <img src="<?= get_template_directory_uri(); ?>/images/marca-partner-bank-institucional.png" heigth="100" width="299" alt="logotipo PartnerBank" class="img-fluid mb-3 mb-md-0" />
      </div>

      <div class="col-11 col-md-7 institucional__conteudo wow fadeInRight">
        <p>Automatizamos processos financeiros para empresas. Nossa solução atende aos mais variados segmentos e portes de negócio e é ideal para modelos de cobrança recorrente, por meio de boleto bancário.</p>
        <a class="btn btn-azure" href="#" data-toggle="modal" data-target="#ModalErp">Conecte seu ERP</a>
      </div>
    </div>
  </div>
</section>

<section id="beneficios">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col col-md-8 pb-5 text-center">
        <h2 class="text-azure">Tenha o controle <span class="text-roxo">em suas mãos</span></h2>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-4 wow fadeInDown" data-wow-delay=".2s">
        <div class="box-beneficio d-flex justify-content-center align-items-center">
          <img src="<?= get_template_directory_uri(); ?>/images/icone-convenio.svg" width="63" height="60" alt="ícone de convênios PartnerBank" />
          <p>Abra <strong>convênios de forma totalmente automática</strong> sem a burocracia dos bancos</p>
        </div>
      </div>

      <div class="col-12 col-md-4 wow fadeInDown" data-wow-delay=".4s">
        <div class="box-beneficio d-flex justify-content-center align-items-center">
          <img src="<?= get_template_directory_uri(); ?>/images/icone-automatiza.svg" width="80" height="64" alt="ícone de automatização de boletos" />
          <p><strong>Automatize</strong> registros e baixas de boletos</p>
        </div>
      </div>

      <div class="col-12 col-md-4 wow fadeInDown" data-wow-delay=".6s">
        <div class="box-beneficio d-flex justify-content-center align-items-center">
          <img src="<?= get_template_directory_uri(); ?>/images/icone-tarifa.svg" width="80" height="71" alt="ícone de pagamento de tarifa" />
          <p>Realize o pagamento de uma <strong>única tarifa</strong>. Apenas na liquidação</p>
        </div>
      </div>

      <div class="col-12 col-md-4 wow fadeInDown" data-wow-delay=".8s">
        <div class="box-beneficio d-flex justify-content-center align-items-center">
          <img src="<?= get_template_directory_uri(); ?>/images/icone-d1.svg" width="42" height="65" alt="ícone de crédito de boletos" />
          <p>Receba os créditos dos boletos em sua <strong>conta em D+1</strong></p>
        </div>
      </div>

      <div class="col-12 col-md-4 wow fadeInDown" data-wow-delay="1.0s">
        <div class="box-beneficio d-flex justify-content-center align-items-center">
          <img src="<?= get_template_directory_uri(); ?>/images/icone-taxa0.svg" width="79" height="52" alt="ícone de taxa 0% nos boletos" />
          <p><strong>Taxa 0%</strong> nas baixas e alterações nos boletos</p>
        </div>
      </div>

      <div class="col-12 col-md-4 wow fadeInDown" data-wow-delay="1.2s">
        <div class="box-beneficio d-flex justify-content-center align-items-center">
          <img src="<?= get_template_directory_uri(); ?>/images/icone-integracao.svg" width="58" height="59" alt="ícone de integração ao sistema Condomínio21" />
          <p>100% integrado ao sistema <a href="https://www.groupsoftware.com.br/administracao-de-condominios/condominio21/" class="font-weight-bold" target="_blank">Condomínio21</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="diferenciais">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-10 col-md-6 text-center mb-5">
        <h2 class="text-roxo">Um produto novo com<br /> <span class="text-azure">DNA líder de mercado</span></h2>
      </div>
    </div>

    <div class="row d-flex justify-content-around">
      <div class="col-10 col-md-3 text-center box-diferenciais wow fadeInDown">
        <div class="d-flex justify-content-center align-items-center mx-auto box-diferenciais-img">
          <img src="<?= get_template_directory_uri(); ?>/images/icone-leis.svg" width="82" height="82" alt="ícone de regulamentações bancárias">
        </div>
        <p>Em conformidade com as leis, regulamentações bancárias e homologado pelo Banco Central. Confiança para fazer mais.</p>
      </div>

      <div class="col-10 col-md-3 text-center box-diferenciais wow fadeInDown" data-wow-delay=".2s">
        <div class="d-flex justify-content-center align-items-center mx-auto box-diferenciais-img">
          <img src="<?= get_template_directory_uri(); ?>/images/icone-seguranca.svg" width="75" height="83" alt="ícone de tecnologia segura">
        </div>
        <p>Tecnologia segura e auditada para entregar resultados reais.</p>
      </div>

      <div class="col-10 col-md-3 text-center box-diferenciais wow fadeInDown" data-wow-delay=".4s">
        <div class="d-flex justify-content-center align-items-center mx-auto box-diferenciais-img">
          <img src="<?= get_template_directory_uri(); ?>/images/icone-bc.svg" width="78" height="80" alt="ícone de instituição bancária">
        </div>
        <p>Somos uma instituição de pagamento cadastrada no Banco Central.</p>
      </div>
    </div>
  </div>
</section>

<section id="parcele">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-4 d-flex justify-content-start">
        <img src="<?= get_template_directory_uri(); ?>/images/parcele-boletos.png" width="480" height="480" class="img-fluid" alt="imagem de código de barras de boleto" />
      </div>

      <div class="col-12 col-md-8 d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-8 mb-5">
              <h2 class="text-roxo text-center">Parcele já seus boletos</h2>
              <p class="lead text-roxo text-center">Você sabia que agora os boletos emitidos pelo PartnerBank podem ser parcelados no cartão de crédito? Veja como é simples.</p>
            </div>
          </div>

          <div class="row d-flex justify-content-start text-center text-roxo">
            <div class="col-12 col-md-3 wow fadeInDown" data-wow-delay=".2s">
              <img src="<?= get_template_directory_uri(); ?>/images/portal-pagamento-boleto.svg" width="91" height="91" class="mb-3" alt="ícone do portal PartnerBank" />
              <p>Acesse o portal</p>
            </div>
            <div class="col-12 col-md-3 wow fadeInDown" data-wow-delay=".4s">
              <img src="<?= get_template_directory_uri(); ?>/images/codigo-barras-boleto.svg" width="100" height="100" class="mb-3" alt="ícone de código de barras do boleto" />
              <p>Digite o código de barras do boleto</p>
            </div>
            <div class="col-12 col-md-3 wow fadeInDown" data-wow-delay=".6s">
              <img src="<?= get_template_directory_uri(); ?>/images/pacele-boleto-12-vezes.svg" width="152" height="90" class="mb-3" alt="ícone de parcelamento em até 12x" />
              <p>Defina a quantidade de parcelas</p>
            </div>
            <div class="col-12 col-md-3 wow fadeInDown" data-wow-delay=".8s">
              <img src="<?= get_template_directory_uri(); ?>/images/pagamento-boleto.svg" width="95" height="95" class="mb-3" alt="ícone de pagamento do boleto" />
              <p>Efetue o pagamento do seu boleto</p>
            </div>
          </div>

          <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 mb-5 d-flex justify-content-center">
              <a type="button" href="https://www.partnerbank.com.br/credito" class="btn btn-lg btn-roxo px-5 text-azure" target="_blank">Acesse agora</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8 text-center mb-5">
        <h2 class="text-roxo">Respondemos algumas perguntas mais comuns sobre as nossas soluções</h2>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8">
        <div class="accordion" id="accordionExample">
          <div class="card wow fadeInDown" data-wow-delay=".1s">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq-01" aria-expanded="true" aria-controls="faq-01">
                  Quais tipos de boletos posso parcelar?
                </button>
              </h5>
            </div>
            <div id="faq-01" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Boleto de taxas condominiais e acordos emitidos pelo PartnerBank
              </div>
            </div>
          </div>

          <div class="card wow fadeInDown" data-wow-delay=".2s">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-02" aria-expanded="false" aria-controls="faq-02">
                  Quais as formas de pagamentos aceitas?
                </button>
              </h5>
            </div>
            <div id="faq-02" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                À vista no débito ou no crédito em até 12x, com os cartões Mastercard e Visa.
              </div>
            </div>
          </div>

          <div class="card wow fadeInDown" data-wow-delay=".3s">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-03" aria-expanded="false" aria-controls="faq-03">
                  É possível fazer um pagamento em dinheiro?
                </button>
              </h5>
            </div>
            <div id="faq-03" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Não aceitamos pagamento em dinheiro nesta modalidade.
              </div>
            </div>
          </div>

          <div class="card wow fadeInDown" data-wow-delay=".4s">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-04" aria-expanded="false" aria-controls="faq-04">
                  Posso pagar boletos vencidos?
                </button>
              </h5>
            </div>
            <div id="faq-04" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                Sim
              </div>
            </div>
          </div>

          <div class="card wow fadeInDown" data-wow-delay=".5s">
            <div class="card-header" id="headingFive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-05" aria-expanded="false" aria-controls="faq-05">
                  Em quanto tempo os débitos são quitados?
                </button>
              </h5>
            </div>
            <div id="faq-05" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                Os débitos são quitados em 24 horas, conforme o prazo de compensação do Partner Bank no sistema bancário nacional.
              </div>
            </div>
          </div>

          <div class="card wow fadeInDown" data-wow-delay=".6s">
            <div class="card-header" id="headingSix">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-06" aria-expanded="false" aria-controls="faq-06">
                  Por onde posso realizar os pagamentos?
                </button>
              </h5>
            </div>
            <div id="faq-06" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
              <div class="card-body">
                Para realizar o pagamento dos boletos, basta acessar o link <a href="https://www.partnerbank.com.br/credito" target="_blank">https://www.partnerbank.com.br/credito</a>.
              </div>
            </div>
          </div>

          <div class="card wow fadeInDown" data-wow-delay=".7s">
            <div class="card-header" id="headingSeven">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-07" aria-expanded="false" aria-controls="faq-07">
                  Como faço os pagamentos e parcelamentos?
                </button>
              </h5>
            </div>
            <div id="faq-07" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
              <div class="card-body">
                Acessando o link, você terá a opção de adicionar o boleto, você poderá conferir os dados do boleto como (Recebedor, cnpj, vencimento...), logo abaixo pode ser selecionado o número de parcelas para esta operação, confira suas informações e inclua os dados do cartão de crédito. Pronto já pode confirmar o pagamento.
              </div>
            </div>
          </div>

          <div class="card wow fadeInDown" data-wow-delay=".8s">
            <div class="card-header" id="headingEight">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-08" aria-expanded="false" aria-controls="faq-08">
                  É possivel cancelar uma operação após realizá-la?
                </button>
              </h5>
            </div>
            <div id="faq-08" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
              <div class="card-body">
                Não! Após completa uma transação não é possível efetuar o cancelamento.
              </div>
            </div>
          </div>

          <div class="card wow fadeInDown" data-wow-delay=".9s">
            <div class="card-header" id="headingNine">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-09" aria-expanded="false" aria-controls="faq-09">
                  Como fica o limite do meu cartão de crédito após um pagamento?
                </button>
              </h5>
            </div>
            <div id="faq-09" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
              <div class="card-body">
                O parcelamento segue a mesma lógica de uma compra comum no crédito, o limite do cartão será ocupado até o pagamento de todas as parcelas
              </div>
            </div>
          </div>

          <div class="card wow fadeInDown" data-wow-delay="1s">
            <div class="card-header" id="headingTen">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-10" aria-expanded="false" aria-controls="faq-10">
                  Como consigo os comprovantes de pagamento dos boletos?
                </button>
              </h5>
            </div>
            <div id="faq-10" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
              <div class="card-body">
                Os comprovantes são enviados para o e-mail cadastrado no momento da transação e são enviados assim que o boleto for liquidado (pago).
              </div>
            </div>
          </div>

          <div class="card wow fadeInDown" data-wow-delay="1.1s">
            <div class="card-header" id="headingEleven">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-11" aria-expanded="false" aria-controls="faq-11">
                  Como sei o quanto vou pagar em um boleto?
                </button>
              </h5>
            </div>
            <div id="faq-11" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
              <div class="card-body">
                No link, ao incluir o boleto o sistema retorna os valores no débito e no crédito em até 12x.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8 text-center">
        <h2 class="text-roxo wow fadeInLeft">Comece a fazer diferente agora</h2>
        <p class="lead text-roxo wow fadeInLeft" data-wow-delay=".2s">Para nós, tecnologia não é apenas uma forma de mudar processos. É uma forma de alavancar a transformação que o seu negócio precisa. Fale com nossos especialistas e vamos trabalhar juntos.</p>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-6 text-center">
        <a type="button" class="btn btn-lg btn-outline-roxo mb-3 mb-md-0 wow fadeInDown" href="https://materiais.partnerbank.com.br/conheca-o-partner-bank" target="_blank">Quero conhecer</a>
        <a type="button" class="btn btn-lg btn-outline-roxo mb-3 mb-md-0 wow fadeInDown" href="#" data-toggle="modal" data-target="#ModalErp">Quero integrar meu ERP</a>
      </div>
    </div>
  </div>
</section>

<?php
// get_template_part('partials/modal', 'contato');
// get_template_part('partials/modal', 'erp');

require_once 'footer.php';
?>