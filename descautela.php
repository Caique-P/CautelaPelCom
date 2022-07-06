<html lang="pt-br">
  <head>
    <!---IMPORTA OS SCRIPTS DE MASK PARA O NUMERO DE TELEFONE--->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="./css/css.css" media="all" type="text/css">
    <meta charset="utf-8">
    <title>PelCom</title>
  </head>

<?php
    include './Incluidos/cabecalho.php';
    require './incluidos/db_connection.php';
        
    ini_set('display_errors','Off');
    $hourMin = date('H:i');
    date_default_timezone_set('America/Sao_Paulo'); 
    $today = date('Y-m-d');
    if(!isset(($_POST['ass']))){
    echo '<center>
    <fieldset id="fielddata">
    <legend>Descautelar</legend>
    <form action="#" method="post">
    <table>
    <td>
    
    <input type="hidden" value="'.$_POST['id'].'" name="id"id="dado" readonly/>
    <input type="date" id="dado" value="'.$today.'" max="'.$today.'" name="data" required></td>
    <td><input type="text" id="dado" name="ass"  autocomplete="off" required placeholder="assinatura"></td>
    <td><input type="submit" value="descautelar" id="dado"></td></table>
    </form>
    </center>';
    }else{
        mysqli_query($db_connection,"UPDATE `cautela` SET `assinatura` = '".$_POST['ass']."' WHERE id='".$_POST['id']."'");
        mysqli_query($db_connection,"UPDATE `cautela` SET `dataDescautela` = '".$_POST['data']."' WHERE id='".$_POST['id']."'");
        echo '<center>
        <fieldset id="fielddata">
        descautelado
        </fieldset>
        </center>'; 
                
        header("Location: index.php");
    }
    echo ' <div id="hora">Consulta realizada as '.$hourMin.' horas.</div>';
?>
</html>