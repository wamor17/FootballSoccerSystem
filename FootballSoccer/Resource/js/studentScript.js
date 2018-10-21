
$(function(){
    loadDataStudents(15);

    $("#FilteringByName").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tableStudents tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$('#FilteringByNumber').on('keyup', function(){
    var txtNumber = $('#FilteringByNumber');
    var n = txtNumber.val();

    if( !isNaN(n) ){
        if( n > 0 && n <= 100 ){
            loadDataStudents(n);
            txtNumber.css('border-bottom', '1px solid green');
        }else{
            txtNumber.val('');
        }
    }else{
        txtNumber.css('border-bottom', '2px solid red');
    }
});

function loadDataStudents(n){
    var tableStudents = document.getElementById('table');
    
    $.post('Controller/students/loadStudentsInfoController.php', {NumStudents: n}, function(data){
        Received = JSON.parse(data);

        var row = "<thead> <tr> <th> Nombre </th> <th> Apellidos </th> <th class='center-align'> NUA </th> <th class='center-align'> Edad </th> <th class='center-align'> Carrera </th> <th class='center-align'> </th> </tr> </thead> <tbody id='tableStudents'>";
        tableStudents.innerHTML = row;
        for(var i=0; i<n; i++){
            var Name = "<td id='studentName"+i+"'>"+ Received[i].Nombre +"</td>";
            var LastName = "<td id='studentLastName"+i+"'>"+ Received[i].Apellidos +"</td>";
            var NUA = "<td class'center-align'>"+ Received[i].NUA +"</td>";
            var Years = "<td class'center-align'>"+ Received[i].Edad +"</td>";
            var Carrier = "<td class'center-align'>"+ Received[i].Carrera +"</td>";
            var Buttons = "<td> <a class='modal-trigger black-text' id='btnModifyStudent' href='#modalModifyStudent' onclick=loadMoreDataStudentModify("+i+")> <i class='material-icons'>edit</i> </button> <a class='modal-trigger black-text' id='btnDeleteStudent' href='#modalDeleteStudent' onclick='loadNameStudentToDelete("+i+")'> <i class='material-icons'>delete</i> </button> </td>";

            row = row + "<tr> "+ Name + LastName + NUA + Years + Carrier + Buttons +"</tr>";
        }
        row = row + "</tbody>";
        tableStudents.innerHTML = row;
    });
}

function loadMoreDataStudentInfo(num){
    // NOMBRE DEL ALUMNO
    var name = document.getElementById("studentName"+num).textContent;
    var lastName = document.getElementById("studentLastName"+num).textContent;
    var completeName = name +" "+ lastName;
    document.getElementById("nameStudentInfo").textContent = completeName;

    // EQUIPO
    document.getElementById("teamInfo").value = document.getElementById("playerTeam"+num).value;
    
    // POSICION
    document.getElementById("positionInfo").value = document.getElementById("playerPosition"+num).value;
    
    // GOLES
    document.getElementById("goalsInfo").value = document.getElementById("playerGoals"+num).value;
}

function loadMoreDataStudentModify(num){
    // NOMBRE
    document.getElementById("txtNameM").value = document.getElementById("studentName"+num).textContent;
    // APELLIDOS
    document.getElementById("txtLastNameM").value = document.getElementById("studentLastName"+num).textContent;
    // EDAD
    document.getElementById("txtAgeM").value = document.getElementById("studentOld"+num).textContent;
    // NUA
    document.getElementById("txtNUAM").value = document.getElementById("studentNUA"+num).textContent;
    // CARRERA
    document.getElementById("txtCarrierM").value = document.getElementById("studentCarrier"+num).textContent;
    // POSICION
    document.getElementById("txtPlayerPositionM").value = document.getElementById("playerPosition"+num).value;
    // EQUIPO
    document.getElementById("txtTeamM").value = document.getElementById("playerTeam"+num).value;
    // GOLES ANOTADOS
    document.getElementById("txtGoalsM").value = document.getElementById("playerGoals"+num).value;
}

function loadNameStudentToDelete(num){
    document.getElementById("nameStudentToDelete").textContent = document.getElementById("studentName"+num).textContent + " " + document.getElementById("studentLastName"+num).textContent;
}
