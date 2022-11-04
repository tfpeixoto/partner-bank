<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Início do aviso de consentimento de cookies OneTrust para www.partnerbank.com.br -->
  <!-- <script src="https://cdn.cookielaw.org/consent/3fe18421-054f-4af6-9624-4736a4092905/OtAutoBlock.js" defer></script>
  <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="3fe18421-054f-4af6-9624-4736a4092905" defer></script>
  <script type="text/javascript">
    function OptanonWrapper() {}
  </script> -->

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

  <!-- CSS -->
  <?php wp_head(); ?>
  <link rel="preload" as="style" onload="this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= get_template_directory_uri(); ?>/css/components/animate.css">
  <link rel="preload" as="style" onload="this.rel='stylesheet'" href="<?= get_template_directory_uri() . "/css/" . $estiloPagina ?>">

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
  <header id="topo" class="header">
    <div class="header__contatos">
    <span class="contato">Suporte: <a href="tel:3140404167" class="contato-link" rel="noopener noreferrer"><i class="fa-solid fa-phone"></i>(31) 4040-4167</span></a>
      <a href="https://www.instagram.com/partner.bank/" class="contato-link" title="Nosso Instagram" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://www.facebook.com/partnerbankbr/" class="contato-link" title="Nosso Facebook" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://www.linkedin.com/company/partnerbank/" class="contato-link" title="Nosso LinkedIn" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
    </div>

    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="header__brand">
          <?= get_custom_logo(); ?>
          <p class="header__description"><?= bloginfo('description'); ?></p>
        </div>

        <button class="navbar-toggler header__mobile" type="button" data-toggle="collapse" data-target="#navMobile" aria-controls="navMobile" aria-expanded="false" aria-label="Alterna navegação">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#ffffff">
            <path d="M16 132h416c8.8 0 16-7.2 16-16V76c0-8.8-7.2-16-16-16H16C7.2 60 0 67.2 0 76v40c0 8.8 7.2 16 16 16zm0 160h416c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16zm0 160h416c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16z" />
          </svg>
        </button>

        <?php
        wp_nav_menu(array(
          'theme_location'  => 'menu-principal',
          'depth'           => 2,
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'navMobile',
          'menu_class'      => 'navbar-nav header__nav ml-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));
        ?>
      </nav>
    </div>
  </header>