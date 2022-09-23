<?php

/**
 * Template name: Busca
 */
$estiloPagina = 'blog.css';
require_once('header.php');
?>

<section class="trending">
  <div class="container">
    <div class="row">
      <div class="col-12 trending__result">
        <?php
        global $wp_query;
        $total_resultados = $wp_query->found_posts;
        $termo_buscado = get_search_query();

        $frase_retorno = ($total_resultados > 1) ?
          "Encontramos <strong>${total_resultados}</strong> resultados com o termo <strong>${termo_buscado}</strong>" :
          "Encontramos <strong>${total_resultados}</strong> resultado com o termo <strong>${termo_buscado}</strong>";

        if ($total_resultados != 0) echo $frase_retorno;
        ?>
      </div>
    </div>

    <div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post();

          get_template_part('partials/card');

        endwhile;
      else : ?>

        <div class="col-12 trending__noresult">
          <p>Desculpe, não há resultados com o termo <strong><?= $termo_buscado; ?></strong>.</p>
        </div>

      <?php endif; ?>
    </div>

    <div class="row paginacao">
      <div class="col-12 paginacao__controle">
        <?php partner_paginacao(); ?>
      </div>
    </div>
  </div>
</section>

<?php
require_once('footer.php');
?>