<?php //echo "<script>alert('$nascimento'); </script>"; ?>
<div class="tab-pane fade" id="pills-perfil" role="tabpanel" aria-labelledby="pills-profile-tab">
	<div class="container"style="margin-top: 50px">
		<h2>Alteração de Perfil</h2>

		<div id="dvDadosUsuarioCliente" name="dvDadosUsuarioCliente">
			<div class="col-md-auto" style="margin: auto">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon3">
							<i style="font-size: 24px; color:royalblue ;" class="fas fa-user"></i>
						</span>
					</div>
					<input id="txtUsuario" name="txtUsuario" type="text" class="form-control" placeholder="Usuário" value = "<?php echo $email; ?>">
				</div>
			</div>
			<div class="col-md-auto" style="margin: auto">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon3">
							<i style="font-size: 24px; color:royalblue ;" class="fas fa-unlock-alt"></i>
						</span>
					</div>
					<input id="txtSenha" name="txtSenha" type="password" class="form-control" placeholder="Senha" value = "<?php echo $senha; ?>">
				</div>
			</div>
			<div class="col-md-auto" style="margin: auto">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon3">
							<i style="font-size: 24px; color:royalblue ;" class="fas fa-unlock"></i>
						</span>
					</div>
					<input id="txtConfirmarSenha" name="txtConfirmarSenha" type="password" class="form-control" placeholder="Confirmar Senha" value = "<?php echo $senha; ?>">
				</div>
			</div>
		</div>
		<hr>
		
		<div id="dvDadosCliente" name="dvDadosCliente">
			<!-- <div class="row" > -->
			<div class="col-md-auto" style="margin: auto">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon3">
							<i style="font-size: 24px; color:royalblue ;" class="fas fa-signature"></i>
						</span>
					</div>
					<input id="txtNome" name="txtNome" type="text" class="form-control" placeholder="Nome Completo" value = "<?php echo $nome; ?>">
				</div>
			</div>
			<div class="row" style="margin:auto;">                                   
				<div class="col-md-6" style="margin: auto">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3">
								<i style="font-size: 24px; color:royalblue ;" class="fas fa-calendar-alt"></i>
							</span>
						</div>
						<input id="txtNascimento" name="txtNascimento" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" class="form-control" placeholder="Nascimento" value = "<?php echo $nascimento; ?>">
					</div>
				</div>
				<div class="col-md-6" style="margin: auto">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3">
								<i style="font-size: 24px; color:royalblue ;" class="fas fa-address-card"></i>
							</span>
						</div>
						<input id="txtCPF" name="txtCPF" type="text" class="form-control" placeholder="CPF" value = "<?php echo $cpf; ?>">
					</div>
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
					<input id="txtTelefone" name="txtTelefone" type="text" class="form-control" placeholder="Telefone" value = "<?php echo $tel; ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon3">
							<i style="font-size: 24px; color:royalblue ;" class="fas fa-mobile-alt"></i>
						</span>
					</div>
					<input id="txtCelular" name="txtCelular" type="text" class="form-control" placeholder="Celular" value = "<?php echo $cel; ?>">
				</div>
			</div>
		</div>
		<div class="modal-footer d-flex justify-content-center">
			<button class="btn btn-deep-orange">Salvar Alterações</button>
		</div>
	</div>
</div>