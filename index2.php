<?php
// $token = "1649083244:AAFPzlt26Kmv7v4kk7bZ2MFDO1UiihX5wuY";
// $user_id = 1380043317;
// $msg = "Enviado do PHP";

// $request_params = ['chat_id'=>$user_id,'text'=>$msg];
// $request_url = 'https://api.telegram.org/bot'.$token.'/sendMessage?'.http_build_query($request_params);
// $result = file_get_contents($request_url);
// echo "<pre>";
// var_dump($result);
// GET USER ID
// https://api.telegram.org/bot1649083244:AAFPzlt26Kmv7v4kk7bZ2MFDO1UiihX5wuY/getUpdates

//ESCREVE RESULTADO NA TELA
// $result = file_get_contents("https://api.telegram.org/bot1649083244:AAFPzlt26Kmv7v4kk7bZ2MFDO1UiihX5wuY/getUpdates");
// $result = json_decode($result,true);
// echo "<pre>";
// $qtdResultado = count($result["result"])-1;
// for ($i=0; $i < $qtdResultado ; $i++) 
// { 
// 	echo "<br>USER ID:".($result["result"][$i]["message"]["from"]["id"]);
// 	echo " | Nome:".($result["result"][$i]["message"]["from"]["first_name"])." ".($result["result"][$i]["message"]["from"]["last_name"]);
// 	echo " | MENSAGEM:".($result["result"][$i]["message"]["text"]);
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div id="DivSaida">
        <!-- VALOR DA VARIÁVEL SERÁ MOSTRADO AQUI -->
        <?php //require_once("minhapagina.php"); ?>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function(){

        minhaUrl = "https://api.telegram.org/bot1649083244:AAFPzlt26Kmv7v4kk7bZ2MFDO1UiihX5wuY/getUpdates"; // CAMINHO DA PÁGINA COM O ECHO

        setInterval(function(){

            $.ajax({
                url: minhaUrl,
                success: function( response ) {
                    $('#DivSaida').html( response );
                }
            });
        }, 3000); // TEMPO PARA ATUALIZAR EM MS (milissegundos)

    });
</script>
<div id="DivSaida"></div>
</html>