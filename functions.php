<?php 
//CONEXÃO COM O BANCO DE DADOS
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'redamil';


$mysqli = new mysqli($host, $user, $pass, $db);

//FUNÇÃO PARA FILTRAR REPERTÓRIOS NA PÁGINA SÓ COM REPERTÓRIOS
function filtrarRepertorios($mysqli){
    //mostra todos os repertórios, isso quando o usuário não clica no submit
    if(!isset($_POST['submit'])){
        $sql_code = "SELECT titulo, imagem, link, categoria FROM repertorios";

        if($resultado = $mysqli->query($sql_code)){

            while($dados = $resultado->fetch_assoc()){
                echo "
                <div class=\"col-12 col-md-6 mt-3 box-dia aumentar\">
                    <a href=\"".$dados['link']."\"> 
                        <div>
                            <img class=\"img-fluid img-box overflow\" src=\"".$dados['imagem']."\">
                        </div>
                        <div class=\"bg-preto d-flex align-items-center text-light p-3 text-left\" style=\"position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;\">
                            <h4 class=\"poppins-regular d-inline\">".$dados['titulo']."</h4>
                        </div>
                    </a>    
                 </div>
                ";
            }
        } 
    }

    //após o usuário selecionar a categoria, pega do server e filtra 
    if(($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['submit'])){
        //pegando categoria do post
        $categoria = $mysqli->real_escape_string($_POST['categoria']); 

        if($categoria === "todos"){
            $sql_code = "SELECT titulo, imagem, link, categoria FROM repertorios";

            if($resultado = $mysqli->query($sql_code)){

                while($dados = $resultado->fetch_assoc()){
                    echo "
                    <div class=\"col-12 col-md-6 mt-3 box-dia aumentar\">
                        <a href=\"".$dados['link']."\"> 
                            <div>
                                <img class=\"img-fluid img-box overflow\" src=\"".$dados['imagem']."\">
                            </div>
                            <div class=\"bg-preto d-flex align-items-center text-light p-3 text-left\" style=\"position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;\">
                                <h4 class=\"poppins-regular d-inline\">".$dados['titulo']."</h4>
                            </div>
                        </a>    
                    </div>
                    ";
                }
            } 
        } else {

            $sql_code = "SELECT titulo, imagem, link, categoria FROM repertorios WHERE categoria = '$categoria'";

            if($resultado = $mysqli->query($sql_code)){

                while($dados = $resultado->fetch_assoc()){
                    echo "
                    <div class=\"col-12 col-md-6 mt-3 box-dia aumentar\">
                        <a href=\"".$dados['link']."\"> 
                            <div>
                                <img class=\"img-fluid img-box overflow\" src=\"".$dados['imagem']."\">
                            </div>
                            <div class=\"bg-preto d-flex align-items-center text-light p-3 text-left\" style=\"position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;\">
                                <h4 class=\"poppins-regular d-inline\">".$dados['titulo']."</h4>
                            </div>
                        </a>    
                    </div>
                    ";
                }
            }    
        } 
    }  
}

