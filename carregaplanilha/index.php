<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
            include_once("config.php");
            include_once("functions.php");
            getdb();
?>

    <div id="wrap">
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Importação de planilha CSV</legend>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Selecione o Arquivo CSV</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Importar dados</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Carregando...">Importar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <?php

               get_all_records();
            ?>
        </div>


        <div>
            <form class="form-horizontal" action="functions.php"  method="post" name="upload_excel" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" name="Export" class="btn btn-success" value="Exportar para Excel"/>
                    </div>
                </div>                    
            </form>           
        </div>


    </div>
</body>
</html>