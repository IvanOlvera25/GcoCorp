<?php

use PhpSpreadsheet\src\PhpSpreadsheet;

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];

// Crear un nuevo objeto Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Agregar los encabezados de las columnas
$sheet->setCellValue('A1', 'Nombre');
$sheet->setCellValue('B1', 'Edad');
$sheet->setCellValue('C1', 'Correo Electrónico');
$sheet->setCellValue('D1', 'Contraseña');
$sheet->setCellValue('E1', 'Ciudad');
$sheet->setCellValue('F1', 'Teléfono');

// Agregar los datos del formulario en la siguiente fila
$sheet->setCellValue('A2', $nombre);
$sheet->setCellValue('B2', $edad);
$sheet->setCellValue('C2', $correo);
$sheet->setCellValue('D2', $contrasena);
$sheet->setCellValue('E2', $ciudad);
$sheet->setCellValue('F2', $telefono);

// Guardar el archivo de Excel
$writer = new Xlsx($spreadsheet);
$writer->save('/GcoCorp/boceto1/datos.xlsx');
?>
