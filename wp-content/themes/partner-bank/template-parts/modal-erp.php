<div class="modal fade" id="ModalErp" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0" style="background: url(images/bg-modal-conecte.jpg) no-repeat; height: 100px">
        <h3 class="modal-title text-center" id="TituloModalCentralizado">Conecte seu ERP<br /> ao <span class="text-azure">PartnerBank</span></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formErp">
          <div id="retornoERP" class="alert alert-success text-center" role="alert" style="display: none">
            Formulário enviado com sucesso!<br /> Em breve um consultor entrará em contato.
          </div>

          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
          </div>
          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="telefone" placeholder="(00) 00000-0000" data-mask="(00) 00000-0000" required>
          </div>
          <div class="form-group">
            <label for="erp">Nome do ERP</label>
            <input type="text" name="erp" class="form-control" id="erp" placeholder="Digite o nome do ERP" required>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-roxo text-white">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>