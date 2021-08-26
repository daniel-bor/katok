<?php include("components/header.php"); ?>
<?php include("./models/db.php"); ?>
<?php include("./models/data.php"); ?>
<?php include("./views/first.php"); ?>
<div class="overlay select" id="over">
    <div class="pop-up">
        <a href="#" onclick="closePopup();" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <div class="pop-up-elements">
            <div class="zoom">
                <img src="<?php echo $pop['Ruta'] ?>" alt="POP_INICIO">
            </div>
            <div class="pop-up-description">
                <h3>¡Bienvenido a Restaurante Katok!</h3>
                <p><?php echo $pop['Descripciones'] ?></p>
            </div>
        </div>
    </div>
</div>
<script>
    function closePopup() {
        var setOver = document.getElementById("over");
        setOver.setAttribute("class", "overlay");
    }
</script>
<script src="./libs/foliar.js"></script>
<?php include("components/footer.php"); ?>