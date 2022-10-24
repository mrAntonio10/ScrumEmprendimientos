<?php
include_once("inc/conf.php");
include_once("inc/functions.php");

$default_style = "forms.css";
include_once("inc/head.php");
include_once("inc/header_out.php");
?>

<section class="formulario-pantalla">
        <div id="formulario-contenedor">
            <h2>Registro</h2>
            <?php //if(isset($_SESSION['mensaje'])){ echo "<P>".$_SESSION['mensaje']."</P><br>"; unset($_SESSION['mensaje']);}?>
            <form action="crud/add_emprendimiento.php" method="post">
                <input type="email" name="Email" class="input" placeholder="Correo electrónico" required>
                <input type="text" name="NombreEmprendimiento" class="input" placeholder="Nombre" required minlength="4">

                <input type="password" name="Password" class="input" placeholder="Contraseña" required minlength="8">

                <button class="cta" type="submit">
                    <span>Registrar</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                      <path d="M1,5 L11,5"></path>
                      <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                  </button>

            </form>
        </div>
    </section>

<?php
include_once('inc/footer.php');
?>