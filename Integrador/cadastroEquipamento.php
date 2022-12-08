<?php

    include('ConexaoComBanco/Equipamento.php');
    include('Menu.php');
    include('Style/bootstrap.php');

?>
<link rel="stylesheet" href="style.css">
<title>Cadastro de Equipamento</title>

<form id="equipamento" action="cadastroEquipamento.php" method="POST">
    <div class="form-header">
        <h1>Novo Cadastro</h1>
    </div>
    <div class="input-group">
        <div class="input-box">
            <label for="MODELO">Modelo</label>
            <input id="MODELO" type="varchar" name="MODELO" placeholder="Modelo de equipamento" require>
        </div>
        <div class="input-box">
            <label for="ANO">Ano de Fabricação</label>
            <input id="ANO" type="text" name="ANO" placeholder="Ano de Fabricação" require>
        </div>
        <div class="input-box">
            <label for="COR">Cor do Equipamento</label>
            <input id="COR" type="text" name="COR" placeholder="Cor" require>
        </div>
        <div class="input-box">
            <label for="VOLTAGEM">Voltagem</label>
            <input id="VOLTAGEM" type="text" name="VOLTAGEM" placeholder="Volts" require>
        </div>
    </div>

    <div class="continue-button">
        <button><input type="submit" name="submit" id="submit"></button>
    </div>

</form>