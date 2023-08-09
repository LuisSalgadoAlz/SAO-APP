<?php
// Incluir el archivo con la clase de conexión a la base de datos (por ejemplo, "conexion.php")
require_once "../conexion.php";


$conexion = new Conexion();

// Obtener el nombre del procedimiento almacenado a ejecutar
$nombreProcedimiento = $_POST['procedimiento'];


if ($nombreProcedimiento === "spInsertarNuevoTecnico") {
  print_r("Estoy entrando");
  $nombre = $_POST['nombre-tecnico'];
  $apellido = $_POST['apellido-tecnico'];
  $Area_de_especializacion = $_POST['area-especializacion'];
  $Fecha_de_nacimiento = $_POST['fecha-nacimiento'];
  $Fecha_de_contratacion = $_POST['fecha-contratacion'];
  $Salario = $_POST['salario'];
  $Horario = $_POST['horario'];

  print_r($Fecha_de_nacimiento);
  $resultado = $conexion->ejecutarProcedimientoAlmacenado($nombreProcedimiento, [$nombre, $apellido, $Area_de_especializacion, $Fecha_de_nacimiento, $Fecha_de_contratacion, $Salario, $Horario]);
}

if ($nombreProcedimiento === "spEliminarTecnico") {
  $id = $_POST['id'];
  $resultado = $conexion->ejecutarProcedimientoAlmacenado($nombreProcedimiento, [$id]);

  if ($resultado) {
    $response = array('success' => true, 'message' => 'Tecnico eliminado exitosamente.');
  } else {
    $response = array('success' => false, 'message' => 'Error al eliminar el tecnico.');
  }

  // Devolver la respuesta en formato JSON
  header('Content-Type: application/json');
  echo json_encode($response);
}

if (isset($_GET['getComboData']) && $_GET['getComboData'] === 'true') {
  $sql = "select * from vAreaEspecializacion";
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

if (isset($_GET['getComboDataHorario']) && $_GET['getComboDataHorario'] === 'true') {
  $sql = "select * from vHorario";
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
if (isset($_GET['getDataTecnico']) && $_GET['getDataTecnico'] === 'true') {
  $sql = "select * from vTecnicos";
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

?>