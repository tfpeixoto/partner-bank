<?php

$estiloPagina = "single.css";
require_once "header.php";
?>

<section class="conteudo">
  <div class="container">
    <div class="row">
      <article class="col-12 col-md-8 post">
        <div class="post__breadcrumb">
          <ul>
            <li><a href="#">Blog</a></li> >
            <li>Título do post</li>
          </ul>
        </div>

        <div class="post__titulo">
          <h1>Título do post</h1>
        </div>

        <div class="post__dados">
          <ul>
            <li class="post__autor">Partner Bank</li>
            <li class="post__data">Publicado em 01 de janeiro de 2022</li>
            <li class="post__tempo">Leitura: 1 minuto</li>
          </ul>
        </div>

        <div class="post__conteudo">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat iusto labore impedit mollitia inventore, voluptatem perspiciatis laudantium asperiores accusantium aliquid ratione dignissimos debitis. Ullam aperiam necessitatibus in libero nisi non!</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt tenetur ut est exercitationem numquam asperiores nostrum minima reiciendis veritatis ea, veniam, ab aspernatur aut incidunt assumenda cupiditate quos deserunt. Voluptatem!</p>

          <img src="#" alt="#" />

          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita sint error aspernatur numquam ducimus suscipit aut cupiditate adipisci similique. Libero quisquam maiores, voluptate porro quos repudiandae numquam quasi alias illum?</p>

          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo libero aut unde veritatis. Aperiam quia, blanditiis rem quibusdam perferendis officiis, nihil exercitationem possimus cupiditate nesciunt aliquam eaque quos quidem ducimus.</p>
        </div>
      </article>

      <aside class="col-12 col-md-8 sidebar">
        <div class="sidebar__postagens">
          <h3>Postagens</h3>

          <div class="sidebar__card">
            <img src="#" alt="#" />
            <h3>Título do post</h3>
          </div>

          <div class="sidebar__card">
            <img src="#" alt="#" />
            <h3>Título do post</h3>
          </div>

          <div class="sidebar__card">
            <img src="#" alt="#" />
            <h3>Título do post</h3>
          </div>
        </div>

        <div class="sidebar__newsletter">
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
      </aside>
    </div>
  </div>
</section>

<?php
get_template_part('partials/compartilhe');
?>

<?php
require_once 'footer.php';
?>