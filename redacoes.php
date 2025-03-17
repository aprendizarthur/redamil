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
         <!--ABERTURA SESSÃO COM REDAÇÕES-->
         <div class="container box mt-3">
                <section id="redacoes">
                    <div class="row d-flex p-2">
                        <div class="col-12 my-2 text-center">
                            <h1 class="poppins-semibold">Redações Comentadas <a href="#faq-tema"><i class="fa-solid fa-2xs fa-circle-question ml-1" style="color: #d7d6d6; position: relative; top: 2px"></i></a></h1>
                            <p class="poppins-regular">Confira redações nota 1000 comentadas. </p>
                            
                            <div class="row">
                                <div class="box-dia col-12 mt-3 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/armamento-populacao.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/1.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">Armamento da população em questão no Brasil: caminhos para garantir maior segurança</h4>
                                        </div>
                                    </a>    
                                </div>

                                <div class="box-dia col-12 mt-3 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/respeitar-cultura-indigena.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/2.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">A importância de respeitar as terras e culturas indígenas brasileiras</h4>
                                        </div>
                                    </a>    
                                </div>

                                <div class="box-dia col-12 mt-3 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/adocao.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/3.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">Adoção: como garantir a todas as crianças o direito a uma família no Brasil</h4>
                                        </div>
                                    </a>    
                                </div>

                                <div class="box-dia col-12 mt-3 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/gestao-lixo.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/4.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">Os desafios na gestão do lixo no Brasil contemporâneo</h4>
                                        </div>
                                    </a>    
                                </div>

                                <div class="box-dia col-12 mt-3 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/perigo-automedicacao.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/5.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">A perigosa cultura de automedicação no Brasil</h4>
                                        </div>
                                    </a>    
                                </div>

                                <div class="box-dia col-12 mt-3 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/narcicismo-selfie.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/6.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">O narcisismo e a cultura das selfies</h4>
                                        </div>
                                    </a>    
                                </div>

                                <div class="box-dia col-12 mt-3 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/ead.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/7.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">O ensino a distância no Brasil: caminhos para expandir a todos o acesso ao conhecimento</h4>
                                        </div>
                                    </a>    
                                </div>

                                <div class="box-dia col-12 mt-3 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/necessidade-dialogo.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/8.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">A necessidade do diálogo para a construção de uma sociedade justa e igualitária</h4>
                                        </div>
                                    </a>    
                                </div>

                                <div class="box-dia col-12 mt-3 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/valorizar-diversidade.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/9.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">A importância de compreender e valorizar a diversidade na formação da identidade brasileira</h4>
                                        </div>
                                    </a>    
                                </div>

                                <div class="box-dia col-12 mt-3 col-md-6 aumentar">
                                    <a href="redacoes-comentadas/necessidade-dialogo-2.php"> 
                                        <div>
                                            <img class="img-fluid img-box overflow" src="images/redacoes/10.jpg">
                                        </div>
                                        <div class="bg-preto d-flex align-items-center text-light p-3 text-left" style="position: relative; bottom: 3px; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px; min-height: 14vh;">
                                            <h4 class="poppins-regular d-inline">A necessidade do diálogo para a construção de uma sociedade justa e igualitária (2)</h4>
                                        </div>
                                    </a>    
                                </div>
                            </div>  
                        </div>
                    </div> 
                </section>
            </div>
         <!--FECHAMENTO SESSÃO COM REDAÇÕES-->
         
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