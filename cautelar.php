<!---ALTERADOR DE USUARIOS:--->
<?php
// CHECA OS ESPAÇOS EM BRANCOS:

    ini_set('display_errors','Off');
if( isset(($_POST['nome'])) && isset(($_POST['quantidade'])) && isset(($_POST['item']))){
  if(!empty(($_POST['nome'])) || !empty(($_POST['quantidade'])) || !empty(($_POST['item']))){
    @session_start();
    if(empty(($_POST['obs']))){
      $DataObs = "-";
    }else{
      $DataObs = $_POST['obs'];
    }
    if(empty(($_POST['serie']))){
      //$Dataserie = $_POST['serie']
      //SELECT DISTINCT serie FROM cautela WHERE UPPER(serie) LIKE UPPER('%[value-5]%')
      //$check_cautela = mysqli_query($db_connection, "SELECT DISTINCT serie FROM cautela WHERE UPPER(serie) LIKE UPPER('".$Dataserie."')");
            //CHECA SE O EMAIL JA EXISTE NO BANCO DE DADOS:
        //    if(mysqli_num_rows($check_cautela) > 0){
          //    $error_message = "Esse numero de série ja está cadastrado. Tente outro.";
            //}
      $DataSerie = "-";
    }else{
      $DataSerie = $_POST['serie'];
    }
    $grad = mysqli_query($db_connection, "SELECT `grad` FROM `armeiro` WHERE `nome` = '".$_POST['nome']."'");

    $gradresult = $grad->fetch_array()[0] ?? '';
    mysqli_query($db_connection, "INSERT INTO `cautela`(`data`, `grad`, `nome`, `quantidade`, `item`, `serie`, `obs`, `assinatura`, `dataDescautela`) VALUES ('".$_POST['data']."','".$gradresult."','".$_POST['nome']."','".$_POST['quantidade']."','".$_POST['item']."','".$DataSerie."','".$DataObs."','".$_POST['ass']."','".$_POST['dataDesc']."')");
    if(!empty($error_message)){
      echo '<center><div id="sumir">'.$error_message."</div></center>";
    }
    //SE TUDO ESTIVER CERTO O PROGRAMA DECLARA SUCESSO.
    else {
      echo '<center><div id="sumir">Alterado com sucesso!</center></div>';
    }
  }
}
?>
