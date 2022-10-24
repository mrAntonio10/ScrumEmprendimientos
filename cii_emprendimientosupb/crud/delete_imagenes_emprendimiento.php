<?php
/*Clase para eliminar un emprendimiento con sus respectivos productos
*/
header("Location: ../index.php");
include_once("../inc/conf.php");
include_once("../inc/dbopen.php");
include_once("../inc/functions.php");

$idEmprendedor = filter_var(trim(recibir_variable("GET", "idEmprendedor")), FILTER_SANITIZE_NUMBER_INT);

$obtenerDirFotos="SELECT dirFoto FROM Producto WHERE idEmprendedor = $idEmprendedor;";

$a = db_query($obtenerDirFotos);

$direccion='/resources/img_productos/';
while ($r = $a->fetch_object()){

    If (unlink($direccion$r->$dirFoto)) {
        //mensaje de que se elimino con exito la foto
      } else {
        //mensaje que no se encontró/elimino la foto
      }
	
}


$obtenerFotos="SELECT foto FROM Emprendimiento WHERE idEmprendedor = $idEmprendedor;";

$a = db_query($obtenerFotos);

$direccion='/resources/img_banners/';

    If (unlink($direccion$r->$Foto)) {
        //mensaje de que se elimino con exito la foto
      } else {
        //mensaje que no se encontró/elimino la foto
      }


include_once("../inc/dbclose.php");
exit;
?>
