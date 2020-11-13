<?php

$conn = mysqli_connect("localhost", "root", "", "exemplocsv");


 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ";")) !== FALSE)
           {
                $sql = "insert into pessoas (nome, endereco) 
                   values ('" . $getData[0] . "','" . $getData[1] ."')";

                $result = mysqli_query($conn, $sql);

                if(!isset($result))
                    {
                        echo "<script type=\"text/javascript\">
                        alert(\"Arquivo Inválido: Por favor, carregue um arquivo do tipo CSV.\");
                        window.location = \"index.php\"
                        </script>";
                    } else {
                        echo "<script type=\"text/javascript\">
                        alert(\"Arquivo CSV foi importado com sucesso!\");
                        window.location = \"index.php\"
                        </script>";
                    }
           }
      
           fclose($file);  
     }
  }   

  if(isset($_POST["Export"])) {

    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=pessoas-planilha-exportada.csv'); 

    $output = fopen("php://output", "w");  
    fputcsv($output, array('ID', 'Nome', 'Endereço'));  

    $query = "SELECT * from pessoas ORDER BY id DESC";  
    $result = mysqli_query($conn, $query);  

    while($row = mysqli_fetch_assoc($result))  
        {  
            fputcsv($output, $row);  
        }  

    fclose($output);  
}  



// Função para obter as informações do banco após a importação
  function get_all_records() {

        $conn = getdb();
        $Sql = "SELECT * FROM pessoas";
        $result = mysqli_query($conn, $Sql); 

        if (mysqli_num_rows($result) > 0) {
            echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                    <thead><tr><th>ID</th>
                                <th>Nome</th>
                                <th>Endereço</th>
                                </tr></thead><tbody>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['id']."</td>
                        <td>" . $row['nome']."</td>
                        <td>" . $row['endereco']."</td></tr>";        
            }
            
            echo "</tbody></table></div>";
        
    } else {
        echo "Não há registros.";
    }
}