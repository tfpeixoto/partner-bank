<div class="col-12 col-md-4">
  <div class="post-cards__card">
    <?php
    if (has_post_thumbnail()) {
      the_post_thumbnail('thumb-card');
    } else {
      echo "<div class='post-cards__noimage'>Partner Bank</div>";
    } ?>

    <div class="post-cards__conteudo">
      <h3 class="post-cards__titulo">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
      <p class="post-cards__data"><?php the_time('j \d\e M \d\e Y'); ?></p>
      <?php the_excerpt(); ?>

      <a href="<?php the_permalink(); ?>" class="post-cards__link">Leia mais <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
          <path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z" />
        </svg></a>
    </div>
  </div>
</div>