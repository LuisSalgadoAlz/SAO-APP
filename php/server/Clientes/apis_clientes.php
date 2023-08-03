<?php

require_once "../conexion.php";

$conexion = new Conexion();

// Obtener el nombre del procedimiento almacenado a ejecutar
$nombreProcedimiento = $_POST['procedimiento'];

if (isset($_GET['getDataCliente']) && $_GET['getDataCliente'] === 'true') {
  $sql = "select * from vClientes";
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

if ($nombreProcedimiento === "spEliminarCliente") {
  $id = $_POST['id'];
  $resultado = $conexion->ejecutarProcedimientoAlmacenado($nombreProcedimiento, [$id]);

  if ($resultado) {
    $response = array('success' => true, 'message' => 'Cliente eliminado exitosamente.');
  } else {
    $response = array('success' => false, 'message' => 'Error al eliminar el cliente.');
  }

  // Devolver la respuesta en formato JSON
  header('Content-Type: application/json');
  echo json_encode($response);
}