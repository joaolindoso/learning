<?php

$conn = mysqli_connect("localhost", "root", "", "exemplocsv");

if (isset($_POST["import"])) {
    $fileName = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0) {
        $file = fopen($fileName, "r");

        while(($column = fgetcsv($file, 10000, ";")) !== FALSE) {
            $sqlInsert = "insert into pessoas (nome, endereco) values ('" . $column[0] . "','" . $column[1] . "')";

            $result = mysqli_query($conn, $sqlInsert);

            if(!empty($result)) {
                echo "Dados do arquivo CSV foram importados para a base de dados com sucesso.";

            } else {
                echo "Ocorreu um problema e os dados não foram importados.";
            }
        }
    } else {
        echo "<h2>O tamanho do arquivo é inválido!</h2>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

<form class="form-horizontal" action="" method="post" name="uploadCsv" enctype="multipart/form-data">
    <div>
        <label><h2>Carregue o arquivo CSV</h2></label><br>
        <input type="file" name="file" accept=".csv">
        <p><button type="submit" name="import">Importar</button></p>
    </div>
</form>

</body>
</html>