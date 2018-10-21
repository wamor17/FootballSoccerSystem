
<?php
    include "../../Model/connectionModel.php";

    $ID = $_POST["ID_Jugador"];
    $Posicion = $_POST["Posicion"];
    $Goles = $_POST["Goles"];
    $query = "UPDATE Jugador SET Posicion = '$Posicion', Goles_Marcados = $Goles WHERE ID_Jugador = $ID;";

    if ( $resultSet = $connection->query($query) ){
        $message = "Correct";    
    }else{
        $message = "Incorrect";
    }

    echo json_encode($message);
?>
