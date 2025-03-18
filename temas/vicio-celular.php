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
    <title>Redamil - Os desafios para o combate ao vício em celulares na era tecnológica no Brasil</title>
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
                                <span class="legenda mr-1" style="background-color: #e9efa7"></span> <span class="poppins-regular mr-3">Texto motivador 1</span> <span class="legenda mr-1" style="background-color: #b2edf9"></span> <span class="poppins-regular mr-3">Texto motivador 2</span><span class="legenda mr-1" style="background-color: #f2cbf4"></span> <span class="poppins-regular mr-3">Texto motivador 3</span>
                            </div>

                            <!--LEGENDA MOBILE-->
                            <div class="row d-flex justify-content-center">
                                <div class="d-md-none col-12 mb-1 d-flex justify-content-center">
                                    <span class="legenda mr-1" style="background-color: #e9efa7"></span> <span class="poppins-regular mr-3">Texto motivador 1</span>
                                </div>
                                <div class="d-md-none col-12 my-1 d-flex justify-content-center">
                                    <span class="legenda mr-1" style="background-color: #b2edf9"></span> <span class="poppins-regular mr-3">Texto motivador 2</span>
                                </div>
                                <div class="d-md-none col-12 my-1 d-flex justify-content-center">
                                    <span class="legenda mr-1" style="background-color: #f2cbf4"></span> <span class="poppins-regular mr-3">Texto motivador 3</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO LEGENDA-->

         <!--ABERTURA SESSÃO TEMA-->
         <div class="container box mt-3">
                <article id="tema">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <p class="poppins-regular d-block mb-2">Tema</p>
                            <h1 class="poppins-semibold mb-3">Os desafios para o combate ao vício em celulares na era tecnológica no Brasil</h1>

                            <div class="text-left">
                                <div class="text-center">
                                    
                                </div>
                                <p class="poppins-regular d-block mt-4 mb-2">
                                    A partir da leitura dos textos motivadores e com base nos conhecimentos construídos ao longo de sua formação, redija texto dissertativo-argumentativo em modalidade escrita formal da língua portuguesa apresentando proposta de intervenção que respeite os direitos humanos. 
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    Selecione, organize e relacione, de forma coerente e coesa, argumentos e fatos para defesa de seu ponto de vista. 
                                </p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO TEMA-->

         <!--ABERTURA SESSÃO TEXTO MOTIVADOR 1-->
         <div class="container box mt-3">
                <article id="motivador-1">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Texto motivador 1</h1>

                            <div class="text-left">
                               <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                               Vício em estar conectado ao celular existe e se chama Nomofobia
                                </span></p>

                               <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                               Apego ao aparelho se tornou tão sério e comum, que já ganhou até nome pelos especialistas [...] De acordo com a psiquiatra e professora do curso de Medicina da Universidade Positivo, Raquel Heep, ansiedade, depressão, solidão, angústia, palpitações, falta de ar e dor de cabeça são alguns dos sintomas da nomofobia. “Ela pode ser uma causa, por exemplo, de problemas de ansiedade, transtornos de pânico, insônia, além de outras consequências físicas e mentais”, esclarece. “É comum haver pessoas que acordam durante a noite para checar o celular, o que afeta na qualidade de sono. Também tem quem leve o aparelho para o banheiro, para a hora da refeição e inclusive para o lazer”, complementa Raquel. Segundo ela, essas ações devem acender uma luz vermelha nos hábitos para que não se tornem vícios. “Como o apego pelo smartphone é muito grande na maioria das pessoas, o ideal é usá-lo cada vez menos para gerar o mínimo de ansiedade pela falta do item durante a rotina”, salienta.
                                </span></p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO TEXTO MOTIVADOR 1-->

         <!--ABERTURA SESSÃO TEXTO MOTIVADOR 2-->
         <div class="container box mt-3">
                <article id="motivador-2">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Texto motivador 2</h1>

                            <div class="text-left">
                               <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao">
                               Uma pesquisa publicada pela Digital Turbine mostrou que 20% dos brasileiros não ficam mais de 30 minutos longe do celular e, de acordo com levantamento do Google, 73% da população brasileira não sai de casa sem seus dispositivos. [...] O estudo da Digital Turbine também apontou que 92% dos brasileiros fazem compras pelo celular e, desse percentual, 30% passou a comprar ainda mais pelo aparelho móvel após o início da pandemia.
                                </span></p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO TEXTO MOTIVADOR 2-->

         <!--ABERTURA SESSÃO TEXTO MOTIVADOR 3-->
         <div class="container box mt-3">
                <article id="motivador-3">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Texto motivador 3</h1>

                            <div class="text-left">
                               <p class="poppins-regular d-block mb-2"><span class="conclusao-redacao">
                               [...] Levantamento da Universidade Federal do Espírito Santo (Ufes) com mais de 2 mil adolescentes mostra que 25,3% são dependentes moderados ou graves de internet. "Como a amostra pesquisada é grande, é um estudo representativo da realidade dos centros urbanizados brasileiros", ressalta Hermano Tavares, coordenador do Ambulatório Integrado dos Transtornos do Impulso do IPq, que conta com um grupo de tratamento para dependência tecnológica. O estudo foi feito com jovens de 15 a 19 anos de escolas públicas e privadas da região metropolitana de Vitória. Eles responderam a um questionário internacionalmente utilizado para verificar o vício digital, o Teste de Dependência de Internet (ou Internet Addiction Test, em sua versão original, em inglês). Mais do que medir o tempo de uso das redes, a avaliação tem como objetivo verificar como o acesso à internet impacta na rotina, emoções e relacionamentos dos usuários.
                                </span></p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO TEXTO MOTIVADOR 3-->

         <!--ABERTURA SESSÃO VER MAIS-->
         <div class="container box mt-3">
                <section id="ver-mais">
                    <div class="row d-flex p-2 justify-content-center">
                    
                        <div class="col-12 mt-2 text-center">
                            <h1 class="poppins-semibold">Entenda a estrutura</h1>
                            <p class="poppins-regular">Clique e confira redações modelo comentadas.</p>
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