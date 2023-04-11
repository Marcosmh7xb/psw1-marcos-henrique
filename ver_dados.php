
<?php
error_reporting(E_ALL); //mostrar erros
ini_set("display_errors", 1); //habitar para aparecer os erros




include_once("header.html");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Perfil</title>

</head>

<body>

  <h2>Clientes</h2>

  <table>
    <tr>
      <th>Nome</th>
      <th>idade</th>
      <th>cpf</th>
      <th>pais</th>
    </tr>


    <tr>
      <td><?php echo $_POST["nome"]; ?></td>
      <td><?php echo $_POST["idade"]; ?></td>
      <td><?php echo $_POST["cpf"]; ?></td>
      <td><?php echo $_POST["pais"]; ?></td>
    </tr>
    <tr>
  </table>

  <form action="editar_dados.php" method="post">

    <label for="cpf"></label>
    <P><input type="hidden" name="cpf" value=<?php echo $_POST["cpf"]; ?> /> </P>

    <label for="idade"></label>
    <P><input type="hidden" name="idade" value=<?php echo $_POST["idade"]; ?> /> </P>

    <label for="pais"></label>
    <P><input type="hidden" name="pais" value=<?php echo $_POST["pais"]; ?> /> </P>

    <label for="nome"></label>
    <P><input type="hidden" name="nome" value=<?php echo $_POST["nome"]; ?> /> </P>

    <div class="caixa">
      <button type="submit" class="btn">
        <b>Editar/Visualiza</b>
      </button>
    </div>
  </form>



</body>

</html>  
<?php
    include_once("footer.html");

?>
