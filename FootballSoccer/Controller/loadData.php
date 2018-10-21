
<?php
    include "../../Model/connectionModel.php";

    $query = "SELECT Num_Jornada FROM Jornada ORDER BY Num_Jornada DESC;";
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
