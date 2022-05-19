<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controlador/controladornovedad.php" method="POST">
        
        <label>Descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" required/>
        <label>fecha registro:</label>
        <input type="text" name="fecharegistro" id="fecharegistro" required/>
        <br>
        <button type="submit" name="registrar">Registrar</button>
    </form>
</body>
</html>