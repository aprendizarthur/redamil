<?php 
/*
//CONEXÃO COM O BANCO DE DADOS
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'redamil';


$mysqli = new mysqli($host, $user, $pass, $db);
*/
//FUNÇÃO PARA EXIBIR UM TEMA ALEATORIO NA INDEX
function temaDia($mysqli){
    //descobrindo o último índice da tabela
    $sql_code = "SELECT COUNT(*) AS total FROM temas";

    if($resultado = $mysqli->query($sql_code)){
        $dados = $resultado->fetch_assoc();
        $totalTemas = (int)$dados['total'];

        //gerando um número aleatório entre 1 e o último índice da tabela
        $indiceAleatorio = rand(1, $totalTemas);

    } else {
        //MENSAGEM ERRO---------------------------------------------
    }
    
    //selecionando o tema e printando ele na tela
    $sql_code = "SELECT titulo_tema, categoria_tema, credito_imagem, caminho_imagem FROM temas WHERE id_tema = $indiceAleatorio";

    if($resultado = $mysqli->query($sql_code)){
        $dados = $resultado->fetch_assoc();

        echo " Tema : " . $dados['titulo_tema'] . " <br> Categoria : " . $dados['categoria_tema'] . " <br> Imagem :  <img class=\"img-fluid\" src=\"" . $dados['caminho_imagem'] . "\">" ;

    } else {
        //MENSAGEM ERRO---------------------------------------------
    }
}

//FUNÇÃO QUE EXIBE O HEADER
function cabecalho() {
    echo '<div class="row d-flex justify-content-center">
                <div class="col-12 my-2">
                    <nav class="navbar navbar-expand-md navbar-light align-items-center">
                        <a class="navbar-brand inter-extrabold preto "href="index.php" style=""><i class="fa-solid fa-bookmark fa-lg mr-2" style="color: #3e3e42;"></i>Redamil</a>
                        <button class="navbar-toggler" style="border: none; position: relative; left: 10px;" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Abrir navegação">
                            <i class="fa-solid fa-bars fa-xl p-3" style="color: #3E3E42;"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav text-center ml-auto">
                                <hr class="d-md-none>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="argumentos.php">Argumentos</a>
                                </li>
                                <li class="nav-item d-md-none d-lg-block text-center mx-2">
                                    <a class="nav-link poppins-regular" href="redacoes.php">Coesão</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" href="redacoes.php">Redações</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="repertorios.php">Repertórios</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="temas.php">Temas</a>
                                </li>
                                <li class="nav-item text-center">
                                    <hr class="my-3">
                                    <a class="nav-link d-md-none my-2 botao-principal poppins-semibold py-2" rel="nofollow" href="trilha.php"><i class="fa-solid fa-list-check mr-2" style="color: #ffffff;"></i>Trilha de aprendizado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-md-none my-2 botao-sucesso poppins-semibold py-2" rel="nofollow" href="https://www.vakinha.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=Vakinha_google_conversao_search_fundo_11_always-on_institucional_home-cpc&utm_content=120558729261&utm_term=vakinha&gad_source=1&gclid=CjwKCAiAiaC-BhBEEiwAjY99qLxNRAJTaXahJbcRTjgZAYMWKhH4W_wga5Zxv6NKnU_OnELKF2H26xoCNFsQAvD_BwE"><i class="fa-solid fa-hand-holding-dollar fa-lg mr-2"></i>Doe para o projeto</a>
                                </li>
                                <li class="nav-item ml-2">
                                    <a class="nav-link d-none d-md-block botao-sucesso poppins-semibold py-2 px-3 aumentar" rel="nofollow" href="https://www.vakinha.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=Vakinha_google_conversao_search_fundo_11_always-on_institucional_home-cpc&utm_content=120558729261&utm_term=vakinha&gad_source=1&gclid=CjwKCAiAiaC-BhBEEiwAjY99qLxNRAJTaXahJbcRTjgZAYMWKhH4W_wga5Zxv6NKnU_OnELKF2H26xoCNFsQAvD_BwE"><i class="fa-solid fa-hand-holding-dollar fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>   
                </div>
            </div>';
}

//FUNÇÃO QUE EXIBE O FOOTER
function rodape(){
    echo '<div class="row d-flex justify-content-around">
                <div class="col-12 my-2">
                    <nav class="navbar align-items-center">
                        <div class="row d-flex justify-content-between">
                            <a class="navbar-brand col-12 inter-extrabold preto m-auto" href="index.php"><i class="fa-solid fa-bookmark fa-lg mr-2" style="color: #3e3e42;"></i>Redamil</a>
                        
                            <div class="col-12 col-md-5 col-lg-5 my-2">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <span class="nav-link poppins-semibold preto" href="">Conteúdo</span>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="argumentos.php">Argumentos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="elementos.php">Elementos de coesão</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="redacoes.php">Redações</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="repertorios.php">Repertórios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="temas.php">Temas</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-12 col-md-5 col-lg-5 my-2">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <span class="nav-link poppins-semibold preto" href="">Projeto</span>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="https://www.vakinha.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=Vakinha_google_conversao_search_fundo_11_always-on_institucional_home-cpc&utm_content=120558729261&utm_term=vakinha&gad_source=1&gclid=CjwKCAiAiaC-BhBEEiwAjY99qLxNRAJTaXahJbcRTjgZAYMWKhH4W_wga5Zxv6NKnU_OnELKF2H26xoCNFsQAvD_BwE">Doe para o projeto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="privacidade.php">Privacidade</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular"  rel="nofollow" href="sobre.php">Sobre</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </nav> 

                    <div class="text-center col-12">
                        <a href="https://www.instagram.com/dev.arthurvieira/" rel="nofollow" class="nav-link poppins-semibold" style="color:#3E3E42 ">Desenvolvido por <span style="color: #0088cc">Arthur Vieira</span></a>
                    </div>  
                </div>
            </div>';
}