//FUNÇÃO PARA FILTRAR TEMAS NA PÁGINA SÓ COM TEMAS
function filtrarTemas($mysqli){

    //mostra todos os temas, isso quando o usuário não clica no submit
    if(!isset($_POST['submit'])){
        $sql_code = "SELECT titulo, imagem, link, categoria FROM temas";

        if($resultado = $mysqli->query($sql_code)){

            while($dados = $resultado->fetch_assoc()){
                echo "
                <div class=\"col-12 col-md-6 mt-3 box-dia aumentar\">
                    <a href=\"".$dados['link']."\"> 
                        <div>
                            <img class=\"img-fluid img-box overflow\" src=\"".$dados['imagem']."\">
                        </div>
                        <div class=\"bg-preto d-flex align-items-center text-light p-3 text-left\" style=\"position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;\">
                            <h4 class=\"poppins-regular d-inline\">".$dados['titulo']."</h4>
                        </div>
                    </a>    
                 </div>
                ";
            }
        } 
    }

    //após o usuário selecionar a categoria, pega do server e filtra 
    if(($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['submit'])){
        //pegando categoria do post
        $categoria = $mysqli->real_escape_string($_POST['categoria']); 

        if($categoria === "todos"){
            $sql_code = "SELECT titulo, imagem, link, categoria FROM temas";

            if($resultado = $mysqli->query($sql_code)){

                while($dados = $resultado->fetch_assoc()){
                    echo "
                    <div class=\"col-12 col-md-6 mt-3 box-dia aumentar\">
                        <a href=\"".$dados['link']."\"> 
                            <div>
                                <img class=\"img-fluid img-box overflow\" src=\"".$dados['imagem']."\">
                            </div>
                            <div class=\"bg-preto d-flex align-items-center text-light p-3 text-left\" style=\"position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;\">
                                <h4 class=\"poppins-regular d-inline\">".$dados['titulo']."</h4>
                            </div>
                        </a>    
                    </div>
                    ";
                }
            } 
        } else {

            $sql_code = "SELECT titulo, imagem, link, categoria FROM temas WHERE categoria = '$categoria'";

            if($resultado = $mysqli->query($sql_code)){

                while($dados = $resultado->fetch_assoc()){
                    echo "
                    <div class=\"col-12 col-md-6 mt-3 box-dia aumentar\">
                        <a href=\"".$dados['link']."\"> 
                            <div>
                                <img class=\"img-fluid img-box overflow\" src=\"".$dados['imagem']."\">
                            </div>
                            <div class=\"bg-preto d-flex align-items-center text-light p-3 text-left\" style=\"position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;\">
                                <h4 class=\"poppins-regular d-inline\">".$dados['titulo']."</h4>
                            </div>
                        </a>    
                    </div>
                    ";
                }
            }    
        } 
    }  
}

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
    $sql_code = "SELECT titulo, imagem, link, categoria FROM temas WHERE id_tema = $indiceAleatorio";

    if($resultado = $mysqli->query($sql_code)){
        $dados = $resultado->fetch_assoc();

        echo "
        <div class=\"box-dia aumentar\">
            <a href=\"".$dados['link']."\"> 
                <div>
                    <img class=\"img-fluid img-box overflow\" src=\"".$dados['imagem']."\">
                </div>
                <div class=\"bg-preto d-flex align-items-center text-light p-3 text-left\" style=\"position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;\">
                    <h4 class=\"poppins-regular d-inline\">".$dados['titulo']."</h4>
                </div>
            </a>    
        </div>
        ";

    } else {
        echo "Erro, tente novamente";
    }
}

//FUNÇÃO PARA EXIBIR UM REPERTÓRIO ALEATORIO NA INDEX
function repertorioDia($mysqli){
    //descobrindo o último índice da tabela
    $sql_code = "SELECT COUNT(*) AS total FROM repertorios";

    if($resultado = $mysqli->query($sql_code)){
        $dados = $resultado->fetch_assoc();
        $totalTemas = (int)$dados['total'];

        //gerando um número aleatório entre 1 e o último índice da tabela
        $indiceAleatorio = rand(1, $totalTemas);

    } else {
        echo "Erro, tente novamente";
    }
    
    //selecionando o repertorio e printando ele na tela
    $sql_code = "SELECT titulo, imagem, link, categoria, id_pagina FROM repertorios WHERE id_repertorio = $indiceAleatorio";

    if($resultado = $mysqli->query($sql_code)){
        $dados = $resultado->fetch_assoc();

        echo "
        <div class=\"box-dia aumentar\" id=\"".$dados['id_pagina']."\">
            <a href=\"".$dados['link']."\"> 
                <div>
                    <img class=\"img-fluid img-box overflow\" src=\"".$dados['imagem']."\">
                </div>
                <div class=\"bg-preto d-flex align-items-center text-light p-3 text-left\" style=\"position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;\">
                    <h4 class=\"poppins-regular d-inline\">".$dados['titulo']."</h4>
                </div>
            </a>    
        </div>
        ";

    } else {
        echo "Erro, tente novamente";
    }
}

