<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="resource/css/teamsStyle.css">
        <title> Administraci&oacute;n del torneo </title>
    </head>
    <body onload="openTeam(2)">

    <?php
        include "Model/connectionModel.php";
        include "Templates/adminMenuBar.php";

        $getTeams = "SELECT *FROM Equipo;";
        $data = $connection->query($getTeams);
    ?>
<!--
    <div class="row">
        <div class="col m1 l1"></div>
        <div class="col s12 m10 l10">
            <h4> Lista de equipos y jugadores </h4>
            <a class="btn-small modal-trigger blue darken-2 waves-effect" href='#modalInsertTeam'> Nuevo equipo <i class='material-icons left'>add</i> </a>
            <a class="btn-small blue darken-2 waves-effect"> Generar jornadas <i class='material-icons left'>loop</i> </a>
        </div>
        <div class="col m1 l1"></div>
    </div>
-->
    <div class="row">
        <div class="col m1 l1"></div>
        <div class="col s12 m5 l7">
            <h5> Lista de equipos y jugadores </h5>
            <a class="btn-small modal-trigger blue darken-2 waves-effect" href='#modalInsertTeam'> Nuevo equipo <i class='material-icons left'>add</i> </a>
            <a class="btn-small blue lighten-2 waves-effect"> Generar jornadas <i class='material-icons left'>loop</i> </a>
    
            <?php
                $num = 0;
                $numPlayer = 0;
                echo "<ul class='collapsible collapsTeams popout collection'>";
                while( $Equipos = $data->fetch_assoc() ){

                        echo " <li>
                            <div class='collapsible-header'>
                                <a class='IDTeam' id='IDTeam".$num."'>".$Equipos["ID_Equipo"]."</a>
                                <i class='material-icons left'>expand_more</i><strong id='nameTeam".$num."'>".$Equipos["Nombre"]." </strong>
                            </div>
                            <div class='collapsible-body white'>
                                <a href='#modalDeleteTeam' class='modal-trigger right' onclick='loadDataTeamForDelete(".$num.")'> <i class='material-icons black-text'>delete</i> </a>
                                <a href='#modalModifyTeam' class='modal-trigger right' onclick='loadDataTeamForModify(".$num.")'> <i class='material-icons black-text'>edit</i> </a>";

                            $getPlayers = "SELECT ID_Jugador, ID_Equipo, Nombre, Apellidos, Posicion, Goles_Marcados FROM Jugador INNER JOIN Alumno ON Jugador.ID_Alumno = Alumno.ID_Alumno WHERE ID_Equipo = '".$Equipos['ID_Equipo']."';";
                            $getData = $connection->query($getPlayers);

                            if( $Equipos["Diff"] > 0 ){
                                $colorDiff = 'green';
                                $Diff = "+".$Equipos["Diff"];
                            }else if( $Equipos["Diff"] < 0 ){
                                $colorDiff = 'red';
                                $Diff = $Equipos["Diff"];
                            }else{
                                $colorDiff = 'black';
                                $Diff = $Equipos["Diff"];
                            }

                            echo "<div class='row'>
                                    <div class='col s12 m12 l7'>
                                        <h5> Jugadores </h5>
                                        <table class='table striped highlight'>
                                            <tr>
                                                <th class='center-align txtT widthPlayer'><strong> Nombre </strong></th>
                                                <th class='center-align txtT'><strong> Posici&oacute;n </strong></th>
                                                <th class='center-align txtT'><strong> Goles </strong></th>
                                                <th class='center-align txtT'><strong>  </strong></th>
                                            </tr>";

                                            while( $Jugadores = $getData->fetch_assoc() ){
                                                echo "<tr>";
                                                    echo "<a id='playerID".$numPlayer."' style='display: none;'> ". $Jugadores["ID_Jugador"] ." </a>";
                                                    echo "<a id='playerTeamID".$numPlayer."' style='display: none;'> ". $Jugadores["ID_Equipo"] ." </a>";
                                                    echo "<td class='txtR' id='playerName".$numPlayer."'>".$Jugadores["Nombre"]." ".$Jugadores["Apellidos"]."</td>";
                                                    echo "<td class='txtR' id='playerPosition".$numPlayer."'class='left-align'>".$Jugadores["Posicion"]." </td>";

                                                    if( $Jugadores["Goles_Marcados"] > 0 )
                                                        $show = "block";
                                                    else
                                                        $show = "none";

                                                    echo "<td class='txtR' id='playerGoals".$numPlayer."' class='center-align'><p style='display: ".$show.";'>".$Jugadores["Goles_Marcados"]."</p></td>";
                                                    echo "<td class='center-align'>
                                                            <a class='icon-color modal-trigger' href='#modalModifyPlayer' onclick='loadData2ModifyPlayer($numPlayer)'> <i class='right-align material-icons'>edit</i> </a>
                                                            <a class='icon-color modal-trigger' href='#modalDeletePlayer' onclick='loadData2DeletePlayer($numPlayer, $num)'> <i class='right-align material-icons'>delete</i></a>
                                                        </td>";
                                                echo "</tr>";
                                                $numPlayer++;
                                            }
                                            echo "</table>
                                    </div>
                                    <div class='col s12 m12 l5'>
                                        <h5> Estad&iacute;stica </h5>
                                        <table class='table striped '>
                                            <tr> <td class='txtT center-align'><strong> PJ </strong></td>
                                                <td class='txtT center-align'><strong> PG </strong></td>
                                                <td class='txtT center-align'><strong> PE </strong></td>
                                                <td class='txtT center-align'><strong> PP </strong></td>
                                                <td class='txtT center-align'><strong> GA </strong></td>
                                                <td class='txtT center-align'><strong> GR </strong></td>
                                                <td class='txtT center-align'><strong> Diff </strong></td>
                                                <td class='txtT center-align'><strong> Pts </strong></td>
                                            </tr>
                                            <tr> <td class='txtR center-align'> ".$Equipos["PJ"]." </td>
                                                <td class='txtR center-align'> ".$Equipos["PG"]." </td>
                                                <td class='txtR center-align'> ".$Equipos["PE"]." </td>
                                                <td class='txtR center-align'> ".$Equipos["PP"]." </td>
                                                <td class='txtR center-align'> ".$Equipos["GA"]." </td>
                                                <td class='txtR center-align'> ".$Equipos["GR"]." </td>
                                                <td class='txtR center-align' style='color: ".$colorDiff.";'> ".$Diff." </td>
                                                <td class='txtR center-align'><strong>".$Equipos["Puntos"]."</strong></td>
                                            </tr>
                                        </table>
                                        <br>

                                        <div class='row'>
                                            <div class='col s12 m12'>
                                                <h5> Uniforme </h5>
                                                <a id='colorTeam".$num."' style='display: none;'>".$Equipos["Color_Uniforme"]."</a>

                                                <div class='imgColorTeam'>
                                                    <img src='resource/images/kit-left.png' class='imgColorL' style='background-color:".$Equipos["Color_Uniforme"]."'>
                                                    <img src='resource/images/kit-body.png' class='imgColorB' style='background-color:".$Equipos["Color_Uniforme"]."'>
                                                    <img src='resource/images/kit_right.png' class='imgColorR' style='background-color:".$Equipos["Color_Uniforme"]."'>
                                                    <img src='resource/images/kit_shorts.png' class='imgColorS1' style='background-color:".$Equipos["Color_Uniforme"]."'>
                                                    <img src='resource/images/kit_socks.png' class='imgColorS2' style='background-color:".$Equipos["Color_Uniforme"]."'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                    ";
                $num++;
                }
                echo "</ul>";
            ?>
        </div>

        <div class="col s12 m5 l3">
            <br>
            <?php
                $QueryNT = "SELECT ID_Equipo FROM Jugador WHERE Jugador.ID_Equipo IS NULL;";
                $QData = $connection->query($QueryNT);

                if( $No = $QData->fetch_assoc() ){
                    echo "<ul class='collapsible collection with-header'>
                            <li class='collection-header'> <h6> Jugadores sin equipo </h6> </li>";

                            $QueryTeams = "SELECT ID_Equipo, Nombre FROM Equipo;";
                            $QueryOutOfTeams = "SELECT *FROM Jugador INNER JOIN Alumno USING (ID_Alumno) WHERE Jugador.ID_Equipo IS NULL;";
                            $QueryData = $connection->query($QueryOutOfTeams);

                            $numNoPlayer = 0;
                            while( $PlayerNoTeams = $QueryData->fetch_assoc() ){
                                echo "<li>";
                                    echo "<div class='collapsible-header'> <i class='material-icons'>expand_more</i> <a id='idAddPlayer".$numNoPlayer."' style='display: none;'> ".$PlayerNoTeams["ID_Alumno"]." </a>" .$PlayerNoTeams["Nombre"]." ".$PlayerNoTeams["Apellidos"]. "</div>";
                                    echo "<div class='collapsible-body'>
                                            <p> Seleccione un equipo </p> ";

                                    $QueryDataTeams = $connection->query($QueryTeams);

                                    while( $DataTeams = $QueryDataTeams->fetch_assoc() ){
                                    echo"<p> 
                                            <label>
                                                <input name='teams".$numNoPlayer."' type='radio' value='". $DataTeams["ID_Equipo"] ."' />
                                                <span> ". $DataTeams["Nombre"] ." </span>
                                            </label>
                                        </p>";
                                    }

                                    echo "<div class='right-align'>
                                            <button class='btn-small waves-effect blue darken-2' type='submit' name='action' onclick='addPlayer2Team(".$numNoPlayer.")'>Agregar
                                                <i class='material-icons left'>add</i>
                                            </button>
                                            </div>";
                                    echo "</div>";
                                echo "</li>";
                                
                                $numNoPlayer++;
                            }
                    echo "</ul>";
                }
                $QData->close();
            ?>

        </div>
        <div class="col m1 l1"></div>
    </div>

