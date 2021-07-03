<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sueldo</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<?php

// Declara arreglo de departamentos
 $departamento = array("COM" => "Compras",
                       "DIR" => "Dirección",
                       "INF" => "Informática",
                       "PER" => "Personal",
                       "VEN" => "Ventas",
                       "MAN" => "Mantenimiento",
                       "MEN" => "Mensajería",
                       "SER" => "Servicios");
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $tipo = $_POST['tipo'];
 $depto = $_POST['depto'];
 $salario = floatval($_POST['salario']);
 $dias = intval($_POST['dias']);
 $bono = 0;
 $isr = 0;
 $quincena = $salario * $dias;
 if ($tipo == "A") {
    $tipoEmp = "Administrativo";
    $bono = $salario * 10;
    $isr = $quincena * 0.25;
  }
  else {
    $tipoEmp = "Operativo";
    $bono = $salario * 5;
    $isr = $quincena * 0.15;
  }
  if ($dias < 15) {
    $bono = 0;
  }
  $importe1 = $quincena + $bono;
  $importe2 = $quincena + $bono - $isr;
 ?>
 <body>
<header>
 <h1>Resultados</h1>
</header>
<section>
 <div id="nomina">
 <ul>
    <li>Nombre: <? echo "$nombre $apellido"; ?> </li>
    <li>Tipo Emp.: <? echo "$tipoEmp, $departamento[$depto]"; ?> </li>
    <li>Salario: <? echo "$ ".number_format($salario,2); ?> </li>
    <li>Días trab.: <? echo $dias; ?> </li>
    <li>Sueldo Antes Impuesto: <? echo "$ ".number_format($importe1,2); ?> </li>
    <li>Sueldo Despues Impuesto: <? echo "$ ".number_format($importe2,2); ?> </li>
 </ul>
</div>
</section>
</body>
</html>
