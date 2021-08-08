$(document).ready(() => {
  verTabatasGuardadas();
  document.querySelector("#TT").innerHTML = secondsToString(tiempoTotal);
  document.querySelector("#Title").innerHTML = 'Tabata '+ nombre;
});

let url_string = window.location.href;
let url = new URL(url_string);
console.log(url_string);

var imagenes = ["imgbrazo", "imgbrazo1", "imgbrazo2", "imgbrazo3", "imgpierna", "imgpierna2", "imgpierna3", "imgabdomen"];


let nombre = url.searchParams.get("nombre");
let preparacion = url.searchParams.get("preparacion");
let actividad = url.searchParams.get("actividad");
let descanso = url.searchParams.get("descanso");
let series = url.searchParams.get("series");
let rondas = url.searchParams.get("rondas");
let idTabata = url.searchParams.get("idTabata");

var tiempoSerie =
  parseInt(descanso) + parseInt(actividad) + parseInt(preparacion);

var tiempoRonda =
  (parseInt(descanso) + parseInt(actividad)) * parseInt(series) +
  parseInt(preparacion);
var tiempoTotal =
  ((parseInt(descanso) + parseInt(actividad)) * parseInt(series) +
    parseInt(preparacion)) *
  parseInt(rondas);

console.log(tiempoRonda);
console.log(tiempoTotal);

function verTabatasGuardadas() {
  document.getElementById("list-group-selec").innerHTML +=
    `<tr>
    <td>` +
    preparacion +
    `</td>
    <td>` +
    actividad +
    `</td>
    <td>` +
    descanso +
    `</td>
    <td>` +
    series +
    `</td>
    <td>` +
    rondas +
    `</td>
    <td>` +
    secondsToString(tiempoTotal) +
    `</td></tr>`;
}

function secondsToString(seconds) {
  var hour = Math.floor(seconds / 3600);
  hour = hour < 10 ? "0" + hour : hour;
  var minute = Math.floor((seconds / 60) % 60);
  minute = minute < 10 ? "0" + minute : minute;
  var second = seconds % 60;
  second = second < 10 ? "0" + second : second;
  return hour + ":" + minute + ":" + second;
}

var setTimer = null;
$("#iniciarTiempo").click(() => {
  setTimer = setInterval(controlTiempo, 1000);
  document.querySelector("#iniciarTiempo").innerHTML = "Iniciar";
});

$("#pararTiempo").click(() => {
  clearInterval(setTimer);
  document.querySelector("#iniciarTiempo").innerHTML = "Reanudar";
});

function controlTiempo() {
  if (tiempoTotal >= 1) {
    tiempoTotal--;
    pancarta();
  }
  
 

  document.querySelector("#TT").innerHTML = secondsToString(tiempoTotal);
}

var auxPreparacion = preparacion;
var auxActividad = actividad;
var auxDescanso = descanso;
var auxSeries = series;
var auxRondas = rondas;

const audio1 = new Audio("../vista/multimedia/preparate.mp3");
// audio1.loop = false;
const audio2 = new Audio("../vista/multimedia/ejercitate.mp3");
// audio2.loop = false;
const audio3 = new Audio("../vista/multimedia/descansa.mp3");
 // audio3.loop = false;
var aux1 =1;
var aux2=1;
var aux3=1;

function pancarta() {
  if (auxRondas > 0) {
    
    if (auxPreparacion > 0) {
      document.querySelector("#tiempoDe").innerHTML = "Preparate: " + auxPreparacion-- + "seg";
      if(aux1 ==1 ){
        audio1.play();
        aux1 = 0;
      }
    
      return;
    }

    if (auxSeries > 0) {
       document.getElementById("imagenejercicio").setAttribute("src", "../vista/img/" + imagenes[8-auxSeries] + ".jpg");
      if (auxActividad > 0) {
        document.querySelector("#tiempoDe").innerHTML = "Tiempo Actividad: " + auxActividad-- + "seg";
        if(aux2 == 1){
          audio2.play();
          aux2 = 0;
        }
        return;
      }

      if (auxDescanso > 0) {
        document.querySelector("#tiempoDe").innerHTML = "Tiempo descanso: " + auxDescanso-- + "seg";
        if(auxDescanso != 0){
          if(aux3 == 1){
            audio3.play();
            aux3 = 0;
          }
          return;
        }
      }
      auxActividad = actividad;
      aux2 = 1;
      auxDescanso = descanso;
      aux3 = 1;
      auxSeries--;
      if(auxSeries != 0){
        return;
      }
    }
    auxSeries = series;
    auxRondas--;
  }
  auxPreparacion = preparacion;
  aux1 = 1;
  return;
}

$("#verEjercicios").click(() => {
  verEjerciciosGuardados();
});

function verEjerciciosGuardados() {
  $.ajax({
    type: "POST",
    url: "../controlador/accion/act_verEjerciciosGuardados.php",
    success: function (data) {
      let array = JSON.parse(data);
      
      array.forEach(function (object) {
        objetoEjercicio = { nombreEjercicio: object.nombre, nombreImagen: object.imagen, idEjercicio: object.idEjercicio }
        arrayEjerciciosPorSeries.push(objetoEjercicio)

      });
    },
  });
  console.log(objetoEjercicio)
}

