<h2 class="cont-titulo">Recomiendanos: </h2>
<div class="columns">
    <div class="column"></div>
    <div class="column is-four-fifths has-text-centered">
        <p>Llena el siguiente formulario para poder compartir y recomendar nuestra página, nuestro restaurante, con tus
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
            <div class="field-label">
                <label class="label">Te ha gustado nuestra página?</label>
            </div>
            <div class="field-body">
                <div class="field is-narrow">
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="member">
                            Sí
                        </label>
                        <label class="radio">
                            <input type="radio" name="member">
                            No
                        </label>
                    </div>
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
                        <input class="input is-danger" type="text" placeholder="ejemplo: Amdmisiones 2022." name="asun" id="" rows="3" required>
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