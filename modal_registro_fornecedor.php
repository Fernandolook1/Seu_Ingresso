<form class="modal fade" id="modalRegistroFornecedor" tabindex="-1" role="form" aria-labelledby="myModalLabel" aria-hidden="true"
    action="handle_registra_fornecedor.php" method="POST">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title w-100 font-weight-bold" style="color:darkslategray">Novo Fornecedor</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<!-- INICIO FORMULÁRIO DE REGISTRO -->

            <div class="container" style="margin-top: 10px">

                <div id="dvDadosUsuarioFornecedor" name="dvDadosUsuarioFornecedor">
                    <div class="col-md-auto" style="margin: auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">
                                    <i style="font-size: 24px; color:royalblue ;" class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="email" id="txtEmailF" name="txtEmail" class="form-control validate" placeholder="E-mail de usuário" required>
                            <label data-error="Favor colocar o e-mail correto" data-success="" for="txtEmailF">E-mail</label>
                        </div>
                    </div>
                    <div class="col-md-auto" style="margin: auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">
                                    <i style="font-size: 24px; color:royalblue ;" class="fas fa-unlock-alt"></i>
                                </span>
                            </div>
                            <input id="txtSenhaF" name="txtSenha" type="password" class="form-control" placeholder="Senha">
                        </div>
                    </div>
                        <div class="col-md-auto" style="margin: auto">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">
                                        <i style="font-size: 24px; color:royalblue ;" class="fas fa-unlock"></i>
                                    </span>
                                </div>
                                <input id="txtConfirmarSenhaF" name="txtConfirmarSenha" type="password" class="form-control" placeholder="Confirmar Senha">
                            </div>
                        </div>
                    </div>
                    <hr>
                <div id="dvDadosFornecedor" name="dvDadosFornecedor">
                    <!-- <div class="row" > -->

                    <div class="col-md-auto" style="margin: auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">
                                    <i style="font-size: 24px; color:royalblue ;" class="fas fa-file-signature"></i>
                                </span>
                            </div>
                            <input id="txtRazaoSocial" name="txtRazaoSocial" type="text" class="form-control" placeholder="Razão Social">
                        </div>
                    </div>
                    <div class="col-md-auto" style="margin: auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">
                                    <i style="font-size: 24px; color:royalblue ;" class="fas fa-pen-nib"></i>
                                </span>
                            </div>
                            <input id="txtNomeFantasia" name="txtNomeFantasia" type="text" class="form-control" placeholder="Nome Fantasia">
                        </div>
                    </div>
                    <div class="col-md-auto" style="margin: auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">
                                    <i style="font-size: 24px; color:royalblue ;" class="fas fa-id-card"></i>
                                </span>
                            </div>
                            <input id="txtCNPJ" name="txtCNPJ" type="text" class="form-control" placeholder="CNPJ">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row" style="margin:auto;">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">
                                    <i style="font-size: 24px; color:royalblue ;" class="fas fa-phone"></i>
                                </span>
                            </div>
                            <input id="txtTelefoneF" name="txtTelefone" type="text" class="form-control" placeholder="Telefone">
                        </div>
                    </div>
                </div>
            </div>
			<!-- FIM FORMULÁRIO DE REGISTRO -->

			<div class="modal-footer d-flex justify-content-center">
				<button name="submitButton" class="btn btn-deep-orange" type="submit" value="fornecedor">Registrar</button>
			</div>
		</div>
	</div>
</form>

<div id="recebeDadosRegistroFornecedor"></div>