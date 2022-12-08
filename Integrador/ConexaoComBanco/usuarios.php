<!-- CADASTRO DE USUÁRIOS -->
<?php
    if(isset($_POST['submit'])){

    include_once('Conexao.php');

    $NOME_USUARIO = $_POST['NOME_USUARIO'];
    $CPF = $_POST['CPF'];
    $EMAIL = $_POST['EMAIL'];
    $SENHA = $_POST['SENHA'];
    $TELEFONE = $_POST['TELEFONE'];
    $ENDERECO =  $_POST['ENDERECO'];
    $CIDADE = $_POST['CIDADE'];
    $UF = $_POST['UF'];

    $result = mysqli_query($mysqli,"INSERT INTO usuarios (NOME_USUARIO,CPF,EMAIL,SENHA,TELEFONE,ENDERECO,CIDADE,UF) values('$NOME_USUARIO','$CPF','$EMAIL','$SENHA','$TELEFONE','$ENDERECO','$CIDADE','$UF')");

    }
?>