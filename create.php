<?php
$nombre = $_POST["nombre_estadio"];
$capacidad = $_POST["capacidad"];
$ubicacion = $_POST["ubicacion"];
$mantenimiento = $_POST["mantenimiento"];

$sql = "INSERT INTO estadio (nombre, capacidad, ubicacion, mantenimiento)
VALUES ('$nombre', '$capacidad', '$ubicacion'  '$mantenimiento')";

if (mysqli_query($conn, $sql)) {
  echo "Estadio creado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>