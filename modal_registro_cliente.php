<form class="modal fade" id="modalRegistroCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    action="handle_registra_cliente.php" method="post">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title w-100 font-weight-bold" style="color:darkslategray">Novo Cliente</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<!-- INICIO FORMULÁRIO DE REGISTRO -->
            <script>
			
		
                var checkRegistraClienteForm;

                $(document).ready(function(evt){
                    var cliente_reg_inputs = ["txtSenha", "txtConfirmarSenha"];
                    for(var i = 0; i < cliente_reg_inputs.length; i++){
                        var input = $("#" + cliente_reg_inputs[i] + "C");
                        input.focus(onfocus);
                    }
                    // Caso o input esteja invalido ele da erro
                    checkRegistraClienteForm = function(event) {
                        var txt_sen = $("#txtSenhaC");
                        var txt_con = $("#txtConfirmarSenhaC");

                        if (txt_sen.val() !== txt_con.val()) {
                            event.preventDefault();
                            // aviso de senhas diferentes
                            if (! txt_sen.classList.contains("is-invalid")) {
                                txt_sen.classList.add("is-invalid");
                            }
                            if (! txt_con.classList.contains("is-invalid")) {
                                txt_con.classList.add("is-invalid");
                            }
                        }
                    }
                });
				
				function verificaSenha()
				{
					senha = document.getElementById("txtSenhaC").value;
					csenha = document.getElementById("txtConfirmarSenhaC").value;
					
					if(senha != csenha)
					{
						alert("A senha não confere com a confirmação de senha!");
						document.getElementById("txtConfirmarSenhaC").focus();
						return false;
					}
				}
				
		
            </script>
			
			
            <div class="container"style="margin-top: 10px">
                <div id="dvDadosUsuarioCliente" name="dvDadosUsuarioCliente">
                    <div class="col-md-auto" style="margin: auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">
                                    <i style="font-size: 24px; color:royalblue ;" class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="email" id="txtEmailC" name="txtEmail" class="form-control validate" placeholder="E-mail" required>
                            
                        </div>
						<!--<label data-error="Favor colocar o e-mail correto" data-success="" for="txtEmailC">E-mail</label>-->
                    </div>
                    <div class="col-md-auto" style="margin: auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">
                                    <i style="font-size: 24px; color:royalblue ;" class="fas fa-unlock-alt"></i>
                                </span>
                            </div>
                            <input id="txtSenhaC" name="txtSenha" type="password" class="form-control" placeholder="Senha" required >
                        </div>
                    </div>
                    <div class="col-md-auto" style="margin: auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">
                                    <i style="font-size: 24px; color:royalblue ;" class="fas fa-unlock"></i>
                                </span>
                            </div>
                            <input id="txtConfirmarSenhaC" name="txtConfirmarSenha" type="password" class="form-control" placeholder="Confirmar Senha" required onblur = "verificaSenha()">
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
                            <input id="txtNomeC" name="txtNome" type="text" class="form-control" placeholder="Nome Completo" required>
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
                                <input id="txtNascimentoC" name="txtNascimento" type="text" onfocus="(this.type='date')" onfocusout="(this.type='text')" class="form-control" placeholder="Nascimento" required>
                            </div>
                        </div>
                        <div class="col-md-6" style="margin: auto">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">
                                        <i style="font-size: 24px; color:royalblue ;" class="fas fa-address-card"></i>
                                    </span>
                                </div>
                                <input id="txtCPFC" name="txtCPF" type="text" class="form-control bfh-phone" data-format="ddd.ddd.ddd-dd" placeholder="CPF" required>
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
                            <input id="txtTelefoneC" name="txtTelefone" type="text" class="form-control bfh-phone" data-format="dd dddd-dddd" placeholder="Telefone" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">
                                    <i style="font-size: 24px; color:royalblue ;" class="fas fa-mobile-alt"></i>
                                </span>
                            </div>
                            <input id="txtCelularC" name="txtCelular" type="text" class="form-control bfh-phone" data-format="dd ddddd-dddd" placeholder="Celular">
                        </div>
                    </div>
                </div>
            </div>

            <!-- FIM FORMULÁRIO DE REGISTRO -->

            <div class="modal-footer d-flex justify-content-center">
                <button name="submitButton" value="cliente" type="submit" class="btn btn-deep-orange" id="Registrar_Cliente">Registrar</button>
            </div>
		
			
        </div>
	</div>
</form>

<div id="recebeDadosRegistroCliente"></div>