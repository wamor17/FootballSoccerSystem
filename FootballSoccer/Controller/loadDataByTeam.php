<?php
    include "Model/connectionModel.php";

    $query = "SELECT ID_Equipo, Nombre, PJ, PG, PE, PP, GA, GR, Diff, Puntos FROM Equipo;";
    $resultSet = $connection->query($query);

    if( $resultSet->num_rows > 0 ){
        whilte( $Equipos = $resultSet->fetch_assoc() ){
            $PG = $Equipos["PG"];
            $PE = $Equipos["PE"];
            $PP = $Equipos["PP"];
            $Puntos = $PG*3 + $PE*1 + $PP*0;

            $updateQuery = "UPDATE Equipo SET Puntos = ".$Puntos." WHERE ID_Equipo = ".$Equipos["ID_Equipo"].";";
            $connection->query($updateQuery);

            $Puntos = 0;
        }
    }

    $connection->close();
?>