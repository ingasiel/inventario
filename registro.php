<?php

echo"<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Registrar</title>
    <link rel='stylesheet' href='Css/principal15.css'>
</head>
<body style='overflow-y:hidden;'>
    <div class='contenedor_IR'>

        <div class='circulo1_del_contenedor_inicio'></div>
        <div class='circulo2_del_contenedor_inicio'></div>


        <div class='contenedor_formulario_iniciarsesion_IR'>
            <form method='POST' class='formulario_iniciar_sesion_IR'>
                <div class='seccion_titulo_iniciarsesion_IR'>
                    <p class='texto_titulo_formulario_IR'>Nuevo registro</p>
                </div>

                <div class='seccion_campos_formullario_R'>
                    
                    <input type='text' placeholder='Usuario del administrador principal' class='input_R' name='campo_usuarioadmin' required>
                    <input type='text' placeholder='Nombre de la empresa' class='input_R' name='campo_nombredelaempresa' required>

                    <input type='password' placeholder='Contraseña' class='input_R' name='campo_contrasena1' required>
                    <input type='password' placeholder='Confirmar contraseña' class='input_R' name='campo_contrasena2' required>

                    <div class='seccion_boton_IR'>
                        <input type='submit' value='Siguiente' class='input_submit_IR' name='campo_registrar_datos'>
                    </div>

                </div>

                <div class='seccion_mini_opciones_IR'>
                    <div class='seccion_mini_opciones_izquierda_IR'>
                    </div>
                    <div class='seccion_mini_opciones_center_IR'>
                    </div>
                    <div class='seccion_mini_opciones_derecha_IR'>
                        <p class='mini_opciones_IR'>Regístrate</p>
                        <p class='mini_opciones_IR'>¿No puedes acceder?</p>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>";

include("conexion.php");

$varusuarioadmin = $_POST["campo_usuarioadmin"];
$varcontrasena1= $_POST["campo_contrasena1"];
$varcontrasena2 = $_POST["campo_contrasena2"];
$varnombreempresa = $_POST["campo_nombredelaempresa"];


if(isset($_POST["campo_registrar_datos"])){

    $sqlgrabar = "INSERT INTO usuariosgenerales(nombre_de_usuario_admin_principal,contrasena_de_usuario_admin_principal,contrasena2_de_usuario_admin_principal,nombre_de_la_empresa) values ('$varusuarioadmin','$varcontrasena1','$varcontrasena2','$varnombreempresa')";

    if(mysqli_query($conn,$sqlgrabar)){
        echo"<script> alert('Usuario registrado con éxito: $varusuarioadmin'); window.location='sistema.php'</script>";
    }else{
        echo"Error: ".$sql."<br>".mysql_error($conn);
    }
    
}
?>