<div ng-controller="novo_produto">
    <!-- Modal -->
	<form action="" class="modal fade" id="modalCadastroProduto" tabindex="-1" role="form" aria-labelledby="exampleModalLongTitle" aria-hidden="true"
		method="POST">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Cadastro de Produto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<label for="nome-roduto" class="col-3 col-form-label">Produto</label>
						<div class="col-8">
							<input class="form-control" type="text" value="Nome Do Produto" name = "txtNomeP" id="txtNomeP">
						</div>

						<label for="descricao-produto" class="col-3 col-form-label"> Descrição</label>
						<div class="col-8">
							<input class="form-control" type="text" value="Descrevar o Produto" name = "txtDescricaoP" id="txtDescricaoP">
						</div>

						<label for="preco-produto" class="col-3 col-form-label"> Preço R$</label>
						<div class="col-8">
							<input class="form-control" type="nunber" value="00,00" name = "txtPrecoP" id="txtPrecoP">
						</div>
						<label for="ingrediente-produto"class="col-3 form-label" for="inlineFormCustomSelectPref">Ingredientes</label>
						<div class="col-8">
							<!-- TODO: Usar JQuery para armazenar ingredientes em um array e passar para o PHP com POST 
								 A cada OK, vc adiciona o array, e depois manda no POST.
							-->
							<select class="custom-select " id="inlineFormCustomSelectPref">
								<option selected> Ingredientes </option>
								<option value="1"> Chocolates </option>
								<option value="2"> Morango </option>
								<option value="3"> Bolo de cenoura </option>
							</select>
							<!-- TODO: fazer func no JQuery -->
							<button style="margin-top: 5px;">Adicionar</button>
						</div>

						<label class="col-6 " for="produto-img"> Inserir imagens</label>
						<input type="file" class="col-9 form-control-file" name = "foto" id="exampleFormControlFile1">
						<label for=""></label>

					</div>
					<input type = "text" name = "email" value = "<?php echo "$email"; ?>" style = "display:none">
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						<input type="submit" class="btn btn-primary"  value = "Cadastrar">
					</div>
				</div>
			</div>
		</div>
	</form>
	<div id = "recebeDados"></div>
</div>