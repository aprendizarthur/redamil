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
    <title>Redamil - Tecnologia e saúde mental: rivais ou aliadas?</title>
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
                                <span class="legenda mr-1" style="background-color: #e9efa7"></span> <span class="poppins-regular mr-3">Texto motivador 1</span> <span class="legenda mr-1" style="background-color: #b2edf9"></span> <span class="poppins-regular mr-3">Texto motivador 2</span>
                            </div>

                            <!--LEGENDA MOBILE-->
                            <div class="row d-flex justify-content-center">
                                <div class="d-md-none col-12 mb-1 d-flex justify-content-center">
                                    <span class="legenda mr-1" style="background-color: #e9efa7"></span> <span class="poppins-regular mr-3">Texto motivador 1</span>
                                </div>
                                <div class="d-md-none col-12 my-1 d-flex justify-content-center">
                                    <span class="legenda mr-1" style="background-color: #b2edf9"></span> <span class="poppins-regular mr-3">Texto motivador 2</span>
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
                            <h1 class="poppins-semibold mb-3">Tecnologia e saúde mental: rivais ou aliadas?</h1>

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
                               A internet e as tecnologias estão cada vez mais presentes na nossa vida e já não há dúvidas de que esses recursos modificam o comportamento das pessoas.
                                </span></p>

                               <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                               Ainda que proporcionem inúmeras facilidades, alguns especialistas ressaltam o impacto emocional e social gerado por elas. Hoje, por exemplo, sabe-se que o uso das redes sociais exige atenção, pois elas interferem diretamente nos quadros de depressão e ansiedade dos usuários.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                                Assim como o tipo de conteúdo consumido pode influenciar na saúde mental das pessoas, o tempo dedicado às telas também tem forte impacto na rotina, no humor, no ciclo do sono, no comportamento alimentar e nos relacionamentos.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                                Conforme explica o psicólogo da Unimed VTRP, Luis Fernando da Veiga, essas alterações emocionais acontecem devido aos marcadores socioculturais que instituem padrões ideais de beleza, comportamento e felicidade. “Eles fomentam a sensação de despertencimento, desvalor e desamparo. Esses atravessamentos podem somar a quadros de depressão, estresse, ansiedade e condutas autoagressivas e autolesivas”, afirma.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                                Mas é importante ressaltar que o uso das tecnologias e redes sociais não é o único fator que desencadeia os transtornos mentais, afinal, as doenças são diagnosticadas como multicausais. “Ou seja, é um conjunto de fatores que fomentam os quadros clínicos”, esclarece o psicólogo.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                                Pesquisas mostram que o uso das telas pode alterar o funcionamento do cérebro, principalmente no que se refere aos neurotransmissores do bem-estar. As tecnologias, quando em excesso, potencializam esse funcionamento de uma maneira não saudável e, inclusive, causam fenômenos de dependência.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                                “Devemos considerar alguns níveis de dependência com o sistema de recompensa cerebral, principalmente abarcando as moléculas de dopamina, uma das responsáveis pela motivação e pelo prazer”, alerta da Veiga.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                                Hoje já se sabe que o uso excessivo de telas dificulta a concentração, o raciocínio e a memória, o que implica no pensamento crítico, na criatividade, aprendizagem e comunicação. Por isso, saber dosar o tempo conectado é fundamental, principalmente para as crianças e adolescentes.
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
                               O olhar sobre o uso abusivo das tecnologias como smartphones, games e internet ganha novos contornos à medida em que a sociedade se percebe incapaz de se “desconectar”. No debate “O preço da conectividade | Estamos viciados?”, organizado pelo UM BRASIL em parceria com a revista Problemas Brasileiros (PB) e o Centro Ruth Cardoso (CRC), o psiquiatra e diretor técnico da Clínica Greenwood, Cirilo Liberatori Tissot, e o psicólogo com mais de 30 anos de experiência Cristiano Nabuco traçam um paralelo do contato indiscriminado com a tecnologia e outras dependências, como o alcoolismo.
                                </span></p>

                               <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao">
                               “A grande preocupação é que estamos praticamente vivendo um problema de saúde pública, mas ela entrou pela porta dos fundos, mascarada dentro de uma perspectiva de entretenimento, as pessoas ainda não se deram conta da gravidade. É um processo que ativa os circuitos dopaminérgicos, é um vício, uma dependência como outra qualquer”, observa Nabuco, na conversa mediada por Thais Herédia.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao">
                                Para Nabuco, essa dinâmica – na qual é preciso ter sempre acesso a mais informação e por mais tempo – compromete o funcionamento do nosso cérebro e incapacita o indivíduo de fazer associações mais profundas. O psicólogo destaca ainda que o imaginário comum de que o uso constante da internet poderia tornar a humanidade mais inteligente não se sustenta em razão do resultado de recentes pesquisas.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao">
                                O estímulo das redes sociais, por exemplo, mantém o usuário conectado o máximo de tempo possível na espera por likes, espécie de bônus que a pessoa adquire na internet. Esse método de reforço intermitente é igual ao encontrado na base das dependências do jogo patológico e atrai de forma fácil crianças e adolescentes, que ainda não têm condições biológicas de lidar com esse mundo virtual de forma saudável. “O processo de maturação cerebral só vai ser finalizado após os 21 anos. Então, o jovem não tem a estrutura totalmente finalizada para poder exercer esse controle”, esclarece Nabuco.
                                </span></p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO TEXTO MOTIVADOR 2-->

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