//FUNÇÃO PARA EXIBIR DOIS REPERTÓRIOS ALEATORIOS
function repertoriosRecomendacao($mysqli){
    //descobrindo o último índice da tabela
    $sql_code = "SELECT COUNT(*) AS total FROM repertorios";

    if($resultado = $mysqli->query($sql_code)){
        $dados = $resultado->fetch_assoc();
        $totalTemas = (int)$dados['total'];
    } else {
        echo "Erro, tente novamente";
    }
    
    //selecionando o primeiro repertorio e printando ele na tela
    
    //gerando um número aleatório entre 1 e o último índice da tabela
    $indiceAleatorio1 = rand(1, $totalTemas);

    $sql_code = "SELECT titulo, imagem, link, categoria, id_pagina FROM repertorios WHERE id_repertorio = $indiceAleatorio1";

    if($resultado = $mysqli->query($sql_code)){
        $dados = $resultado->fetch_assoc();

        //tratando link para a página, tirando o "/repertorios" pois estamos dentro desse diretorio
        $linkRepertorio = substr($dados['link'], 12);

        echo "
        <div class=\"col-12 col-md-6 mt-3 box-dia aumentar\" id=\"".$dados['id_pagina']."\">
            <a href=\"".$linkRepertorio."\"> 
                <div>
                    <img class=\"img-fluid img-box overflow\" src=\"../".$dados['imagem']."\">
                </div>
                <div class=\"bg-preto d-f lex align-items-center text-light p-3 text-left\" style=\"position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;\">
                    <h4 class=\"poppins-regular d-inline\">".$dados['titulo']."</h4>
                </div>
            </a>    
        </div>
        ";

    } else {
        echo "Erro, tente novamente";
    }

    //função recursiva para garantir que os dois indices aleatorios não sejam iguais
    function garantirDiferenca($indiceAleatorio1, $indiceAleatorio2, $totalTemas){
        if($indiceAleatorio2 == $indiceAleatorio1){
            $indiceAleatorio2 = rand(1, $totalTemas);

            return garantirDiferenca($indiceAleatorio1, $indiceAleatorio2, $totalTemas);
        }

        return $indiceAleatorio2;
    }

    //selecionando o segundo repertorio e printando ele na tela
    $indiceAleatorio2 = rand(1, $totalTemas);
    $indiceAleatorio2 = garantirDiferenca($indiceAleatorio1, $indiceAleatorio2, $totalTemas);

    

    $sql_code = "SELECT titulo, imagem, link, categoria, id_pagina FROM repertorios WHERE id_repertorio = $indiceAleatorio2";

    if($resultado = $mysqli->query($sql_code)){
        $dados = $resultado->fetch_assoc();

        //tratando link para a página, tirando o "/repertorios" pois estamos dentro desse diretorio
        $linkRepertorio = substr($dados['link'], 12);

        echo "
        <div class=\"col-12 col-md-6 mt-3 box-dia aumentar\" id=\"".$dados['id_pagina']."\">
            <a href=\"".$linkRepertorio."\"> 
                <div>
                    <img class=\"img-fluid img-box overflow\" src=\"../".$dados['imagem']."\">
                </div>
                <div class=\"bg-preto d-flex align-items-center text-light p-3 text-left\" style=\"position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;\">
                    <h4 class=\"poppins-regular d-inline\">".$dados['titulo']."</h4>
                </div>
            </a>    
        </div>
        ";

    } else {
        echo "Erro, tente novamente";
    }
}

//FUNÇÃO QUE EXIBE A SESSÃO DE NAVEGAÇÃO NO MAIN
function mostrarNavegacao(){
    echo "
    <section id=\"cta-nav\">
                    <div class=\"row d-flex p-2\">
                        <div class=\"col-12 col-lg-6 my-2 text-center d-flex justify-content-center\">
                            <div class=\"p-4 cta-index d-flex align-items-center justify-content-center\" style=\"height: 100%;\">
                                <h1 class=\"d-block d-mb-none poppins-semibold text-light\" style=\"font-size: 1.5rem\">Domine a redação do ENEM com materiais completos e grátis!</h1>
                                <h1 class=\"d-none d-mb-block poppins-semibold text-light\">Domine a redação do ENEM com materiais completos e grátis!</h1>
                        
                                <a href=\"index.php#trilha\" class=\"d-block botao-atencao poppins-semibold mt-3 p-2 aumentar\"><i class=\"fa-solid fa-lg fa-list-check mr-2\" style=\"color: #3E3E42\"></i>Trilha de aprendizado</a>  
                            </div>
                        </div>
                        
                        <div class=\"col-12 col-lg-6 my-2 text-center justify-content-center d-flex\">
                            <div class=\"row\">
                                <div class=\"col-12 col-md-6 my-1 col-lg-12\">
                                    <a href=\"index.php#argumentos\" class=\"d-block botao-principal poppins-semibold p-2 aumentar\"><i class=\"fa-solid fa-quote-left fa-lg mr-2\" style=\"color: #ffffff;\"></i>Argumentos</a>
                                </div>
                                <div class=\"col-12 col-md-6 my-1 col-lg-12\">
                                    <a href=\"redacoes.php#redacoes\" class=\"d-block botao-principal poppins-semibold p-2 aumentar\"><i class=\"fa-solid fa-file-invoice fa-lg mr-2\" style=\"color: #ffffff;\"></i>Redações Comentadas</a>
                                </div>
                                <div class=\"col-12 col-md-6 my-1 col-lg-12\">
                                    <a href=\"repertorios.php#filtrar-repertorios\" class=\"d-block botao-principal poppins-semibold p-2 aumentar\"><i class=\"fa-solid fa-folder-open fa-lg mr-2\" style=\"color: #ffffff;\"></i>Repertórios</a>
                                </div>
                                <div class=\"col-12 col-md-6 my-1 col-lg-12\">
                                    <a href=\"temas.php#filtrar-temas\" class=\"d-block botao-principal poppins-semibold p-2 aumentar\"><i class=\"fa-solid fa-lightbulb fa-lg mr-2\" style=\"color: #ffffff;\"></i>Temas</a>
                                </div>   
                            </div>
                        </div>
                    </div> 
                </section>
    ";
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
                                    <a class="nav-link poppins-regular" rel="nofollow" href="index.php#argumentos">Argumentos</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" href="redacoes.php">Redações</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="repertorios.php#filtrar-repertorios">Repertórios</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="temas.php#filtrar-temas">Temas</a>
                                </li>
                                <li class="nav-item text-center">
                                    <hr class="my-3">
                                    <a class="nav-link d-md-none my-2 botao-principal poppins-semibold py-2" rel="nofollow" href="index.php#trilha"><i class="fa-solid fa-list-check mr-2" style="color: #ffffff;"></i>Trilha de aprendizado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-md-none my-2 botao-sucesso poppins-semibold py-2" rel="nofollow" href="https://www.vakinha.com.br/vaquinha/mantenha-o-redamil-vivo-hospedagem-e-dominio-arthur-borges-vieira"><i class="fa-solid fa-hand-holding-dollar fa-lg mr-2"></i>Doe para o projeto</a>
                                </li>
                                <li class="nav-item ml-2">
                                    <a class="nav-link d-none d-md-block botao-sucesso poppins-semibold py-2 px-3 aumentar" rel="nofollow" href="https://www.vakinha.com.br/vaquinha/mantenha-o-redamil-vivo-hospedagem-e-dominio-arthur-borges-vieira"><i class="fa-solid fa-hand-holding-dollar fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>   
                </div>
            </div>';
}

