<?php include("../models/db.php"); ?>
<?php include("../components/header.php"); ?>
<div class="menu-bar">
    <div class="types-menu">
        <div class="menu menu-selected" id="type_principal">
            <a href="">Platillos</a>
        </div>
        <div class="menu" id="type_day">
            <a onclick="updateMenuDay();">Menu del dia</a>
        </div>
        <div class="menu" id="type_lastweekend">
            <a onclick="updateMenuFinde();">Especiales de fin de semana</a>
        </div>
        <div class="menu" id="type_entry">
            <a onclick="updateMenuEntradas();">Entradas</a>
        </div>
    </div>
</div>


<div id="principal_menu">
    <div class="grid-menu">
        <?php
        $querymenuprincipal = "SELECT * FROM menuprincipal";
        $result_task = mysqli_query($conexion, $querymenuprincipal);
        while ($rowprincipal = mysqli_fetch_array($result_task)) { ?>
            <div class="menu-box item" onclick="viewOverlay('<?php echo $rowprincipal['Titulo']; ?>','<?php echo $rowprincipal['Ruta']; ?>','<?php echo $rowprincipal['Descripciones']; ?>','<?php echo $rowprincipal['Precio']; ?>');">
                <div class="catalog-img-box">
                    <figure>
                        <p><?php echo $rowprincipal['Precio']; ?></p>
                        <img src="<?php echo $rowprincipal['Ruta']; ?>" alt="#" />
                    </figure>
                </div>
                <h4 style="color:black"><?php echo $rowprincipal['Nombre']; ?></h4>
                <p><?php echo $rowprincipal['Descripciones']; ?></p>
            </div>
        <?php } ?>
    </div>
</div>


<div id="day_menu">
    <div class="grid-menu">
        <?php
        $querymenudeldia = "SELECT * FROM menudeldia";
        $result_day = mysqli_query($conexion, $querymenudeldia);
        while ($rowdeldia = mysqli_fetch_array($result_day)) { ?>
            <div class="menu-box item" onclick="viewOverlay('<?php echo $rowdeldia['Titulo']; ?>','<?php echo $rowdeldia['Ruta']; ?>','<?php echo $rowdeldia['Descripciones']; ?>','<?php echo $rowdeldia['Precio']; ?>');">
                <div class="catalog-img-box">
                    <figure>
                        <p><?php echo $rowdeldia['Precio']; ?></p>
                        <img src="<?php echo $rowdeldia['Ruta']; ?>" alt="#" />
                    </figure>
                </div>
                <h4><?php echo $rowdeldia['Titulo']; ?></h4>
                <p><?php echo $rowdeldia['Descripciones']; ?></p>
            </div>
        <?php } ?>

    </div>
</div>

<div id="finde_menu">
    <?php include("../components/menu-finde.php"); ?>
</div>

<div id="entry_menu">
    <?php include("../components/menuEntradas.php"); ?>
</div>

<div class="overlay" id="over">
    <div class="pop-up">
        <a href="#" onclick="closePopup();" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <div class="pop-up-elements">
            <div class="zoom-picture">
                <img src="" alt="#" id="image_over">
            </div>
            <div class="pop-up-description">
                <h3 id="nombreMenu"></h3>
                <p id="descripcionMenu"></p>
                <h4 style="color: black;">Precio:<p id="precioMenu"></p>
                </h4>
            </div>
        </div>
    </div>
</div>
<?php include("../components/footer.php"); ?>