
var Jornadas = {
                "Jornada 1": {
                    "Partido 1": { Equipo_1: "Ingeniebrios", Goles_E1: 2, Equipo_2: "Niupi", Goles_E2: 2, Fecha: "20-09-2018", Hora: "08:00 am" },
                    "Partido 2": { Equipo_1: "Campesinos", Goles_E1: 6, Equipo_2: "Maluma babys", Goles_E2: 3, Fecha: "20-09-2018", Hora: "09:00 am" },
                    "Partido 3": { Equipo_1: "Sin nombre", Goles_E1: 3, Equipo_2: "Abejas sport", Goles_E2: 2, Fecha: "20-09-2018", Hora: "10:00 am" },
                    "Partido 4": { Equipo_1: "Dream team", Goles_E1: 4, Equipo_2: "El valler", Goles_E2: 3, echa: "20-09-2018", Hora: "11:00 am" },
                },
                "Jornada 2": {
                    "Partido 1": { Equipo_1: "Maluma babys", Goles_E1: 0, Equipo_2: "Sin nombre", Goles_E2: 1, Fecha: "27-09-2018", Hora: "08:00 am" },
                    "Partido 2": { Equipo_1: "El valler", Goles_E1: 0, Equipo_2: "Abejas sport", Goles_E2: 3, Fecha: "27-09-2018", Hora: "09:00 am" },
                    "Partido 3": { Equipo_1: "Campesinos", Goles_E1: 4, Equipo_2: "Niupi", Goles_E2: 1, Fecha: "27-09-2018", Hora: "10:00 am" },
                    "Partido 4": { Equipo_1: "Dream team", Goles_E1: 0, Equipo_2: "Ingeniebrios", Goles_E2: 1, echa: "27-09-2018", Hora: "11:00 am" },
                },
                "Jornada 3": {
                    "Partido 1": { Equipo_1: "Dream team", Goles_E1: 0, Equipo_2: "Ingeniebrios", Goles_E2: 1, Fecha: "02-10-2018", Hora: "08:00 am" },
                    "Partido 2": { Equipo_1: "Campesinos", Goles_E1: 4, Equipo_2: "Niupi", Goles_E2: 6, Fecha: "02-10-2018", Hora: "09:00 am" },
                    "Partido 3": { Equipo_1: "El valler", Goles_E1: 2, Equipo_2: "Abejas sport", Goles_E2: 1, Fecha: "02-10-2018", Hora: "10:00 am" },
                    "Partido 4": { Equipo_1: "Maluma babys", Goles_E1: 0, Equipo_2: "Sin nombre", Goles_E2: 3, echa: "02-10-2018", Hora: "11:00 am" },
                },
                "Jornada 4": {
                    "Partido 1": { Equipo_1: "Maluma babys", Goles_E1: 0, Equipo_2: "Sin nombre", Goles_E2: 2, Fecha: "09-10-2018", Hora: "08:00 am" },
                    "Partido 2": { Equipo_1: "El valler", Goles_E1: 4, Equipo_2: "Abejas sport", Goles_E2: 3, Fecha: "09-10-2018", Hora: "09:00 am" },
                    "Partido 3": { Equipo_1: "Campesinos", Goles_E1: 6, Equipo_2: "Niupi", Goles_E2: 4, Fecha: "09-10-2018", Hora: "10:00 am" },
                    "Partido 4": { Equipo_1: "Dream team", Goles_E1: 0, Equipo_2: "Ingeniebrios", Goles_E2: 1, echa: "09-10-2018", Hora: "11:00 am" },
                },
                "Jornada 5": {
                    "Partido 1": { Equipo_1: "Dream team", Goles_E1: 3, Equipo_2: "Ingeniebrios", Goles_E2: 1, Fecha: "16-09-2018", Hora: "08:00 am" },
                    "Partido 2": { Equipo_1: "Campesinos", Goles_E1: 1, Equipo_2: "Niupi", Goles_E2: 0, Fecha: "16-09-2018", Hora: "09:00 am" },
                    "Partido 3": { Equipo_1: "El valler", Goles_E1: 2, Equipo_2: "Abejas sport", Goles_E2: 1, Fecha: "16-09-2018", Hora: "10:00 am" },
                    "Partido 4": { Equipo_1: "Maluma babys", Goles_E1: 3, Equipo_2: "Sin nombre", Goles_E2: 0, echa: "16-09-2018", Hora: "11:00 am" },
                },
    };

var Tabla = {
            "Niupi":        { PJ: 7, G: 6, E: 0, P: 0, GF: 41, GE: 29, Dif: 12, Puntos: 19 },
            "El valler":    { PJ: 7, G: 6, E: 1, P: 1, GF: 39, GE: 24, Dif: 15, Puntos: 18 },
            "Ingeniebrios": { PJ: 7, G: 5, E: 5, P: 1, GF: 38, GE: 20, Dif: 18, Puntos: 16 },
            "Sin nombre":   { PJ: 7, G: 1, E: 0, P: 1, GF: 31, GE: 30, Dif: 1, Puntos: 8 },
            "Dream team":   { PJ: 7, G: 2, E: 0, P: 5, GF: 21, GE: 36, Dif: 15, Puntos: 6 },
            "Abejas sport": { PJ: 7, G: 1, E: 0, P: 6, GF: 24, GE: 40, Dif: 16, Puntos: 3 },
            "Campesinos":   { PJ: 7, G: 1, E: 0, P: 6, GF: 30, GE: 39, Dif: 9, Puntos: 3 },
            "Maluma babys": { PJ: 7, G: 6, E: 0, P: 1, GF: 3, GE: 6, Dif: 3, Puntos: 0 },
};

