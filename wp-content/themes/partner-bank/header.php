<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Início do aviso de consentimento de cookies OneTrust para www.partnerbank.com.br -->
  <script src="https://cdn.cookielaw.org/consent/3fe18421-054f-4af6-9624-4736a4092905/OtAutoBlock.js" defer></script>
  <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="3fe18421-054f-4af6-9624-4736a4092905" defer></script>
  <script type="text/javascript">
    function OptanonWrapper() {}
  </script>

  <!-- GTM -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PHLBTHF');
  </script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- REMOVE -->
  <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon" />
  <link rel="preload" href="<?= get_template_directory_uri(); ?>/fonts/MyriadHebrew-Regular.woff" as="font" type="font/woff2">
  <link rel="preload" href="<?= get_template_directory_uri(); ?>/fonts/MyriadHebrew-Bold.woff" as="font" type="font/woff2">

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/components/animate.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">

  <?php wp_head(); ?>

  <!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '244585623195343');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=244585623195343&ev=PageView&noscript=1" /></noscript>
</head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156535822-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-156535822-1');
</script>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHLBTHF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- header -->
  <header id="topo">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="col-12 col-lg-7">
          <div class="row">

            <div class="col-9 col-lg-12">
              <a class="navbar-brand" href="index.html">
                <img src="<?= get_template_directory_uri(); ?>/images/partner-bank-negativa.png" height="50" width="152" alt="PartnerBank" />
              </a>
              <span class="topo-descricao mt-2">A sua instituição de pagamentos</span>
            </div>

            <div class="col-3 d-flex justify-content-center">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMobile" aria-controls="navMobile" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon">
                  <img src="<?= get_template_directory_uri(); ?>/images/menu.svg" height="30" width="34" alt="Menu" />
                </span>
              </button>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-5 d-none d-lg-block">
          <div class="navbar-menu">
            <ul class="navbar-menu__list">
              <li class="navbar-menu__list-item">
                <a class="navbar-menu__list-link" href="https://desk.zoho.com/portal/partnerbank/pt/home" target="_blank" rel="noopener noreferrer">Área Restrita</a>
              </li>
              <li class="navbar-menu__list-item">
                <span class="navbar-submenu">Nossas Soluções</span>
                <ul class="navbar-submenu__list">
                  <li class="navbar-submenu__list-item"><a href="https://materiais.partnerbank.com.br/conheca-o-partner-bank" target="_blank" rel="noopener noreferrer">Quero conhecer</a></li>
                  <li class="navbar-submenu__list-item"><a href="#" data-toggle="modal" data-target="#ModalErp">Conecte seu ERP</a></li>
                  <li class="navbar-submenu__list-item"><a href="https://materiais.partnerbank.com.br/conta-digital" target="_blank" rel="noopener noreferrer">Conta Digital</a></li>
                  <li class="navbar-submenu__list-item"><a href="https://materiais.partnerbank.com.br/precisa-de-credito" target="_blank" rel="noopener noreferrer">Crédito</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div> -->

        <div class="col-">
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'menu-principal',
            'depth'           => 2,
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'header__nav',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ));
          ?>

          <!-- <div class="collapse navbar-collapse" id="navMobile">
            <div class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link link-menu" href="https://desk.zoho.com/portal/partnerbank/pt/home" target="_blank">Área Restrita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-menu" href="#" data-toggle="modal" data-target="#ModalErp">Conecte seu ERP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-menu" href="https://materiais.partnerbank.com.br/conheca-o-partner-bank" target="_blank">Quero conhecer</a>
              </li>
            </div>
          </div> -->
        </div>
      </nav>
    </div>
  </header>