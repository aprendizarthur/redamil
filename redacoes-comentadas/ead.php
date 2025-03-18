<?php 
//INCLUINDO ARQUIVO COM FUNCOES PHP
include('../functions.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<!--META TAGS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--TÍTULO/ÍCONE/DESCRIÇÃO DA PÁGINA/COR TEMA NAVEGADOR-->
    <title>Redamil - O ensino a distância no Brasil: caminhos para expandir a todos o acesso ao conhecimento/title>
    <link rel="icon" type="image/x-icon" href="../images/assets/icon.ico">
    <meta name="description" content="Aprenda a estrutura da redação do ENEM: etapas detalhadas e análise de uma redação nota 1000 para exemplificar!">
    <meta name="theme-color" content="#3E3E42">
    
<!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--FOLHA CSS-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
            <?php cabecalhotTrilha(); ?>    
        </header>
        <!--FECHAMENTO HEADER-->

        <!--ABERTURA MAIN-->
        <main class="mb-3">
        
        <!--ABERTURA SESSÃO LEGENDA-->
        <div class="container box mt-3">
                <article id="legenda">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Legenda</h1>

                            <!--LEGENDA TABLET-PC-->
                            <div class="d-none d-md-flex justify-content-center">
                                <span class="legenda mr-1" style="background-color: #e9efa7"></span> <span class="poppins-regular mr-3">Introdução</span> <span class="legenda mr-1" style="background-color: #b2edf9"></span> <span class="poppins-regular mr-3">Desenvolvimento</span> <span class="legenda mr-1" style="background-color: #f2cbf4"></span> <span class="poppins-regular mr-3">Conclusão</span>
                            </div>

                            <!--LEGENDA MOBILE-->
                            <div class="row d-flex justify-content-center">
                                <div class="d-md-none col-12 mb-1 d-flex justify-content-center">
                                    <span class="legenda mr-1" style="background-color: #e9efa7"></span> <span class="poppins-regular mr-3">Introdução</span>
                                </div>
                                <div class="d-md-none col-12 my-1 d-flex justify-content-center">
                                    <span class="legenda mr-1" style="background-color: #b2edf9"></span> <span class="poppins-regular mr-3">Desenvolvimento</span>
                                </div>
                                <div class="d-md-none col-12 d-flex justify-content-center">
                                    <span class="legenda mr-1" style="background-color: #f2cbf4"></span> <span class="poppins-regular mr-3">Conclusão</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO LEGENDA-->

         <!--ABERTURA SESSÃO REDAÇÃO-->
         <div class="container box mt-3">
                <article id="redacao">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">O ensino a distância no Brasil: caminhos para expandir a todos o acesso ao conhecimento</h1>

                            <div class="text-left">
                                <div class="text-center">
                                    <p class="poppins-regular d-block mb-2">Yara Hallack</p>
                                </div>
                                <p class="poppins-regular d-block mt-4 mb-2"> <span class="introducao-redacao">
                                    Durante muito tempo, no Brasil, a educação era restrita à elite, sendo democratizada em 1988 com 
                                    a Constituição Cidadã. Hoje, a era digital viabilizou novas formas de ampliar o ensino e o acesso ao 
                                    conhecimento com a educação a distância, que cresce rapidamente no país, no entanto, ainda há entraves 
                                    no que tange a sua abrangência. Portanto, tal modalidade deve ser aprimorada, uma vez que possui diversos 
                                    benefícios pedagógicos.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Em primeira análise, é de grande relevância que cada indivíduo aprenda, respeitando seu próprio tempo. Nesse 
                                    sentido, na obra “Pedagogia da Autonomia”, o educador pernambucano Paulo Freire critica a superficialidade 
                                    do ensino convencional por não respeitar os saberes do aluno e seu ritmo de aprendizagem. Dito isso, a 
                                    educação a distância torna-se uma oportunidade para desenvolver uma metodologia mais inclusiva para 
                                    a população e mais eficiente, uma vez que o aluno poderá rever vídeo-aulas quantas vezes se fizerem 
                                    necessárias, de acordo com sua dificuldade.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Por outro lado, o aprendizado por meio virtual não é uma realidade para todos os brasileiros, haja vista que 
                                    nem toda a população possui acesso à internet e a computadores ou smartphones. Sob essa ótica, segundo 
                                    o geógrafo baiano Milton Santos, a globalização é perversa e segregacionista, excluindo os miseráveis dos 
                                    avanços da contemporaneidade. Nesse contexto, evidencia-se que a gestão governamental segue negligente 
                                    por não ofertar a todo o povo as novas tecnologias, privando-o, então, do conhecimento.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="conclusao-redacao">
                                    Logo, visando ampliar a educação a distância por meios virtuais, medidas fazem-se necessárias. Posto isso, 
                                    cabe ao governo universalizar o acesso à rede, por meio de distribuição gratuita de internet a todos os 
                                    estados da União, como feito na Estônia, país no qual o Estado se encarrega de ofertar conexão em praças e 
                                    locais comuns, com a finalidade de democratizar o conhecimento no Brasil. Concomitantemente, deve haver 
                                    redução nas tarifas sobre computadores e smartphones, para que a população mais carente possa ter posse 
                                    desse recurso. Assim, a educação não será privilégio da elite, e sim oportunidade a todos os cidadãos. 
                                </span></p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO REDAÇÃO-->

         <!--ABERTURA SESSÃO COMENTARIOS-->
         <div class="container box mt-3">
                <article id="comentarios">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Comentários</h1>

                            <div class="text-left">
                                <p class="poppins-regular d-block mb-2">
                                    Temos um tema importante e querido atualmente: a educação a 
                                    distância (EaD). Neste texto, a aluna construiu um projeto interessante: ela afirma a importância 
                                    dessa modalidade de ensino, ao mesmo tempo em que aponta os problemas para sua plena 
                                    expansão. Isso fez com que a argumentação ficasse com um parágrafo defendendo a EaD e 
                                    outro discutindo os problemas. Note que isso é completamente diferente de ficar em cima do 
                                    muro, quando se mostram dois pontos de vista, mas nenhum deles é efetivamente defendido.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    O texto se inicia com menção à Constituição de 1988, que define a educação como um direito 
                                    universal, mas não plenamente alcançado. No segundo parágrafo, a aluna recorre às reflexões de 
                                    Paulo Freire sobre a autonomia da aprendizagem, argumentando 
                                    a favor da expansão da EaD. No terceiro, é apresentado o problema da falta de acesso à rede e a 
                                    dispositivos, fundamentado pela referência ao pensador Milton Santos. O último parágrafo tem ainda 
                                    um repertório extra explicado brevemente: a situação da política de inclusão digital da Estônia.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    Na conclusão, são apresentadas duas intervenções, uma completa (com os cinco elementos), 
                                    para resolver a carência de conexão à rede, e outra incompleta, para facilitar a aquisição de 
                                    computadores e smartphones. A discussão da introdução é retomada, os problemas são 
                                    devidamente resolvidos e os critérios da competência são totalmente cumpridos.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    A norma culta foi bem empregada na escrita e os conectores aparecem em todos os parágrafos 
                                    adequadamente (“no entanto”, “em primeira análise”, “dito isso”, “por outro lado”, “sob essa 
                                    ótica”, “nesse contexto”, “então”, “logo”, “concomitantemente”, “posto isso” e “assim”). A aluna 
                                    também consegue evitar a repetição, usando termos como “tal modalidade”, “aprendizado por 
                                    meio virtual”
                                </p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO COMENTARIOS-->

         <!--ABERTURA SESSÃO VER MAIS-->
         <div class="container box mt-3">
                <section id="ver-mais">
                    <div class="row d-flex p-2 justify-content-center">
                    
                        <div class="col-12 mt-2 text-center">
                            <h1 class="poppins-semibold">Veja outras redações</h1>
                            <p class="poppins-regular">Clique e confira mais redações modelo comentadas.</p>
                        </div>

                        <div class="col-12 mb-2 text-center aumentar">
                            <div class="caixa-etapa p-5" style="background-color:rgb(224, 96, 217)">
                                <a href="../redacoes.php" class="text-light"><h2 class="poppins-semibold">Redações</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right" style="color: #ffffff; "></i>    
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
        <!--FECHAMENTO SESSÃO VER MAIS-->
        </main>
        <!--FECHAMENTO MAIN-->    
        
        <!--ABERTURA FOOTER-->
        <footer>
            <?php rodapeTrilha(); ?>   
        </footer>
        <!--FECHAMENTO FOOTER-->    
    </div>
        
        <!--JQUERY, POPPER E BOOTSTRAP JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>
</html>