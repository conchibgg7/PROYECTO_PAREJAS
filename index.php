
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $animales = array(
            "perro" => "Lucas",
            "gato" => "Misi"
        );

        function cambiarNombre(&$nombre, $animal) {
            // Añade Nombre : en cada valor del array
            $nombre = "Nombre: " . $nombre;
        }

        array_walk($animales, 'cambiarNombre');
        
        var_dump($animales);

        ?>
    </body>
</html>
