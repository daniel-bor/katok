<div class="main-container">
    <div class="linea" style="width: 100%; height: 1px; background-color: black; text-align: center; "></div><br>
    <p class="title is-1" style="text-align: center; color: black; font-size:35px">Contáctanos Vía Email</p>
    <div class="linea" style="width: 100%; height: 1px; background-color: black; text-align: center; "></div><br><br>
    <div class="columns is-mobile">
        <div class="column">
            <form action="../controllers/correo.php" method="POST">
                <p class="tutulo">Nombre:</p>
                <input type="text" name="name" placeholder="Nombre" required><br>
                <p class="tutulo">E-mail:</p>
                <input type="email" name="email" placeholder="Email" required><br>
                <p class="tutulo">Asunto:</p>
                <input type="text" name="asunto" placeholder="Asunto" required><br>
                <p class="tutulo">Telefono:</p>
                <input type="text" name="telefono" placeholder="Telefono" required><br>
                <p class="tutulo">Mensaje:</p>
                <textarea name="msg" placeholder="Mensaje" required></textarea><br><br>
                <input type="submit" style="cursor: pointer;" name="enviar"></button>
            </form>
        </div>
        <div class="column is-mobile">
            <img src="../img/fondoK.jpg" alt="" srcset="" style="margin-top: 100px;">
        </div>
    </div>
</div>