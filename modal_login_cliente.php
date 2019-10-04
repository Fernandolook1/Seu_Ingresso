<div class="modal fade" id="modalLoginFormCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h4 class="modal-title w-100 font-weight-bold" style="color:darkslategray">
					Login - Área dos Cliente
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="form_cliente" method="post" action="handle_login_cliente.php" id="LoginCliente">
				<div class="modal-body mx-3" style="margin: auto">
					<div class="md-form mb-5">
						<!-- <i class="fa fa-envelope prefix grey-text"></i> -->
						<input type="email" id="txtEmailLoginClienteC" name = "txtEmailLoginCliente" class="form-control validate" required>
						<label data-error="Favor colocar o e-mail correto" data-success="" for="txtEmailLoginCliente" id="teste">E-mail</label>
					</div>

					<div class="md-form mb-4">
						<!-- <i class="fa fa-lock prefix grey-text"></i> -->
						<input type="password" id="txtSenhaLoginClienteC" name = "txtSenhaLoginCliente" class="form-control validate" required>
						<label data-error="Senha inválida" data-success="" for="txtSenhaLoginCliente">Senha</label>
					</div>
				</div>
				
		
					<button name="submitButton" value="cliente" type="submit" class="btn btn-deep-orange" id="Login_Cliente">Entrar</button>
				
			</form>
			<div id="recebeDadosLoginCliente" style="display:none"></div>
		</div>
	</div>
</div>