<?php
/*Clase para añadir emprendimiento
*/
header("Location: ../inicio_sesion.php");
include_once("../inc/conf.php");
include_once("../inc/dbopen.php");
include_once("../inc/functions.php");

$id_usuario =  filter_var(trim(recibir_variable("POST", "id_usuario"), FILTER_SANITIZE_EMAIL));
$nombre_emprendimiento =  filter_var(trim(recibir_variable("POST", "nombre_emprendimiento"), FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$descripcion =  filter_var(trim(recibir_variable("POST", "descripcion"), FILTER_SANITIZE_NUMBER_INT));
$foto = null;
$estado = 0;
$bloqueos = 0;

if(empty($id_usuario) || empty($nombre_emprendimiento) || empty($descripcion)){
    $_SESSION['mensaje'] = "Intenta denuevo";
    //header("Location: ../registro.php");
    exit;
}

$q="select id_usuario from UsuarioEmprendedor WHERE id_usuario=\"$id_usuario\";";
$respuesta=db_query($q);
$r = $respuesta->fetch_object();

if(! $r->IdEmprendedor == NULL){
    $_SESSION['mensaje'] = "No existe en usuario con las cifras resignadas";
    //header("Location: ../registro.php");
    exit;
}
$agregar="insert into emprendimientos (id_usuario, nombre, descripcion, foto, estado, bloqueos) values($id_usuario,\"$nombre_emprendimiento\", \"$descripcion\", $foto, $estado, $bloqueos);";
    db_query($agregar);
    $_SESSION['mensaje'] = "Emprendimiento creado exitosamente";

include_once("../inc/dbclose.php");
exit;
?>