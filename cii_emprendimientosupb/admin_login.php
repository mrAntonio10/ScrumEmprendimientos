<?php
include_once("inc/conf.php");
include_once("inc/functions.php");


$default_style = "forms";
include_once("inc/head.php");
include_once("inc/header_out.php");

?>


<section class="formulario-pantalla">
        <div id="formulario-contenedor">
            <h2>EmprendimientosUPB</h2>
            <form action="crud/login_usuario_administrador.php" method="post">
                <input type="text" name="user" class="input" placeholder="Usuario">
                <input type="password" name="password" class="input" placeholder="Contraseña">

                <button class="cta" type="submit">
                    <span>Iniciar Sesión</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                      <path d="M1,5 L11,5"></path>
                      <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                  </button>

                <br>
            </form>
        </div>
    </section>

<?php
include_once("inc/footer.php");
?>