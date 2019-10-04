<div class="modal fade" id="modalLoginFormFornecedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h4 class="modal-title w-100 font-weight-bold" style="color:darkslategray">
					Login - Área dos Fornecedores
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class = "form_fornecedor" method="POST" action="handle_login_fornecedor.php">
				<div class="modal-body mx-3">
					<div class="md-form mb-5">
						<!-- <i class="fa fa-envelope prefix grey-text"></i> -->
						<input type="email" name="email" id="defaultForm-email" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-email">E-mail</label>
					</div>

					<div class="md-form mb-4">
						<!-- <i class="fa fa-lock prefix grey-text"></i> -->
						<input type="password" name = "senha" id="defaultForm-pass" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-pass">Senha</label>
					</div>
				</div>
				<div class="modal-footer d-flex justify-content-center">
                    <button value="fornecedor" type="submit" class="btn btn-deep-orange" id="Login_Fornecedor">Entrar</button>
				</div>
			</form>
			<div id="recebeDadosLoginFornecedor" style="display:none"></div>
		</div>
	</div>
</div>