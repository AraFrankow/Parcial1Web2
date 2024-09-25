<?php
    include_once("../componentes/header.php")
?>
    <main>
        <h1>Contactanos:</h1>
        <form action="recibido.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Datos personales:</legend>
                <div>
                    <label for="nombre" class="lugar">Tu nombre</label>
                    <input type="text" name="nombre" id="nombre" required placeholder="Nombre">
                </div>
                <div>
                    <label for="apellido" class="lugar">Tu apellido</label>
                    <input type="text" name="apellido" id="apellido" required placeholder="Apellido">
                </div>
                <div>
                    <label for="email" class="lugar">Email</label>
                    <input type="email" name="email" id="email" required placeholder="Email">
                </div>
                <div>
                    <label for="dni" class="lugar">DNI</label>
                    <input type="number" name="dni" id="dni" required placeholder="Dni">
                </div>
                <div>
                    <label for="archivo" class="lugar">Foto de tu DNI:</label>
                    <input type="file" name="archivo" id="archivo" accept="image/*" required>
                </div>
            </fieldset>    
            <fieldset>
                <legend>Vuelo</legend>
                <div>
                    <label for="ida" class="lugar">Fecha ida</label>
                    <input type="date" name="ida" id="ida" required placeholder="Fecha ida">
                </div>
                <div>
                    <label for="vuelta" class="lugar">Fecha vuelta</label>
                    <input type="date" name="vuelta" id="vuelta" required placeholder="Fecha vuelta">
                </div>
                <div>
                    <label for="pais" class="lugar">Pais</label>
                    <select name="pais" id="pais" required>
                        <option value="Buenos Aires">Buenos Aires</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Mendoza">Mendoza</option>
                        <option value="San Juan">San Juan</option>
                    </select>
                </div>
                        
            </fieldset>
            <div>
                <input type="submit" value="Cargar" class="boton">
            </div>
        </form>
    </main>
<?php
    include_once("../componentes/footer.php")
?>