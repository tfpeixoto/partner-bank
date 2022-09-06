<section class="mapas">
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
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 footer__copy">
        <p>© Copyright 2020 PartnerBank . Todos os direitos reservados</p>
      </div>

      <?php
      wp_nav_menu(array(
        'theme_location'  => 'menu-rodape',
        'depth'           => 2,
        'container'       => 'div',
        'container_class' => 'col-12 col-md-6 footer__nav',
        'container_id'    => '',
        'menu_class'      => '',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
      ));
      ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/395c1bda-3074-4ee1-b1ca-17c469e49de4-loader.js" defer></script>

</body>

</html>