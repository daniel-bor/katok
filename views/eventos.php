<?php include("../components/header.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
<main>
    <section class="conteventos">
        <h2 class="cont-titulo">Katok-Eventos</h2>
        <div class="cont-eventosf">
            <img src="../img/even2.jpg" alt="" class="img-about-us zoom">
            <div class="contenido-txt">
                <h3><span>1</span>EVENTOS</h3>
                <p>Puedes encontrar distintos puntos de recreación de manera en la que puedas compartir y crear buenos
                    momentos junto a tu familia, nuestras instalaciones son aptas para cada uno de tus eventos, también
                    con los menús que puedes elegir para compartir desde combos o crear tú propio menú a elección, Katok piensa en ti.</p>
                <h3><span>2</span>RESERVACIÓN - REQUERIMIENTOS</h3>
                <p>Para poder reservar nuestras instalaciones debes tener en cuenta una fecha especifica de tu evento,
                    el número de personas que estaran en el mismo, que menú es el de tu elección y que áreas del nuestro
                    restaurante quieres reservar, el tiempo de tu evento y adicionales que desees integrar, según sea
                    tu opción de evento a realizar</p>
                <a href="../doc/Catalogo-Katok-.pdf" download="Permiso"><button class="download"> Descargar catalogo</button></a>
            </div>
        </div>
    </section>
</main>

<section class="portafolio">
    <div class="contenedor">
        <h2 class="title">Eventos</h2>
        <div class="galeria-port">
            <div class="imagen-port">
                <img src="../img/bautizo1.jpg" alt="">
                <div class="hover-galeria">
                    <img src="../img/log.png" alt="">
                    <p>Katok-Bautizos</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="../img/comu.jpg" alt="">
                <div class="hover-galeria">
                    <img src="../img/log.png" alt="">
                    <p>Katok-Comuniones </p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="../img/cumple.jpg" alt="">
                <div class="hover-galeria">
                    <img src="../img/log.png" alt="">
                    <p>Katok-Cumpleaños</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="../img/quince.jpg" alt="">
                <div class="hover-galeria">
                    <img src="../img/log.png" alt="">
                    <p>Katok-Quinceaños</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="../img/convivio.jpeg" alt="">
                <div class="hover-galeria">
                    <img src="../img/log.png" alt="">
                    <p>Katok-Convivios</p>
                </div>
            </div>
            <div class="imagen-port">
                <img src="../img/boda.jpeg" alt="">
                <div class="hover-galeria">
                    <img src="../img/log.png" alt="">
                    <p>Katok-Bodas</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="recomendar">
    <h2 class="cont-titulo">Recomiendanos</h2>
    <div class="columns">
        <div class="column"></div>
        <div class="column is-four-fifths has-text-centered">
            <p>Llena el siguiente formulario para poder compartir y recomendar nuestro restaurante, con tus
                amigos.</p>
        </div>
        <div class="column"></div>
    </div>

    <form action="enviorec.php" method="POST">
        <div class="form">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Nombre y Apellido:</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" placeholder="Nombre y Apellido" name="nombre" id="" rows="3" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control is-expanded has-icons-left has-icons-right">
                            <input class="input is-success" type="email" placeholder="Email" name="gmail" value="" id="" rows="3" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field is-expanded">
                        <div class="field has-addons">
                            <p class="control">
                                <a class="button is-static">
                                    gmail
                                </a>
                            </p>
                            <p class="control is-expanded">
                                <input class="input" type="email" name="destinatario" placeholder="Destinatario" id="" rows="3" required>
                            </p>
                        </div>
                        <p class="help">Ingresa el gmail de la persona a quien recomiendas nuestra página.</p>
                    </div>
                </div>
            </div>



            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Asunto:</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input is-danger" type="text" placeholder="Ejemplo: ¡¡Tienen los mejores asados de Guate!!" name="asun" id="" rows="3" required>
                        </div>
                        <p class="help is-danger">
                            Campo obligatorio.
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Mensaje</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <textarea class="textarea" placeholder="Expande tu duda para poder apoyarte." name="mensaje" id="" rows="3" required></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label">
                    <!-- Left empty for spacing -->
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <Input class="button is-success" type="submit" value="Enviar Gmail"></Input>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</section>
<?php include("../components/footer.php"); ?>