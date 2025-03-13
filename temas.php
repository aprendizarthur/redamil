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
    <title>Redamil - Temas</title>
    <link rel="icon" type="image/x-icon" href="images/assets/icon.ico">
    <meta name="description" content="Pratique redação com temas atuais para o ENEM e textos de apoio exclusivos. Prepare-se para a prova com confiança!">
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
                <?php mostrarNavegacao(); ?>
            </div>
         <!--FECHAMENTO SESSÃO COM CTA E NAVEGAÇÃO CONTEÚDO-->

         <!--ABERTURA SESSÃO PARA FILTRAR TEMAS-->
            <div class="container box mt-3">
                <section id="filtrar-temas">
                    <div class="row d-flex p-2">
                        <div class="col-12 my-2 text-center justify-content-center">
                            
                            <h1 class="poppins-semibold">Filtrar temas <a href="#faq-tema"><i class="fa-solid fa-2xs fa-circle-question ml-1" style="color: #d7d6d6; position: relative; top: 2px"></i></a></h1>
                            
                            <form method="POST" class="mt-3">
                                <select name="categoria" class="form-select poppins-semibold text-center bg-preto p-2 text-light">
                                    <option selected value="todos" class="poppins-regular">Todos</option>
                                    <option value="Educação" class="poppins-regular">Educação</option>
                                    <option value="Meio Ambiente" class="poppins-regular">Meio Ambiente</option>
                                    <option value="Social" class="poppins-regular">Social</option>
                                    <option value="Tecnologia" class="poppins-regular">Tecnologia</option>
                                </select>

                                <button name="submit" class="mt-2 p-2 poppins-semibold preto botao-sucesso aumentar">Filtrar</button>
                            </form>
                        </div>
                    </div> 
                </section>
            </div>
         <!--FECHAMENTO SESSÃO PARA FILTRAR TEMAS-->

         <!--ABERTURA SESSÃO COM TEMAS FILTRADOS-->
         <div class="container box mt-3">
                <section id="resultados-temas">
                    <div class="row d-flex px-2 pt-2 pb-3"> 
                        <?php filtrarTemas($mysqli); ?>
                    </div> 
                </section>
            </div>
         <!--FECHAMENTO SESSÃO COM TEMAS FILTRADOS-->

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