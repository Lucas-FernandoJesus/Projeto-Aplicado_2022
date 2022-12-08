<?php
include('verificacao.php');
include('Style/bootstrap.php');

?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">

    </head>
        <body>
            <form id="Login" action="" method="POST">
                <form>
                    <div>
                        <h1>POSEIDON</h1>
                        
                        <input type = "text" name = "email" placeholder = "Seu e-mail..."></br>
                        
                        <input type = "password" name = "senha" placeholder = "Sua senha...">

                        <input type = "submit" name = "acao" id="submit" value = "Enviar">
                    </div>
                </form>
            </form>
        </body>
        
</html>