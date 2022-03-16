<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $data["titulo"]; ?></title>
    </head>

    <body>
        <h2><?php echo $data["titulo"]; ?></h2>
       
        <a href="index.php?c=productos&a=nuevo">Agregar</a>
        
        <br />
        <br />

        <table border="1" width="80%">
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Elemento</th>
                    <th>Descripcion</th>
                    <th>Peso</th>
                    <th>Cantidad</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($data["productos"] as $dato) {
                    echo "<tr>";
                    echo "<td>".$dato["categoria"]."</td>";
                    echo "<td>".$dato["elemento"]."</td>";
                    echo "<td>".$dato["descripcion"]."</td>";
                    echo "<td>".$dato["peso"]."</td>";
                    echo "<td>".$dato["cantidad"]."</td>";
                    echo "</tr>";
                    

                }
                ?>
                
            </tbody>

        </table>

    </body>

</html>
