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
    <title>Redamil - O narcisismo e a cultura das selfies</title>
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
                            <h1 class="poppins-semibold mb-3">O narcisismo e a cultura das selfies</h1>

                            <div class="text-left">
                                <div class="text-center">
                                    <p class="poppins-regular d-block mb-2"> Karina Rossi</p>
                                </div>
                                <p class="poppins-regular d-block mt-4 mb-2"> <span class="introducao-redacao">
                                    De acordo com a mitologia grega, Narciso, conhecido por sua beleza, ao ver-se refletido no lago, apaixona-se 
                                    por si mesmo. Desse modo, em busca desse amor impossível, ele se lançou na água e sucumbiu na própria 
                                    imagem. Analogamente, o culto à aparência de tal personagem assemelha-se, nos dias atuais, à cultura 
                                    das selfies – autorretratos – no espaço das redes sociais. Nesse contexto, deve-se levar em consideração a 
                                    influência da mídia e as consequências negativas trazidas por essa nova cultura.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Em primeiro plano, é indubitável que as redes sociais, promovidas pela internet, criam a chamada “Sociedade 
                                    do Espetáculo”. Isso se dá, pois, segundo o filósofo Guy Debord, a vida social contemporânea se reduz à 
                                    representação, ou seja, a vivência é mediada por imagens e se desfaz na presença objetiva do indivíduo. A 
                                    partir desse viés, infere-se que o espetáculo se torna mais atraente, uma vez que as pessoas podem ser 
                                    quem e o que elas quiserem na internet e, então, a grande exposição e a obsessão pelas selfies demonstram 
                                    a necessidade de fugir da realidade e viver o mundo das aparências.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="desenvolvimento-redacao">
                                    Além disso, outro ponto a ser considerado é a fragilidade das relações modernas. Segundo o sociólogo 
                                    Zygmunt Bauman, na obra “Amor Líquido”, a sociedade vive a fluidez das relações, cuja principal característica 
                                    é a efemeridade. Dessa forma, as selfies postadas, nas redes sociais, não traduzem apenas a intenção de se 
                                    expor, mas, sim, a busca por elogios e por reconhecimentos, bem como a tentativa de estabelecer relações 
                                    interpessoais. Consequentemente, tal situação pode causar dependência e também distúrbios emocionais, 
                                    aumentando a sensação de solidão e baixa autoestima.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"> <span class="conclusao-redacao">
                                    Por tudo isso, torna-se imprescindível agir para modificar a atual cultura de selfies. Portanto, cumpre ao 
                                    Governo Federal promover, no ensino de base, palestras com profissionais da área, como psicólogos, a fim de 
                                    evidenciar, aos discentes, os malefícios advindos da superexposição à internet, tornando-os cidadãos críticos, 
                                    conforme a proposta do educador Paulo Freire, na obra “Pedagogia do Oprimido”, em que defende a educação 
                                    consciente. Assim, as pessoas conseguirão, de fato, desconstruir tal cultura narcisista
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
                                    Temos um tema um pouco mais subjetivo dos que os usualmente 
                                    cobrados pelo Enem, mas igualmente relevante em suas discussões, que tangem a exposição 
                                    excessiva nas redes e a os limites ao uso da internet. A aluna optou por uma tese clara e 
                                    precisa, que anuncia exatamente o projeto textual a ser desdobrado: a influência causada 
                                    pela mídia e as consequências negativas da cultura das selfies são apresentados no primeiro 
                                    parágrafo e discutidos ao longo do texto.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    A redação tem diversos repertórios: logo na introdução, a contextualização é feita com a história 
                                    de Narciso, personagem da mitologia grega. Na argumentação, a autora defende que a internet 
                                    condiciona o comportamento do usuário, levando-o a desejar postar cada vez mais, embasando
                                    se nas reflexões do filósofo Guy Debord. Em seguida, ela relaciona as selfies frequentes à busca 
                                    por relações sociais a partir dos conceitos do pensador Zygmunt Bauman. No último parágrafo, 
                                    ela ainda apresenta uma ideia do educador Paulo Freire, articulada à intervenção.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    No último parágrafo, os dois problemas são resolvidos por uma só intervenção, com os cinco 
                                    elementos claros e seis detalhamentos (“no ensino de base”, “como psicólogos”, “tornando
                                    os cidadãos críticos”, “conforme a proposta do educador Paulo Freire”, “na obra “Pedagogia 
                                    do Oprimido”,” “em que defende a educação consciente”). Lembre-se de que apenas um é 
                                    necessário, mas um número maior também não irá te atrapalhar.
                                </p>

                                <p class="poppins-regular d-block mb-2">
                                    Registro, gramática e ortografia foram empregados adequadamente e não há repetições viciosas, 
                                    evitadas mais pela organização dos parágrafos do que pelo emprego de itens de retomada.
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