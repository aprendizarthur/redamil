<?php 
//INCLUINDO ARQUIVO COM FUNCOES PHP
include('functions.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<!--META TAGS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--TÍTULO/ÍCONE/DESCRIÇÃO DA PÁGINA/COR TEMA NAVEGADOR-->
    <title>Redamil - Enriqueça a sua redação do ENEM!</title>
    <link rel="icon" type="image/x-icon" href="images/assets/icon.ico">
    <meta name="description" content="Redamil: Repertórios gratuitos para redação do ENEM, temas para praticar, argumentos e redações nota 1000 comentadas. Domine a escrita do ENEM agora!">
    <meta name="theme-color" content="#3E3E42">
    
<!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--FOLHA CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
<!--FONTAWESOME JS-->
    <script src="https://kit.fontawesome.com/6afdaad939.js" crossorigin="anonymous">      </script>
<!--BOOTSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!--FONTES GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!--ABERTURA HEADER-->
        <header class="my-3">
            <?php cabecalho(); ?>    
        </header>
        <!--FECHAMENTO HEADER-->

        <!--ABERTURA MAIN-->
        <main class="mb-3">
        <!--ABERTURA SESSÃO COM CTA E NAVEGAÇÃO CONTEÚDO-->
            <div class="container box">
                <?php mostrarNavegacao(); ?>
            </div>
         <!--FECHAMENTO SESSÃO COM CTA E NAVEGAÇÃO CONTEÚDO-->

         <!--ABERTURA SESSÃO COM TEMA E REPERTÓRIO DO DIA-->
            <div class="container box mt-3">
                <section id="conteudo-dia">
                    <div class="row d-flex p-2">
                        <div class="col-12 col-md-6 my-2 text-center">
                            <h1 class="poppins-semibold">Tema do dia <a href="#faq-tema"><i class="fa-solid fa-2xs fa-circle-question ml-1" style="color: #d7d6d6; position: relative; top: 2px"></i></a></h1>
                            <p class="poppins-regular">Clique e pratique com um novo tema e seus textos motivadores. </p>
                            
                            <div class="text-left">
                                <?php temaDia($mysqli); ?>    
                            </div>
                        </div>
                       
                        <div class="col-12 d-md-none">
                            <hr>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center">
                            <h1 class="poppins-semibold">Repertório do dia <a href="#faq-repertorio"><i class="fa-solid fa-2xs fa-circle-question ml-1" style="color: #d7d6d6; position: relative; top: 2px"></i></a></h1>
                            <p class="poppins-regular">Clique e enriqueça a sua redação do ENEM com um novo repertório. </p>

                            <div class="text-left">
                                <?php repertorioDia($mysqli); ?>    
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
         <!--FECHAMENTO SESSÃO COM TEMA E REPERTÓRIO DO DIA-->

        <!--ABERTURA SESSÃO COM ETAPAS DA TRILHA-->
            <div class="container box mt-3">
                <section id="trilha">
                    <div class="row d-flex p-2">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold">Redação <a href="#faq"><i class="fa-solid fa-2xs fa-circle-question ml-1" style="color: #d7d6d6; position: relative; top: 2px"></i></a></h1>
                            <p class="poppins-regular">Aqui você encontra todas as etapas exploradas na sua trilha de aprendizagem para a redação do ENEM.</p>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-introducao caixa-etapa p-5">
                                <a href="trilha/introducao.php" class=" text-light"><h2 class="poppins-semibold">Introdução</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right" style="color: #ffffff; "></i>    
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-competencias caixa-etapa p-5">
                                <a href="trilha/competencias.php" class="text-light"><h2 class="poppins-semibold">Competências</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right" style="color: #ffffff; "></i>    
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-estrutura caixa-etapa p-5">
                                <a href="trilha/estrutura.php" class=" text-light"><h2 class="poppins-semibold">Estrutura</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right" style="color: #ffffff; "></i>    
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-dicas caixa-etapa p-5">
                                <a href="trilha/dicas.php" class=" text-light"><h2 class="poppins-semibold">Dicas</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right" style="color: #ffffff; "></i>    
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
        <!--FECHAMENTO SESSÃO COM ETAPAS DA TRILHA-->  

        <!--ABERTURA SESSÃO COM REDAÇÕES-->
        <div class="container box mt-3">
                <section id="redacoes">
                    <div class="row d-flex p-2">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold">Redações Comentadas <a href="#faq-tema"><i class="fa-solid fa-2xs fa-circle-question ml-1" style="color: #d7d6d6; position: relative; top: 2px"></i></a></h1>
                            <p class="poppins-regular">Confira redações modelo comentadas. </p>
                            
                            <div class="row">
                                <div class="box-dia col-12 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/respeitar-cultura-indigena.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/2.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">A importância de respeitar as terras e culturas indígenas brasileiras</h4>
                                        </div>
                                    </a>    
                                </div>

                                <div class="d-none d-md-flex box-dia col-12 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/adocao.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/3.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">Adoção: como garantir a todas as crianças o direito a uma família no Brasil</h4>
                                        </div>
                                    </a>    
                                </div>
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
         <!--FECHAMENTO SESSÃO COM REDAÇÕES-->

        <!--ABERTURA SESSÃO COM ARGUMENTOS-->
            <div class="container box mt-3">
                <section id="argumentos">
                    <div class="row d-flex p-2">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold">Argumentos <a href="#faq"><i class="fa-solid fa-2xs fa-circle-question ml-1" style="color: #d7d6d6; position: relative; top: 2px"></i></a></h1>
                            <p class="poppins-regular">Um repertório prático para apontar possíveis responsáveis pelos problemas relacionados ao tema da sua redação.</p>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-governo caixa-etapa p-5">
                                <a href="argumentos/governo.php" class=" text-light"><h2 class="poppins-semibold">Governo</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right inferior-direito" style="color: #ffffff; "></i>    
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-midia caixa-etapa p-5">
                                <a href="argumentos/midia.php" class="text-light"><h2 class="poppins-semibold">Mídia</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right inferior-direito" style="color: #ffffff; "></i>    
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-educacao caixa-etapa p-5">
                                <a href="argumentos/educacao.php" class=" text-light"><h2 class="poppins-semibold">Educação</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right inferior-direito" style="color: #ffffff; "></i>    
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-sociedade caixa-etapa p-5">
                                <a href="argumentos/sociedade.php" class=" text-light"><h2 class="poppins-semibold">Sociedade</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right inferior-direito" style="color: #ffffff; "></i>    
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
         <!--FECHAMENTO SESSÃO COM ARGUMENTOS-->
        </main>
        <!--FECHAMENTO MAIN-->    
        
        <!--ABERTURA FOOTER-->
        <footer>
            <?php rodape(); ?>   
        </footer>
        <!--FECHAMENTO FOOTER-->    
    </div>
        
        <!--JQUERY, POPPER E BOOTSTRAP JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>
</html>