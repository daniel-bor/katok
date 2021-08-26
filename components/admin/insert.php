<?php
include("../../components/admin/header.php");
?>
<div class="flex">
    <div class="form mx-auto p-10 my-24 border-2 border-gray-500 rounded-2xl shadow-2xl">
        <form action="/slider/controllers/imgRouting.php" method="post" enctype="multipart/form-data">
            <label for="image" class=" text-2xl">Buscar:</label><br>
            <input type="file" name="image" class="rounded-md border-2 border-gray-400 p-4" require>
            <br><br>
            <label for="description" class=" text-xl">Descripcion:</label><br>
            <textarea name="desc" cols="45" rows="4" maxlength="255" class=" border-2 border-gray-500 rounded-md p-2" require></textarea>
            <br>
            <input type="submit" name="uploading" value="Guardar en servidor" class="my-5 p-5 rounded-xl bg-green-400 cursor-pointer hover:bg-green-900 hover:text-white text-xl shadow-md">
            <a href="/slider/views/dashboard.php" class="my-5 p-5 rounded-xl bg-red-400 cursor-pointer hover:bg-red-900 hover:text-white text-xl shadow-md">Cancelar</a>
        </form>
    </div>
</div>