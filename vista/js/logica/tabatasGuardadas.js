$(document).ready(function () {
    // Modals
  $("#form_edit").load("../componentes/form_editarTabata.php");
  $("#form_agg").load("../componentes/form_aggTabata.php");
// $("#tabla").load("../componentes/tabla.php");

    //TablaConfig
  tablaPersonas = $("#tablaPersonas").DataTable({
    columnDefs: [
      {
        targets: -1,
        data: null,
        defaultContent: `
         <div class="dropdown text-center">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-chevron-down"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li >                  
                    <a class="dropdown-item iniciarTabata" href="#" >
                        Iniciar
                    </a>                   
                </li>
                <li>
                    <a class="editarTabata dropdown-item" data-bs-toggle="modal" data-bs-target="#editarModal" href="#">
                        Editar
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                        Eliminar
                    </a>
                </li>
             </ul>
        </div> 
         `,
      },
    ],

    language: {
      lengthMenu: "Mostrar _MENU_ registros",
      zeroRecords: "No se encontraron resultados",
      info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
      infoFiltered: "(filtrado de un total de _MAX_ registros)",
      sSearch: "Buscar:",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      sProcessing: "Procesando...",
    },
  });

  mostrarTabatasGuardadas();

 
 
});

function mostrarTabatasGuardadas() {
  var http = new XMLHttpRequest();
  var url = "/tabata/controlador/accion/act_verTabatasGuardadas.php";

  http.open("POST", url, true);

  //Send the proper header information along with the request
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  http.onreadystatechange = function () {
    //Call a function when the state changes.
    if (http.readyState == 4 && http.status == 200) {
      var tabatas = JSON.parse(this.responseText);
      console.log(tabatas);
      //
      for (let value of tabatas) {
        tablaPersonas.row
          .add([
            value.idTabata,
            value.nombreTabata,
            value.tPreparacion,
            value.tActividad,
            value.tDescanso,
            value.numSeries,
            value.numRondas,
          ])
          .draw();
      }

      $(".editarTabata").click(function (e) {
        var attrs = e.target.parentNode.parentNode.parentNode.parentNode.parentNode;
        console.log(attrs);
        console.log(attrs.childNodes[5].innerHTML);
        $("#idTabata").val(attrs.childNodes[0].innerHTML);
        $("#nombreTabata").val(attrs.childNodes[1].innerHTML);
        $("#tPreparacion").val(attrs.childNodes[2].innerHTML);
        $("#tActividad").val(attrs.childNodes[3].innerHTML);
        $("#tDescanso").val(attrs.childNodes[4].innerHTML);
        $("#numSeries").val(attrs.childNodes[5].innerHTML);
        $("#numRondas").val(attrs.childNodes[6].innerHTML);
      });
    
      $(".iniciarTabata").click(function (e) {
        var attrs = e.target.parentNode.parentNode.parentNode.parentNode.parentNode;
        console.log(attrs);
        let id = attrs.childNodes[0].innerHTML;
        let nombre = attrs.childNodes[1].innerHTML;
        let tpre = attrs.childNodes[2].innerHTML;
        let tact = attrs.childNodes[3].innerHTML;
        let tdesc = attrs.childNodes[4].innerHTML;
        let nums = attrs.childNodes[5].innerHTML;
        let numr = attrs.childNodes[6].innerHTML;
    
        location.href =
          "tabata_selec.php?nombre=" +
          nombre +
          "&preparacion=" +
          tpre +
          "&actividad=" +
          tact +
          "&descanso=" +
          tdesc +
          "&series=" +
          nums +
          "&rondas=" +
          numr +
          "&idTabata=" +
          id;
      });
    
    
    }
  };
  http.send();
}

// mostrarTabatasGuardadas();

// <button class="btn btn-primary"> Eliminar </button>
// <a class="dropdown-item" href='tabata_selec.php?nombre=`+ tabatas[i].nombreTabata + `&preparacion=` + tabatas[i].tPreparacion + `&actividad=` + tabatas[i].tActividad + `&descanso=` + tabatas[i].tDescanso + `&series=` + tabatas[i].numSeries + `&rondas=` + tabatas[i].numRondas + `&idTabata=` + tabatas[i].idTabata + `'> <button class="btn btn-primary"> Ver </button> </a>

//aegrbgsdh

/* <div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-chevron-down"></i>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
<li><a class="dropdown-item" href='tabata_selec.php?nombre=`+ tabatas[i].nombreTabata + `&preparacion=` + tabatas[i].tPreparacion + `&actividad=` + tabatas[i].tActividad + `&descanso=` + tabatas[i].tDescanso + `&series=` + tabatas[i].numSeries + `&rondas=` + tabatas[i].numRondas + `&idTabata=` + tabatas[i].idTabata + `'>Iniciar</a></li>

<li><a class="editarTabata dropdown-item" data-bs-toggle="modal" data-bs-target="#editarModal" href="#">
Editar
</a></li>

<li><a class="dropdown-item" href="#">Eliminar</a></li>
</ul>
</div> */

//INICIARR
{
  /* <a class="dropdown-item" href='tabata_selec.php?nombre=`+ tabatas[i].nombreTabata + `&preparacion=` + tabatas[i].tPreparacion + `&actividad=` + tabatas[i].tActividad + `&descanso=` + tabatas[i].tDescanso + `&series=` + tabatas[i].numSeries + `&rondas=` + tabatas[i].numRondas + `&idTabata=` + tabatas[i].idTabata + `'> */
}

///Contenido tabla

//     document.getElementById('tabloide').innerHTML += `<tr>
//     <td>`+ tabatas[i].idTabata+ `</td>
//     <td>`+ tabatas[i].nombreTabata + `</td>
//     <td>`+ tabatas[i].tPreparacion + `</td>
//     <td>`+ tabatas[i].tActividad + `</td>
//     <td>`+ tabatas[i].tDescanso + `</td>
//     <td>`+ tabatas[i].numSeries + `</td>
//     <td>`+ tabatas[i].numRondas + `</td>
//     <td>
//     <div class="dropdown">
//     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
//         <i class="fas fa-chevron-down"></i>
//     </button>
//     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
//     <li><a class="dropdown-item" href='tabata_selec.php?nombre=`+ tabatas[i].nombreTabata + `&preparacion=` + tabatas[i].tPreparacion + `&actividad=` + tabatas[i].tActividad + `&descanso=` + tabatas[i].tDescanso + `&series=` + tabatas[i].numSeries + `&rondas=` + tabatas[i].numRondas + `&idTabata=` + tabatas[i].idTabata + `'>Iniciar</a></li>

//     <li><a class="editarTabata dropdown-item" data-bs-toggle="modal" data-bs-target="#editarModal" href="#">
//     Editar
//     </a></li>

//     <li><a class="dropdown-item" href="#">Eliminar</a></li>
//     </ul>
//     </div>
//     </td>

//   </tr>`
