<?php
    include('ConexaoComBanco/Empresa.php');
    include('Menu.php');
    include('Style/bootstrap.php');
    include('Conexao.php');
?>

<link rel="stylesheet" href="style.css">

    <title>Empresa</title>

            <form ID="cadastro" action="Empresa.php" method="POST">
                <div class="form-header">
                    <h1>Empresa</h1>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="RAZAO_SOCIAL">Razão Social</label>
                        <input id="RAZAO_SOCIAL" type="varchar" name="RAZAO_SOCIAL" placeholder="Razão Social" require>
                    </div>
                    <div class="input-box">
                        <label for="CNPJ">CNPJ</label>
                        <input id="CNPJ" type="varchar" name="CNPJ" placeholder="CNPJ" require>
                    </div>
                    <div class="input-box">
                        <label for="TELEFONE">Telefone</label>
                        <input id="TELEFONE" type="varchar" name="TELEFONE" placeholder="Telefone" require>
                    </div>
                    <div class="input-box">
                        <label for="ENDERECO">Endereço</label>
                        <input id="ENDERECO" type="varchar" name="ENDERECO" placeholder="Endereço" require>
                    </div>
                    <div class="input-box">
                        <label for="CEP">CEP</label>
                        <input id="CEP" type="varchar" name="CEP" placeholder="CEP" require>
                    </div>
                    <div class="input-box">
                        <label for="CIDADE">Cidade</label>
                        <input id="CIDADE" type="varchar" name="CIDADE" placeholder="Cidade" require>
                    </div>
                    <div class="input-box">
                        <label for="UF">UF</label>
                        <input id="UF" type="varchar" name="UF" placeholder="Estado" require>
                    </div>
                </div>

                <div class="continue-button">
                    <button><input type="submit" name="submit" id="submit"></button>
                </div>
            </form>


            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
                $('#CPF').mask('000.000.000-00', {reverse: true});
                $('#CNPJ').mask('00.000.000/0000-00', {reverse: true});
                $('#TELEFONE').mask('(00) 0 0000-0000');
                $('#CEP').mask('00000-000');
            </script>