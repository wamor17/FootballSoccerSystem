
function loadTournamentToModify(num){
    document.getElementById("txtModifyTournament").value = document.getElementById("Tournament"+num).textContent.trim();
    document.getElementById("txtIDModalModify").value = document.getElementById("IDSemestre"+num).value;
}

function loadTournamentToDelete(num){
    document.getElementById("nameTournamentToDelete").textContent = document.getElementById("Tournament"+num).textContent;
    document.getElementById("txtIDModalDelete").value = document.getElementById("IDSemestre"+num).value;
}

function insertTournament(){
    var newTournament = document.getElementById("txtNewTournament").value;

    $.post('Controller/tournaments/insertTournamentController.php', { nuevoTorneo: newTournament }, function(data) {
        dataReceive = JSON.parse(data);

        if( dataReceive = "correct" ){
            M.toast({html: '¡Torneo agregado correctamente!', classes: 'rounded green darken-2'});
            setTimeout(function(){ window.location.reload() }, 1000);
        }else{
            M.toast({html: '¡Error! No se pudo agregar el torneo', classes: 'rounded deep-orange darken-4'});
        }
    });
}

function updateTournament(){
    var idTournament = document.getElementById("txtIDModalModify").value;
    var nameTorneo = document.getElementById("txtModifyTournament").value;
//    alert(idTournament+" "+nameTorneo);

    $.post('Controller/tournaments/updateTournamentController.php', { ID_Tournament: idTournament, Semestre: nameTorneo }, function(data) {
        dataReceive = JSON.parse(data);

        if( dataReceive = "correct" ){
            M.toast({html: '¡Torneo actualizado correctamente!', classes: 'rounded green darken-2'});
            setTimeout(function(){ window.location.reload() }, 1000);
        }else{
            M.toast({html: '¡Error! Al actualizar los datos', classes: 'rounded deep-orange darken-4'});
        }
    });
}

function deleteTournament(){
    var idTournament = document.getElementById("txtIDModalDelete").value;

    $.post('Controller/tournaments/deleteTournamentController.php', { ID_Torneo: idTournament }, function(data) {
        dataReceive = JSON.parse(data);

        if( dataReceive = "correct" ){
            M.toast({html: '¡Torneo eliminado correctamente!', classes: 'rounded green darken-2'});
            setTimeout(function(){ window.location.reload() }, 1000);
        }else{
            M.toast({html: '¡Error! El torneo no se pudo eliminar', classes: 'rounded deep-orange darken-4'});
        }
    });    
}
