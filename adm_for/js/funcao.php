<script>	
	$(document).ready(function() 
	{
		
	    // Para criação de produtos


        /*
            Inicio da verificação de inatividade
        */

        //variável representando o tempo inativo atual
        seg = 0;
        var ss = 1;

        function atualizaContador(futuro) 
		{
			

            //var faltam = 'Você está inativo por '+seg+' segundos segundos.';
            var faltam = ``;


            if (seg >= 0 && seg < 15) 
			{

                document.getElementById('inatividade').innerHTML = faltam;
                ss++;
                setTimeout(atualizaContador, 1000);
            }
            else if (seg == 15) 
			{
                location.href = "logout.php";
            }
        }


        //Adicionando ao document o evento a ser disparado sempre que o mouse se mover
        document.addEventListener("mousemove", function () 
		{
            //Caso seja detectado o movimento do mouse, atualizar a variável que representa o tempo de inatividade para 0 segundos
            seg = 0;

            //zera o tempo no bd
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () 
			{
                if (this.readyState == 4 && this.status == 200) 
				{
                    //var myObj = JSON.parse(this.responseText);
                    //document.getElementById("retorno").innerHTML = myObj.name;
                }
            };
            xmlhttp.open("GET", "bd/zeratempo.php", true);
            xmlhttp.send();
        });


        //Adicionando ao document o evento a ser disparado sempre que uma tecla for acionada
        document.addEventListener("keydown", function () 
		{
            //Caso seja detectado o movimento do mouse, atualizar a variável que representa o tempo de inatividade para 0 segundos
            seg = 0;

            //zera o tempo no bd
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () 
			{
                if (this.readyState == 4 && this.status == 200) 
				{
                    //var myObj = JSON.parse(this.responseText);
                    //document.getElementById("retorno").innerHTML = myObj.name;
                }
            };
            xmlhttp.open("GET", "bd/zeratempo.php", true);
            xmlhttp.send();
        });

        //A cada 1 segundo (a seu critério), adicionar +1 segundo de tempo de inatividade à variável "seg". Caso tenha chegado a 10 segundos, exibirá um alert.
        setInterval(function () 
		{
            seg = seg + 1;
            if (seg == 10) 
			{
                //alert("Já se passaram" +seg+ " segundos de inatividade.");
            }

        }, 1000);

        /*
            Fima da verificação de inatividade
        */
		
		
		/*********Editar perfil********/
		
		$('#pills-perfil').submit(function()
		{
			$.ajax(
			{
				url: 'editar_perfil.php',
				type: 'POST',
				data: $('#editar_perfil').serialize(),
				success: function(data)
				{
					$('#recebeDados').html(data);						
				}					
			});
			return false;				
		});
			
		
		/*********Fim do editar perfil********/
		
		/*********Cria Produto********/
		
		$('#modalCadastroProduto').submit(function()
		{			
			$.ajax(
			{
				url: 'cria_produtos.php',
				type: 'POST',
				data: $('#modalCadastroProduto').serialize(),
				success: function(data)
				{
					$('#recebeDados').html(data);						
				}					
			});		
			
			return false;				
		});
			
		
		/*********Fim do cria produto********/
		
		/*********Editar Produto********/
	
				
		$(".prod").submit(function() 
		{
			//event.preventDefault(); // Serve para retirar a ação do click do link
			//$("#valores").load("bd/sql.php?acao=eproduto");
			$.ajax(
			{
				url: 'edit.php',
				type: 'POST',
				data: $('.prod').serialize(),
				success: function(data)
				{
					$('#recebeDados').html(data);						
				}					
			});		
			return false;
		});
		/*********Fim do editar Produto********/
		
    });	
	
</script>