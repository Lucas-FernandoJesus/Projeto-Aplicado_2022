<?php
    include('ConexaoComBanco/usuarios.php');
    include('Menu.php');
    include('Style/bootstrap.php');
?>
<link rel="stylesheet" href="style.css">
    <title>Cadastro de Usuário</title>

            <form ID="cadastro" action="cadastroUsuario.php" method="POST">
                <div class="form-header">
                    <h1>Novo Cadastro</h1>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="NOME_USUARIO">Nome Completo</label>
                        <input id="NOME_USUARIO" type="varchar" name="NOME_USUARIO" placeholder="Nome completo" require>
                    </div>
                    <div class="input-box">
                        <label for="CPF">CPF</label>
                        <input id="CPF" type="varchar" name="CPF" placeholder="CPF" require>
                    </div>
                    <div class="input-box">
                        <label for="EMAIL">E-mail</label>
                        <input id="EMAIL" type="EMAIL" name="EMAIL" placeholder="E-mail" require>
                    </div>
                    <div class="input-box">
                        <label for="SENHA">Senha</label>
                        <input id="password" type="password" name="SENHA" placeholder="Senha" require>
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
                $('#TELEFONE').mask('(00) 0 0000-0000');
            </script>