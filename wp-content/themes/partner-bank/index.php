<?php

/**
 * Template name: Busca
 */
$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="posts">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php
        global $wp_query;
        $total_resultados = $wp_query->found_posts;
        $termo_buscado = get_search_query();

        $frase_retorno = ($total_resultados > 1) ?
          "Encontramos <strong> ${total_resultados} </strong> resultados com o termo <strong> ${termo_buscado} </strong>" :
          "Encontramos <strong> ${total_resultados} </strong> resultado com o termo <strong> ${termo_buscado} </strong>";

        if ($total_resultados != 0) echo $frase_retorno;
        ?>
      </div>
    </div>

    <div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="col-12 col-md-4">
            <div class="post-cards__card">
              <?php the_post_thumbnail(); ?>

              <img src="<?= get_template_directory_uri(); ?>/images/bg-modal-conhecer.jpg" alt="#" />

              <div class="post-cards__conteudo">
                <h3 class="post-cards__titulo">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="post-cards__data"><?php the_time('j \d\e M \d\e Y'); ?></p>
                <p class="post-cards__resumo"><?php the_excerpt(); ?></p>

                <a href="<?php the_permalink(); ?>" class="post-cards__link">Leia mais <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z" />
                  </svg></a>
              </div>
            </div>
          </div>

        <?php endwhile;
      else : ?>

        <div class="col-12">
          <p>Desculpe, não há posts publicados.</p>
        </div>

      <?php endif; ?>
    </div>

    <div class="row paginacao">
      <div class="col-12">
        <?php partner_paginacao(); ?>

        <nav class="d-flex justify-content-center">
          <ul class="paginacao__paginador">
            <li class="first"><a href="#">Anterior</a></li>
            <li><a href="#">1</a></li>
            <li class="current"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="last"><a href="#">Próximo</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>

<?php
require_once('footer.php');
?>