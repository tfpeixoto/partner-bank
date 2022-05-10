<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center my-5 wow fadeInDown">
        <img src="<?= get_template_directory_uri(); ?>/images/mapa-sao-paulo.svg" width="160" height="107" alt="Mapa de São Paulo" class="mr-3" />
        <p class="text-roxo"><strong>São Paulo</strong><br />
          Rua Paes Leme, 215<br />
          sala 1406 . Pinheiros<br />
          São Paulo/SP<br />
          CEP 05424-150<br />
          <a class="telefone" href="tel:1130903227" title="Telefone Belo Horizonte"><i class="fas fa-phone"></i> (11) 3090-3227</a>
        </p>
      </div>

      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center wow fadeInDown" data-wow-delay=".2s">
        <img src="<?= get_template_directory_uri(); ?>/images/mapa-minas-gerais.svg" width="160" height="124" alt="Mapa de Minas Gerais" class="mr-3" />
        <p class="text-roxo"><strong>Belo Horizonte</strong><br />
          Rua Santa Catarina, 1631<br />
          8º andar . Lourdes<br />
          Belo Horizonte/MG<br />
          CEP 30170-081<br />
          <a class="telefone" href="tel:3140404167" title="Telefone Belo Horizonte"><i class="fas fa-phone"></i> (31) 4040-4167</a>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <hr />
        <p class="text-roxo text-center">© Copyright 2020 PartnerBank . Todos os direitos reservados .
          <a href="lgpd.html" class="text-azure">Fale com o DPO</a> .
          <a href="politica-privacidade.html" class="text-azure">Política de Privacidade</a> .
          <a href="politica-cookies.html" class="text-azure">Política de Cookies</a>
        </p>

        <?php
          wp_nav_menu(array(
            'theme_location'  => 'menu-rodape',
            'depth'           => 2,
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => 'footer__nav',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ));
          ?>
      </div>
    </div>
  </div>
</footer>

<script src="<?= get_template_directory_uri(); ?>/js/scripts.min.js" defer></script>
<script>
  // Owl
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: true,
      autoHeight: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      nav: true,
      dots: false,
      items: 1,
    });
  });

  // Navbar Fixed  
  function navbarFixed() {
    if ($('header').length) {
      $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll) {
          $("header").addClass("fixed");
        } else {
          $("header").removeClass("fixed");
        }
      });
    };
  };
  navbarFixed();

  // Wow
  new WOW().init();

  // Modal
  $('#formSite').submit(function(e) {
    e.preventDefault();
    $('#retornoConhecer').fadeIn(500).delay(5000).fadeOut(500);
    setTimeout(function() {
      $('#ModalContato').modal('hide');
    }, 6000);
  });

  // Modal
  $('#formErp').submit(function(e) {
    e.preventDefault();
    $('#retornoERP').fadeIn(500).delay(5000).fadeOut(500);
    setTimeout(function() {
      $('#ModalErp').modal('hide');
    }, 6000);
  });

  // Zoho
  var $zoho = $zoho || {};
  $zoho.salesiq = $zoho.salesiq || {
    widgetcode: "19eabad5130e4f1a61288e54458efd2abe1e7772beb1905053a81971c7fe4755886a5fcb0a9e38100f30af78612c8ea8",
    values: {},
    ready: function() {}
  };
  var d = document;
  s = d.createElement("script");
  s.type = "text/javascript";
  s.id = "zsiqscript";
  s.defer = true;
  s.src = " https://salesiq.zoho.com/widget";
  t = d.getElementsByTagName("script")[0];
  t.parentNode.insertBefore(s, t);
  d.write("<div id='zsiqwidget'></div>");
</script>

<script src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/395c1bda-3074-4ee1-b1ca-17c469e49de4-loader.js" defer></script>
</body>

</html>