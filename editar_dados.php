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
    <title>Editar</title>
</head>
<body>   
    
    <form class="form" method="post" action="ver_dados.php">
    <div class ="maio">

    <div class="b1"> 
    <p> TELA DE EDICAO</p>
    </div>
        <label for="cpf"></label>
        <P>CPF:<input type="text" placeholder="digite seu cpf" name="cpf" value=<?php echo$_POST["cpf"];?>> <P>
      
        <label for="idade"></label>
        <P>Idade:<input type="text" placeholder="digite sua idade" name="idade" value=<?php echo$_POST["idade"];?>> <P>
        
        <label for="pais"></label>
        <P>Pais:<input type="text" placeholder="qual o seu pais" name="pais" value=<?php echo$_POST["pais"];?>> <P>
       
        <label for="nome"></label>
        <P>Nome: <input type="text" placeholder="digite seu nome" name="nome" value=<?php echo$_POST["nome"];?>> <P> <!-- VALUE="estefane" já deixa com valor um valor inicial -->
                                                 <!--torna esse campo obrigatorio -->
        <input TYPE="hidden" NAME="form_submit" VALUE="OK"> <!-- type-é para escoder o value- pode colocar qualquer valor: x, y, z, pq não precisa aparecer-->
  <!-- hidden-escondido(text) Esse é o CAMPO>-->
        <br>
        <button type="submit" class="btn">
            <b>Enviar</b>
        </button>


</body>
</html>


        <?php
    include_once("footer.html");
    ?>