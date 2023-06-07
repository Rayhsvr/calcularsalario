<?php
include "includes/calcular.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Datos</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Calculadora de salario</h2>
        <form action="includes/calcular.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre de trabajador:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="sueldo">Sueldo:</label>
                <input type="number" name="sueldo" id="sueldo" required>
            </div>
            <div class="form-group">
                <label for="dias">Días trabajados:</label>
                <input type="number" name="dias" id="dias" required>
            </div>
            <div class="button-group">
                <button type="submit" name="calcular">Calcular</button>
                <button type="reset">Limpiar</button>
            </div>
        </form>
    </div>
</body>
</html>
