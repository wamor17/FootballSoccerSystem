
<?php
    include "../../Model/connectionModel.php";

    $QueryTeams = "SELECT ID_Equipo, Nombre From Equipo;";
    $GetTeams = $connection->query($QueryTeams);
    
    while( $Teams = $GetTeams->fetch_assoc() ){
        $ID_Equipo = $Teams["ID_Equipo"];
        $NameTeam = $Teams["Nombre"];

        $QueryGames1 = "SELECT ID_Partido, Equipo_1, Goles_E1, Equipo_2, Goles_E2 FROM Partido WHERE Equipo_1 = '$NameTeam';";
        $GetGames1 = $connection->query($QueryGames1);

        $PJ = 0;
        $PG = 0;
        $PP = 0;
        $PE = 0;
        $GF = 0;
        $GC = 0;

        while( $Games1 = $GetGames1->fetch_assoc() ){
            $GF += $Games1["Goles_E1"];
            $GC += $Games1["Goles_E2"];
            $PJ++;

            if( $Games1["Goles_E1"] > $Games1["Goles_E2"] ){
                $PG++;
            }else if( $Games1["Goles_E1"] < $Games1["Goles_E2"] ){
                $PP++;
            }else{
                $PE++;
            }
        }

        if( $PJ <= 7 ){
            $QueryGames2 = "SELECT ID_Partido, Equipo_1, Goles_E1, Equipo_2, Goles_E2 FROM Partido WHERE Equipo_2 = '$NameTeam';";
            $GetGames2 = $connection->query($QueryGames2);
    
            while( $Games2 = $GetGames2->fetch_assoc() ){
                $GF += $Games2["Goles_E2"];
                $GC += $Games2["Goles_E1"];
                $PJ++;

                if( $Games2["Goles_E1"] < $Games2["Goles_E2"] )
                    $PG++;
                else if( $Games2["Goles_E1"] > $Games2["Goles_E2"] )
                    $PP++;
                else
                    $PE++;
            }
        }

        $Diff = $GF - $GC;
        $Pts = $PG*3 + $PE*1 + $PP*0;
        $QueryUpdateTeam = "UPDATE Equipo SET PJ = $PJ, PG = $PG, PE = $PE, PP = $PP, GA = $GF, GR = $GC, Diff = $Diff, Puntos = $Pts WHERE ID_Equipo = $ID_Equipo;";
        
        if( $ApplyQuery = $connection->query($QueryUpdateTeam) )
            $messages = "Correct";
        else
            $messages = "Failed!";
    }

    $connection->close();
    echo json_encode($messages);
?>
