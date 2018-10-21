
<?php
    include "../../Model/connectionModel.php";

    $ID = $_POST["ID_Jugador"];
    $query = "UPDATE Jugador SET ID_Equipo = null WHERE ID_Jugador = $ID;";

    if ( $resultSet = $connection->query($query) ){
        $message = "Correct";    
    }else{
        $message = "Incorrect";
    }

    echo json_encode($message);
?>
