<?php
    include_once("../componentes/header.php")
?>
    <!-- Header -->
    <main>
        <?php
            $titulo = array();
            $titulo['Titulo'] = "Preparate para recorrer el mundo";
            foreach ($titulo as $key => $value) {
                print "<h1>$value</h1>";
            }

            $desc = array();
            $desc['Texto'] = "Reserva un vuelo con nosotros para empezar una nueva aventura en tu vida.";
            foreach ($desc as $key => $value) {
                print "<p>$value</p>";
            }
        ?>

    </main>
    <!-- Footer -->
<?php
    include_once("../componentes/footer.php")
?>