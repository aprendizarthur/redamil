<?php 
//FUNÇÃO QUE EXIBE O HEADER
function cabecalho() {
    echo '<div class="row d-flex justify-content-center">
                <div class="col-12 my-2">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand inter-extrabold preto " href="index.php"><i class="fa-solid fa-bookmark fa-lg mr-2" style="color: #3e3e42;"></i>Redamil</a>
                        <button class="navbar-toggler" style="border: none; position: relative; left: 10px;" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Abrir navegação">
                            <i class="fa-solid fa-bars fa-xl p-3" style="color: #3E3E42;"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav mx-auto align-items-center">
                                <hr class="d-md-none>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" href="">Redações</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="">Temas</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="">Repertórios</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="">Argumentos</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto align-items-center text-center">
                                <li class="nav-item text-center">
                                    <hr class="my-3">
                                    <a class="nav-link d-block d-md-none my-2 botao-principal poppins-semibold py-2 px-5" rel="nofollow" href="" style="width="100%;"><i class="fa-solid fa-list-check mr-2" style="color: #ffffff;"></i>Trilha de aprendizado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block d-md-none my-2 botao-atencao poppins-semibold py-2 px-5" rel="nofollow" href="" style="width="100%;"><i class="fa-solid fa-hand-holding-dollar fa-mlg mr-2"></i>Doe para oprojeto</a>
                                </li>

                                <li class="nav-item mx-2">
                                    <a class="nav-link d-none d-md-block botao-principal poppins-semibold py-2 px-3" rel="nofollow" href=""><i class="fa-solid fa-hand-holding-dollar fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>   
                </div>
            </div>';
}

//FUNÇÃO QUE EXIBE O FOOTER
function rodape(){

}

?>