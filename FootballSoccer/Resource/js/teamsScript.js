
var t = "messages";

$(function(){
    SelectedTeam(1);
    $('.collection').find('a').eq(0).addClass('active');

    $('#nameTeam2Delete').text( $('.collection').find('a').eq(0).find('strong').text() );
    console.log( $('.collection').find('a').eq(0).find('strong').text() );
});

var color = "";
$('.collection').on('click', 'a', function(){
    $(this).addClass('active').siblings().removeClass('active');
    var TName =  $(this).find('strong').text();
    var ID = $(this).find('p').eq(0).text();
    color = $(this).find('p').eq(1).text();

//    console.log( TName );
    $("#nameTeam2Delete").text( TName );
    $("#colorTeam").text(color).css('display', 'none');
    $('.imgColorL').css('background-color', color);
    $('.imgColorB').css('background-color', color);
    $('.imgColorR').css('background-color', color);
    $('.imgColorS1').css('background-color', color);
    $('.imgColorS2').css('background-color', color);
    SelectedTeam(ID);
});

function SelectedTeam(n){
    $.post('Controller/teams/selectPlayersByTeamController.php', {ID: n}, function(data){
        Received = JSON.parse(data);
        $('.tPlayersBody').empty();

        Received.forEach(function(element, i){

            $('.tPlayersBody').append(
                "<tr id='PlayerRow"+i+"'>"+
                    "<td class='IDPlayer"+i+"' style='display: none;'>" + element.ID_Jugador + "</td>"+
                    "<td class='playerName"+i+"'>"+ element.Nombre +" "+ element.Apellidos + "</td>"+
                    "<td class='position"+i+"'>"+ element.Posicion +"</td>"+
                    "<td> <p class='goles"+i+"'>"+ element.Goles_Marcados +"</p> </td>"+
                    "<td>"+
                        "<a class='icon-color modal-trigger' href='#modalModifyPlayer' onclick='loadData2ModifyPlayer("+i+")'> <i class='right-align material-icons'>edit</i> </a>"+
                        "<a class='icon-color modal-trigger' href='#modalDeletePlayer' onclick='loadData2DeletePlayer("+i+")'> <i class='right-align material-icons'>delete</i></a>"+
                    "</td>"+
                +"</tr>"
            );

            if( $('.goles'+i).text() <= 0 )
                $('.goles'+i).css('display', 'none');
        });
    });

    $.post('Controller/teams/selectTableByTeamController.php', {ID: n}, function(data){
        Received = JSON.parse(data);
        $('.tStatisticBody').empty();

        Received.forEach(function(element, i){

            if ( element.Diff > 0 ){
                var color = 'green';
                var DiffGoles = "+"+element.Diff;
            }else if ( element.Diff < 0 ){
                var color = 'red';
                var DiffGoles = element.Diff;
            }else{
                var color = 'black';
                var DiffGoles = element.Diff;
            }

            $('.tStatisticBody').append(
                "<tr>"+
                    "<td>"+ element.PJ +"</td>"+
                    "<td>"+ element.PG +"</td>"+
                    "<td>"+ element.PE +"</td>"+
                    "<td>"+ element.PP +"</td>"+
                    "<td>"+ element.GA +"</td>"+
                    "<td>"+ element.GR +"</td>"+
                    "<td style='color:"+color+";'>"+ DiffGoles +"</td>"+
                    "<td> <strong>"+ element.Puntos +"</strong> </td>"+
                +"</tr>"
            );
        });
    });
//selectTableByTeamController
}

function loadData2DeletePlayer(i){
    $("#namePlayer2Delete").text( $('.playerName'+i).text() );
    $('#modalIDPlayer2Delete').val( $('.IDPlayer'+i).text() ).css('display', 'none');
}
// modalNamePlayer, modalPlayerPosition, modalGolesAnotados

function loadData2ModifyPlayer(i){
    $("#modalNamePlayer").text( $(".playerName"+i).text() );
    $("#modalGolesAnotados").val( $('.goles'+i).text() );
    $("#modalPlayerID").text( $('.IDPlayer'+i).text() ).css('display', 'none');

//    var playerPosition = document.getElementById("playerPosition"+n).textContent;    
}

$('li').on('click', function(){
    var element = $(this);
    var state = element.attr('class');
    var icon_expand = element.children().eq(0).children().find('i');
    var brothers = element.siblings().children().eq(0).children().find('i');

    if( icon_expand.text() == "expand_more" ){
        icon_expand.text('expand_less');
        brothers.text('expand_more');
    }else{
        icon_expand.text('expand_more');
        brothers.text('expand_less');
    }
});

$(document).on('change', '.select-wrapper', function(event) {
    var color = $('.select-wrapper #SelectColorTeam option:selected').val();
    $('.ckit').css('background-color', color);
});

$(document).on('change', '.select-wrapper', function(event) {
    var color = $('.select-wrapper #SelectColorTeam option:selected').val();
    $('.ckit').css('background-color', color);
});

$(document).on('change', '.select-wrapper', function(event) {
    var color = $('.select-wrapper #SelectColorTeamUpdate option:selected').val();
    $('.cmkit').css('background-color', color);
});

function openTeam(n){
    $(document).ready(function(){
        $('.collapsTeams').collapsible('open', n);
    });
//    $('#modalModifyTeam').modal('open');
}

