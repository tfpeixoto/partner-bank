<?php

$estiloPagina = "single.css";
require_once "header.php";
?>

<section class="post-unico">
  <div class="container">
    <div class="row justify-content-between">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="col-12 col-md-8 post-unico__conteudo">
            <div class="post-unico__breadcrumb">
              <?php
              if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
              }
              ?>
            </div>

            <div class="post-unico__titulo">
              <h1><?php the_title(); ?></h1>
            </div>

            <div class="post-unico__dados">
              <ul>
                <li class="post__autor">
                  <i class="fa-solid fa-user"></i>
                  <?php
                  $author = get_the_author();
                  echo $author;
                  ?>
                </li>

                <li class="post__data">
                  <i class="fa-solid fa-calendar-days"></i>
                  Publicado em <?php the_time('j \d\e F \d\e Y'); ?>
                </li>

                <li class="post__tempo">
                  <i class="fa-solid fa-clock"></i>
                  Leitura: <?= do_shortcode('[shortcode-tempo-leitura]'); ?>
                </li>
              </ul>
            </div>

            <div class="post-unico__thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>

            <div class="post-unico__conteudo">
              <?php the_content(); ?>
            </div>
          </article>

      <?php endwhile;
      endif; ?>

      <?php get_template_part('partials/sidebar'); ?>

    </div>
  </div>
</section>

<?php
get_template_part('partials/compartilhe');
require_once 'footer.php';
?>