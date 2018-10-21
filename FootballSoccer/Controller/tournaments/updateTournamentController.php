
<?php
    include "../../Model/connectionModel.php";

    $idTournament = $_POST["ID_Tournament"];
    $nameTournament = $_POST["Semestre"];
    $query = "UPDATE Semestre SET Semestre = '$nameTournament' WHERE ID_Semestre = $idTournament;";

    if ( $resultSet = $connection->query($query) ){
        $message = "correct";    
    }else{
        $message = "incorrect";
    }

    echo json_encode($message);
    // Jul-Dic 2018
?>
