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