<!-- MODAL PARA MODIFICAR EL JUGADOR PERTENECIENTE A UN EQUIPO -->
    <div id="modalModifyPlayer" class="modal modal-fixed-footer">
        <div class="modal-content">
            <p id="modalPlayerID"></p>
            <h5 id="modalNamePlayer"> Nombre del jugador </h5>

            <div class="input-field col m12 posicionJugador">
                <select id="modalPlayerPosition">
                    <option value="Portero"> Portero </option>
                    <option value="Defensa"> Defensa </option>
                    <option value="Mediocampista"> Mediocampista </option>
                    <option value="Delantero"> Delantero </option>
                </select>
                <label> Posici&oacute;n como jugador </label>
            </div>

            <div class="input-field golesAnotados">
                <input type="text" id="modalGolesAnotados" placeholder='Goles anotados por el jugador'>
                <label for="modalGolesAnotados">Goles anotados</label>
            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-orange btn grey lighten-1" onclick="updatePlayer()"> Actualizar </a>
            <a href="#!" class="modal-close waves-effect btn-flat"> Cancelar </a>
        </div>
    </div>

<!-- MODAL PARA ELIMINAR EL JUGADOR PERTENECIENTE A UN EQUIPO -->
    <div id="modalDeletePlayer" class="modal modal-fixed-footer">
        <div class="modal-content center-align">
            <i class='large material-icons'>info_outline</i>
            <input type="text" id="modalIDPlayer2Delete">
            <p> ¿Desea eliminar a <strong id="namePlayer2Delete"> </strong> del equipo <strong id="nameTeam2Delete"></strong>? </p>
        </div>

        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-red btn grey lighten-1" onclick="DeletePlayer()"> Eliminar </a>
            <a href="#!" class="modal-close waves-effect btn-flat"> Cancelar </a>
        </div>
    </div>

    <div id="modalInsertTeam" class="modal modal-fixed-footer">
        <div class="modal-content">

            <div class="row">
                <div class="col s12 m6 l6">
                    <h5> Nuevo equipo </h5>
                    <div class="input-field">
                        <input type="text" class="form-control" id="txtNameTeamModal">
                        <label for="txtNameTeamModal""> Nombre del equipo </label>
                    </div>

                    <label> Color del uniforme: </label>            
                    <div class="input-field">
                        <select id="SelectColorTeam">
                            <option value="white"> Blanco </option>
                            <option value="black"> Negro </option>
                            <option value="red"> Red </option>
                            <option value="orange"> Naranja </option>
                            <option value="pink"> Rosa </option>
                            <option value="green"> Verde </option>
                            <option value="blue"> Azul </option>
                            <option value="darkgray"> Gris </option>
                            <option value="darkblue"> Azul marino </option>
                            <option value="yellow"> Amarillo </option>
                        </select>
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <div class='imgColorTeam1'>
                        <img src='resource/images/kit-left.png' class='imgColorL ckit' style='background-color:".$Equipos["Color_Uniforme"]."'>
                        <img src='resource/images/kit-body.png' class='imgColorB ckit' style='background-color:".$Equipos["Color_Uniforme"]."'>
                        <img src='resource/images/kit_right.png' class='imgColorR ckit' style='background-color:".$Equipos["Color_Uniforme"]."'>
                        <img src='resource/images/kit_shorts.png' class='imgColorS1 ckit' style='background-color:".$Equipos["Color_Uniforme"]."'>
                        <img src='resource/images/kit_socks.png' class='imgColorS2 ckit' style='background-color:".$Equipos["Color_Uniforme"]."'>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a class="btn-small waves-effect blue darken-2" id="btnNewTeam" onclick="insertTeam()"> Agregar </a>
            <a href="#!" class="modal-close waves-effect btn-flat"> Cancelar </a>
        </div>
    </div>

    <div id="modalModifyTeam" class="modal modal-fixed-footer">
        <div class="modal-content">

            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="title-modify-team"> Modificando: </h5><br>
                    <div class="input-field">
                        <a class="IDTeamUpdate"></a>
                        <input type="text" class="form-control" id="newNameTeam" placeholder="Equipo">
                        <label for="newNameTeam""> Nombre del equipo </label>
                    </div>

                    <label> Color del uniforme: </label>            
                    <div class="input-field">
                        <select id="SelectColorTeamUpdate">
                            <option value="white"> Blanco </option>
                            <option value="black"> Negro </option>
                            <option value="red"> Red </option>
                            <option value="orange"> Naranja </option>
                            <option value="pink"> Rosa </option>
                            <option value="green"> Verde </option>
                            <option value="blue"> Azul </option>
                            <option value="darkgray"> Gris </option>
                            <option value="darkblue"> Azul marino </option>
                            <option value="yellow"> Amarillo </option>
                        </select>
                    </div>
                </div>
                <div class="col s12 m6 l6 box-kit">
                    <div class='imgColorTeam1'>
                        <img src='resource/images/kit-left.png' class='imgColorL cmkit'>
                        <img src='resource/images/kit-body.png' class='imgColorB cmkit'>
                        <img src='resource/images/kit_right.png' class='imgColorR cmkit'>
                        <img src='resource/images/kit_shorts.png' class='imgColorS1 cmkit'>
                        <img src='resource/images/kit_socks.png' class='imgColorS2 cmkit'>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a class="btn-small waves-effect yellow darken-3" id="btnNewTeam" onclick="updateTeam()"> Modificar </a>
            <a href="#!" class="modal-close waves-effect btn-flat"> Cancelar </a>
        </div>
    </div>

    <div id="modalDeleteTeam" class="modal modal-fixed-footer">
        <div class="modal-content center-align">
            <i class="material-icons large ">error_outline</i>

            <div class="form-group">
                <input id="IDTeamModalDelete" class="txtIDTeamDelete" type="text" class="form-control">
                <p> ¿Esta seguro que desea sacar al equipo <strong id="nameTeamToDelete"> </strong> del torneo de f&uacute;tbol del DEM Yuriria? </p>
            </div>
        </div>

        <div class="modal-footer">
            <a class="btn-small waves-effect red righten-2" onclick="deleteTeam()"> Borrar equipo </a>
            <a class="btn-flat waves-effect modal-close"> Cancelar </a>
        </div>
    </div>

    <?php include "Templates/metaInformation.php" ?>
    <script src="resource/js/teamsScript.js"></script>
    <script>
            $(document).ready(function(){
                $('.dropdown-trigger').dropdown();
                $('.modal').modal();
                $('.sidenav').sidenav();
                $('.tabs').tabs();
                $('.collapsible').collapsible();
                $('select').formSelect();
            });
    </script>

    </body>
</html>
