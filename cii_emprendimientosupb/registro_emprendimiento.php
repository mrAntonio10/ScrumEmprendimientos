<?php
include_once("inc/conf.php");
include_once("inc/functions.php");

$default_style = "forms.css";
include_once("inc/head.php");
include_once("inc/header_in.php");
?>


<section class="formulario-pantalla">
        <div id="formulario-contenedor">
            <h2>Nuevo Emprendimiento</h2>
            <form action="crud/clase_para_add_emprendimiento.php" method="post">
                <input type="text" class="input" placeholder="Nombre del emprendimiento" required name="nombre_emprendimiento" minlength="5"  maxlength="255">
                <input type="hidden" name="id_usuario" value="<?=/*$_SESSION["id"]*/'id'?>">
                <textarea class="input textarea" placeholder="Descipción" name="descripcion_emprendimiento" required maxlength="255"></textarea>

                <button class="cta" type="submit">
                    <span>Enviar solicitud</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                      <path d="M1,5 L11,5"></path>
                      <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                  </button>

                <br>
                <a href="index.php">Cancelar</a>
            </form>
        </div>
    </section>


<?php
include_once('inc/footer.php');
?>