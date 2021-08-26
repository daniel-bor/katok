<?php include("../components/header.php"); ?>
<?php include("../models/db.php"); ?>
<?php include("../models/data.php"); ?>
<div class="slide">
    <div class="image">
        <img src="/images/portada01.jpg" alt="PORTADA_LOGO" class="img-cover">
    </div>
</div>
<div class="content-cover">
    <div class="title-cover">
        <div class="icon-cover"><i class="fas fa-utensils"></i></div>
        <p class="title-title">Inaugurado en 1961, Creadores del Cerdito a la Barbacoa</p>
        <p>Katok es un restaurante de carnes que ha adquirido un nombre que a través de generaciones, nos
            caracteriza el gran sabor de nuestros ahumados de primer nivel.</p>
    </div>

    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'es',
                includedLanguages: 'de,en,fr,it,es',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                gaTrack: true
            }, 'google_translate_element');
        }
    </script>
    <div class="graph-cover">
        <div class="card-cover zoom">
            <div class="title-card">
                <p>Los mejores asados</p>
            </div>
            <div class="text-card">
                <p>La clave para un buen asado se basa principalmente en la materia prima. La elección de la
                    carne
                    que ponemos arriba de la parrilla siempre es de la mas alta calidad y esto define el gran
                    sabor
                    del asado, que se compone de carne,
                    sal y brasas.
                </p>
            </div>
        </div>
        <div class="image-card zoom">
            <img src="" alt="food-cover" id="first_image">
        </div>
    </div>

</div>

<section class="section01" onload="slide.js">
    <div class="botones">
        <div class="btn-slider" onclick="slideR()">
            <i class="fas fa-arrow-circle-right"></i>
        </div>
        <div class="btn-slider" onclick="slideL()">
            <i class="fas fa-arrow-circle-left"></i>
        </div>
    </div>
    <div class="text-place">
        <div class="title-place">
            <p>Instalaciones</p>
        </div>
        <p>Contamos con amplias y lujosas instalaciones para la comodidad de nuestros clientes, este es un destino ideal para disfrutar de una comida diferente con tu familia. Encontrarás tortillas recién salidas del comal, deliciosos ahumados de cerdo, tortillas con queso Chanchol, parrilladas para compartir, chocolate caliente y mucho más.</p>
    </div>
    <div class="image-place zoom-picture">
        <img src="" alt="" id="slide_image">
    </div>
</section>

<section style="display:flex;background-color: rgb(56, 56, 56);">
    <div style="margin: 0 auto;">
        <embed src="https://issuu.com/somascosinstitute/docs/catalogo-katok-/1?ff" class="ember-catalog">
    </div>
    <div class="text-place" style="color: white;">
        <div class="title-place">
            <p>Catalogo</p>
        </div>
        <p style="margin-bottom: 1rem;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi voluptatum cum dolor praesentium eum,
            dolorem odit earum rerum laudantium fugiat quis in. Soluta, molestiae dolores!</p>
        <a href="../doc/Catalogo-Katok-.pdf" download="Restaurante Katok - Catalogo 2021"><button class="download"> Descargar catalogo</button></a>
    </div>
</section>
<section>
    <?php include("../components/mapaSitio.php"); ?>
</section>
<script>
    var datos = <?php echo json_encode($fila); ?>;
</script>
<script src="/libs/slide.js"></script>

<?php include("../components/footer.php"); ?>