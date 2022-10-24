<?php
/*Clase para eliminar un emprendimiento con sus respectivos productos
*/
header("Location: ../index.php");
include_once("../inc/conf.php");
include_once("../inc/dbopen.php");
include_once("../inc/functions.php");

if(!isAdmin()){
	header("Location: ../index.php");
	exit;
}

if(!isset($bloquear)){
    $bloquear = true;
}
$IdEmprendedor = filter_var(trim(recibir_variable("GET", "emprendimiento")), FILTER_SANITIZE_NUMBER_INT);

$eliminarProducto="DELETE FROM Producto WHERE IdEmprendedor = $IdEmprendedor;";
    db_query($eliminarProducto);
$eliminarEmprendimiento="DELETE FROM UsuarioEmprendedor WHERE IdEmprendedor = $IdEmprendedor;";
    db_query($eliminarEmprendimiento);

include_once("../inc/dbclose.php");
exit;
?>
