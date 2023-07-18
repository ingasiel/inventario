<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar</title>
    <link rel="stylesheet" href="Css/principal15.css">
</head>
<body style="overflow-y:hidden;">

</body>
</html>

<?php

session_start();

if(isset($_SESSION['nombredeusuario'])){
    header('location: sistema.php');
}

echo'<div class="contenedor_IR">

<div class="circulo1_del_contenedor_inicio"></div>
<div class="circulo2_del_contenedor_inicio"></div>


<div class="contenedor_formulario_iniciarsesion_IR">
    <form method="POST" class="formulario_iniciar_sesion_IR">
        <div class="seccion_titulo_iniciarsesion_IR">
            <p class="texto_titulo_formulario_IR">Iniciar sesión</p>
        </div>
        <div class="seccion_imagen_IR">
            <img src="Recursos/Img/usuario.png" class="imagen_de_IR">
        </div>
        <input type="text" placeholder="Usuario" class="input_IR" name="campo_iniciar_sesion_usuario">
        <input type="password" placeholder="Contraseña" class="input_IR" name="campo_iniciar_sesion_password">
        <div class="seccion_boton_IR">
            <input type="submit" value="Iniciar" class="input_submit_IR" name="input_submit_IR_inicicarsesion">
        </div>

        <div class="seccion_mini_opciones_IR">
            <div class="seccion_mini_opciones_izquierda_IR">
            </div>
            <div class="seccion_mini_opciones_center_IR">
            </div>
            <div class="seccion_mini_opciones_derecha_IR">
                <p class="mini_opciones_IR">Regístrate</p>
                <p class="mini_opciones_IR">¿No puedes acceder?</p>
            </div>
        </div>
    </form>
</div>
</div>';

include("conexion.php");

$varusuarioadmin = $_POST["campo_iniciar_sesion_usuario"];
$varcontrasena1= $_POST["campo_iniciar_sesion_password"];

if(isset($_POST["input_submit_IR_inicicarsesion"])){

    $sqlgrabar = mysqli_query($conn, "SELECT * FROM usuariosgenerales WHERE nombre_de_usuario_admin_principal = '$varusuarioadmin' AND contrasena_de_usuario_admin_principal = '$varcontrasena1'");
    $nr = mysqli_num_rows($sqlgrabar);



    if(!isset($_SESSION['nombredeusuario'])){

        if($nr==1){
            $_SESSION['nombredeusuario']=$varusuarioadmin;
            echo"<script> alert('Sesión iniciada exitosamente: $varusuarioadmin'); window.location='sistema.php'</script>";
        }else if($nr == 0){
            echo"<script> alert('No existe el usuario: $varusuarioadmin'); window.location='inicio.php'</script>";
        }

    }



}

?>