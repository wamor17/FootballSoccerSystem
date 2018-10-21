
<?php
    include "../../Model/connectionModel.php";

    $ID = $_POST["ID"];
    $query = "SELECT * FROM Equipo WHERE ID_Equipo = ".$ID.";";
    $ResultSet = $connection->query($query);

    $cont=0;
    if( $ResultSet->num_rows > 0 ){
        while($table = $ResultSet->fetch_assoc()){
            $dataOut[$cont] = $table;
            $cont++;
        }
    }

    echo json_encode($dataOut);
?>