//FUNÇÃO QUE EXIBE O FOOTER
function rodape(){
    echo '<div class="row d-flex justify-content-around mb-3">
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
                                        <a class="nav-link poppins-regular" rel="nofollow" href="index.php#argumentos">Argumentos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="redacoes.php">Redações</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="repertorios.php#filtrar-repertorios">Repertórios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="temas.php#filtrar-temas">Temas</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-12 col-md-5 col-lg-5 my-2">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <span class="nav-link poppins-semibold preto" href="">Projeto</span>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="https://www.vakinha.com.br/vaquinha/mantenha-o-redamil-vivo-hospedagem-e-dominio-arthur-borges-vieira">Doe para o projeto</a>
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
                                    <a class="nav-link poppins-regular" rel="nofollow" href="../index.php#argumentos">Argumentos</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" href="../redacoes.php">Redações</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="../repertorios.php#filtrar-repertorios">Repertórios</a>
                                </li>
                                <li class="nav-item text-center mx-2">
                                    <a class="nav-link poppins-regular" rel="nofollow" href="../temas.php#filtrar-temas">Temas</a>
                                </li>
                                <li class="nav-item text-center">
                                    <hr class="my-3">
                                    <a class="nav-link d-md-none my-2 botao-principal poppins-semibold py-2" rel="nofollow" href="../index.php#trilha"><i class="fa-solid fa-list-check mr-2" style="color: #ffffff;"></i>Trilha de aprendizado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-md-none my-2 botao-atencao poppins-semibold py-2" rel="nofollow" href="https://www.vakinha.com.br/vaquinha/mantenha-o-redamil-vivo-hospedagem-e-dominio-arthur-borges-vieira"><i class="fa-solid fa-hand-holding-dollar fa-lg mr-2"></i>Doe para o projeto</a>
                                </li>
                                <li class="nav-item ml-2">
                                    <a class="nav-link d-none d-md-block botao-sucesso poppins-semibold py-2 px-3 aumentar" rel="nofollow" href="https://www.vakinha.com.br/vaquinha/mantenha-o-redamil-vivo-hospedagem-e-dominio-arthur-borges-vieira"><i class="fa-solid fa-hand-holding-dollar fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>   
                </div>
            </div>';
}

//FUNÇÃO QUE EXIBE O FOOTER NAS PÁGINAS DE TRILHA (UM DIRETÓRIO PARA TRÁS NOS LINKS)
function rodapeTrilha(){
    echo '<div class="row d-flex justify-content-around mb-3">
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
                                        <a class="nav-link poppins-regular" rel="nofollow" href="../index.php#argumentos">Argumentos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="../redacoes.php">Redações</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="../repertorios#filtrar-repertorios.php">Repertórios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="../temas.php#filtrar-temas">Temas</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-12 col-md-5 col-lg-5 my-2">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <span class="nav-link poppins-semibold preto" href="">Projeto</span>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link poppins-regular" rel="nofollow" href="https://www.vakinha.com.br/vaquinha/mantenha-o-redamil-vivo-hospedagem-e-dominio-arthur-borges-vieira">Doe para o projeto</a>
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