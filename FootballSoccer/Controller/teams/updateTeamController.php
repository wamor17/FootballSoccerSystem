<?php
    include "../../Model/connectionModel.php";

    $dataTeam = $_POST["dataSend"];
    $IDTeam = $dataTeam["IDTeam"];
    $NameTeam = $dataTeam["NewTeam"];
    $ColorTeam = $dataTeam["NewColor"];
    $query = "UPDATE Equipo SET Nombre = '$NameTeam', Color_Uniforme = '$ColorTeam' WHERE ID_Equipo = $IDTeam;";

    if ( $resultSet = $connection->query($query) ){
        $message = "correct";    
    }else{
        $message = "incorrect";
    }

    echo json_encode($message);
    // Jul-Dic 2018
?>