
<?php
    include "../../Model/connectionModel.php";

    $ID = $_POST["ID"];
    $query = "SELECT ID_Jugador, Nombre, Apellidos, Posicion, Goles_Marcados FROM Jugador INNER JOIN Alumno USING(ID_Alumno) WHERE ID_Equipo = ".$ID." ORDER BY Posicion DESC;";
    $ResultSet = $connection->query($query);

    $cont=0;
    if( $ResultSet->num_rows > 0 ){
        while($players = $ResultSet->fetch_assoc()){
            $dataOut[$cont] = $players;
            $cont++;
        }
    }

    echo json_encode($dataOut);
?>
