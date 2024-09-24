<?php
    include_once("../componentes/header.php")
?>
    <!-- Header -->
    <main>
        <h1>Contactanos:</h1>
        <form action="recibido.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="nombre">Tu nombre</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div>
                <label for="apellido">Tu apellido</label>
                <input type="text" name="apellido" id="apellido" required>
            </div>
            <div>
                <label for="dni">DNI</label>
                <input type="number" name="dni" id="dni" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="salida">Eleji la fecha de salida:</label>
                <input type="date" name="salida" id="salida" required>
            </div>
            <div>
                <label for="regreso">Eleji la fecha de regreso:</label>
                <input type="date" name="regreso" id="regreso" required>
            </div>
            <div>
                <label for="archivo">Subi la foto de tu DNI:</label>
                <input type="file" name="archivo" id="archivo" accept="image/*" required>
            </div>
            <div>
                <input type="submit" value="Cargar">
            </div>
        </form>
    </main>
    <!-- Footer -->
<?php
    include_once("../componentes/footer.php")
?>