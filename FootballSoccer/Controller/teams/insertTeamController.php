<?php
    include "../../Model/connectionModel.php";

    $name = $_POST["NewTeam"];
    $color = $_POST["ColorTeam"];
    $query = "INSERT INTO Equipo(Nombre, Color_Uniforme, PJ, PG, PE, PP, GA, GR, Diff, Puntos) VALUES('$name','$color',0,0,0,0,0,0,0,0);";

    if ( $resultSet = $connection->query($query) ){
        $message = "correct";    
    }else{
        $message = "incorrect";
    }

    echo json_encode($message);
    // Jul-Dic 2018
?>