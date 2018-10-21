
<?php
    include "../../Model/connectionModel.php";

    $nameTournament = $_POST["nuevoTorneo"];
    $query = "INSERT INTO Semestre(Semestre) VALUES('$nameTournament');";

    if ( $resultSet = $connection->query($query) ){
        $message = "correct";    
    }else{
        $message = "incorrect";
    }

    echo json_encode($message);
    // Jul-Dic 2018
?>
