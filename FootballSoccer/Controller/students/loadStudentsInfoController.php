
<?php
    include "../../Model/connectionModel.php";

    $Num = $_POST["NumStudents"];
    $getStudents = "SELECT Nombre, Apellidos, Edad, NUA, CONVERT(Carrera USING utf8) AS Carrera FROM Alumno ORDER BY Nombre ASC LIMIT ".$Num.";";
    $ResultSet = $connection->query($getStudents);

    $cont=0;
    if( $ResultSet->num_rows > 0 ){
        while($students = $ResultSet->fetch_assoc()){
            $dataOut[$cont] = $students;
            $cont++;
        }
    }

    echo json_encode($dataOut);
?>
