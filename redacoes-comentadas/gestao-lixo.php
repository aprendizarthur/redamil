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
    <title>Redamil - Os desafios na gestão do lixo no Brasil contemporâneo</title>
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
                            <h1 class="poppins-semibold mb-3">Os desafios na gestão do lixo no Brasil contemporâneo</h1>

                            <div class="text-left">
                                <div class="text-center">
                                    <p class="poppins-regular d-block mb-2">Thaynara Siviero</p>
                                </div>
                                <p class="poppins-regular d-block mt-4 mb-2"> <span class="introducao-redacao">
                                    Em meados do século XX, a Terceira Revolução Industrial – emergida na Europa e difundida na América – proporcionou 
                                    avanços tecnológicos para a população em grande escala. Concomitantemente, fenômenos como a obsolescência 
                                    programada e a ascensão da mídia publicitária foram instaurados para manter a dinâmica capitalista vigente, o que 
                                    corroborou o aumento substancial do lixo. Desde então, urge a necessidade de superar os desafios da gestão de 
                                    resíduos no Brasil, sendo o consumismo e a defasagem nas estruturas de descarte os principais obstáculos para se 
                                    alcançar a sustentabilidade.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Em primeira instância, é correto enunciar que o consumo exacerbado da população brasileira, decorrente da globalização, 
                                    é o maior responsável pela grande produção de lixo do país. Tal cenário se apoia na ótica do pensador e escritor 
                                    francês Guy Debord, de que o capitalismo que impera na sociedade é agressivo, ou seja, preocupa-se em criar novas 
                                    necessidades aos indivíduos, e não suprir as existentes. Dessa forma, a prática do consumismo é fortemente estimulada 
                                    nos cidadãos, sendo a publicidade e a obsolescência programada – prática das empresas de reduzir a vida útil dos 
                                    produtos propositalmente – as estratégias mais utilizadas pelo sistema. Como consequência disso, o descarte de bens 
                                    duráveis torna-se inevitável, contrariando seus reais prazos de validade e avolumando resíduos no meio ambiente.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Outrossim, cabe apontar que o Brasil não investe em estruturas adequadas para o descarte sustentável de rejeitos. 
                                    Segundo dados do Instituto Brasileiro de Geografia e Estatística, menos de 50% dos municípios brasileiros têm 
                                    destinação correta do lixo. Isso significa que a maior parte dos materiais descartados vão para lixões, locais onde a 
                                    proliferação de animais peçonhentos, vetores de doenças e a produção do gás metano, oriundo da decomposição, são 
                                    evidentes, gerando impactos de saúde e ambientais, como o contágio da população vizinha por dengue e leptospirose 
                                    e o agravamento do aquecimento global. Em contrapartida, algumas cidades do Japão, como exibido no documentário 
                                    “Como esta cidade não produz lixo”, surpreendem com tecnologias capazes de tratar e reaproveitar toda a matéria dos 
                                    resíduos, mostrando como é possível alterar a relação do homem com a natureza, tornando-a mais positiva.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="conclusao-redacao">                    
                                Percebe-se, portanto, que é imprescindível criar formas de mitigar essa problemática. À vista disso, o Governo Federal 
                                deve investir em estruturas adequadas para o descarte de resíduos. Isso pode ser feito por meio da destinação de 
                                verbas significativas aos municípios, que permitam a construção de locais condizentes, que separem, reaproveitem e 
                                destinem corretamente cada material – assim como já é feito no Japão – com o intuito de atenuar as ações antrópicas 
                                no meio ambiente. Ademais, cabe à escola, como ferramenta de formação cidadã, trabalhar a relação do consumo e 
                                ecologia, através das disciplinas Sociologia e Biologia, a fim de tornar possível um cenário em que o capitalismo e a 
                                sustentabilidade caminhem harmoniosamente.
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
                                    A aluna construiu seu projeto em torno dos seguintes 
                                    problemas: o “consumismo” e a “defasagem nas estruturas de descarte”, explicitamente 
                                    expostos na tese. 
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    Há um volume significativo de repertórios que foram mobilizados nesta redação: logo na 
                                    introdução, a contextualização é feita pela alusão à Terceira Revolução Industrial, momento 
                                    de aumento do descarte de lixo. No segundo parágrafo, a autora cita o pensador Guy Debord 
                                    para falar dos efeitos do capitalismo de consumo e ainda 
                                    articula o conceito de obsolescência programada. No terceiro, há uma discussão sobre os 
                                    problemas causados pelo lixão que englobam saberes da área da Biologia e a alusão a um 
                                    documentário, “Como esta cidade não produz lixo”. Há, ainda, menção a dados do IBGE, 
                                    disponíveis nos textos motivadores da proposta.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    O parágrafo final possui duas intervenções, ambas completas. A primeira resolve, 
                                    especificamente, os problemas de coleta e separação do lixo (com diversos detalhamentos 
                                    articulados). A segunda aponta para uma solução de longo prazo, a educação ambiental.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    Vocabulário, registro e ortografia são muito bem empregados e há abundante uso de 
                                    conectores (“concomitantemente”, “desde então”, “em primeira instância”, “dessa forma”, “como 
                                    consequência”, “outrossim”, “em contrapartida”, “portanto”, “ademais”). A repetição não ocorre 
                                    de maneira viciosa, havendo sinônimos como “rejeitos” e “resíduos” para substituir lixo e uma 
                                    organização textual que permite a progressão da escrita sem recorrência constante às palavras
                                    chave do tema.
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