<?php
    include "../../Model/connectionModel.php";

    $IDTeam = $_POST["IDTeam"];
    $query = "DELETE FROM Equipo WHERE ID_Equipo = $IDTeam;";

    if ( $resultSet = $connection->query($query) ){
        $message = "correct";    
    }else{
        $message = "incorrect";
    }

    echo json_encode($IDTeam);
    // Jul-Dic 2018
?>
