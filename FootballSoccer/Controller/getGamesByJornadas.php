
<?php
    include "../Model/connectionModel.php";

    $numJornada = $_POST["NumJornada"];
    $query = "SELECT ID_Partido, Equipo_1, Goles_E1, Equipo_2, Goles_E2, Dia, Hora FROM Partido INNER JOIN Jornada ON Partido.ID_Jornada = Jornada.ID_Jornada WHERE Jornada.ID_Jornada = $numJornada;";

    $resultSet = $connection->query($query);
    $cont=0;
    if( $resultSet->num_rows > 0 ){
        while($partidos = $resultSet->fetch_assoc()){
            $dataOut[$cont] = $partidos;
            $cont++;
        }
    }

    echo json_encode($dataOut);
?>
