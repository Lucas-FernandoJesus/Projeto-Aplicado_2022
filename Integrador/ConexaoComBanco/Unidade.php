<!-- CADASTRO DE UNIDADE -->

<?php
    if(isset($_POST['submit'])){

    include('Conexao.php');

    $RAZAO_SOCIAL = $_POST['RAZAO_SOCIAL'];
    $CNPJ = $_POST['CNPJ'];
    $TELEFONE = $_POST['TELEFONE'];
    $ENDERECO =  $_POST['ENDERECO'];
    $CIDADE = $_POST['CIDADE'];
    $UF = $_POST['UF'];

    $result = mysqli_query ($mysqli,"INSERT INTO unidade (RAZAO_SOCIAL,CNPJ,TELEFONE,ENDERECO,CIDADE,UF) values('$RAZAO_SOCIAL','$CNPJ','$TELEFONE','$ENDERECO','$CIDADE','$UF')");

    }
?>