$('#ddJornadas').on('click', 'li', function(){
    ShowResultsGames($(this).text());
});

$(document).ready(function(){
    PutJornadasInMenu();
    var LastGames = $('#ddJornadas').children().eq(($('#ddJornadas').children().length - 1)).text();

    ShowResultsGames(LastGames);
});

function PutJornadasInMenu(){
    for( i in Jornadas ){
        $('#ddJornadas').append("<li><a href='#!'>"+i+"</a></li>");
    }
}

function ShowResultsGames(n){
    var InfoGames = Jornadas[n];

    $('#NumJornada').empty().text(n);
    $('.games-result').empty();
    for( i in InfoGames ){
        var Game = InfoGames[i];

        $('.games-result')
        .append("<div class='card hoverable'>"+
                    "<div class='card-content'>"+
                        "<div class='row rowCardResultGame'>"+
                            "<div class='col s4 m4 center-align sizeTeams' id='E1_left'>"+Game.Equipo_1+"</div>"+
                            "<div class='col s4 m4 center-align border-lr sizeGoals' id='Goles'> "+Game.Goles_E1+" - "+Game.Goles_E2+" </div>"+
                            "<div class='col s4 m4 center-align sizeTeams' id='E2_right'> "+Game.Equipo_2+" </div>"+
                        "</div>"+
                    "</div>"+                                  
                    "<div class='card-action grey lighten-5'>"+
                        "<div class='center-align marginHour' id='DateGame'> "+Game.Fecha+" - "+Game.Hora+" </div>"+
                    "</div>"+
                "</div>" );
    }
}

function loadData(){
//  CARGANDO AL INICIAR LA PAGINA LA ULTIMA JORNADA JUGADA
    $.post('Controller/loadData.php', { }, function(data) {
        dataReceive = JSON.parse(data);
        selectJornada(dataReceive[0].Num_Jornada);
    });
    updateGeneralTable();
}

function selectJornada(numJornada){
    var gamesCards = document.getElementById("gamesResultCard");
    var jornada = document.getElementById("jornada").innerHTML = "Resultados de la jornada "+numJornada;

    $.post('Controller/getGamesByJornadas.php', { NumJornada: numJornada }, function(data) {
        dataReceive = JSON.parse(data);

        for( i=0; i<dataReceive.length; i++ ){
            document.getElementById("idGame_"+i).innerHTML = dataReceive[i].ID_Partido;
            document.getElementById("idGame_"+i).style.display = "none";
            document.getElementById("jornada_"+i).innerHTML = numJornada;
            document.getElementById("jornada_"+i).style.display = "none";

            document.getElementById("E1_"+i+"_left").innerHTML = dataReceive[i].Equipo_1;
            document.getElementById("goles_"+i).innerHTML = dataReceive[i].Goles_E1 +" - "+ dataReceive[i].Goles_E2;
            document.getElementById("E2_"+i+"_right").innerHTML = dataReceive[i].Equipo_2;
            document.getElementById("dateGame"+i).innerHTML =  dataReceive[i].Dia+", "+dataReceive[i].Hora +" "+ specificTime(dataReceive[i].Hora);
        }
    });
}

function specificTime(time){
    var t = time.split(":");
    var hour = t[0];
    var minutes = t[1];

    if( hour >= 8 && hour <= 11  )
        return "am";
    else
        return "pm";
}

function loadDataToModify(num){
    var equipo1 = document.getElementById("E1_"+num+"_left");
    var equipo2 = document.getElementById("E2_"+num+"_right");
    var goles = document.getElementById("goles_"+num);
    var goals = goles.textContent.split(" ");
    var idGame = document.getElementById("idGame_"+num);
    var numJornada  = document.getElementById("jornada_"+num);
    var dateGame = document.getElementById("dateGame"+num).textContent;
    var Date = dateGame.split(",")[0];
    var Hour = dateGame.split(",")[1].split(" ")[1];

    document.getElementById("e1").textContent = equipo1.textContent;
    document.getElementById("e2").textContent = equipo2.textContent;

    var txtG1 = document.getElementById("e1Goals");
    var txtG2 = document.getElementById("e2Goals");
    txtG1.value = goals[0];
    txtG2.value = goals[2];
    txtG1.style.borderBottomWidth = "1px";
    txtG1.style.borderBottomColor = "gray";
    txtG2.style.borderBottomWidth = "1px";
    txtG2.style.borderBottomColor = "gray";

    document.getElementById("idGameModal").textContent = idGame.textContent;
    document.getElementById("idGameModal").style.display = "none";
    document.getElementById("idJornadaModal").textContent = numJornada.textContent;
    document.getElementById("idJornadaModal").style.display = "none";
    document.getElementById("setDateModal").value = Date;
    document.getElementById("setHourModal").value = Hour;
}

