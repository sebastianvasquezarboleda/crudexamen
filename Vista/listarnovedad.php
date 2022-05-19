<?php
require_once('../controlador/controladornovedad.php');
$controladornovedad= new controladornovedad();
$listarnovedad = $controladornovedad->listarnovedad();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1' align='center'>
        <thead>
            <tr>
                <th>idreporte</th>
                <th>idambiente</th>
                <th>idtiponovedad</th>
                <th>descripcion</th>
                <th>fecharegistro</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listarnovedad as $novedad){
                    echo "<tr>";
                    echo "<td>".$novedad['IdReporte']."</td>";
                    echo "<td>".$novedad['IdAmbiente']."</td>";
                    echo "<td>".$novedad['IdTipoNovedad']."</td>";
                    echo "<td>".$novedad['Descripcion']."</td>";
                    echo "<td>".$novedad['FechaRegistro']."</td>";
                    echo "<td>
                    <form method='POST' action='../Controlador/controladornovedad.php'>
                    <input type='hidden' name='idreporte' value=".$novedad['IdReporte']." />
                    <button type='submit' name='editar'>Editar</button>
                    </form>
                    <a href='../Controlador/controladornovedad.php?idreporte=".$novedad['IdReporte']."&eliminar'>Eliminar</a>
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>

    </table>
</body>
</html>