<?php

require_once "../conexion.php";

$conexion = new Conexion();

// Obtener el nombre del procedimiento almacenado a ejecutar
$nombreProcedimiento = $_POST['procedimiento'];

if ($nombreProcedimiento === "spInsertarContratoPaquete") {
  $cliente = $_POST['cliente'];
  $paquete = $_POST['paquete'];
  $tecnico = $_POST['tecnico'];
  $fechaInicio = $_POST['fechaInicio'];
  $fechaFinal = $_POST['fechaFinal'];

  $resultado = $conexion->ejecutarProcedimientoAlmacenado($nombreProcedimiento, [$cliente, $paquete, $tecnico, $fechaInicio, $fechaFinal]);
}

if (isset($_GET['getComboDataPaquete']) && $_GET['getComboDataPaquete'] === 'true') {
  $sql = "select * from vPaquetes";
  $result = $conexion->query($sql);

  // Almacena los datos en un array 
  $data = array();
  while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    $data[] = $row;
  }

  // Convierte los datos a formato JSON
  $jsonData = json_encode($data);

  // Devuelve los datos JSON
  echo $jsonData;
}

if (isset($_GET['getComboDataTecnico']) && $_GET['getComboDataTecnico'] === 'true') {
  $sql = "select * from vTecnico";
  $result = $conexion->query($sql);

  // Almacena los datos en un array
  $data = array();
  while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    $data[] = $row;
  }

  // Convierte los datos a formato JSON
  $jsonData = json_encode($data);

  // Devuelve los datos JSON
  echo $jsonData;
}