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
    <title>Redamil - O papel da literatura na formação de valores da sociedade</title>
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
                            <h1 class="poppins-semibold mb-3">O papel da literatura na formação de valores da sociedade</h1>

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
                               Sempre pensei que fosse sábio desconfiar de quem não lê literatura. Ler ou não ler romances é para mim um critério. Quer saber se tal político merece seu voto? Verifique se ele lê literatura. Quer escolher um psicanalista ou um psicoterapeuta? Mesma sugestão. E, cuidado, o hábito de ler, em geral, pode ser melhor do que o de não ler, mas não me basta: o critério que vale para mim é ler especificamente literatura − ficção literária.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                                Você dirá que estou apenas exigindo dos outros que eles sejam parecidos comigo. E eu teria de concordar, salvo que acabo de aprender que minha confiança nos leitores de ficção literária é justificada. Algo que eu acreditava intuitivamente foi confirmado em pesquisa que acaba de ser publicada pela revista Science, “Reading literary fiction improves theory of mind” [Ler ficção literária melhora a teoria da mente], de David C. Kidd e Emanuele Castano.
                                </span></p>

                                <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                                Kidd e Castano aplicaram esses testes em diferentes grupos, criados a partir de uma amostra homogênea: 1) um grupo que acabava de ler trechos de ficção literária, 2) um grupo que acabava de ler trechos de não ficção, 3) um grupo que acabava de ler trechos de ficção popular, 4) um grupo que não lera nada. Conclusão: os leitores de ficção literária enxergam melhor a complexidade do outro e, com isso, podem aumentar sua empatia e seu respeito pela diferença de seus semelhantes. Com um pouco de otimismo, seria possível apostar que ler literatura seja um jeito de se precaver contra sociopatia e psicopatia.
                                </span></p>
                                
                                <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                                A pesquisa mede o efeito imediato da leitura de trechos literários. Não sabemos se existem efeitos cumulativos da leitura passada: o que importa não é se você leu, mas se está lendo. A pesquisa constata também que a ficção popular não tem o mesmo efeito da literária. A diferença é explicada assim: a leitura de ficção literária nos mobiliza para entender a experiência das personagens. Segundo os pesquisadores, “contrariamente à ficção literária, a ficção popular tende a retratar o mundo e as personagens como internamente consistentes e previsíveis. Ela pode confirmar as expectativas do leitor em vez de promover o trabalho de sua teoria da mente”.
                                </span></p>
                                <p class="poppins-regular d-block mb-2"><span class="introducao-redacao">
                                Na próxima vez em que eu for chamado a sabatinar um candidato a um emprego, não me esquecerei de perguntar: qual é o romance que você está lendo?
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
                               Podemos dizer que a literatura é o sonho acordado das civilizações. Portanto, assim como não é possível haver equilíbrio psíquico sem o sonho durante o sono, talvez não haja equilíbrio social sem a literatura. Deste modo, ela é fator indispensável de humanização e, sendo assim, confirma o homem na sua humanidade, inclusive porque atua em grande parte no subconsciente e no inconsciente.
                                </span></p>

                               <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao">
                               Cada sociedade cria as suas manifestações ficcionais, poéticas e dramáticas de acordo com os seus impulsos, as suas crenças, os seus sentimentos, as suas normas, a fim de fortalecer em cada um a presença e atuação deles. Por isso é que nas nossas sociedades a literatura tem sido um instrumento poderoso de instrução e educação, entrando nos currículos, sendo proposta a cada um como equipamento intelectual e afetivo.
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