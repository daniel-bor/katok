function verMenu() {

    $('.pagina-izquierda').addClass("pagina-izquierda2");

    setTimeout(function () {

        $('.pagina-derecha').addClass("pagina-derecha2");

    }, 300)
}

function cerrarMenu() {
    $('.pagina-derecha').removeClass("pagina-derecha2");

    setTimeout(function () {

        $('.pagina-izquierda').removeClass("pagina-izquierda2");

    }, 300)
}

$('body').on("keydown", function (e) {
    if (e.ctrlKey && e.shiftKey && e.which === 83) {
        var win = window.open("../views/admin.php", '_Self')
        e.preventDefault();
    }
});
$("#button").on("click", function (e) {
    alert("You clicked button");
});

$(document).keyup(function (e) {
    if (e.which == 27) {
        closePopup();
    }
});
/*$(document).bind('keydown', 'ctrl+z', function () {
    //alert("Has pulsado ctrl+z");
    var win = window.open("mostrar.php", '_self');
    win.focus();
});

$(document).bind('keydown', 'ctrl+l', function () {
    alert("Has pulsado ctrl+l");
});*/
