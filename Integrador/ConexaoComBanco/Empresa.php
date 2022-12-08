<!-- CADASTRO DE EMPRESA -->

<?php
    if(isset($_POST['submit'])){

    include('Conexao.php');

    $RAZAO_SOCIAL = $_POST['RAZAO_SOCIAL'];
    $CNPJ =  $_POST['CNPJ'];
    $TELEFONE = $_POST['TELEFONE'];
    $ENDERECO = $_POST['ENDERECO'];
    $CEP = $_POST['CEP'];
    $CIDADE =  $_POST['CIDADE'];
    $UF = $_POST['UF'];

    $result = mysqli_query ($mysqli,"INSERT INTO empresa (RAZAO_SOCIAL,CNPJ,TELEFONE,ENDERECO,CEP,CIDADE,UF) values('$RAZAO_SOCIAL','$CNPJ','$TELEFONE','$ENDERECO','$CEP','$CIDADE','$UF')");

    }
?>