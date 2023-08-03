<?php
class Conexion
{
  private $conexion;

  public function __construct()
  {
    $serverName = "DESKTOP-VQK4B55\MSSQLSERVER2"; // Cambiar por el nombre del servidor de SQL Server
    $connectionOptions = array(
      "Database" => "foraneos",
      // Cambiar por el nombre de la base de datos
      "Uid" => "sa",
      // Cambiar por el usuario de la base de datos
      "PWD" => "manedaisdsadnsd" // Cambiar por la contraseña del usuario
    );

    $this->conexion = sqlsrv_connect($serverName, $connectionOptions);

    if ($this->conexion === false) {
      die(print_r(sqlsrv_errors(), true));
    }
  }

  public function ejecutarProcedimientoAlmacenado($nombreProcedimiento, $parametros = [])
  {
    $parametrosString = implode(",", array_fill(0, count($parametros), "?"));
    $query = "{CALL $nombreProcedimiento($parametrosString)}";

    $stmt = sqlsrv_prepare($this->conexion, $query, $parametros);
    if (!$stmt) {
      die(print_r(sqlsrv_errors(), true));
    }

    if (sqlsrv_execute($stmt) === false) {
      die(print_r(sqlsrv_errors(), true));
    }

    return true;
  }

  public function query($sql)
  {
    // Ejecutar la consulta SQL
    $stmt = sqlsrv_query($this->conexion, $sql);
    if ($stmt === false) {
      die(print_r(sqlsrv_errors(), true));
    }
    return $stmt;
  }
}
?>