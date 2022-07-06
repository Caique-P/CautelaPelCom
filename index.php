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
    //Importando coisas importantes pra conexão
    include './Incluidos/cabecalho.php';
    require './incluidos/db_connection.php';
    require './cautelar.php';
        
    ini_set('display_errors','Off');
    $hourMin = date('H:i');
    date_default_timezone_set('America/Sao_Paulo'); 
    echo "<center><table>";
    $resultado = mysqli_query($db_connection, "select * from cautela");
     //IMPRIME A TABELA DE CAUTELA E DESCAUTELA
    echo"<th>Data da cautela</th><th>Graduação</th><th>Nome</th><th>Quantidade</th><th>Item</th><th>Série</th><th>Obs</th><th>Assinatura</th><th>Data da descautela</th>";

    while($cautela = mysqli_fetch_assoc($resultado)) {
        echo "<tr><td>
        ".$cautela["data"]."
        </td><td>
        ".$cautela["grad"]."
        </td><td>
        ".$cautela["nome"]."
        </td><td>
        ".$cautela["quantidade"]."
        </td><td>
        ".$cautela["item"]."
        </td><td>
        ".$cautela["serie"]."
        </td><td>
        ".$cautela["obs"]."
        </td>";
        if(!empty(($cautela["dataDescautela"]))){
            echo"<td>
        ".$cautela["assinatura"]."
        </td><td>
        ".$cautela["dataDescautela"]."
        </td>
        </tr></td>";
        }
        else{
            
            echo"<td colspan='2'>
            <form method='post' action='./descautela.php'>
            <input type='hidden'  name='id' value='".$cautela["id"]."' id='dado' readonly/>
            <input type='submit' style='background:#e96463 ' value='Descautelar' id='dado'>
            </form>
            </td>
            </tr></td>";
        }
    }
    $today = date('d/m/Y');
    //Imprime pra colocar um novo dado
    echo "<form method='post' action='#'><tr>
        <td>
        <input type='text' name='data' maxlength='10' value='".$today."' id='dado'></td><td>
        <select name='grad'  id='dado'>
        <option value='SD'>SD</option>
        <option value='CB'>CB</option>
        <option value='SGT'>SGT</option>
        <option value='TEN'>TEN</option>
        <option value='CAP'>CAP</option>
        </td><td>
        <input type='text' name='nome' id='dado' required>
        </select></td><td>
        <input type='number' min='1' value='1'name='quantidade' id='dado' required></td><td>
        <input type='text' name='item' id='dado' required></td><td>
        <input type='text' name='serie' id='dado'></td><td>
        <input type='text' name='obs' id='dado'></td>
        
        <!---<td>
        <input type='text' name='ass' id='dado'></td><td>
        <input type='text' name='dataDesc' id='dado'></td>---><td colspan='2'>
        <input style='background:lightgreen'type='submit' value='Cautelar' id='dado'/></form></td></tr>";
    echo "</table></center>";
    echo ' <div id="hora">Consulta realizada as '.$hourMin.' horas. </div>';
    
?>
</html>