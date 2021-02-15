
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        function mostrarMascotas($nombre, $animal) {

            echo strtoupper($animal) . " -> $nombre" . "<br>";

        }

 

// Muestra el listado del array:

        array_walk($animales, 'mostrarMascotas');

// Modifica cada value para añadir Nombre: al principi

// Ahora el listado mostrado incluye Nombre:

        array_walk($animales, 'mostrarMascotas');
        
        var_dump($animales);

        ?>
    </body>
</html>
