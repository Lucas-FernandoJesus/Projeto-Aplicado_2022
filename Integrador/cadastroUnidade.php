<?php
    include('ConexaoComBanco/Unidade.php');
    include('Menu.php');
    include('Style/bootstrap.php');
?>
<link rel="stylesheet" href="style.css">
<title>Unidade</title>

<form ID="cadastro" action="cadastroUnidade.php" method="POST">
    <div class="form-header">
        <h1>Novo Cadastro</h1>
    </div>
    <div class="input-group">
        <div class="input-box">
            <label for="RAZAO_SOCIAL">Razão Social</label>
            <input id="RAZAO_SOCIAL" type="varchar" name="RAZAO_SOCIAL" placeholder="Razão Social" require>
        </div>
        <div class="input-box">
            <label for="CNPJ">CNPJ</label>
            <input id="CNPJ" type="text" name="CNPJ" placeholder="CNPJ" require>
        </div>
        <div class="input-box">
            <label for="TELEFONE">Telefone</label>
            <input id="TELEFONE" type="text" name="TELEFONE" placeholder="Telefone" require>
        </div>
        <div class="input-box">
            <label for="ENDERECO">Endereço</label>
            <input id="ENDERECO" type="text" name="ENDERECO" placeholder="Endereço" require>
        </div>
        <div class="input-box">
            <label for="CIDADE">Cidade</label>
            <input id="CIDADE" type="text" name="CIDADE" placeholder="Cidade" require>
        </div>
        <div class="input-box">
            <label for="UF">UF</label>
            <input id="UF" type="text" name="UF" placeholder="UF" require>
        </div>


    </div>

    <div class="continue-button">
        <button><input type="submit" name="submit" id="submit"></button>
    </div>

</form>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
    integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#CPF').mask('000.000.000-00', { reverse: true });
    $('#CNPJ').mask('00.000.000/0000-00', { reverse: true });
    $('#TELEFONE').mask('(00) 0 0000-0000');
</script>