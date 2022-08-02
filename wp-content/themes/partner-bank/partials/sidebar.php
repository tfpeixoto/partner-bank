<aside class="col-12 col-md-3 sidebar">
  <div class="sidebar__postagens">
    <h3>Postagens recentes</h3>

    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
    );
    $posts = new WP_Query($args);

    if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>

        <div class="sidebar__card">
          <?php the_post_thumbnail(); ?>

          <h4>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h4>
        </div>

    <?php endwhile;
    endif; ?>
  </div>

  <div class="sidebar__newsletter">
    <i class="fa-regular fa-envelope"></i>
    <h3>Assine para receber conteúdos exclusivos</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    <form action="">
      <div class="">
        <label for="news-nome">Nome</label>
        <input type="text" name="news-nome" id="news-nome" class="form-control" />
      </div>

      <div class="">
        <label for="news-email">E-mail</label>
        <input type="text" name="news-email" id="news-email" class="form-control" />
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="news-optin">
        <label class="form-check-label" for="news-optin">
          Lorem ipsum dolor sit amet cursus <a href="#">apoet cursus abot doret</a>
        </label>
      </div>

      <button type="submit">Assinar</button>
    </form>
  </div>

  <?php if (is_active_sidebar('sidebar')) { ?>
    <div id="sidebar">
      <?php dynamic_sidebar('sidebar'); ?>
    </div>
  <?php } ?>
</aside>