function ModifyResultGames(){
//    var e1 = document.getElementById("e1").value;
//    var e2 = document.getElementById("e2").value;
    var goals1 = document.getElementById("e1Goals");
    var goals2 = document.getElementById("e2Goals");
    var idGame = document.getElementById("idGameModal").textContent;
    var numJornada = document.getElementById("idJornadaModal").textContent;
    var DateG = document.getElementById("setDateModal").value;
    var HourG = document.getElementById("setHourModal").value;

    if( !isNaN(goals1.value) && !isNaN(goals2.value)){
        $.post('Controller/index/updateResultGames.php', { e1Goals: goals1.value, e2Goals: goals2.value, Date: DateG, Hour: HourG, ID_Game: idGame }, function(data) {
            dataReceived = JSON.parse(data);
    
            if( dataReceive = "Correct" ){
                //  AGREGAR COMPONENTE DE MATERIALIZE PARA INDICAR LA ACTUALIZACION CORRECTA
                $('.modal').modal('close');
                selectJornada(numJornada);
                var status = updateGeneralTable();

                if( status = "Correct" )
                    M.toast({html: '¡Datos actualizados correctamente!', classes: 'rounded green darken-2'});
                else
                    M.toast({html: '¡Error! No se pudo actualizar la tabla general', classes: 'rounded deep-orange darken-4'});
            }else{
                M.toast({html: '¡Error! No se pudo actualizar el marcador', classes: 'rounded deep-orange darken-4'});
            }
        });

        goals1.style.borderBottomWidth = "1px";
        goals1.style.borderBottomColor = "gray";
        goals2.style.borderBottomWidth = "1px";
        goals2.style.borderBottomColor = "gray";
    }else{
        if( isNaN(goals1.value) ){
            goals1.style.borderBottomWidth = "2px";
            goals1.style.borderBottomColor = "red";
            M.toast({html: '¡Error! Solo debe teclear números en los campos indicados.', classes: 'rounded deep-orange darken-4'});
        }else{
            goals1.style.borderBottomWidth = "1px";
            goals1.style.borderBottomColor = "gray";
        }

        if( isNaN(goals2.value)){
            goals2.style.borderBottomWidth = "2px";
            goals2.style.borderBottomColor = "red";
            M.toast({html: '¡Error! Solo debe teclear números en los campos indicados.', classes: 'rounded deep-orange darken-4'});
        }else{
            goals2.style.borderBottomWidth = "1px";
            goals2.style.borderBottomColor = "gray";
        }
    }
}

function updateGeneralTable(){
    $.post('Controller/index/updateGeneralTable.php', {}, function(data) {
        dataReceive = JSON.parse(data);

        if( dataReceive == 'Correct' )
            return 'Correct';
        else
            return 'Failed!';
    });
}

function clearBoxes(){
//    loadData();
    var usr = document.getElementById("txtUser").value = "";
    var pwd = document.getElementById("txtPassword").value = "";
}

function verifyDataUser(){
    var usr = document.getElementById("txtUser").value;
    var pwd = document.getElementById("txtPassword").value;
    var danger = document.getElementById("alertDanger");
    var success = document.getElementById("alertSuccess");

    $.post('Controller/logInController.php', { user: usr, password: pwd }, function(data) {
        dataReceive = JSON.parse(data);
//        alert(dataReceive);
//        document.getElementById("").innerHTML = dataReceive;

        if( dataReceive === "null" ){
            M.toast({html: 'Usuario o contraseña incorrectos', classes: 'rounded deep-orange darken-4'});
        }else if( dataReceive === "Administrador" ){
            M.toast({html: '¡Bienvenido usuario administrador!', classes: 'rounded green darken-2'});
            setTimeout(function(){location.href ="adminView.php"}, 1000);
        }
    });
}






function closeSession(){
    $.post('Controller/logOutController.php', {datos: "datos"}, function(data){
        
    });

}

// PROTOTIPO DE UNA PETICION AJAX
function getData(){
    $.ajax({
        // la URL para la petición
        url : '/logInController',
        // la información a enviar
        // (también es posible utilizar una cadena de datos)
        data : { user : $("#txtUser"), password : $("#txtPassword") },

        // especifica si será una petición POST o GET
        type : 'POST',

        // el tipo de información que se espera de respuesta
        dataType : 'json',

        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(dataOutput) {
            alert("Response -> "+ dataOutput);
        },

        // código a ejecutar si la petición falla;
        // son pasados como argumentos a la función
        // el objeto de la petición en crudo y código de estatus de la petición
        error : function(xhr, status) {
            alert('Disculpe, existió un problema');
        },

        // código a ejecutar sin importar si la petición falló o no
        complete : function(xhr, status) {
            alert('Petición realizada');
        }
    });
}

