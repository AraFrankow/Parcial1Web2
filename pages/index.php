<?php
    include_once("../componentes/header.php")
?>
    <main class="espacio">
        <?php
        $titulo = array();
        $titulo['Titulo'] = "Preparate para recorrer el mundo";
        foreach ($titulo as $key => $value) {
            print "<h1 class='arreglo'>$value</h1>";
        }

        $desc = array();
        $desc['Texto'] = "Reservá un vuelo con nosotros para empezar una nueva aventura en tu vida.";
        foreach ($desc as $key => $value) {
            print "<p class='arreglo'>$value</p>";
        }

        $subtitulo = array();
        $subtitulo['Subtitulo'] = "Reseñas de nuestros clientes";
        foreach ($subtitulo as $key => $value) {
            print "<h2 class='arreglo'>$value</h2>";
        }

        $testimonios = array();
        $testimonios['Juan Pérez'] = "¡Una experiencia increíble, me ayudaron a planear mi luna de miel!";
        $testimonios['Ana López'] = "El mejor servicio de atención al cliente, se encargaron de todo.";
        $testimonios['Pedro García'] = "Viajar con ellos fue una de las mejores decisiones que tomé.";
        
        print "<div>";
        foreach ($testimonios as $nombre => $comentario) {
            print "<blockquote class=testimonios><p>$comentario</p><cite>$nombre</cite></blockquote>";
        }
        print "</div>";

        $subtitulo2 = array();
        $subtitulo2['Subtitulo'] = "Nuestros destinos";
        foreach ($subtitulo2 as $key => $value) {
            print "<h2 class='arreglo'>$value</h2>";
        }

        $imagenes = array();
        $imagenes['Buenos Aires'] = "../img/buenos_aires.jpg";
        $imagenes['Córdoba'] = "../img/cordoba.jpg";
        $imagenes['Mendoza'] = "../img/mendoza.jpg";
        $imagenes['San Juan'] = "../img/san_juan.jpg";

        foreach ($imagenes as $nombre => $foto) {
            print "<img src=$foto alt=$nombre class=tamanio >";
            
        }
    ?>
    <a href="contacto.php" class="boton">Reservá ahora</a>

    </main>
<?php
    include_once("../componentes/footer.php")
?>