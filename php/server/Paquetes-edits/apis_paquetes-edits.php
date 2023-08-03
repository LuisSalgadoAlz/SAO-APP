<?php
require_once "../conexion.php";

$conexion = new Conexion();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombreProcedimiento = $_POST['procedimiento'];

  if ($nombreProcedimiento === "spActualizarTablaPaquetesDetalles") {
    $paqueteID = $_POST['paqueteID'];
    $servicio = $_POST['servicio'];

    // Verificar si el servicioID ya existe en la base de datos
    $stmt = $conexion->ejecutarProcedimientosAlmacenado("spVerificarExistenciaServicio", array($servicio));
    $result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

    if ($result["Result"] === 1) {
      echo "El servicioID ya existe en la base de datos.";
    } else {
      // El servicioID no existe, proceder con la actualización
      $resultado = $conexion->ejecutarProcedimientoAlmacenado($nombreProcedimiento, [$paqueteID, $servicio]);
      echo "Actualización exitosa.";
    }
  } else {
    echo "Procedimiento no válido.";
  }
} else {
  echo "Método de solicitud no válido.";
}
?>