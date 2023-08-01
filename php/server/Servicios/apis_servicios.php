<?php
// Incluir el archivo con la clase de conexión a la base de datos (por ejemplo, "conexion.php")
require_once "../conexion.php";

$conexion = new Conexion();


// Obtener el nombre del procedimiento almacenado a ejecutar
$nombreProcedimiento = $_POST['procedimiento'];

// Crear una instancia de la clase de conexión a la base de datos


//Ejecutar el procedimiento almacenado correspondiente
if ($nombreProcedimiento === "spInsertarNuevoServicio") {
  // Obtener los datos del formulario 1
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];

  $resultado = $conexion->ejecutarProcedimientoAlmacenado($nombreProcedimiento, [$nombre, $descripcion, $precio]);
}

if ($nombreProcedimiento === "spInsertarPaquete") {
  // Obtener los datos del formulario 2
  $nombre = $_POST['name-paquete'];
  $precio = $_POST['precio-i'];
  $servicio = $_POST['servicio-i'];

  $resultado = $conexion->ejecutarProcedimientoAlmacenado($nombreProcedimiento, [$nombre, $precio, $servicio]);
}

if (isset($_GET['getComboData']) && $_GET['getComboData'] === 'true') {
  $sql = "select * from vServicios";
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