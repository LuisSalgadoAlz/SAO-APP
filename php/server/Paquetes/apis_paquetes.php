<?php

require_once "../conexion.php";

$conexion = new Conexion();

// Obtener el nombre del procedimiento almacenado a ejecutar
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Intentar decodificar los datos JSON recibidos
  $requestData = json_decode(file_get_contents("php://input"));

  if ($requestData !== null) {
    if (isset($requestData->procedimiento)) {
      $nombreProcedimiento = $requestData->procedimiento;

      if ($nombreProcedimiento === "spInsertarContratoPaquete") {
        $cliente = $requestData->clienteID;
        $paquete = $requestData->paqueteID;
        $tecnico = $requestData->tecnicoID;
        $fechaInicio = $requestData->fechaInicio;
        $fechaFinal = $requestData->fechaFinal;

        $resultado = $conexion->ejecutarProcedimientoAlmacenado($nombreProcedimiento, [$cliente, $paquete, $tecnico, $fechaInicio, $fechaFinal]);
      }

      if (isset($_GET['getComboDataCliente']) && $_GET['getComboDataCliente'] === 'true') {
        $sql = "select * from vClientesCombo";
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
    }
  } else {
    $nombreProcedimiento = $_POST['procedimiento'];

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

    if (isset($_GET['getDataEstadoPaquetes']) && $_GET['getDataEstadoPaquetes'] === 'true') {
      $sql = "select * from vEstadoPaquetes";
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

    if (isset($_GET['getComboDataEstadoContrato']) && $_GET['getComboDataEstadoContrato'] === 'true') {
      $sql = "select * from vComboEstadoContrato";
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

    if ($nombreProcedimiento === "spEliminarContratoPaquete") {
      $id = $_POST['id'];
      $resultado = $conexion->ejecutarProcedimientoAlmacenado($nombreProcedimiento, [$id]);

      if ($resultado) {
        $response = array('success' => true, 'message' => 'Contrato eliminado exitosamente.');
      } else {
        $response = array('success' => false, 'message' => 'Error al eliminar el contrato.');
      }

      // Devolver la respuesta en formato JSON
      header('Content-Type: application/json');
      echo json_encode($response);
    }

    if ($nombreProcedimiento === "spMostrarContratoDetalles") {
      $contratoID = $_POST['contratoID'];
      $resultado = $conexion->ejecutarProcedimientosAlmacenado($nombreProcedimiento, [$contratoID]);

      // Obtener los resultados del objeto de declaración
      $data = [];
      while ($row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
        $data[] = $row;
      }

      // Convertir los resultados a formato JSON
      $resultadoJSON = json_encode($data);

      // Establecer encabezados para indicar que la respuesta es en formato JSON
      header('Content-Type: application/json');

      // Imprimir el resultado en formato JSON
      echo $resultadoJSON;
    }

    // if (isset($_GET['getComboDataCliente']) && $_GET['getComboDataCliente'] === 'true') {
    //   $sql = "select * from vClientesCombo";
    //   $result = $conexion->query($sql);

    //   // Almacena los datos en un array
    //   $data = array();
    //   while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    //     $data[] = $row;
    //   }

    //   // Convierte los datos a formato JSON
    //   $jsonData = json_encode($data);

    //   // Devuelve los datos JSON
    //   echo $jsonData;
    // }
  }
} else {
  echo "Método de solicitud no válido.";
}