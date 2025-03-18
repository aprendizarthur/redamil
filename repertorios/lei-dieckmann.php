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
    <title>Redamil - Repertório Lei Carolina Dieckmann</title>
    <link rel="icon" type="image/x-icon" href="../images/assets/icon.ico">
    <meta name="description" content="Aprenda a usar o repertório da Lei Carolina Dieckmann (Art. 154-A) na redação ENEM. Reforce sua argumentação sobre crimes cibernéticos e segurança digital com este dispositivo legal.">
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

         <!--ABERTURA SESSÃO REPERTÓRIO-->
         <div class="container box mt-3">
                <article id="repertorio">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2">
                            <img class="img-fluid d-md-none img-box overflow" src="../images/repertorios/lei-dieckmann.webp" style="border-radius: 12px; height: 20vh;">
                        </div>
                        <div class="col-12 my-2 text-center">
                            <p class="poppins-regular d-none d-md-block  mb-3">Repertório</p>
                            <h4 class="poppins-semibold">Art. 154-A. Invadir dispositivo informático alheio, conectado ou não à rede de computadores, mediante violação indevida de mecanismo de segurança e com o fim de obter, adulterar ou destruir dados ou informações sem autorização expressa ou tácita do titular do dispositivo ou instalar vulnerabilidades para obter vantagem ilícita.</h4>
                            <p class="poppins-regular d-block mb-2"><i>Lei Carolina Dieckmann</i></p>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO REPERTORIO-->

         <!--ABERTURA SESSÃO EXEMPLO REPERTORIO-->
         <div class="container box mt-3">
                <article id="exemplo-repertorio">
                    <div class="row d-flex p-2 justify-content-center">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold mb-3">Exemplos práticos</h1>

                            <div class="text-left">
                                <ul>
                                    <li>
                                        <p class="poppins-regular d-block mb-2">
                                            O artigo <span class="introducao-redacao"> pode ser citado para ilustrar a criminalização de invasões a dispositivos, destacando a necessidade de proteção de dados e conscientização digital</span>.
                                        </p>  
                                    </li>
                                    <li>
                                        <p class="poppins-regular d-block mb-2">
                                            O repertório <span class="introducao-redacao"> encaixa-se ao discutir como a manipulação de informações por meio de invasões pode alimentar desinformação, propondo soluções como educação midiática</span>.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
         <!--FECHAMENTO SESSÃO EXEMPLO REPERTORIO-->

         <!--ABERTURA SESSÃO VER MAIS-->
         <div class="container box mt-3">
                <section id="ver-mais">
                    <div class="row d-flex px-2 pt-2 pb-3 justify-content-center">
                    
                        <div class="col-12 mt-2 text-center">
                            <h1 class="poppins-semibold">Explore outros repertórios</h1>
                            <p class="poppins-regular">Clique e confira outros repertórios para enriquecer a sua redação.</p>
                        </div>


                        <?php repertoriosRecomendacao($mysqli);?>
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