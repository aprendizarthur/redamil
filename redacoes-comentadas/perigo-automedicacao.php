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
    <title>Redamil - A perigosa cultura de automedicação no Brasil</title>
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
                            <h1 class="poppins-semibold mb-3">A perigosa cultura de automedicação no Brasil</h1>

                            <div class="text-left">
                                <div class="text-center">
                                    <p class="poppins-regular d-block mb-2">Tomás Amaral</p>
                                </div>
                                <p class="poppins-regular d-block mt-4 mb-2"> <span class="introducao-redacao">
                                    Ao longo do período de consolidação do domínio da espécie humana sobre as demais e sobre o meio em que 
                                    estava inserida, diversas habilidades permitiram a sua sobrevivência no ambiente hostil. Nesse contexto, 
                                    grupos culturais desenvolveram técnicas próprias de cuidado com a saúde, estabelecendo uma relação de 
                                    proximidade com o corpo. Entretanto, com a chegada da contemporaneidade, houve gradativa fragilização 
                                    desse panorama, e os indivíduos adotaram expressivas práticas de automedicação, cedendo aos discursos 
                                    produzidos acerca dos fármacos e fazendo uso excessivo destes, distanciando-se da forma harmônica com 
                                    que povos antigos lidavam com a integridade corporal. 
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Em primeiro plano, a sociedade contemporânea, induzida pelas verdades consensuais produzidas pelas 
                                    empresas farmacêuticas através da mídia, apropriou-se indevidamente dos medicamentos e tomou para si o 
                                    arbítrio sobre a necessidade desse uso. Dentro dessa perspectiva, assim como analisado pelo linguista Noam 
                                    Chomsky, na teoria sobre o consenso fabricado, discursos midiáticos são absorvidos com facilidade pelo 
                                    coletivo e, nesse processo, comportamentos são adotados como naturais. Logo, a automedicação, atualmente 
                                    de presença significativa na nação brasileira, é produto do efeito produzido por uma estratégia de venda.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Paralelamente, como consequência da consolidação desse comportamento, os indivíduos perderam, de fato, 
                                    o contato próximo com a própria saúde, depositando confiança estrita nos remédios e nos procedimentos 
                                    médicos. Com efeito, gregos e povos orientais possuíam, em tempos remotos, muito mais produtiva relação 
                                    com o bem-estar próprio, uma vez que desenvolveram ampla consciência sobre a integridade do corpo, como 
                                    estudado pelo filósofo francês Michel Foucault, na análise sobre o “cuidado de si”. Nesse aspecto, com o 
                                    distanciamento dessa prática pelos indivíduos, o tratamento de doenças e a promoção de saúde passou a ser 
                                    intermediado pelo uso abusivo de medicamentos.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="conclusao-redacao">
                                    Entende-se, assim, a necessidade da busca por uma nova relação entre o bem-estar e o corpo, baseada na 
                                    noção de autocuidado, conforme Foucault. Portanto, para a supressão da cultura de automedicação no Brasil, 
                                    faz-se necessário que organizações da sociedade civil mobilizem campanhas no ambiente público, através da 
                                    utilização frequente de espaços coletivos para a realização de palestras educativas que carreguem, sobretudo, 
                                    amplo teor informacional sobre a real importância e potencial de cuidado de si, a fim de, finalmente, 
                                    reaproximar os indivíduos da própria saúde.
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
                                    Temos como projeto a ideia de 
                                    que os seres humanos passaram a fazer uso abusivo de remédios por causa da influência da 
                                    mídia (“discursos produzidos sobre os fármacos”) e do afastamento de práticas tradicionais 
                                    de cuidado com o corpo. Neste texto, a tese não está apresentada de maneira totalmente 
                                    explícita, em dois pontos claros, mas ela é perfeitamente discernível no final do primeiro 
                                    parágrafo.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    Os dois pontos levantados são claramente desdobrados e comprovados pelo uso de dois 
                                    repertórios: no segundo parágrafo, um conceito do pensador Noam Chomsky é apresentado 
                                    para comprovar a influência midiática no comportamento dos expectadores. No terceiro, os 
                                    estudos de Michel Foucault são citados para embasar a ideia de que os povos antigos tinham 
                                    uma relação adequada de cuidados com o corpo.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    Na conclusão, a discussão é retomada e satisfatoriamente encerrada. Há apenas uma 
                                    intervenção, contando com os cinco elementos claramente expostos.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    A norma culta é perfeitamente empregada ao longo do texto, que possui boa diversidade de 
                                    conectores (“nesse contexto”, “entretanto”, “em primeiro plano”, “dentro dessa perspectiva”, 
                                    “logo”, “paralelamente”, “com efeito”, “nesse aspecto”, “assim” e “portanto”). A alternância de 
                                    termos como “remédios”, “fármacos” e “medicamentos” permitiu progressão da escrita sem 
                                    repetições viciosas.
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
                            <p class="poppins-regular">Clique e confira mais redações nota 1000 comentadas.</p>
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