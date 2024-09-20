<?php
    include_once("../componentes/header.php")
?>
    <!-- Header -->
    <main>
        <h2>Contactanos:</h2>
        <form action="recibido.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="nombre">Tu nombre</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="apellido">Tu apellido</label>
                <input type="text" name="apellido" id="apellido">
            </div>
            <div>
                <label for="cuento">Escribí lo que nos quieras contar:</label>
                <textarea name="cuento" id="cuento"></textarea>
            </div>
            <div>
                <label for="imagen">Subí la foto que demuestra lo que decis:</label>
                <input type="file" name="imagen" id="imagen" accept="image/*">
            </div>
        </form>
    </main>
    <!-- Footer -->
<?php
    include_once("../componentes/footer.php")
?>