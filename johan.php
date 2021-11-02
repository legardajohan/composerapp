<?php

if (isset($_POST['boton']) && $_POST['boton'] == 'datos')
{
    echo "<h3>Bienvenido $_POST[nombre] $_POST[apellidos] a PHP!</h3>";
}

?>