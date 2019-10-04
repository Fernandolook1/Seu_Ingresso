<script>

	$(document).ready(function()
	{		
		$(".produtos").hide();
		
		$("#produtos").click(function(event)
		{			
			
			event.preventDefault();
			$(".home").fadeOut("slow");
			$(".produtos").fadeIn("slow");
			//$("#contato").css("color", "#8f8ae0 !important");
		});

		$("#home").click(function(event)
		{
			event.preventDefault();
			$(".home").fadeIn("slow");
			$(".produtos").fadeOut("slow");			
			
		});
		
		$("#btn_produtos").click(function(event)
		{					
			event.preventDefault();
			$(".home").fadeOut("slow");
			$(".produtos").fadeIn("slow");
			$('.nav-item').removeClass('active');
			$('#mprodutos').addClass('active');
		});
		
		
		$('.nav-item').click(function (e)
		{
			$('.nav-item').removeClass('active');
			$(this).addClass('active');
			//$("a").css('color", "#8f8ae0 !important');
		});
		
		/*****************Criar cliente*********************/
            $('#modalRegistroCliente').submit(function()
            {
                var senha = $("#txtSenhaC").val();
                var csenha = $("#txtConfirmarSenhaC").val();

                if(senha !== csenha){
                    alert("A senha não confere com a confirmação de senha!");
                    return false;
                }
                $.ajax(
                {
                    url: 'handle_registra_cliente.php',
                    type: 'POST',
                    data: $('#modalRegistroCliente').serialize(),
                    success: function(data)
                    {
                        $('#recebeDadosRegistroCliente').html(data);
                    }
                });
                return false;
            });

        /*****************Criar Fornecedor*********************/
        $('#modalRegistroFornecedor').submit(function()
        {
            console.log("tentando registrar fornecedor...");
            var senha = $("#txtSenhaF").val();
            var csenha = $("#txtConfirmarSenhaF").val();

            if(senha !== csenha){
                alert("A senha não confere com a confirmação de senha!");
                return false;
            }
            $.ajax({
                url: 'handle_registra_fornecedor.php',
                type: 'POST',
                data: $('#modalRegistroFornecedor').serialize(),
                success: function(data)
                {
                    $('#recebeDadosRegistroFornecedor').html(data);
                }
            });
            return false;
        });

        /***************************************************/



        /*****************Login cliente*********************/

        $('.form_cliente').submit(function()
        {
            $.ajax(
                {
                    url: 'handle_login_cliente.php',
                    type: 'POST',
                    data: $('.form_cliente').serialize(),
                    success: function(data)
                    {
                        $('#recebeDadosLoginCliente').html(data);
                    }
                });
            return false;
        });

        /***************************************************/

		/*****************Login fornecedor*********************/
	
			$('.form_fornecedor').submit(function()
			{
				$.ajax(
				{
					url: 'handle_login_fornecedor.php',
					type: 'POST',
					data: $('.form_fornecedor').serialize(),
					success: function(data)
					{
						$('#recebeDadosLoginFornecedor').html(data);
					}					
				});
				return false;				
			});
	
		/***************************************************/
		
		
	});
	
</script>