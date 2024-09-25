<?php
    include_once("../componentes/header.php")
?>
    <main>
        <h2>Datos recibidos</h2>
        
        <?php
        $imagen;
        $temporal;
        $nuevoNombre;
        $nombre;
        $apellido;
        $email;
        $salida;
        $regreso;
        $dni;

        if (isset($_POST['nombre']) && isset($_POST['apellido'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            
            print "<p class=abajo>Gracias $nombre $apellido por contar con nosotros, en cuanto tengamos vuelos disponibles con estos requisitos te avisaremos</p>";
        }
        print "<ul class=espacio>";
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        
            print "<li><p>Su email: $email</p></li>";
        }
        if(isset($_POST['ida'])){
            $ida = $_POST['ida'];
        
            print "<li><p>Fecha de ida: $ida</p></li>";
        }
        if(isset($_POST['vuelta'])){
            $vuelta = $_POST['vuelta'];
        
            print "<li><p>Fecha de vuelta: $vuelta</p></li>";
        }
        if(isset($_POST['pais'])){
            $pais = $_POST['pais'];
        
            print "<li><p>Destino: $pais</p></li>";
        }
        if(isset($_POST['dni'])){
            $dni = $_POST['dni'];
        
            print "<p><li>Su dni: $dni</p></li>";
        }
        $imagen = $_FILES ['archivo']['tmp_name'];
        
        $nuevoNombre = time() . "jpg";
        move_uploaded_file($imagen, "../img/$nuevoNombre");
        
        print "
            <li><p>Imagen de su dni:</p></li>
            <figure>
                <img src=../img/$nuevoNombre alt=dni class=mandada>
            </figure>
            </ul>
        ";
        ?>

    </main>
<?php
    include_once("../componentes/footer.php")
?>