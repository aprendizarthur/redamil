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
                                    <p class="poppins-regular d-block mb-2">Lara Vilela</p>
                                </div>
                                <p class="poppins-regular d-block mt-4 mb-2"> <span class="introducao-redacao">
                                    Na Grécia Antiga, a Filosofia surgiu como uma forma de questionamento acerca das explicações incoerentes 
                                    sobre a realidade. Nesse momento, pensadores como Sócrates e Aristóteles pautaram o diálogo como parte 
                                    fundamental da formação do cidadão racional – teorias consagradas e amplamente utilizadas até os dias 
                                    de hoje. No Brasil contemporâneo, porém, essas relações de reciprocidade mostram-se frágeis, quadro que 
                                    prejudica tanto o sistema educacional quanto o político-social e que precisa ser urgentemente revertido para 
                                    conferir bem-estar à população.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Em primeira análise, as escolas brasileiras pouco se comunicam com os alunos: a “educação bancária”, 
                                    caracterizada pelo educador e filósofo Paulo Freire como prejudicial aos estudantes, é a estratégia pedagógica 
                                    do país. Nela, os professores somente depositam os conhecimentos nos discentes, que não conseguem 
                                    dialogar sobre a realidade com os docentes e acabam não desenvolvendo pensamento crítico. Dessa maneira, 
                                    a função primordial da educação – que é a formação individual para a cidadania – fica comprometida, já que 
                                    a grande maioria aceita passivamente o sistema, desconhecendo, por exemplo, os direitos passíveis de 
                                    reivindicação constitucional. 
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Paralelamente, a comunicação interpessoal também é falha em território nacional. Prova disso foi a grande 
                                    polarização nas redes sociais durante as eleições, que teve como consequência a disseminação de muitos 
                                    discursos de ódio pelos indivíduos. Tal contexto representa a “razão instrumental”, empregada para manter 
                                    a sobreposição de uns sobre os outros. Todavia, isso é danoso para o ser humano e, de acordo com o 
                                    filósofo alemão Jürgen Habermas, a “razão comunicativa” é a ideal para as relações pessoais. Isso porque ela 
                                    emerge da ativa exposição de ideias e do diálogo entre as partes, resultando em consenso e minorando as 
                                    desavenças.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="conclusao-redacao">
                                    Depreende-se, portanto, que dialogar é essencial para a harmonia social. Por isso, é imprescindível que as 
                                    escolas, através do método defendido por Freire, estimulem a conversa entre aluno e professor – processo 
                                    que deve, inclusive, contar com aulas dinâmicas propagadoras de princípios constitucionais – a fim de 
                                    desenvolver senso crítico nos estudantes. Ademais, é importante que a mídia, através das redes sociais, 
                                    evidencie a necessidade de dialogar em vez de enfrentar. Assim, será possível seguir os filósofos gregos e 
                                    formar cidadãos equiparados e consonantes entre si.
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
                                    Comecemos observando o projeto que a aluna estabeleceu para a sua escrita. Diante do 
                                    tema, ela optou por discutir os problemas causados pela carência de diálogo em dois âmbitos 
                                    diferentes: educacional e político-social (final do primeiro parágrafo). Essas duas ideias são 
                                    satisfatoriamente desdobradas e desenvolvidas ao longo dos parágrafos argumentativos e 
                                    amarradas na conclusão.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    Para fundamentar seus argumentos, ela utilizou três repertórios diferentes: na introdução, 
                                    houve alusão histórica à ágora grega, espaço de discussões; para discutir a questão da escola, 
                                    a aluna mobilizou as ideias do educador Paulo Freire no segundo parágrafo; no terceiro, para 
                                    fundamentar a importância do diálogo na política e sociedade, ela utilizou o pensamento de 
                                    Habermas sobre a ação comunicativa.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    O último parágrafo do texto cumpre perfeitamente suas funções: ele retoma a discussão inicial 
                                    (fechando o texto, inclusive, com nova menção à ágora) e oferece uma intervenção completa¸ 
                                    com agente, ação, meio, detalhamento e efeito (lembre-se de que você só precisa escrever uma 
                                    proposta de intervenção, desde que ela possua os cinco elementos!).
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    Em termos de microestrutura, a redação apresenta variados conectores empregados em 
                                    diferentes momentos (como “porém”, “em primeira análise”, “dessa maneira”, “paralelamente”, 
                                    “todavia”, “portanto” e “ademais”) e consegue conduzir a temática sem recorrer a excessivas 
                                    repetições. O uso do vocabulário é formal e não apresenta inadequações.
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