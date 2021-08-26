var srcImage = document.getElementById("slide_image");
var homeImage = document.getElementById("first_image");
var numeroImagenes = datos.length;
var posicionImagen = 0;


homeImage.setAttribute("src", datos[1]);
console.log(datos.length);

console.log("los datos tienen: " + numeroImagenes);

if (numeroImagenes == 0) {
    alert("No hay imagenes en la base de datos");
} else {
    pintarImagen(posicionImagen);
}

function slideR() {
    posicionImagen++;
    if (posicionImagen >= numeroImagenes) {
        posicionImagen = 0;
    }
    pintarImagen(posicionImagen);
    console.log(posicionImagen);
}

function slideL() {
    posicionImagen--;
    if (posicionImagen < 0) {
        posicionImagen = numeroImagenes - 1;
    }
    pintarImagen(posicionImagen);
}

function pintarImagen(posicion) {
    srcImage.setAttribute("src", datos[posicion]);
}

/********
 * DETECCION DE TECLAS
 */

function combinacion() {
    var alt = event.keyCode;
    if (alt == 27) {
        closePopup();
    }
}
window.onkeydown = combinacion;