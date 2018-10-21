<?php
    include "../../Model/connectionModel.php";

//    $E1 = $_POST["E1"];
//    $E2 = $_POST["E2"];
    $GT_1 = $_POST["e1Goals"];
    $GT_2 = $_POST["e2Goals"];
    $Date = $_POST["Date"];
    $Hour = $_POST["Hour"];
    $ID_Game = $_POST["ID_Game"];
    $query = "UPDATE Partido SET Goles_E1 = $GT_1, Goles_E2 = $GT_2, Dia = '$Date', Hora = '$Hour' WHERE ID_Partido = $ID_Game;";

    if ( $resultSet = $connection->query($query) ){
        $message = "Correct";    
    }else{
        $message = "Incorrect";
    }

    echo json_encode($message);
?>
