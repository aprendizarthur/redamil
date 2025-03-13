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
    <title>Redamil - A necessidade do diálogo para a construção de uma sociedade justa e igualitária</title>
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
                            <h1 class="poppins-semibold mb-3">A necessidade do diálogo para a construção de uma sociedade justa e igualitária</h1>

                            <div class="text-left">
                                <div class="text-center">
                                    <p class="poppins-regular d-block mb-2">Samuel Magalhães</p>
                                </div>
                                <p class="poppins-regular d-block mt-4 mb-2"> <span class="introducao-redacao">
                                    O governo Vargas buscou, por meio do rádio, exaltar aspectos culturais brasileiros para desenvolver o 
                                    sentimento patriótico na população e promover unificação rumo ao crescimento nacional. Tal projeto mostrou
                                    se bem-sucedido na medida em que, até a contemporaneidade, o samba e o futebol divulgados na época 
                                    mantêm-se como elementos simbólicos da cultura do país. Esse patriotismo, no entanto, encontra-se 
                                    enfraquecido na atualidade, devido, principalmente, a uma formação histórica que dificulta a caracterização 
                                    identitária e à corrupção amplamente generalizada.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    À primeira vista, é válido ressaltar as diferentes origens que formam o Brasil. Segundo o educador Darcy 
                                    Ribeiro, em seu livro “O Povo Brasileiro”, os nascidos no país descendem de três diferentes matrizes étnicas: 
                                    portuguesa, africana e indígena. Sob esse viés, denota-se a pluralidade cultural que, frequentemente, 
                                    apresenta dificuldade de convivência. Isso acontece, principalmente, por causa da imposição de uma cultura 
                                    em detrimento das outras, o que, consequentemente, prejudica a concretização de uma noção abrangente de 
                                    identidade e pertencimento à pátria.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Além disso, a corrupção generalizada em todas as esferas da sociedade contribui negativamente para a 
                                    tentativa de fortalecimento do patriotismo. Nesse sentido, o sociólogo Sérgio Buarque de Holanda define, em 
                                    “Raízes do Brasil”, o conceito de homem cordial, conforme o qual o brasileiro utiliza intimidade inadequada 
                                    no que tange às relações com o poder público. Assim, o estigma do “jeitinho brasileiro” confirma-se 
                                    constantemente em virtude não só dos grandes casos de desvio de dinheiro, mas também devido a pequenos 
                                    atos cotidianos, como o desrespeito às filas nas instituições públicas. Essas ocorrências fazem com que boa 
                                    parcela dos cidadãos sinta vergonha da própria nacionalidade.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="conclusao-redacao">
                                    Diante do exposto, percebe-se a necessidade de superar os entraves que impedem a população de se 
                                    orgulhar do país. Portanto, cumpre à mídia, especialmente a televisiva, que possui intenso poder de 
                                    penetração nos lares nacionais, desenvolver o sentimento de pertencimento ao país, por meio de propagandas 
                                    que exaltem a diversidade cultural, para que a população reconheça a grandeza das especificações locais 
                                    que compõem o território. Ademais, cabe às escolas fomentar o respeito aos direitos individuais, por meio de 
                                    projetos, com participação dos pais, inspirados nas ideias da educação de Darcy Ribeiro, para que as crianças e 
                                    adolescentes cresçam conscientes e transformem a realidade de corrupção que envergonha o país.
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
                                    O projeto da discussão 
                                    sobre patriotismo consiste em argumentar que os entraves para desenvolver esse sentimento 
                                    são a fraca identificação do brasileiro com o país e a corrupção frequente. 
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    Para fundamentar suas ideias, o aluno recorre ao pensamento de Darcy Ribeiro no segundo parágrafo, argumentando que nossa identidade múltipla não tem 
                                    todas as suas facetas valorizadas, dificultando a identificação. No terceiro parágrafo, ele emprega 
                                    a ideia de “homem cordial”, do sociólogo Sérgio Buarque de Holanda, para defender que a falta 
                                    de ética da nação desestimula o patriotismo. Na introdução, foi usada uma alusão histórica ao 
                                    governo Vargas, então preocupado com a identidade nacional, para contextualizar a discussão.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    No último parágrafo, há duas intervenções completas que costuram perfeitamente os problemas 
                                    trabalhados ao longo do texto, envolvendo a mídia e a escola como agentes de transformação.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    A linguagem do texto é direta, precisa e bem articulada, sem erros de sintaxe, norma culta 
                                    ou registro. Os conectores foram adequadamente empregados ao longo do texto (como 
                                    “no entanto”, “à primeira vista”, “sob esse viés”, “consequentemente”, “além disso”, “assim”, 
                                    “portanto” e “ademais”) e houve diversidade de uso vocabular, sem repetições viciosas: 
                                    “patriotismo” foi referido como “sentimento patriótico”, “noção de identidade e pertencimento à 
                                    pátria”, “orgulhar-se do próprio país”.
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