<html lang="pt-br">
  <head>
    <!---IMPORTA OS SCRIPTS DE MASK PARA O NUMERO DE TELEFONE--->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="./css/css.css" media="all" type="text/css">
    <meta charset="utf-8">
    <title>Cadastro rádios</title>
  </head>
<?php

    //Importando coisas importantes pra conexão
    include './Incluidos/cabecalho.php';
    require './incluidos/db_connection.php';
    $tipo = $_GET['cadastro'];
    echo "
    <center>
    <fieldset id = 'fielddata'>";
    if($tipo == "categoria"){
      if(isset(($_POST['item']))){
        mysqli_query($db_connection, "INSERT INTO `itens`(`nome`) VALUES ('".$_POST['item']."')");

        echo '<center><div id="sumir">Cadastrado com sucesso!</center></div>';
    }
    echo "
      <form method='post'>
      <table>
      <tr>
          <td><input placeholder='Nome do item' name='item' type='text' id='dado'/></td>
          <td><input type='submit' value='cadastrar'id='dado'></td></tr></table>
      </form>";
    }
    else if ($tipo == "serie"){
      if(isset(($_POST['serie']))){
        mysqli_query($db_connection, "INSERT INTO `serie`(`categoria`, `nserie`) VALUES ('".$_POST['categoria']."','".$_POST['serie']."')");

        echo '<center><div id="sumir">Cadastrado com sucesso!</center></div>';
    }
      echo "
      <form method='post'>
      <table>
      <tr>
      <td>
      <select name='categoria' id='dado'>
      ";

      $resultado = mysqli_query($db_connection, "select * from itens");
      while($categoria = mysqli_fetch_assoc($resultado)) {
          echo "
          <option value='".$categoria["nome"]."'>".$categoria["nome"]."</option>";
        }

      echo"</select></td>
          <td><input placeholder='Série do item'type='text' name='serie' id='dado'/></td>
          <td><input type='submit' value='cadastrar' id='dado'></td></tr></table>
      </form>
";}
      else if ($tipo == "armeiro"){
        if(isset(($_POST['armeiro'])) && isset(($_POST['pel'])) ){
          mysqli_query($db_connection, "INSERT INTO `armeiro`(`grad`, `nome`, `companhia`) VALUES ('".$_POST['grad']."','".$_POST['armeiro']."','".$_POST['pel']."')");

          echo '<center><div id="sumir">Cadastrado com sucesso!</center></div>';
      }
      echo "<form method='post'><table><tr>
              <td>
              <select name='grad'  id='dado'>
              <option value='SD'>SD</option>
              <option value='CB'>CB</option>
              <option value='SGT'>SGT</option>
              <option value='TEN'>TEN</option>
              <option value='CAP'>CAP</option>
              <td>
              <input placeholder='Nome do armeiro' name='armeiro' type='text' id='dado'/></td>
              <td><input placeholder='Companhia ou pelotão' type='text'name='pel' id='dado'  /></td>
              </td>
              <td>
              <input type='submit' value='cadastrar' id='dado'></td>
              </tr></table>
      </form>";


    }

      echo "
    </fieldset>
    <center>";



?>
