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
    <title>Redamil - Argumentos</title>
    <link rel="icon" type="image/x-icon" href="images/assets/icon.ico">
    <meta name="description" content="Veja argumentos prontos para a redação do ENEM: culpar o governo, a mídia e mais. Enriqueça seu repertório e arrase na prova!">
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
        <!--ABERTURA SESSÃO COM TIPOS DE ARGUMENTOS-->
        <div class="container box">
                <section id="">
                    <div class="row d-flex p-2">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-bold">Argumentos</h1>
                            <p class="poppins-regular">Aqui se encontram os culpados para as suas teses — um repertório prático para apontar possíveis responsáveis pelos problemas relacionados ao tema da sua redação.</p>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-governo caixa-etapa p-5">
                                <a href="argumentos/governo.php" class=" text-light"><h2 class="poppins-semibold">Culpe o Governo</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right inferior-direito" style="color: #ffffff; "></i>    
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-midia caixa-etapa p-5">
                                <a href="argumentos/midia.php" class="text-light"><h2 class="poppins-semibold">Culpe a Mídia</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right inferior-direito" style="color: #ffffff; "></i>    
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-educacao caixa-etapa p-5">
                                <a href="argumentos/educacao.php" class=" text-light"><h2 class="poppins-semibold">Culpe a Educação</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right inferior-direito" style="color: #ffffff; "></i>    
                            </div>
                        </div>

                        <div class="col-12 col-md-6 my-2 text-center aumentar">
                            <div class=" bg-sociedade caixa-etapa p-5">
                                <a href="argumentos/sociedade.php" class=" text-light"><h2 class="poppins-semibold">Culpe a Sociedade</h2></a>
                                <i class="fa-solid fa-arrow-up-right-from-square fa-sm right inferior-direito" style="color: #ffffff; "></i>    
                            </div>
                        </div>
                    </div> 
                </section>
            </div>
         <!--FECHAMENTO SESSÃO COM TIPOS DE ARGUMENTOS-->
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