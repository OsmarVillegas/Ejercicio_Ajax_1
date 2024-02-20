addEventListener('load', inicializarEventos, false);

function inicializarEventos() {
  for (var f = 1; f <= 12; f++) {
    var ob = document.getElementById('enlace' + f);
    ob.addEventListener('click', presionEnlace, false);
  }
}

function presionEnlace(e) {
  e.preventDefault();
  var cod = e.target.getAttribute('data-cod'); // Usamos data-cod para obtener el código
  cargarHoroscopo(cod);
}

var conexion1;
function cargarHoroscopo(cod) {
  conexion1 = new XMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open("GET", "tu_archivo_php.php?cod=" + cod, true); // Asegúrate de reemplazar 'tu_archivo_php.php' con la ruta real de tu script PHP.
  conexion1.send();
}

function procesarEventos() {
  var detalles = document.getElementById("detalles");
  if (conexion1.readyState == 4) {
    detalles.innerHTML = conexion1.responseText;
  } else {
    detalles.innerHTML = 'Cargando...';
  }
}