function insertTeam(){
    var nameTeam = $('#txtNameTeamModal').val();
    var colorTeam = $('.select-wrapper #SelectColorTeam option:selected').val();
//    alert(nameTeam+" "+colorTeam);
    $.post('Controller/teams/insertTeamController.php', { NewTeam: nameTeam, ColorTeam: colorTeam }, function(data) {
        dataReceive = JSON.parse(data);

        if( dataReceive = "correct" ){
            M.toast({html: '¡Se agregó un nuevo equipo correctamente!', classes: 'rounded green darken-2'});
            setTimeout(function(){ window.location.reload() }, 1000);
        }else{
            M.toast({html: '¡Error! No se pudo agregar el equipo', classes: 'rounded deep-orange darken-4'});
        }
    });
}

function loadDataTeamForModify(num){
    var id = $('#IDTeam'+num).text();
    var nameTeam = $('#nameTeam'+num).text();
    var colorTeam = $('#colorTeam'+num).text();

    $('.ckit').css('background-color', colorTeam);
    $('.select-wrapper #SelectColorTeamUpdate').val(colorTeam).addClass('selected');
//    $('.select-wrapper #SelectColorTeamUpdate').val(colorTeam).attr('class','selected');
    $("#newNameTeam").val(nameTeam);
    $('.IDTeamUpdate').text(id);
}

function loadDataTeamForDelete(num){
    var nameTeam = document.getElementById("nameTeam"+num).textContent.trim();

    document.getElementById("nameTeamToDelete").textContent = nameTeam;
    document.getElementById("IDTeamModalDelete").value = document.getElementById("IDTeam"+num).textContent;
}

function updateTeam(){
    var ID_Team = $('.IDTeamUpdate').text();
    var newName = $("#newNameTeam").val();
    var newColor = $('.select-wrapper #SelectColorTeamUpdate option:selected').val().click();
    var data = {"IDTeam": ID_Team, "NewTeam": newName, "NewColor": newColor};

    $.post('Controller/teams/updateTeamController.php', {dataSend: data}, function(data) {
        dataReceive = JSON.parse(data);

        if( dataReceive = "correct" ){
            M.toast({html: 'Datos del equipo actualizados!', classes: 'rounded green darken-2'});
            setTimeout(function(){ window.location.reload() }, 1000);
        }else{
            M.toast({html: '¡Error! Al actualizar los datos del equipo', classes: 'rounded deep-orange darken-4'});
        }
    });
}

function deleteTeam(){
    var ID_Team = document.getElementById("IDTeamModalDelete").value;

    $.post('Controller/teams/deleteTeamController.php', {IDTeam: ID_Team}, function(data) {
        dataReceive = JSON.parse(data);

        if( dataReceive = "correct" ){
            M.toast({html: 'Equipo eliminado correctamente!', classes: 'rounded green darken-2'});
            setTimeout(function(){ window.location.reload() }, 1000);
        }else{
            M.toast({html: '¡Error! No se puede eliminar el equipo', classes: 'rounded deep-orange darken-4'});
        }
    });
}

function updatePlayer(){
    var playerID = document.getElementById("modalPlayerID").textContent;
    var playerGoals = document.getElementById("modalGolesAnotados").value;
    var playerPosition = document.getElementById("modalPlayerPosition").value;
//    alert(playerID+", "+playerGoals+", "+playerPosition);

    $.post('Controller/teams/updatePlayerController.php', {ID_Jugador: playerID, Posicion: playerPosition, Goles: playerGoals}, function(data) {
        dataReceive = JSON.parse(data);

        if( dataReceive = "Correct" ){
            M.toast({html: '¡Datos actualizados correctamente!', classes: 'rounded green darken-2'});
            setTimeout(function(){ window.location.reload() }, 1000);
            $('body')
        }else
            M.toast({html: '¡Error! No se pudo actualizar la tabla general', classes: 'rounded deep-orange darken-4'});
    });
}

function DeletePlayer(){
    var txtID = document.getElementById("modalIDPlayer2Delete").value;
    var namePlayer = document.getElementById("namePlayer2Delete").textContent;
    var nameTeam = document.getElementById("nameTeam2Delete").textContent;

    $.post('Controller/teams/deletePlayerController.php', {ID_Jugador: txtID, NamePlayer: namePlayer, nameTeam}, function(data) {
        dataReceive = JSON.parse(data);

        if( dataReceive = "Correct" ){
            M.toast({html: '¡Datos actualizados correctamente!', classes: 'rounded green darken-2'});
            setTimeout(function(){ window.location.reload() }, 1000);
        }else
            M.toast({html: '¡Error! No se pudo actualizar la tabla general', classes: 'rounded deep-orange darken-4'});
    });
}

function loadPlayer2Modal(n){
    var IDPlayer = document.getElementById("idAddPlayer"+n).textContent;

    $('#modalPlayerID').text(IDPlayer);
}

function addPlayer2Team(n){
    var IDPlayer = $('#idAddPlayer'+n).text();
    var TeamSelected = $('input:radio[name=teams'+n+']:checked').val();

    if( TeamSelected != null ){
        $.post('Controller/teams/InsertPlayerController.php', {ID_Jugador: IDPlayer, ID_Equipo: TeamSelected}, function(data) {
            dataReceive = JSON.parse(data);
    
            if( dataReceive = "Correct" ){
                M.toast({html: '¡Jugador agregado correctamente!', classes: 'rounded green darken-2'});
                setTimeout(function(){ window.location.reload() }, 1000);
            }else
                M.toast({html: '¡Error! No se pudo agregar al jugador al equipo', classes: 'rounded deep-orange darken-4'});
        });
    }else{
        M.toast({html: 'Seleccione un equipo de la lista', classes: 'rounded yellow lighten-2 black-text'});
    }
}
