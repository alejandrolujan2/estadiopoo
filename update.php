<?php
$id = $_POST["id"];
$nombre = $_POST["nombre_estadio"];
$capacidad = $_POST["capacidad"];
$ubicacion = $_POST["ubicacion"];

$sql = "UPDATE estadio SET nombre_estadio='$nombre_estadio', capacidad='$capacidad', ubicacion='$ubicacion', mantenimiento='$mantenimiento' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Estadio actualizado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>