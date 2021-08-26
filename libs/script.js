function updateMenuDay() {
    var dayMenu = document.getElementById("day_menu").innerHTML;
    updateMenu(dayMenu);
    updateMenuBar("type_day");
}
function updateMenuFinde() {
    var findeMenu = document.getElementById("finde_menu").innerHTML;
    updateMenu(findeMenu);
    updateMenuBar("type_lastweekend");
}
function updateMenuEntradas() {
    var combosMenu = document.getElementById("entry_menu").innerHTML;
    updateMenu(combosMenu);
    updateMenuBar("type_entry");
}
function updateMenu(menu_content) {
    document.getElementById("principal_menu").innerHTML = menu_content;
    console.log("111111");
}

function updateMenuBar(menuSelected) {
    var menuUnselect = document.getElementById("type_principal");
    menuUnselect.setAttribute("class", "menu");
    var menuUnselect = document.getElementById("type_day");
    menuUnselect.setAttribute("class", "menu");
    var menuUnselect = document.getElementById("type_lastweekend");
    menuUnselect.setAttribute("class", "menu");
    var menuUnselect = document.getElementById("type_entry");
    menuUnselect.setAttribute("class", "menu");

    var menuSelect = document.getElementById(menuSelected);
    menuSelect.setAttribute("class", "menu menu-selected");
}

function viewOverlay(nombre, ruta, description, precio) {
    var setOver = document.getElementById("over");
    var setImageOver = document.getElementById("image_over");
    var setName = document.getElementById("nombreMenu");
    var setDescription = document.getElementById("descripcionMenu");
    var setPrice = document.getElementById("precioMenu");

    setName.innerHTML = nombre;
    setDescription.innerHTML = description;
    setPrice.innerHTML = precio;
    setImageOver.setAttribute("src", ruta);
    setOver.setAttribute("class", "overlay select");
}

function closePopup() {
    var setOver = document.getElementById("over");
    setOver.setAttribute("class", "overlay");
}

function googleTranslateElementInit() {
    new google.translate.TranslateElement({ pageLanguage: 'es', includedLanguages: 'en,fr,it,de,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true }, 'google_translate_element');
}
