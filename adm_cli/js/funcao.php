<script>

    var atualizaContador = null;
	$(document).ready(function() {
        // $.ajax(
        //     {
        //         url: 'handle_login_cliente.php',
        //         type: 'POST',
        //         data: $('.form_cliente').serialize(),
        //         success: function(data)
        //         {
        //             $('#recebeDadosLoginCliente').html(data);
        //         }
        //     });

        /*
            Inicio da verificação de inatividade
        */

        //variável representando o tempo inativo atual
        seg = 0;
        var ss = 1;


        atualizaContador = function(futuro) {

            //var faltam = 'Você está inativo por '+seg+' segundos segundos.';
            var faltam = 'Você será redirecionado em <span id = "diminui">'+ss+'</span> segundos.';


            if (seg >= 0 && seg < 15) {

                document.getElementById('inatividade').innerHTML = faltam;
                ss++;
                setTimeout(atualizaContador, 1000);
            }
            else if (seg == 15) {
                location.href = "logout.php?pq=inatividade";
            }
        }


        //Adicionando ao document o evento a ser disparado sempre que o mouse se mover
        document.addEventListener("mousemove", function () {
            //Caso seja detectado o movimento do mouse, atualizar a variável que representa o tempo de inatividade para 0 segundos
            seg = 0;

            //zera o tempo no bd
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 15) {
                    var myObj = JSON.parse(this.responseText);
                    document.getElementById("retorno").innerHTML = myObj.name;
                }
            };
            xmlhttp.open("GET", "bd/zeratempo.php", true);
            xmlhttp.send();
        });


        //Adicionando ao document o evento a ser disparado sempre que uma tecla for acionada
        document.addEventListener("keydown", function () {
            //Caso seja detectado o movimento do mouse, atualizar a variável que representa o tempo de inatividade para 0 segundos
            seg = 0;

            //zera o tempo no bd
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 15) {
                    var myObj = JSON.parse(this.responseText);
                    document.getElementById("retorno").innerHTML = myObj.name;
                }
            };
            xmlhttp.open("GET", "bd/zeratempo.php", true);
            xmlhttp.send();
        });

        //A cada 1 segundo (a seu critério), adicionar +1 segundo de tempo de inatividade à variável "seg". Caso tenha chegado a 10 segundos, exibirá um alert.
        setInterval(function () {
            seg = seg + 1;
            if (seg == 10) {
                //alert("Já se passaram" +seg+ " segundos de inatividade.");
            }

        }, 1000);

        /*
            Fima da verificação de inatividade
        */
    });
</script>