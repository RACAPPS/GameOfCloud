<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "goc";

    $conexion = @mysqli_connect($server, $username, $password, $db);
    if(!$conexion){
        die("FALLO");
    }

    $query = "UPDATE STATUS SET CURRENTRESPONSE=3,CURRENTSTATUS=0 WHERE 1;";
    $result = $conexion->query($query);
    if(!$result){
        die("No funsionó.");
    }
    echo("Zi");
    header("Location: index.html");

?>
