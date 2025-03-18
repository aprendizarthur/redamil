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
    <title>Redamil - Adoção: como garantir a todas as crianças o direito a uma família no Brasil</title>
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
                            <h1 class="poppins-semibold mb-3">Adoção: como garantir a todas as crianças o direito a uma família no Brasil</h1>

                            <div class="text-left">
                                <div class="text-center">
                                    <p class="poppins-regular d-block mb-2">Aline Andrade</p>
                                </div>
                                <p class="poppins-regular d-block mt-4 mb-2"> <span class="introducao-redacao">
                                    O filme “O Contador de Histórias” retrata a vida de Roberto Carlos Ramos, um menino que durante o Regime Militar 
                                    brasileiro foi levado até a FEBEM, instituição de recolhimento de menores, onde passou por terríveis situações 
                                    devido aos seus comportamentos incomuns; porém, após ter sido adotado por uma pedagoga francesa, teve 
                                    seu destino alterado e hoje é um ícone que inspira a luta pela garantia de uma família a todas as crianças. Nesse 
                                    quesito, o Brasil enfrenta diversas dificuldades que impedem garantir o sucesso das campanhas adotivas. A partir 
                                    disso, cotidianamente, a nação convive entre dois polos: opções por particularidades nas crianças vindas dos 
                                    posicionamentos dos pais e a carência de ações do Estado que garantam a eficiência do sistema de adoção. 
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Em primeira análise, é importante ressaltar que o fato das opções por características específicas nos adotados 
                                    contribui diretamente para dificultar o objetivo de cada um deles possuir um lar. Esse cenário é comprovado pelo 
                                    cenário reportado pela Folha de São Paulo, que afirma existir mais pessoas interessadas em adotar do que crianças 
                                    em abrigos. Dessa forma, pode-se perceber que grande parte dessa realidade ainda persiste, visto que os possíveis 
                                    pais preferem, na maioria das vezes, um filho ou filha de pele branca e com pouca idade. Contudo, 81% dos abrigados 
                                    têm mais de 5 anos e, consequentemente, acabam passando toda a sua infância e adolescência sem a presença de 
                                    uma estrutura familiar.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Ademais, outro empecilho que fragiliza o sistema de adoção brasileiro é a falta de medidas eficazes, vindas do 
                                    governo, que visam cumprir seu dever de garantir a proteção e a qualidade dos mais novos. Com isso, o país convive 
                                    com uma esfera de problemas que são resultados desse posicionamento. A ausência de medidas preventivas com 
                                    os filhos de pais que estão em tratamento devido à dependência ou detidos acarreta muito sofrimento e traumas 
                                    para eles. Desse modo, fica claro que essa parte da sociedade precisa urgentemente ser alvo de prioridade pelas 
                                    autoridades, que devem sair da posição de negligentes e buscar evitar que tais problemas aconteçam, já que a vida 
                                    de várias pessoas pode tomar diferentes rotas através do posicionamento dos governantes.obrevivência dos costumes.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="conclusao-redacao">                    
                                    Portanto, visando promover novas oportunidades para os abrigados, a exemplo de Roberto Carlos Ramos, deve-se 
                                    focar em resolver esses impasses que hoje o país enfrenta. Para tanto, o governo deve realizar projetos, inspirados 
                                    nas campanhas adotivas do Paraná, onde esse sistema alcançou grande sucesso, por meio de palestras sobre adoção 
                                    tardia para os futuros pais, além de tomar uma postura preventiva e mais cautelosa, visando planejamento e uma 
                                    estrutura suficiente para proporcionar uma vida digna tanto para os abandonados, desde recém-nascidos, quanto 
                                    para os filhos de pais sem condições de tutoria em determinado momento. Assim, o Brasil estará cumprindo com sua 
                                    responsabilidade de zelar por todos os seus cidadãos.
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
                                <p class="poppins-semibold d-block mb-2">Introdução</p>
                                <p class="poppins-regular d-block mb-2">
                                    Temos um projeto claramente explícito no primeiro parágrafo: há pouca 
                                    adesão da população ao ato por “opções por particularidades nas crianças” e “carência de ações do Estado”. 
                                    Essas duas linhas de argumentação são iniciadas pela construção “a nação convive entre dois polos:”, de 
                                    modo que fica evidente ao leitor o caminho textual a ser percorrido, que é satisfatoriamente desdobrado 
                                    nos parágrafos subsequentes.
                                </p>

                                <p class="poppins-semibold d-block mb-2">Desenvolvimento</p>
                                <p class="poppins-regular d-block mb-2">
                                    Em termos de argumentação, a aluna emprega apenas dois repertórios socioculturais: a história de 
                                    Roberto Carlos Ramos na introdução e as medidas no Paraná na conclusão. Os dados apresentados no 
                                    segundo parágrafo, retirados da Folha de São Paulo, estavam presentes nos textos motivadores. Perceba 
                                    duas coisas importantes aqui: 1- você pode usar informações retiradas do material disponível na prova, 
                                    desde que não copie trechos e use suas próprias palavras; 2- mesmo tendo bem menos conhecimentos 
                                    de mundo este texto também recebe a nota máxima, pois somente um 
                                    repertório sociocultural é obrigatório no Enem. Assim, no segundo parágrafo, ela discute a preferência 
                                    dos adotantes a partir dos dados e, no terceiro, a falta de ações do Estado a partir de repertório pessoal
                                </p>

                                <p class="poppins-semibold d-block mb-2">Conclusão</p>
                                <p class="poppins-regular d-block mb-2">
                                    Na conclusão, há duas intervenções articuladas uma à outra (“realizar projetos” e “tomar uma postura 
                                    preventiva e mais cautelosa”) e presença dos cinco elementos fundamentais para uma proposta 
                                    completa, com, inclusive, vários detalhamentos. A redação termina com referência à introdução, fechando 
                                    perfeitamente a linha argumentativa.
                                </p>

                                <p class="poppins-semibold d-block mb-2">Gramática</p>
                                <p class="poppins-regular d-block mb-2">
                                    Norma culta e coesão textual estão excelentes, com emprego de conectores diversificados ao longo do 
                                    texto (“porém”, “a partir disso”, “em primeira análise”, “dessa forma”, “ademais”, “com isso”, “desse modo”, 
                                    “já que”, “portanto”, “para tanto” e “assim”). Houve uso muito produtivo de recursos para evitar a repetição: 
                                    como “adoção” não possui um sinônimo perfeito, foram empregadas expressões como “garantia de uma 
                                    família”, “possuir um lar” e “promover novas oportunidades para os abrigados”, facultando a ausência de 
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