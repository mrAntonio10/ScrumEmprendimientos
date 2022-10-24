<?php
include_once("../inc/conf.php");
include_once("../inc/functions.php");
include_once("../inc/dbopen.php");
$id_emprendedor = recibir_variable("POST", "id_emprendedor");
//header("Location: ../emprendimiento.php?emprendimiento=$id_emprendedor");
if($id_emprendedor == null || $id_emprendedor == 0){exit;}

if( !isAutenticado() || isAdmin() || $_SESSION["id"] != $id_emprendedor){
    exit;
}

$nombre_producto = recibir_variable("POST", "nombre_producto");
$descripcion = recibir_variable("POST", "descripcion");

$id_emprendedor = filter_var(trim($id_emprendedor), FILTER_SANITIZE_NUMBER_INT);
$nombre_producto = filter_var(trim($nombre_producto), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$descripcion = filter_var(trim($descripcion), FILTER_SANITIZE_FULL_SPECIAL_CHARS);


$fic_nombre=$_FILES["foto"]["name"];
$fic_size=$_FILES["foto"]["size"];
$fic_ubicacion= $_FILES["foto"]["tmp_name"];
 
if($fic_size<$peso_maximo){
    $destino = "../resources/img_productos/$id_emprendedor$fic_nombre";

    if(!move_uploaded_file($fic_ubicacion, $destino)){
        $fic_nombre = "logoUPB.jpg";
    }    
}else{
    $fic_nombre = "logoUPB.jpg";
}
$agregar="insert into Producto (id_emprendedor, nombre_producto, descripcion, dir_foto, estado_producto) values ($id_emprendedor,\"$nombre_producto\",\"$descripcion\", \"$id_emprendedor$fic_nombre\", 0);";//En caso de baneo  insert into Producto (id_emprendedor, nombre_producto, descripcion, DirFoto, EstadoProducto) values (\"$id_emprendedor\",\"$nombre_producto\",\"$descripcion\", \"$id_emprendedor$fic_nombre\", Valor); //La variable "Valor" depende de Richard y como decida el valor del Estado
db_query($agregar);

include_once("../inc/dbclose.php");
exit;
?>