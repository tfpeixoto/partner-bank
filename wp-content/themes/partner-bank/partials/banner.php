<section id="banner">
  <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <?php
      $args = array(
        'post_type' => 'slideshow',
        'posts_per_page' => 3
      );
      $slideshow = new WP_Query($args);

      if ($slideshow->have_posts()) : while ($slideshow->have_posts()) : $slideshow->the_post();
      ?>

          <div class="carousel-item">
            <?php the_post_thumbnail('banner'); ?>

            <div class="carousel-caption">
              <h1 class="text-azure text-center text-md-left"><?php the_title(); ?></h1>
              <h2 class="lead text-italic text-center text-md-left"><?php the_content(); ?></h2>
            </div>
          </div>

        <?php
        endwhile;
      else : ?>

        <div class="col-12">
          <p>Ops, não há banners publicados.</p>
        </div>

      <?php endif; ?>

      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>
</section>