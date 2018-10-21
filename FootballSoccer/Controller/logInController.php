
<?php
    include "../Model/connectionModel.php";

    $user = $_POST["user"];
    $password = $_POST["password"];
    
    $query = "SELECT *FROM Usuario WHERE Usuario = '$user';";

    $resultSet = $connection->query($query);
    $usuario = $resultSet->fetch_assoc();
    $nombre = $usuario["Usuario"];

    if( $usuario["Pass"] == $password ){
        $tipo = $usuario["Tipo"];
    }else{
        $tipo = "null";
    }

    echo json_encode($tipo);
?>
