<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Creuza Bolos e CIA - Sistema</title>
        <meta charset="utf-8">

        <!-- CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
    
    </head>
    <body>
        <div class="d-flex">
            <!-- SideBar -->
            <div class="bg-primary" id="sidebar-container">
                <div class="logo">
                    <h4 class="text-light font-weight-bold">TempLune</h4>
                </div>
                <div class="menu">
                    <a href="#" class="d-block text-light p-3"><ion-icon name="list-outline" class="mr-2 lead text-align"></ion-icon>Bolos</a>
                    <a href="#" class="d-block text-light p-3"><ion-icon name="list-outline" class="mr-2 lead text-align"></ion-icon>Salgados</a>
                    <a href="#" class="d-block text-light p-3"><ion-icon name="list-outline" class="mr-2 lead text-align"></ion-icon>Wallpapper</a>
                </div>
            </div>

            <!-- NavBar -->
            <div class="w-100">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../images/cyndaquil.jpg" class="img-fluid rounded-circle mr-2 avatar">Creuza Dida
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Trocar Senha</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Encerrar Sessão</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        @yield('content')

    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </body>
</html>