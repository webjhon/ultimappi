<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Andre Prado</title>

        <!-- jQuery -->
        <script src="./js/jquery-1.11.3.min.js"></script>

        <!-- Bootstrap -->
        <script src="./js/bootstrap.min.js"></script>
        <link href="./css/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="./css/bootstrap-responsive.min.css" rel="stylesheet" media="all">
        <!-- Personal -->
        <script src="js/personal_scripts.js"></script>
        <link href="css/personal_styles.css" rel="stylesheet" media="all">
        
    </head>
    <body>
       <div class="container-fluid">
            <div class="row-fluid">
               <div class="col-md-2">
                            <?php
                                require_once './sidebar_menu.php';
                            ?>
               
                <div class="offset2 col-md-8">
                    <legend>Busca Trabalhos</legend>
                </div>
            </div>
                </div>   
            
                <div class="offset2 col-md-8">
                    <form class="form-search">
                        <div class="input-append">
                            <input type="text" class="search-query" id="iptPesquisar">
                            <button type="button" class="btn" id="btnPesquisar">Pesquisar</button>
                        </div>
                    </form>
                </div>
            </div>

                     <div class="row-fluid">

                            
                        
                        <div class="offset2 col-md-8">
                            <hr>
                            <dl class="dl-horizontal">
                                <dt>Título</dt>
                                <dd>Título do trabalho</dd>

                                <dt>Autor</dt>
                                <dd>Autor do trabalho</dd>

                                <dt>Ano</dt>
                                <dd>Ano do trabalho</dd>

                                <dt>Descrição</dt>
                                <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at risus. Quisque purus magna, auctor et, sagittis ac, posuere eu, lectus. Nam mattis, felis ut adipiscing.</dd>
                            </dl>
                        </div>
                        </div>
                    </div>
        </div>
    </body>
</html>
