<?php 
//INCLUINDO ARQUIVO COM FUNCOES PHP
include('functions.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<!--META TAGS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--TÍTULO/ÍCONE/DESCRIÇÃO DA PÁGINA/COR TEMA NAVEGADOR-->
    <title>Redamil - Redações</title>
    <link rel="icon" type="image/x-icon" href="images/assets/icon.ico">
    <meta name="description" content="Confira redações nota 1000 do ENEM comentadas e destrinchadas. Aprenda os segredos para uma redação perfeita na prova!">
    <meta name="theme-color" content="#3E3E42">
    
<!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--FOLHA CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
            <?php cabecalho(); ?>    
        </header>
        <!--FECHAMENTO HEADER-->

        <!--ABERTURA MAIN-->
        <main class="mb-3">
        <!--ABERTURA SESSÃO-->
            <!--ABERTURA SESSÃO COM CTA E NAVEGAÇÃO CONTEÚDO-->
            <div class="container box">
                <section id="cta-nav">
                    <div class="row d-flex p-2">
                        <div class="col-12 col-lg-6 my-2 text-center d-flex justify-content-center">
                            <div class="p-4 cta-index d-flex align-items-center justify-content-center" style="height: 100%;">
                                <h1 class="d-block d-mb-none poppins-semibold text-light" style="font-size: 1.5rem">Domine a redação do ENEM com materiais completos e grátis!</h1>
                                <h1 class="d-none d-mb-block poppins-semibold text-light">Domine a redação do ENEM com materiais completos e grátis!</h1>
                        
                                <a href="trilha.php" class="d-block botao-atencao poppins-semibold mt-3 p-2 aumentar"><i class="fa-solid fa-lg fa-list-check mr-2" style="color: #3E3E42"></i>Trilha de aprendizado</a>  
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-6 my-2 text-center justify-content-center d-flex">
                            <div class="row">
                                <div class="col-12 col-md-6 my-1 col-lg-12">
                                    <a href="argumentos.php" class="d-block botao-principal poppins-semibold p-2 aumentar"><i class="fa-solid fa-quote-left fa-lg mr-2" style="color: #ffffff;"></i>Argumentos</a>
                                </div>
                                <div class="col-12 col-md-6 my-1 col-lg-12">
                                    <a href="elementos.php" class="d-block botao-principal poppins-semibold p-2 aumentar"><i class="fa-solid fa-brain fa-lg mr-2" style="color: #ffffff;"></i>Elementos de Coesão</a>
                                </div>
                                <div class="col-12 col-md-6 my-1 col-lg-12">
                                    <a href="redacoes.php" class="d-block botao-principal poppins-semibold p-2 aumentar"><i class="fa-solid fa-file-invoice fa-lg mr-2" style="color: #ffffff;"></i>Redações Comentadas</a>
                                </div>
                                <div class="col-12 col-md-6 my-1 col-lg-12">
                                    <a href="repertorios.php" class="d-block botao-principal poppins-semibold p-2 aumentar"><i class="fa-solid fa-folder-open fa-lg mr-2" style="color: #ffffff;"></i>Repertórios</a>
                                </div>
                                <div class="col-12 my-1 col-lg-12">
                                    <a href="temas.php" class="d-block botao-principal poppins-semibold p-2 aumentar"><i class="fa-solid fa-lightbulb fa-lg mr-2" style="color: #ffffff;"></i>Temas</a>
                                </div>      
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
         <!--FECHAMENTO SESSÃO COM CTA E NAVEGAÇÃO CONTEÚDO-->

         <!--FECHAMENTO SESSÃO-->
        </main>
        <!--FECHAMENTO MAIN-->    
        
        <!--ABERTURA FOOTER-->
        <footer>
            <?php rodape(); ?>   
        </footer>
        <!--FECHAMENTO FOOTER-->    
    </div>
        
        <!--JQUERY, POPPER E BOOTSTRAP JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>
</html>