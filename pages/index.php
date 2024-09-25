<?php
    include_once("../componentes/header.php")
?>
    <main>
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

        $testimonios = array();
        $testimonios['Juan Pérez'] = "¡Una experiencia increíble, me ayudaron a planear mi luna de miel!";
        $testimonios['Ana López'] = "El mejor servicio de atención al cliente, se encargaron de todo.";
        $testimonios['Pedro García'] = "Viajar con ellos fue una de las mejores decisiones que tomé.";
        
        print "<div>";
        foreach ($testimonios as $nombre => $comentario) {
            print "<blockquote class=testimonios><p>$comentario</p><cite>$nombre</cite></blockquote>";
        }
        print "</div>";
    ?>
    <a href="contacto.php" class="boton">Reserva ahora</a>

    </main>
<?php
    include_once("../componentes/footer.php")
?>