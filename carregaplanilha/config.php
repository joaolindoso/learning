<?php

function getdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "exemplocsv";

    try {
        $conn = mysqli_connect($servername, $username, $password, $db);
    }
    
    catch(exception $e)
        {
        echo "Ocorreu uma falha na conexão: " . $e->getMessage();
        }
        return $conn;
}
