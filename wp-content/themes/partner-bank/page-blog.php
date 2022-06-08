<?php

/**
 * Template name: Blog
 */
$estiloPagina = "blog.css";
require_once "header.php";
?>

<?php get_template_part('partials/banner'); ?>

<section class="busca">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <h2>Tudo sobre sua instituição de pagamento</h2>

        <form action="<?= home_url('/'); ?>" method="get">
          <label for="search" class="sr-only"><?= __('Buscar por', 'partner_bank'); ?></label>
          <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?= __('O que você está procurando?', 'partner_bank'); ?>" />
          <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
            </svg>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="trending">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 trending__titulo">
        <h2>Trending</h2>
      </div>
    </div>

    <div class="row post-cards">
    <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
      );
      $trending = new WP_Query($args);

      if ($trending->have_posts()) : while ($trending->have_posts()) : $trending->the_post(); ?>

          <div class="col-12 col-md-4">
            <div class="post-cards__card">
              <?php the_post_thumbnail(); ?>

              <img src="<?= get_template_directory_uri(); ?>/images/bg-modal-conhecer.jpg" alt="#" />

              <div class="post-cards__conteudo">
                <h3 class="post-cards__titulo"><?php the_title(); ?></h3>
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
          <p>Ops, não há posts publicados.</p>
        </div>

      <?php endif; ?>
    </div>
  </div>
</section>

<section class="categorias">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="categorias__lista">
          <?php
          $categories = get_categories();
          foreach ($categories as $category) {
            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
          }
          ?>
        </ul>
      </div>
    </div>

    <div class="row">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6
      );
      $posts = new WP_Query($args);

      if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>

          <div class="col-12 col-md-4">
            <div class="post-cards__card">
              <?php the_post_thumbnail(); ?>

              <img src="<?= get_template_directory_uri(); ?>/images/bg-modal-conhecer.jpg" alt="#" />

              <div class="post-cards__conteudo">
                <h3 class="post-cards__titulo"><?php the_title(); ?></h3>
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
          <p>Ops, não há posts publicados.</p>
        </div>

      <?php endif; ?>
    </div>

    <div class="row paginacao">
      <div class="col-12">
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

<section class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-12 newsletter__titulo">
        <h2>Assine para receber conteúdos exclusivos</h2>
      </div>
    </div>

    <form class="newsletter__form">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4 form-group">
          <label for="news-nome">Nome</label>
          <input type="text" name="news-nome" id="news-nome" class="form-control" />
        </div>

        <div class="col-12 col-md-4 form-group">
          <label for="news-email">E-mail</label>
          <input type="text" name="news-email" id="news-email" class="form-control" />
        </div>

        <div class="col-12 col-md-2 form-group d-flex align-items-end">
          <button type="submit">Assinar</button>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-12 col-md-10 form-check">
          <input class="form-check-input" type="checkbox" value="" id="news-optin">
          <label class="form-check-label" for="news-optin">
            Lorem ipsum dolor sit amet cursus <a href="#">apoet cursus abot doret</a>
          </label>
        </div>
      </div>
    </form>
  </div>
</section>

<?php require_once 'footer.php'; ?>