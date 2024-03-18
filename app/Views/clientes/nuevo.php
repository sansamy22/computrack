<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
    <style> 
        form input {
            display: block; 
        }
    </style>
</head>
<body>
    <form action="<?= base_url('clientes/guardar')?>" method="post">
        <h1>Nuevo Cliente</h1>
        <label for="nombres">Nombres:</label>
        <input type="text"/ name="nombres">
        <label for="apellidos">Apellidos:</label>
        <input type="text"/ name="apellidos">
        <label for="cedula">Cedula:</label>
        <input type="number"/ name="cedula">
        <label for="telefono">Telefono:</label>
        <input type="number"/ name="telefono">
        <label for="email">Email:</label>
        <input type="email"/ name="email">

        <button type="submit">CREAR</button>
    </form>
</body>
</html>