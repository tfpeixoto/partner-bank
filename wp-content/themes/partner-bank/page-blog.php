<?php

/**
 * Template name: Blog
 */
$estiloPagina = "blog.css";
require_once "header.php";
?>

<?php get_template_part('partials/banner-posts'); ?>

<section class="trending">
  <div class="container">
    <div class="row post-cards">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
      );
      $trending = new WP_Query($args);

      if ($trending->have_posts()) : while ($trending->have_posts()) : $trending->the_post();

          get_template_part('partials/card');

        endwhile;
      else : ?>

        <div class="col-12">
          <p>Ops, não há posts publicados.</p>
        </div>

      <?php endif; ?>
    </div>
  </div>

  <div class="trending__circulo-pequeno"></div>
  <div class="trending__plus"></div>
  <div class="trending__circulo-grande"></div>
</section>

<section id="categorias" class="categorias">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="owl-carousel owl-categories categorias__lista">
          <a href="blog/#categorias">Todas</a>
          <?php
          $categories = get_categories();

          foreach ($categories as $category) {
            echo "<a href='?category=";
            echo $category->slug;
            echo "#categorias'>";
            echo $category->name;
            echo "</a>";
          }
          ?>
        </div>
      </div>
    </div>

    <div class="row">
      <?php

      $category_selected = isset($_GET['category']) ? $_GET['category'] : '';
      $paged = (get_query_var('page')) ? get_query_var('page') : 1;

      $args = array(
        'post_type' => 'post',
        'paged' => $paged,
        'posts_per_page' => 6,
        'category_name' => $category_selected
      );
      $posts = new WP_Query($args);

      if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();

          get_template_part('partials/card');

        endwhile;
      else : ?>

        <div class="col-12">
          <p>Não há posts publicados nessa categoria.</p>
        </div>

      <?php endif; ?>
    </div>

    <div class="row paginacao">
      <div class="col-12">
        <?php partner_paginacao(); ?>
      </div>
    </div>
  </div>

  <div class="categorias__circulo"></div>
  <div class="categorias__plus"></div>
</section>

<section class="busca">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <h2>Confira conteúdos para melhorar a performance do seu negócio</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
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

  <div class="busca__circulo"></div>
  <div class="busca__plus"></div>
</section>

<section class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-12 newsletter__titulo">
        <h2><i class="fa-regular fa-envelope"></i> Assine para receber conteúdos exclusivos</h2>
      </div>
    </div>

    <form id="news-footer" class="newsletter__form" name="newsletter_footer">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4 form-group">
          <label for="news-nome">Nome</label>
          <input type="text" name="nome" id="news-nome" class="form-control" required />
        </div>

        <div class="col-12 col-md-4 form-group">
          <label for="news-email">E-mail</label>
          <input type="email" name="email" id="news-email" class="form-control" required />
        </div>

        <input type="hidden" name="tags" value="newsletter-footer" />

        <div class="col-12 col-md-2 form-group d-flex align-items-end">
          <button type="submit">Assinar</button>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-12 col-md-10 form-check">

          <label>
            <input type="checkbox" data-privacy="true" name="communications" value="1">
            Ao informar meus dados, eu concordo com a <a href="politica-de-privacidade" target="_blank">Política de Privacidade do Partner Bank</a>.
          </label>
        </div>
      </div>

      <div id="msg-sucesso" class="alert alert-success" role="alert" style="display: none">
        Newsletter assinada com sucesso.
      </div>
    </form>
  </div>
</section>

<?php require_once 'footer.php'; ?>