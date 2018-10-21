<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title> Administraci&oacute;n del torneo </title>
        <link rel="stylesheet" href="resource/css/studentStyle.css">
        <?php include "Templates/metaInformation.php" ?>
    </head>
    <body>

    <?php
        include "Templates/adminMenuBar.php";
        include "Model/connectionModel.php";
    ?>

    <div class="row">
        <div class="col m2"></div>
        <div class="col m8">
            <h5> Lista de alumnos que se registraron en el torneo </h5>
            <a class="btn-small blue darken-2 modal-trigger btn-margin waves-effect" href="#modalInsertStudent"> <i class='material-icons left'>add</i> Nuevo alumno </a>
            <a class="btn-small blue lighten-2 btn-margin waves-effect"> <i class='material-icons left'>loop</i> Generar reporte </a><br>
<!--
            <div class="card-panel hoverable">
                <span>
                    El generador de reportes toma la informaci&oacute;n correspondiente a los alumnos (nombre, NUA y carrera) y genera un documento
                    PDF con dicha informaci&oacute;n, con el fin de brindar un apoyo para la solicitud de cr&eacute;ditos.
                </span> <br>
            </div>
-->
            <div class='card hoverable'>
                <div class="card-content">
                    
                    <div class="row">
                        <div class="input-field filter col l6">
                            <i class="tiny material-icons prefix">search</i>
                            <input id="FilteringByName" type="text" placeholder="Nombre, Apellidos, NUA, Edad o Carrera">
                            <label for="FilteringByName"> Filtrar por: </label>
                        </div>

                        <div class="input-field filter col l6">
                            <i class="tiny material-icons prefix"> list </i>
                            <input id="FilteringByNumber" type="text">
                            <label for="FilteringByNumber"> Filtrar lista de alumnos </label>
                        </div>                        
                    </div>
                    
                    <table id="table">
                        <tr>
                            <th> Nombre </th>
                            <th> Apellidos </th>
                            <th class='center-align'> NUA </th>
                            <th class='center-align'> Edad </th>
                            <th class='center-align'> Carrera </th>
                            <th class='center-align'> </th>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        <div class="col m2"></div>
    </div>

    <div id="modalInsertStudent" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4> Registrar nuevo alumno </h4>

            <div class="row">
                <div class="col m12">
                    <div class="form-group">
                        <label> Nombre </label>
                        <input type="text" id="txtName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Apellidos </label>
                        <input type="text" id="txtLastName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Edad </label>
                        <input type="text" id="txtAge" class="form-control">                            
                    </div>

                    <div class="form-group">
                        <label> NUA </label>
                        <input type="text" id="txtNUA" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label> Posici&oacute;n como jugador </label>
                        <input type="text" id="txtPlayerPosition" class="form-control">
                    </div>
                
                    <?php
                        $query = "SELECT *FROM Equipo;";
                        $resultSet = $connection->query($query);
                    ?>

                    <div class="form-group">
                        <label> Seleccione un equipo </label> <br>
                        <select class="btn btn-default">
                            <option> Equipos registrados en el torneo </option>
                            <?php
                                while( $Team = $resultSet->fetch_assoc() ){
                                    echo "<option> ".$Team["Nombre"]." </option>";
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> Carrera </label> <br>
                        <select class="btn btn-default">
                            <option> Seleccione una carrera </option>
                            <option> Lic. en Ing. Comunicaciones y electronica </option>
                            <option> Lic. Gestion empresarial </option>
                            <option> Lic. Enseñanza del ingles </option>
                            <option> Lic. en Ing. Sistemas computacionales </option>
                            <option> Maestria en Electronica Aplicada </option>
                            <option> Maestria en Administracion de las Tecnologias </option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="modal-footer">
            <input type="submit" class="btn" id="btnNewStudent" value="Agregar jugador">
            <input type="submit" class="btn modal-close" id="btnCancel" value="Cancelar" data-dismiss="modal">
        </div>
    </div>

    <div id="modalModifyStudent" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4> Modificando un alumno registrado </h4>
                </div>

                <div class="modal-body">
                    <div class"row">
                        <div class="col-md-8">
                            <h4> Datos del alumno </h4><br>
                        </div>
                        <div class="col-md-4">
                            <h4> Datos del jugador </h4><br>
                        </div>
                    </div>

                    <div class"row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> Nombre </label>
                                <input type="text" id="txtNameM" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> Apellidos </label>
                                <input type="text" id="txtLastNameM" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> Posici&oacute;n como jugador </label>
                                <input type="text" id="txtPlayerPositionM" class="form-control">
                            </div>
                        </div>
                    </div>

                    <?php
                        $query = "SELECT *FROM Equipo;";
                        $resultSet = $connection->query($query);
                    ?>

                    <div class"row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> Edad </label>
                                <input type="text" id="txtAgeM" class="form-control">                            
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> NUA </label>
                                <input type="text" id="txtNUAM" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> Equipo registrado </label>
                                <input type="text" id="txtTeamM" class="form-control" disabled><br>
                            </div>
                        </div>
                    </div>

                    <div class"row">
                        <div class="col-md-4">
                            <label> Carrera registrada </label>
                            <input type="text" id="txtCarrierM" class="form-control"><br>                            
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4">
                            <label> Seleccione un nuevo equipo </label> <br>
                            <select class="btn btn-default">
                                <option> Equipos registrados en el torneo </option>
                                <?php
                                    while( $Team = $resultSet->fetch_assoc() ){
                                        echo "<option> ".$Team["Nombre"]." </option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div><br><br>
                    
                    <div class="row">
                        <div class="col-md-8 paddingModal">
                            <label> Carreras </label><br>
                            <select class="btn btn-default">
                                <option> Seleccione una nueva carrera </option>
                                <option> Lic. en Ing. Comunicaciones y electronica </option>
                                <option> Lic. Gestion empresarial </option>
                                <option> Lic. Enseñanza del ingles </option>
                                <option> Lic. en Ing. Sistemas computacionales </option>
                                <option> Maestria en Electronica Aplicada </option>
                                <option> Maestria en Administracion de las Tecnologias </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> Goles anotados </label>
                                <input type="text" id="txtGoalsM" class="form-control"><br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" id="btnNewStudent" value="Agregar jugador">
                        <input type="submit" class="btn btn-default" id="btnCancel" value="Cancelar" data-dismiss="modal">
                </div>
            </div>
        </div>
    </div>

    <input class='hideTexbox' type='text' id='playerTeam".$numStudent."' value='".$Students['NameTeam']."'>
    <input class='hideTexbox' type='text' id='playerPosition".$numStudent."' value='".$Students['Posicion']."'>
    <input class='hideTexbox' type='text' id='playerGoals".$numStudent."' value='".$Students['Goles_Marcados']."'>
    
    <div id="modalDeleteStudent" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">

            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-heading panelHead">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5> Confirmaci&oacute;n de acci&oacute;n </h5>
                    </div>
                    <div class="panel-body panelBody panelPaddingBody">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="resource/images/danger1.png" class="imgDangerDelete">
                                <div class="form-group">
                                    <p> ¿Esta seguro que desea sacar a <strong id="nameStudentToDelete"> </strong> del torneo de f&uacute;tbol del DEM Yuriria? </p>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="panel-footer panelFooterModal">
                        <input type="submit" class="btn btn-danger" id="btnDeleteTeam" value="Borrar jugador">
                        <input type="submit" class="btn btn-default" id="btnCancel" value="Cancelar" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="resource/js/studentScript.js"></script>
    <script>
            $(document).ready(function(){
                $('.dropdown-trigger').dropdown();
                $('.modal').modal();
                $('.sidenav').sidenav();
            });
    </script>

    </body>
</html>
