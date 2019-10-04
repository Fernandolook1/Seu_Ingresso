<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ Produtos ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
<br/>          
<div class="container">			   
	<section class="text-center my-5">
		<div class="row">
			<?php
				$i = 0;
				
				while($i <= 3)
				{
			?>
					<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">										
						<div class="card align-items-center">
							<div class="view overlay">
								<img src="Imagens/Produtos/Brigadeiro.jpeg" class="card-img-top" style="width: 240px; height: 240px;margin-top: 10px "
									 alt="">
								<a href="#modalDetalheProduto" data-toggle="modal" aria-controls="modalDetalheProduto">
									 <div class="mask rgba-white-slight"></div>
								</a>
							</div>
							<div class="card-body text-center">
								<a href="#modalDetalheProduto" data-toggle="modal" aria-controls="modalDetalheProduto" class="grey-text">
									<h5>Bolo de brigadeiro <?php echo $i ?></h5>
								</a>
								<h4 class="font-weight-bold blue-text">
									<strong>R$ <?php echo 30 + $i ?>,00</strong>
								</h4>
							</div>
						</div>										
					</div>
			<?php
					$i++;
				}
			?>
		</div>
	</section>
	
</div>             
<br/>
<br/>

<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ /.Produtos ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->
<!--■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■-->