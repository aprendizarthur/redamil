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
    <title>Redamil - Problemas das grandes cidades brasileiras</title>
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
                            <h1 class="poppins-semibold mb-3">Problemas das grandes cidades brasileiras</h1>

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
                               Desde a extinção do BNH, em 1986, até 2008, a habitação social permaneceu relegada a uma posição subalterna na agenda das políticas sociais. Enquanto isso, os problemas habitacionais se agravaram. A Fundação João Pinheiro estimou, no ano de 2088, o déficit habitacional brasileiro em cerca de 5,5 milhões de unidades, sendo cerca de 1,5 milhões nas regiões metropolitanas. Desses totais, 90% correspondem a famílias em situação de pobreza, com renda familiar na faixa de 0 a 3 salários mínimos.
                                </span></p>

                               <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                               Mas o déficit habitacional é apenas uma parte dos problemas, porque o estoque de domicílios existente apresenta graves situações de precariedade. As estimativas do IBGE para os domicílios em áreas de favelas montam a um total de 3,2 milhões. Esse fenômeno, mais do que o déficit, tem uma concentração fortíssima nas metrópoles, com as regiões do Rio de Janeiro, São Paulo e Belo Horizonte, sozinhas, agregando cerca de 1,2 milhões de domicílios, respondendo por 37,5% do total.
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
                               Sete em cada dez brasileiros concordam que a baixa qualidade dos serviços públicos se deve mais à má gestão dos recursos do que à falta deles. Pesquisa realizada pela Confederação Nacional da Indústria (CNI) mostra que 81% dos brasileiros acreditam que o governo já arrecada muito e não precisa aumentar os impostos para melhorar os serviços públicos. Para 84% das pessoas os impostos no Brasil são elevados ou muito elevados e 73% são contra o retorno da Contribuição Provisória sobre Movimentação Financeira (CPMF). Para 80% dos entrevistados, o governo deve reduzir as despesas atuais para diminuir os déficits orçamentários. Dos que acham que deve manter os gastos, a primeira opção para estabilizar as contas públicas deve ser a privatização de bens.
                                </span></p>

                               <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao">
                               "A população não quer pagar mais impostos e continuar tendo serviços de má qualidade. É preciso aumentar a eficiência do uso do dinheiro público, além de promover um debate que informe à sociedade a situação das contas do governo e explique a necessidade de reformas urgentes, como a da Previdência", afirma o presidente da CNI, Robson Braga de Andrade.
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
                            <p class="poppins-regular">Clique e confira redações nota 1000 comentadas.</p>
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