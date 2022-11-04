<aside class="col-12 col-md-3 sidebar">
  <div class="sidebar__postagens">
    <?php if (is_active_sidebar('sidebar')) { ?>
      <div id="sidebar">
        <?php dynamic_sidebar('sidebar'); ?>
      </div>
    <?php } ?>
  </div>

  <div class="sidebar__newsletter">
    <i class="fa-regular fa-envelope"></i>
    <h3>Assine para receber conteúdos exclusivos</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    <form id="news-sidebar" class="" name="newsletter_sidebar">
      <div class="form-group">
        <label for="news-nome">Nome</label>
        <input type="text" name="nome" id="news-nome" class="form-control" required />
      </div>

      <div class="form-group">
        <label for="news-email">E-mail</label>
        <input type="email" name="email" id="news-email" class="form-control" required />
      </div>

      <div class="form-group form-check">
        <label>
          <input type="checkbox" data-privacy="true" name="communications" value="1">
          Ao informar meus dados, eu concordo com a <a href="politica-de-privacidade" target="_blank">Política de Privacidade da Partner Bank</a>.
        </label>
      </div>

      <input type="hidden" name="tags" value="newsletter-sidebar" />

      <button type="submit">Assinar</button>

      <div id="msg-sucesso" class="alert alert-success" role="alert" style="display: none">
        Newsletter assinada com sucesso.
      </div>
    </form>
  </div>
</aside>