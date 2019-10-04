<div class="tab-pane fade show active" id="pills-compras" role="tabpanel" aria-labelledby="pills-home-tab">
	<div class="container" style="margin-top: 50px">
		<h2>Histórico de Compras</h2>
		<table class="table table-striped">
			<thead align="left">
				<tr>
					<th>Data da Entrega</th>
					<th>Produto</th>
					<th>Fornecedor</th>
					<th>Valor</th>
                    <th>Quantidade</th>
                    <th>Total</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody align="left">
                <?php
                    require_once $_SERVER['DOCUMENT_ROOT'] . "/bd/conexao.php";

                    function toReal($val){
                        return str_replace(".",",", "$val");
                    }

                    $pedidos_em_aguardo = $sql->get_historico_compras_em_aguardo($id_origem);

                    foreach($pedidos_em_aguardo as $pedido_row) {
                        $id_produto = $pedido_row['id_produto'];

                        $sql = "SELECT id_fornecedor, nome, descricao, preco FROM Produtos WHERE id_produto=$id_produto";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        if(!stmt){

                            echo "<script>alert('erro no carregamento dos produtos')</script>";
                        }

                        $produto_row = $stmt->fetch(PDO::FETCH_ASSOC);

                        $id_fornecedor = $produto_row['id_fornecedor'];

                        $sql = "SELECT nome_fantasia FROM Fornecedores WHERE id_fornecedor=$id_fornecedor";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $fornecedor_row = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                    <tr>
                        <td>sem data prévia</td>
                        <td>  <?php echo utf8_encode($produto_row['nome']);?></td>
                        <td>  <?php echo utf8_encode($fornecedor_row['nome_fantasia']);?></td>
                        <td>R$<?php echo toReal($produto_row['preco']) ?></td>
                        <td><?php echo $pedido_row['num_pedido']; ?></td>
                        <td>R$
                            <?php
                            $valor = intval($pedido_row['num_pedido']) * floatval($produto_row['preco']);
                            echo toReal($valor);
                            ?></td>
                        <td>Aguardando aprovação</td>
                    </tr>
                <?php
                    } // FOREACH END

                    // este $sql vem do call em index para um instancia da classe sql.
                    // que gera as variaveis globais $id_origem, $nome, etc
                    // Melhoria: Corrigir para $sql->id_origem em vez de variaveis globais.
                    $pedidos_entregues = $sql->get_historico_compras_entregues($id_origem);

                    foreach($pedidos_entregues as $pedido_row) {
                        $id_produto = $pedido_row['id_produto'];

                        $sql = "SELECT id_produto, id_fornecedor, nome, descricao, preco FROM Produtos WHERE id_produto=$id_produto";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        if(!stmt){
                            echo "<script>alert('erro carregando fornecedores');</script>";
                        }

                        $produto_row = $stmt->fetch(PDO::FETCH_ASSOC);

                        $id_fornecedor = $produto_row['id_fornecedor'];

                        $sql = "SELECT nome_fantasia FROM Fornecedores WHERE id_fornecedor=$id_fornecedor";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        if(!stmt){
                            echo "<script>alert('erro carregando fornecedores');</script>";
                        }

                        $fornecedor_row = $stmt->fetch(PDO::FETCH_ASSOC);

                ?>
                    <tr>
                        <td>
                            <?php
                                //$data_classe = DateTime::createFromFormat("l dS F Y", $pedido_row['data_entrega']);
                                //$data_convertida = $data_classe->format('d/m/Y');
                                echo $pedido_row['data_entrega']->format('d/m/Y');
                            ?>
                        </td>
                        <td>  <?php echo utf8_encode($produto_row['nome']); ?></td>
                        <td>  <?php echo utf8_encode($fornecedor_row['nome_fantasia']); ?></td>
                        <td>R$<?php echo toReal($produto_row['preco']); ?></td>
                        <td><?php echo $pedido_row['num_pedido']; ?></td>
                        <td>R$
                            <?php
                                $valor = intval($pedido_row['num_pedido']) * floatval($produto_row['preco']);
                                echo toReal($valor);
                            ?>
                        </td>
                        <td>Entregue</td>
                    </tr>
                <?php
                    }
                ?>
			</tbody>
		</table>
	</div>
</div>