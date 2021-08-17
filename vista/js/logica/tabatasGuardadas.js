$(document).ready(function () {
  // Modals
  $("#tabla").load("../componentes/tabla.php");
  $("#form_edit").load("../componentes/form_editarTabata.php");
  $("#form_agg").load("../componentes/form_aggTabata.php");
  $("#form_elim").load("../componentes/form_eliminarTabata.php");

  setTimeout(mostrarTabatasGuardadas, 1000);
});

function mostrarTabatasGuardadas() {
  var url = "/tabata/controlador/accion/act_verTabatasGuardadas.php";

  $.ajax({
    type: "POST",
    url: url,
    success: function (data) {
      let tabatas = JSON.parse(data);
      console.log(data);
      if (tabatas.length == 0) {
        document.getElementById("vacio").innerHTML += `
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">Lista Vacia</h1>
                    
                </div>
            </div>
        </div>`;
      }
      for (let value of tabatas) {
        document.getElementById("list-group").innerHTML +=
          `<tr>
              <td>` +
          value.idTabata +
          `</td>
              <td>` +
          value.nombreTabata +
          `</td>
              <td>` +
          value.tPreparacion +
          `</td>
              <td>` +
          value.tActividad +
          `</td>
              <td>` +
          value.tDescanso +
          `</td>
              <td>` +
          value.numSeries +
          `</td>
              <td>` +
          value.numRondas +
          `</td>
              <td>
                  <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-chevron-down"></i>
                      </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href='tabata_selec.php?&nombre=` +
          value.nombreTabata +
          `&preparacion=` +
          value.tPreparacion +
          `&actividad=` +
          value.tActividad +
          `&descanso=` +
          value.tDescanso +
          `&series=` +
          value.numSeries +
          `&rondas=` +
          value.numRondas +
          `&idTabata=` +
          value.idTabata +
          `'>Ver</a></li>
                  <li><a class="editarTabata dropdown-item" data-bs-toggle="modal" data-bs-target="#editarModal" href="#">
                  Editar
                  </a></li>
                  
                  <li><a class="eliminarTabata dropdown-item" data-bs-toggle="modal" data-bs-target="#eliminarModal" href="#">Eliminar</a></li>
                  </ul>
                  </div>
              </td>
              
              
          </tr>`;
       
      }

      $(".editarTabata").click(function (e) {
        // tablaPersonas.row(':eq(0)', { page: 'current' }).select();
        var attrs =
          e.target.parentNode.parentNode.parentNode.parentNode.parentNode;
        console.log(attrs);
        console.log(attrs.childNodes[5].innerHTML);
        $("#idTabata").val(attrs.childNodes[1].innerHTML);
        $("#nombreTabata").val(attrs.childNodes[3].innerHTML);
        $("#tPreparacion").val(attrs.childNodes[5].innerHTML);
        $("#tActividad").val(attrs.childNodes[7].innerHTML);
        $("#tDescanso").val(attrs.childNodes[9].innerHTML);
        $("#numSeries").val(attrs.childNodes[11].innerHTML);
        $("#numRondas").val(attrs.childNodes[13].innerHTML);
      });

      $(".eliminarTabata").click(function (e) {
        var attrs =
          e.target.parentNode.parentNode.parentNode.parentNode.parentNode;
        console.log(attrs);
        console.log(attrs.childNodes[5].innerHTML);
        $("#idTabataE").val(attrs.childNodes[1].innerHTML);
        $("#nombreTabataE").val(attrs.childNodes[3].innerHTML);
        $("#tPreparacionE").val(attrs.childNodes[5].innerHTML);
        $("#tActividadE").val(attrs.childNodes[7].innerHTML);
        $("#tDescansoE").val(attrs.childNodes[9].innerHTML);
        $("#numSeriesE").val(attrs.childNodes[11].innerHTML);
        $("#numRondasE").val(attrs.childNodes[13].innerHTML);
      });

      $(".iniciarTabata").click(function (e) {
        var attrs =
          e.target.parentNode.parentNode.parentNode.parentNode.parentNode;
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
    },
  });
}

/*

 //   http.open("POST", url, true);

  //   //Send the proper header information along with the request
  //   http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  //   http.onreadystatechange = function () {
  //     //Call a function when the state changes.
  //     if (http.readyState == 4 && http.status == 200) {
  //       var tabatas = JSON.parse(this.responseText);
  //       console.log(tabatas);
  //       //
  //       for (let value of tabatas) {
  //         tablaPersonas.row
  //           .add([
  //             value.idTabata,
  //             value.nombreTabata,
  //             value.tPreparacion,
  //             value.tActividad,
  //             value.tDescanso,
  //             value.numSeries,
  //             value.numRondas,
  //           ])
  //           .draw();
  //       }

  //       $(".editarTabata").click(function (e) {
  //         var attrs = e.target.parentNode.parentNode.parentNode.parentNode.parentNode;
  //         console.log(attrs);
  //         console.log(attrs.childNodes[5].innerHTML);
  //         $("#idTabata").val(attrs.childNodes[0].innerHTML);
  //         $("#nombreTabata").val(attrs.childNodes[1].innerHTML);
  //         $("#tPreparacion").val(attrs.childNodes[2].innerHTML);
  //         $("#tActividad").val(attrs.childNodes[3].innerHTML);
  //         $("#tDescanso").val(attrs.childNodes[4].innerHTML);
  //         $("#numSeries").val(attrs.childNodes[5].innerHTML);
  //         $("#numRondas").val(attrs.childNodes[6].innerHTML);
  //       });

  //       $(".iniciarTabata").click(function (e) {
  //         var attrs = e.target.parentNode.parentNode.parentNode.parentNode.parentNode;
  //         console.log(attrs);
  //         let id = attrs.childNodes[0].innerHTML;
  //         let nombre = attrs.childNodes[1].innerHTML;
  //         let tpre = attrs.childNodes[2].innerHTML;
  //         let tact = attrs.childNodes[3].innerHTML;
  //         let tdesc = attrs.childNodes[4].innerHTML;
  //         let nums = attrs.childNodes[5].innerHTML;
  //         let numr = attrs.childNodes[6].innerHTML;

  //         location.href =
  //           "tabata_selec.php?nombre=" +
  //           nombre +
  //           "&preparacion=" +
  //           tpre +
  //           "&actividad=" +
  //           tact +
  //           "&descanso=" +
  //           tdesc +
  //           "&series=" +
  //           nums +
  //           "&rondas=" +
  //           numr +
  //           "&idTabata=" +
  //           id;
  //       });

  //     }
  //   };
  //   http.send();
*/
