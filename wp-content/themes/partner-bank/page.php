<?php

$estiloPagina = 'page.css';
require_once 'header.php';
?>

<!-- banners -->
<section id="banner" class="d-flex align-items-center interno">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12">
        <h1 class="text-white text-center wow fadeInLeft"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<!-- conteudo -->
<section class="conteudo">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php
require_once 'footer.php';
?>