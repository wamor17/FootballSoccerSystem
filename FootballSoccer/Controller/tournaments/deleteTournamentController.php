
<?php
    include "../../Model/connectionModel.php";

    $idTournament = $_POST["ID_Torneo"];
    $query = "DELETE FROM Semestre WHERE ID_Semestre = $idTournament;";

    if ( $resultSet = $connection->query($query) ){
        $message = "correct";    
    }else{
        $message = "incorrect";
    }

    echo json_encode($message);
    // Jul-Dic 2018
?>
