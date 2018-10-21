
<?php
    include "../../Model/connectionModel.php";

    $ID_Equipo = $_POST["ID_Equipo"];
    $ID_Jugador = $_POST["ID_Jugador"];
    $query = "UPDATE Jugador SET Jugador.ID_Equipo = $ID_Equipo WHERE ID_Jugador = $ID_Jugador";

    if ( $resultSet = $connection->query($query) ){
        $message = "Correct";    
    }else{
        $message = "Incorrect";
    }

    echo json_encode($message);
?>
