<!DOCTYPE html>
<html lang="pt-br">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <nav class="navbar navbar-light bg-light shadow">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="navbar-toggler-icon"></span><span class="navbar-brand mb-0 h1">Menu</span>
                </button>
            </div>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-body d-flex" id="side_nav">
                        <div class="sidebar">
                            <div class="modal-header">
                                <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">WM</span><span class="text-white">Poseidon</span></h1>
                                <button type="button" class="fa-sharp fa-solid fa-bars" data-bs-dismiss="modal" aria-label="Close" id="Bars"></button>
                            </div>
                            
                            
                            <ul class="list-unstyled px-2">
                                <li class=""><a href="Dashboard.php"        class="text-decoratioin-none px-3 py-2 d-block">Dashboard</a></li>
                                <li class=""><a href="Empresa.php"          class="text-decoratioin-none px-3 py-2 d-block">Empresa</a></li>
                                <li class=""><a href="Equipamento.php"      class="text-decoratioin-none px-3 py-2 d-block">Equipamento</a></li>
                                <li class=""><a href="Usuarios.php"         class="text-decoratioin-none px-3 py-2 d-block">Usuario</a></li>
                                <li class=""><a href="Unidade.php"           class="text-decoratioin-none px-3 py-2 d-block">Unidade</a></li>
                                <li class=""><a href="Relatorios.php"       class="text-decoratioin-none px-3 py-2 d-block">Relatórios</a></li>
                            </ul>

                            <hr class=".h-color mx-2">

                            <ul class="list-unstyled px-2">

                                <!-- <li class=""><a href="Configuracoes.php" class="text-decoratioin-none px-3 py-2 d-block">
                                    Adicionar iconesConfigurações
                                    </a>
                                </li> -->

                                <li class=""><a href="Logout.php" class="text-decoratioin-none px-3 py-2 d-block">
                                    <!-- Adicionar icones -->Sair
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>