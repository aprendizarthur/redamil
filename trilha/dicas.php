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
    <title>Redamil - Dicas</title>
    <link rel="icon" type="image/x-icon" href="../images/assets/icon.ico">
    <meta name="description" content="Dicas práticas para a redação do ENEM: melhore sua escrita, estrutura e argumentos para conquistar a nota máxima!">
    <meta name="theme-color" content="#90E0EF">
    
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
        <!--ABERTURA SESSÃO CABECALHO-->
            <div class="container box">
                <section id="cabecalho-sessão">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <div class="caixa-etapa p-5" style="background-color: #90E0EF">
                                <h2 class="poppins-semibold text-light">Dicas</h2></a> 
                                <i class="fa-solid fa-down-long fa-lg" style="color: #ffffff;"></i>  
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
        <!--FECHAMENTO SESSÃO CABECALHO-->

        <!--ABERTURA SESSÃO SUMARIO-->
            <div class="container box-sumario mt-3">
                <section id="sumario-sessao">
                    <div class="row d-flex p-3 justify-content-center">
                        <div class="col-12 col-md-6 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Sumário <a href="#faq"><i class="fa-solid fa-2xs fa-circle-question ml-1" style="color: #d7d6d6; position: relative; top: 2px"></i></a></h1>

                            <div class="text-left">
                                <a class="poppins-regular mb-2 d-block" href="#sumario-sessao">1. Resumo da etapa</a>
                                <a class="poppins-regular mb-2 d-block" href="#2">2. Importância de um Repertório Amplo</a>
                                <a class="poppins-regular mb-2 d-block" href="#3">3. Benefícios de Ler e Analisar Redações Nota 1000</a>
                                <a class="poppins-regular mb-2 d-block" href="#4">4. Treino Semanal com Temas de Várias Áreas</a>
                                <a class="poppins-regular mb-2 d-block" href="#5">5. Leitura Semanal para Treinar Vocabulário</a>
                                <a class="poppins-regular mb-2 d-block" href="#6">6. Dúvidas</a>
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
         <!--FECHAMENTO SESSÃO SUMÁRIO-->

         <!--ABERTURA SESSÃO 1-->
         <div class="container box mt-3">
                <article id="1">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Resumo da etapa</h1>

                            <div class="text-left">
                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao"><strong>Esta etapa explora em profundidade algumas dicas, além de adicionar insights adicionais, organizados de forma clara para auxiliar os estudantes.</strong></span></p>
                                <p class="poppins-regular d-block mb-2">As informações são baseadas em pesquisas e práticas recomendadas para o exame, com foco em estratégias práticas e acessíveis.</p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO 1-->

         <!--ABERTURA SESSÃO 2-->
         <div class="container box mt-3">
                <article id="2">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Importância de um Repertório Amplo</h1>

                            <div class="text-left">
                                <p class="poppins-regular d-block mb-2">Ter um repertório amplo é fundamental para o sucesso na redação do ENEM, pois permite ao estudante trazer informações relevantes e exemplos concretos para sustentar seus argumentos. </p>
                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao"><strong>Um repertório rico facilita a conexão entre ideias e a construção de um texto bem fundamentado, essencial para atingir uma nota alta.</strong></span></p>
                                <p class="poppins-regular d-block mb-2">Para construir esse repertório, sugere-se:</p>

                                <ul class="poppins-regular">
                                    <li class="mb-2">Ler jornais e revistas, como portais de notícias, para se manter atualizado.</li>
                                    <li class="mb-2">Assistir a documentários e programas educativos que abordem temas diversos.</li>
                                    <li class="mb-2">Participar de discussões em grupos de estudo ou com amigos, explorando diferentes perspectivas.</li>
                                </ul>

                                <p class="poppins-regular d-block mb-2">Essa abordagem não apenas enriquece o conteúdo do texto, mas também ajuda o estudante a se sentir mais confiante ao lidar com temas inesperados.</p>
                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao"><strong>Por exemplo, um tema sobre mudanças climáticas pode ser mais bem abordado se o estudante já tiver lido sobre acordos internacionais ou impactos ambientais.</strong></span></p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO 2-->

         <!--ABERTURA SESSÃO 3-->
         <div class="container box mt-3">
                <article id="3">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Benefícios de Ler e Analisar Redações Nota 1000</h1>

                            <div class="text-left">
                                <p class="poppins-regular d-block mb-2">Ler redações que receberam nota 1000 é uma estratégia altamente eficaz para entender os padrões esperados pelos avaliadores do ENEM. </p>
                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao"><strong>Essas redações exemplificam como estruturar o texto de forma clara, usar linguagem sofisticada e apresentar argumentos coerentes.</strong></span></p>
                                <p class="poppins-regular d-block mb-2">Analisar sua estrutura ajuda a identificar:</p>

                                <ul class="poppins-regular">
                                    <li class="mb-2">Como a introdução contextualiza o tema e apresenta a tese.</li>
                                    <li class="mb-2">Como o desenvolvimento organiza os argumentos, geralmente em dois ou três parágrafos, com exemplos e evidências.</li>
                                    <li class="mb-2">Como a conclusão reforça a tese e propõe uma intervenção, quando aplicável.</li>
                                </ul>

                                <p class="poppins-regular d-block mb-2">Ao estudar essas redações, o estudante pode observar o uso de conectivos, a variedade vocabular e a ausência de erros gramaticais, que são critérios de avaliação. </p>
                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao"><strong>Um aspecto interessante é que ao fazer uma análise, o estudante pode notar padrões, como o uso de dados estatísticos ou referências históricas, que podem ser incorporados em seus próprios textos.</strong></span></p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO 3-->

         <!--ABERTURA SESSÃO 4-->
         <div class="container box mt-3">
                <article id="4">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Treino Semanal com Temas de Várias Áreas</h1>

                            <div class="text-left">
                                <p class="poppins-regular d-block mb-2">Praticar a redação com temas de diversas áreas é essencial para se preparar para a imprevisibilidade do ENEM. </p>
                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao"><strong>O exame pode abordar questões sociais, ambientais, políticas, científicas ou culturais, e treinar semanalmente com esses temas ajuda a desenvolver flexibilidade e habilidade argumentativa.</strong></span></p>
                                <p class="poppins-regular d-block mb-2">Sugere-se:</p>

                                <ul class="poppins-regular">
                                    <li class="mb-2">Escolher temas variados, que você pode encontrar na aba de temas aqui em nosso site.</li>
                                    <li class="mb-2">Escrever ensaios completos, respeitando o tempo limite, para simular a prova.</li>
                                    <li class="mb-2">Revisar os textos escritos, identificando pontos fortes e fracos, como coesão, coerência ou desenvolvimento de ideias.</li>
                                </ul>

                                <p class="poppins-regular d-block mb-2">Essa prática semanal não apenas melhora a escrita, mas também ajuda o estudante a se acostumar com a pressão do tempo, um fator crítico no dia da prova.</p>
                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao"><strong>Além disso, treinar com temas diferentes expande o repertório, criando um ciclo virtuoso de aprendizado.</strong></span></p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO 4-->

         <!--ABERTURA SESSÃO 5-->
         <div class="container box mt-3">
                <article id="5">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Leitura Semanal para Treinar Vocabulário</h1>

                            <div class="text-left">
                                <p class="poppins-regular d-block mb-2">A leitura semanal de textos desafiadores é uma ferramenta poderosa para expandir o vocabulário e melhorar a expressão escrita. </p>
                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao"><strong>Um vocabulário rico permite ao estudante articular ideias de forma clara, precisa e sofisticada, o que é valorizado na correção do ENEM.</strong></span></p>
                                <p class="poppins-regular d-block mb-2">Recomenda-se:</p>

                                <ul class="poppins-regular">
                                    <li class="mb-2">Ler livros, artigos científicos, ensaios ou textos literários que estejam acima do nível atual de leitura, para aprender novas palavras.</li>
                                    <li class="mb-2">Prestar atenção ao contexto em que as palavras são usadas, facilitando a retenção e o uso futuro.</li>
                                    <li class="mb-2">Manter um caderno de vocabulário, anotando palavras novas e suas definições, para revisão periódica.</li>
                                </ul>

                                <p class="poppins-regular d-block mb-2">Essa prática semanal não apenas enriquece o idioma, mas também expõe o estudante a diferentes estilos de escrita, o que pode inspirar sua própria redação. </p>
                                <p class="poppins-regular d-block mb-2"><span class="desenvolvimento-redacao"><strong>Por exemplo, ler um artigo sobre economia pode introduzir termos como "sustentabilidade fiscal", úteis em temas relacionados a políticas públicas.</strong></span></p>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO 5-->

         <!--ABERTURA SESSÃO DUVIDAS-->
         <div class="container box mt-3">
                <article id="faq">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Dúvidas</h1>

                            <details class="mb-2">
                                <summary class="poppins-semibold p-3 text-left">Como posso praticar para a redação do ENEM?</summary>
                                <p class="poppins-regular text-dark bg-light text-left p-3">
                                Você pode praticar para a redação do ENEM usando nosso site! Na aba "Temas", disponibilizamos gratuitamente diversos temas com textos motivadores para você treinar, simulando a prova real.
                                <br>  <br>
                                Além disso, oferecemos repertórios de citações para enriquecer seus argumentos e uma lista de elementos de coesão para melhorar sua gramática e tornar o texto mais fluido. Acesse agora e comece a se preparar!
                                </p>
                            </details>

                            <details class="my-2">
                                <summary class="poppins-semibold p-3 text-left">O que acontece se eu escrever uma redação com muitos erros de português?</summary>
                                <p class="poppins-regular text-dark bg-light text-left p-3">
                                Escrever uma redação com muitos erros de português pode impactar diretamente sua nota na Competência 1, que avalia o domínio da norma culta.
                                <br><br>
                                Para evitar isso, é essencial praticar redação regularmente, estudar gramática básica e revisar seu texto antes de finalizar. Um bom domínio da língua portuguesa é a base para uma redação de sucesso no Enem.
                                </p>
                            </details>

                            <details class="my-2">
                                <summary class="poppins-semibold p-3 text-left">Posso usar exemplos pessoais na redação do ENEM?</summary>
                                <p class="poppins-regular text-dark bg-light text-left p-3">
                                Não é recomendado. O ENEM valoriza argumentos baseados em fatos, dados ou referências culturais e históricas, em vez de experiências pessoais, para manter a objetividade.
                                </p>
                            </details>

                            <details class="my-2">
                                <summary class="poppins-semibold p-3 text-left">Como sei se estou fugindo do tema da redação?</summary>
                                <p class="poppins-regular text-dark bg-light text-left p-3">
                                Fugir do tema é um dos maiores riscos na redação do Enem e pode zerar sua nota, especialmente na Competência 2. Para evitar isso, leia atentamente a proposta e os textos de apoio, identificando a ideia central.
                                <br><br>
                                Antes de começar, faça um rascunho com sua tese e verifique se ela responde diretamente ao que foi pedido.
                                </p>
                            </details>

                            <details class="my-2">
                                <summary class="poppins-semibold p-3 text-left">Como evitar erros gramaticais na redação do ENEM?</summary>
                                <p class="poppins-regular text-dark bg-light text-left p-3">
                                Revise regras de pontuação, concordância e acentuação antes da prova. Escreva com calma e reserve tempo para reler o texto, corrigindo possíveis deslizes.
                                </p>
                            </details>

                            <details class="my-2">
                                <summary class="poppins-semibold p-3 text-left">É obrigatório citar autores na redação do ENEM?</summary>
                                <p class="poppins-regular text-dark bg-light text-left p-3">
                                Não é obrigatório, mas citar autores ou obras relevantes (como filósofos ou livros conhecidos) enriquece o texto e demonstra repertório cultural, o que pode aumentar sua nota.
                                </p>
                            </details>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO DUVIDAS-->

         <!--ABERTURA SESSÃO PROXIMA ETAPA-->
         <div class="container box mt-3">
                <section id="cabecalho-sessão">
                    <div class="row d-flex p-2 justify-content-center">
                    
                        <div class="col-12 mt-2 text-center">
                            <h1 class="poppins-semibold">Próximo conteudo</h1>
                            <p class="poppins-regular">Clique e avançe para o conteúdo sobre argumentos.</p>
                        </div>

                        <div class="col-12 mb-2 text-center aumentar">
                            <div class="caixa-etapa p-5" style="background-color: #111D13">
                                <a href="../index.php#argumentos" class="text-light"><h2 class="poppins-semibold">Argumentos</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right" style="color: #ffffff; "></i>    
                            </div>
                        </div>

                    </div> 
                </section>
            </div>
        <!--FECHAMENTO SESSÃO PROXIMA ETAPA-->
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