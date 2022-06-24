<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Felipe S. Anjos">
        <title>Form Image Upload Ajax With Alert Returning</title>
        <!--incluíndo css do boostrap-->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
    <body>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>Formulário com upload de imagem em Ajax com Feedback</h2>
                        <p>Preencha o formulário abaixo</p>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="jumbotron">    
                                <form method="post" action="" enctype="multipart/form-data" id="form">
                                    <div class="form-group">
                                        <label for="email">Upload de imagens *</label>
                                        <input type="file" name="upload" class="form-control" required id="upload" placeholder="Envie sua imagem">
                                    </div>
                                    <div class="list-dir form-group">
                                        <?php
                                        //atualiza a listagem das imagens no diretório
                                        $diretorio = dir("./img/");
                                        while($arquivo = $diretorio -> read()){
                                            
                                            echo "<a href='img/{$arquivo}' target='_blank'>{$arquivo}</a><br>";
                                        }
                                        $diretorio -> close();
                                        ?>
                                    </div>
                                    <button type="submit" id="enviar" class="btn btn-default">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="text-center">
                            <p>Desenvolvido por Felipe S. Anjos<br><a href="https://www.serpadosanjos.com/" target="_blank" title="Felipe S. Anjos">https://www.serpadosanjos.com/</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--incluíndo o jquery, sweet e boostrap-->
        <script src="./js/jquery-3.6.0.min.js"></script>        
        <script src="./js/sweetalert2.js"></script>        
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/main.js"></script>
    </body>
</html>