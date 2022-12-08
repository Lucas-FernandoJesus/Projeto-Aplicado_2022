<!-- CADASTRO DE UNIDADE -->

<?php
    if(isset($_POST['submit'])){

    include('Conexao.php');

    $MODELO = $_POST['MODELO'];
    $ANO = $_POST['ANO'];
    $COR =  $_POST['COR'];
    $VOLTAGEM = $_POST['VOLTAGEM'];

    $result = mysqli_query ($mysqli,"INSERT INTO Equipamentos (MODELO,ANO,COR,VOLTAGEM) values('$MODELO','$ANO','$COR','$VOLTAGEM')");

    }
?>