//FUNÇÃO QUE EXIBE O HEADER NAS PÁGINAS DE TRILHA (UM DIRETÓRIO PARA TRÁS NOS LINKS)
function cabecalhotTrilha() {
    echo '<div class="row d-flex justify-content-center">
                <div class="col-12 my-2">
                    <nav class="navbar navbar-expand-md navbar-light align-items-center">
                        <a class="navbar-brand inter-extrabold preto " href="../index.php"><i class="fa-solid fa-bookmark fa-lg mr-2" style="color: #3e3e42;"></i>Redamil</a>
                        <button class="navbar-toggler" style="border: none; position: relative; left: 10px;" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Abrir navegação">
                            <i class="fa-solid fa-bars fa-xl p-3" style="color: #3E3E42;"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav text-center ml-auto">
                                <hr class="d-md-none>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="../argumentos.php">Argumentos</a>
                                </li>
                                <li class="nav-item d-md-none d-lg-block text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="../elementos.php">Coesão</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" href="../redacoes.php">Redações</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="../repertorios.php">Repertórios</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="../temas.php">Temas</a>
                                </li>
                                <li class="nav-item text-center">
                                    <hr class="my-3">
                                    <a class="nav-link d-md-none my-2 botao-principal poppins-semibold py-2" rel="nofollow" href="../trilha.php"><i class="fa-solid fa-list-check mr-2" style="color: #ffffff;"></i>Trilha de aprendizado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-md-none my-2 botao-atencao poppins-semibold py-2" rel="nofollow" href="https://www.vakinha.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=Vakinha_google_conversao_search_fundo_11_always-on_institucional_home-cpc&utm_content=120558729261&utm_term=vakinha&gad_source=1&gclid=CjwKCAiAiaC-BhBEEiwAjY99qLxNRAJTaXahJbcRTjgZAYMWKhH4W_wga5Zxv6NKnU_OnELKF2H26xoCNFsQAvD_BwE"><i class="fa-solid fa-hand-holding-dollar fa-lg mr-2"></i>Doe para o projeto</a>
                                </li>
                                <li class="nav-item ml-2">
                                    <a class="nav-link d-none d-md-block botao-principal poppins-semibold py-2 px-3 aumentar" rel="nofollow" href="https://www.vakinha.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=Vakinha_google_conversao_search_fundo_11_always-on_institucional_home-cpc&utm_content=120558729261&utm_term=vakinha&gad_source=1&gclid=CjwKCAiAiaC-BhBEEiwAjY99qLxNRAJTaXahJbcRTjgZAYMWKhH4W_wga5Zxv6NKnU_OnELKF2H26xoCNFsQAvD_BwE"><i class="fa-solid fa-hand-holding-dollar fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>   
                </div>
            </div>';
}

//FUNÇÃO QUE EXIBE O FOOTER NAS PÁGINAS DE TRILHA (UM DIRETÓRIO PARA TRÁS NOS LINKS)
function rodapeTrilha(){
    echo '<div class="row d-flex justify-content-around">
                <div class="col-12 my-2">
                    <nav class="navbar align-items-center">
                        <div class="row d-flex justify-content-between">
                            <a class="navbar-brand col-12 inter-extrabold preto m-auto" href="../index.php"><i class="fa-solid fa-bookmark fa-lg mr-2" style="color: #3e3e42;"></i>Redamil</a>
                        
                            <div class="col-12 col-md-5 col-lg-5 my-2">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <span class="nav-link poppins-semibold preto" href="">Conteúdo</span>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="../argumentos.php">Argumentos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="../elementos.php">Elementos de Coesão</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="../redacoes.php">Redações</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="../repertorios.php">Repertórios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="../temas.php">Temas</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-12 col-md-5 col-lg-5 my-2">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <span class="nav-link poppins-semibold preto" href="">Projeto</span>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="https://www.vakinha.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=Vakinha_google_conversao_search_fundo_11_always-on_institucional_home-cpc&utm_content=120558729261&utm_term=vakinha&gad_source=1&gclid=CjwKCAiAiaC-BhBEEiwAjY99qLxNRAJTaXahJbcRTjgZAYMWKhH4W_wga5Zxv6NKnU_OnELKF2H26xoCNFsQAvD_BwE">Doe para o projeto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="../privacidade.php">Privacidade</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular"  rel="nofollow" href="../sobre.php">Sobre</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </nav> 

                    <div class="text-center col-12">
                        <a href="https://www.instagram.com/dev.arthurvieira/" rel="nofollow" class="nav-link poppins-semibold" style="color:#3E3E42 ">Desenvolvido por <span style="color: #0088cc">Arthur Vieira</span></a>
                    </div>  
                </div>
            </div>';
}

?>