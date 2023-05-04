<?php
$sql = "SELECT id, nombre_estadio, capacidad, ubicacion, mantenimiento FROM estadio";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // mostrar los datos de cada fila
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre_estadio"]. " - Capacidad: " . $row["capacidad"]. " - Ubicación: " . $row["ubicacion"]. " - Mantenimiento: " . $row["mantenimiento"]. "<br>";
  }
} else {
  echo "0 resultados";
}
?>