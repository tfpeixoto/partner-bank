<section id="banner-posts" class="banner-posts">
  <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
      );
      $posts = new WP_Query($args);

      if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();
      ?>

          <div class="carousel-item">
            <?php the_post_thumbnail('thumb-banner'); ?>

            <div class="carousel-caption">
              <h1><?php the_title(); ?></h1>
              <a href="<?php the_permalink(); ?>" class="btn">Leia mais</a>
            </div>
          </div>

        <?php
        endwhile;
      else : ?>

        <div class="col-12">
          <p>Ops, não há banners publicados.</p>
        </div>

      <?php endif; ?>
    </div>

    <ol class="carousel-indicators" href="#banner-posts">
      <?php
      $count = 0;

      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
      );
      $posts = new WP_Query($args);

      if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();

      ?>

          <li data-target="#banner-posts" data-slide-to="<?= $count++; ?>"></li>

      <?php
        endwhile;
      endif; ?>
    </ol>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</section>