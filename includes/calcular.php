<!DOCTYPE html>
<html>
<head>
    <title>Quincena</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST['calcular'])) {
            $nombre = $_POST['nombre'];
            $sueldo = $_POST['sueldo'];
            $dias = $_POST['dias'];

            $isr = $sueldo < 1000 ? 0.2 : 0.25;

            $salarioTotal = $sueldo * $dias;
            $impuesto = $salarioTotal * $isr;
            $salarioNeto = $salarioTotal - $impuesto;

            $sueldoFormatted = number_format($sueldo, 2, '.', ',');
            $isrFormatted = $isr*100;
            $salarioTotalFormatted = number_format($salarioTotal, 2, '.', ',');
            $salarioNetoFormatted = number_format($salarioNeto, 2, '.', ',');
            $impuestoFormatted = number_format($impuesto, 2, '.', ',');

            echo "<h2>Resultado Quincena</h2>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Sueldo:$ $sueldoFormatted</p>";
            echo "<p>Días trabajados: $dias</p>";
            echo "<p>Salario total:$ $salarioTotalFormatted</p>";
            echo "<p>Impuesto ISR ($isrFormatted%):$ $impuestoFormatted</p>";
            echo "<p>Salario neto:$ $salarioNetoFormatted</p>";

            echo "<a href='../index.php'><button>Volver al formulario</button></a>";
        }
        ?>
    </div>
</body>
</html>
