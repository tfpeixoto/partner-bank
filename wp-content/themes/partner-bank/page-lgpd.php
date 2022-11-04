<?php
/**
 * Template name: LGPD
 */
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
      <div class="col-12 col-md-5">
        <?php the_content(); ?>

        <h2>Entre em contato com o DPO</h2>
        <p>Dados de contato do Encarregado de Dados:</p>

        <p><span class="font-weight-bold">Nome:</span> Luiz Augusto Amelotti<br />
          <span class="font-weight-bold">E-mail:</span> dpo@groupsoftware.com.br
        </p>
      </div>

      <div class="col-12 col-md-7">
        <!-- OneTrust Web Form -->
        <style>
          .ot-form-wrapper {
            max-width: 750px;
            height: 1800px;
            border: none;
            margin: auto;
          }

          .ot-form-wrapper iframe {
            width: 100%;
            height: 100%;
            border: none;
          }
        </style>
        <div class="ot-form-wrapper">
          <iframe src="https://privacyportal.onetrust.com/webform/3d269afb-0756-49f7-b945-1847083fe911/9ae01ec2-0ba4-41ab-b471-03a2653b649e"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once 'footer.php';
?>