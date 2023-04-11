<?php
error_reporting(E_ALL); //mostrar erros
ini_set("display_errors", 1); //habitar para aparecer os erros




include_once("header.html");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadadastrar</title>
</head>

<body>

    <form class="form" method="post" action="ver_dados.php">
        <div class="maio">
            <h3>FORMULÁRIO EXEMPLO POST</h3>

            <P> cpf: <input type="text" placeholder="digite seu cpf" name="cpf" id=um /> </P>
            <!--indicar oq será escrito -->
            <P> idade: <input type="text" placeholder="digite sua idade" name="idade" id=d /> </P>

            <P> pais: <input type="text" placeholder="qual o seu pais" name="pais" id=tres /> </P>

            <P> nome: <input type="text" placeholder="digite seu nome" name="nome" id=quatro /> </P> <!-- VALUE="estefane" já deixa com valor um valor inicial -->
            <!--torna esse campo obrigatorio -->
            <input TYPE="hidden" NAME="form_submit" VALUE="OK"> <!-- type-é para escoder o value- pode colocar qualquer valor: x, y, z, pq não precisa aparecer-->
            <!-- hidden-escondido(text) Esse é o CAMPO>-->
            <br>
            <button type="submit" class="btn">
                <b>Obter Dados Post</b>
            </button>

        </div>

    </form>

    <?php
    include_once("footer.html");
    ?>

</body>

</html>