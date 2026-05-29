<?php
date_default_timezone_set('America/Bogota');
$hoy = date("Y-m-d H:i:s");
require 'vendor/autoload.php';
 
$cliente   = new MongoDB\Client("mongodb+srv://alejovargas990126_db_user:9C7cYQjYZowV5lqm@cluster0.yqumqnf.mongodb.net/prueba?appName=Cluster0");
$db        = $cliente->prueba;
$coleccion = $db->gustos;
 
$resultado = $coleccion->insertOne([
    "nombres"    => $_POST["nombres"],
    "deportista" => $_POST["deportista"],
    "pais"       => $_POST["pais"],
    "deporte"    => $_POST["deporte"],
    "logro"      => $_POST["logro"],
    "razon"      => $_POST["razon"],
    "admiracion" => (int)$_POST["admiracion"],
    "registro"   => $hoy
]);
 
echo "
<center>
  <h3 style='border:1px solid #00ff87;background:#0a2e1f;color:#00ff87;padding:1%;margin:2% auto;max-width:600px;border-radius:8px;font-family:monospace;'>
    ✅ Ídolo registrado con ID: " . $resultado->getInsertedId() . "
  </h3>
  <a href='lista.php' style='color:#00ff87;font-family:monospace;'>Ver el Hall of Fame →</a>
</center>
";
 
include "index.html";
?>
 
