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
            
            print "<p>Gracias $nombre $apellido por contar con nosotros, en cuanto tengamos vuelos disponibles con estos requisitos te avisaremos</p>";
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        
            print "<p>Su email: $email</p>";
        }
        if(isset($_POST['salida'])){
            $salida = $_POST['salida'];
        
            print "<p>La fecha de salida: $salida</p>";
        }
        if(isset($_POST['regreso'])){
            $regreso = $_POST['regreso'];
        
            print "<p>La fecha de regreso: $regreso</p>";
        }
        if(isset($_POST['dni'])){
            $dni = $_POST['dni'];
        
            print "<p>Su dni: $dni</p>";
        }
        $imagen = $_FILES ['archivo']['tmp_name'];
        
        $nuevoNombre = time() . "jpg";
        move_uploaded_file($imagen, "../img/$nuevoNombre");
        
        print "
            <figure>
                <img src=../img/$nuevoNombre alt=dni >
            </figure>
        ";
        ?>

    </main>
<?php
    include_once("../componentes/footer.php")
?>