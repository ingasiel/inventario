<?php

session_start();

if(isset($_SESSION['nombredeusuario'])){
    $usuarioingresado = $_SESSION['nombredeusuario'];
}else{
    header('location: inicio.php');

}

if(isset($_POST["cerrar_sesion"])){
    session_destroy();
    header("location: index.html");
}

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="Css/principal15.css">
        <link rel="icon" href="Recursos/Img/logo.png" type="img/png">
    </head>
    <body style="overflow-y:hidden">
    </body>
</html>

<?php


include("conexion.php");


$ejecutable=0;
if($ejecutable==0){

    function salir(){
        exit();
    }

function principal(){
echo'<div class="contenedor_sistema">
<div class="circulo1_del_contenedor_inicio"></div>
<div class="circulo2_del_contenedor_inicio"></div>

<div class="seccion_menu_sistema">
    <div class="seccion_menu_sistema_superior"></div>
    <div class="seccion_menu_sistema_intermedio"></div>
    <div class="seccion_menu_sistema_inferior">
        <div class="opciones_seccion_menu_sistema_inferior">
            <div class="opciones_seccion_menu_sistema_inferior_imagen">
                <img src="Recursos/Img/usuario1.png" class="imagen_de_opciones_menu">
            </div>
            <div class="opciones_seccion_menu_sistema_inferior_texto">
                <form method="POST" class="form_opciones">
                    <input type="submit" class="opciones_menu_texto" value="'.$usuarioingresado.'" name="">
                </form>
            </div>
        </div>
        <div class="opciones_seccion_menu_sistema_inferior">
            <div class="opciones_seccion_menu_sistema_inferior_imagen">
                <img src="Recursos/Img/configuraciones.png" class="imagen_de_opciones_menu">
            </div>
            <div class="opciones_seccion_menu_sistema_inferior_texto">
                <form method="POST" class="form_opciones">
                    <input type="submit" class="opciones_menu_texto" value="Configuración" name="">
                </form>
            </div>
        </div>
        <div class="opciones_seccion_menu_sistema_inferior">
            <div class="opciones_seccion_menu_sistema_inferior_imagen">
                <img src="Recursos/Img/cerrarsesion.png" class="imagen_de_opciones_menu">
            </div>
            <div class="opciones_seccion_menu_sistema_inferior_texto">
                <form method="POST" class="form_opciones">
                    <input type="submit" class="opciones_menu_texto" value="Cerrar sesión" name="cerrar_sesion">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="contenedor_resultados_sistemas">
    <div class="seccion_titulo_resultados_sistema">
        <p class="titulo_sistema">Inicio</p>
    </div>

    <div class="seccion_principales_funciones_resultados_sistema">
        <div class="apartado_izquierdo_funciones_principales_sistemas">
            <div class="empresa_funciones_principales">
                <div class="empresa_funciones_principales_imagen"></div>
                <div class="empresa_funciones_principales_texto">
                    <p class="texto_usuario_registrado">'.$usuarioingresado.'</p>
                </div>

            </div>

        </div>
        <div class="apartado_derecho_funciones_principales_sistemas">
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/sucursales.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <p class="texto_tarjetas_funciones_especiales">Sucursales</p>
                </div>
            </div>
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/negocios.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <p class="texto_tarjetas_funciones_especiales">Negocios</p>
                </div>
            </div>
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/empleados.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <form class="form_opciones" method="POST">
                        <input type="submit" class="texto_tarjetas_funciones_especiales" value="Empleados" name="opcion_empleados">
                    </form>
                </div>
            </div>
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/inventario.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <p class="texto_tarjetas_funciones_especiales">Inventario</p>
                </div>
            </div>
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/comunicados.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <p class="texto_tarjetas_funciones_especiales">Comunicados</p>
                </div>
            </div>
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/reportes.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <p class="texto_tarjetas_funciones_especiales">Reportes</p>
                </div>
            </div>
            
        </div>
    </div>

    <div class="seccion_otras_funciones_resultados_sistema">
        <div class="tarjetas_otras_funciones_resultados_sistemas">
            <div class="seccion_imagen_tarjeta_funciones_resultados_sistemas">
                <img src="Recursos/Img/clientes.png" class="imagen_tarjeta_funciones_resultados_sistemas">
            </div>
            <div class="seccion_texto_cantidad_tarjeta_funciones_resultados_sistemas">
                <p class="texto_cantidad_tarjeta_funciones_resultados_sistemas">Registrados</p>
            </div>
            <div class="seccion_texto_nombre_tarjeta_funciones_resultados_sistemas">
                <p class="texto_nombre_tarjeta_funciones_resultados_sistemas">Clientes</p>
            </div>
        </div>
        <div class="tarjetas_otras_funciones_resultados_sistemas">
            <div class="seccion_imagen_tarjeta_funciones_resultados_sistemas">
                <img src="Recursos/Img/etiqueta.png" class="imagen_tarjeta_funciones_resultados_sistemas">
            </div>
            <div class="seccion_texto_cantidad_tarjeta_funciones_resultados_sistemas">
                <p class="texto_cantidad_tarjeta_funciones_resultados_sistemas">Etiquetas</p>
            </div>
            <div class="seccion_texto_nombre_tarjeta_funciones_resultados_sistemas">
                <p class="texto_nombre_tarjeta_funciones_resultados_sistemas">Categorías</p>
            </div>
        </div>
        <div class="tarjetas_otras_funciones_resultados_sistemas">
            <div class="seccion_imagen_tarjeta_funciones_resultados_sistemas">
                <img src="Recursos/Img/calendario.png" class="imagen_tarjeta_funciones_resultados_sistemas">
            </div>
            <div class="seccion_texto_cantidad_tarjeta_funciones_resultados_sistemas">
                <p class="texto_cantidad_tarjeta_funciones_resultados_sistemas">Actividades</p>
            </div>
            <div class="seccion_texto_nombre_tarjeta_funciones_resultados_sistemas">
                <p class="texto_nombre_tarjeta_funciones_resultados_sistemas">Calendario</p>
            </div>
        </div>
        <div class="tarjetas_otras_funciones_resultados_sistemas">
            <div class="seccion_imagen_tarjeta_funciones_resultados_sistemas">
                <img src="Recursos/Img/convenio.png" class="imagen_tarjeta_funciones_resultados_sistemas">
            </div>
            <div class="seccion_texto_cantidad_tarjeta_funciones_resultados_sistemas">
                <p class="texto_cantidad_tarjeta_funciones_resultados_sistemas">Vigentes</p>
            </div>
            <div class="seccion_texto_nombre_tarjeta_funciones_resultados_sistemas">
                <p class="texto_nombre_tarjeta_funciones_resultados_sistemas">Convenios</p>
            </div>
        </div>
    </div>
</div>

</div>

</div>';

}


if(isset($_POST["opcion_empleados"])){
echo'<div class="contenedor_sistema">
<div class="circulo1_del_contenedor_inicio"></div>
<div class="circulo2_del_contenedor_inicio"></div>

<div class="seccion_menu_sistema">
    <div class="seccion_menu_sistema_superior"></div>
    <div class="seccion_menu_sistema_intermedio"></div>
    <div class="seccion_menu_sistema_inferior">
        <div class="opciones_seccion_menu_sistema_inferior">
            <div class="opciones_seccion_menu_sistema_inferior_imagen">
                <img src="Recursos/Img/usuario1.png" class="imagen_de_opciones_menu">
            </div>
            <div class="opciones_seccion_menu_sistema_inferior_texto">
                <form method="POST" class="form_opciones">
                    <input type="submit" class="opciones_menu_texto" value="'.$usuarioingresado.'" name="">
                </form>
            </div>
        </div>
        <div class="opciones_seccion_menu_sistema_inferior">
            <div class="opciones_seccion_menu_sistema_inferior_imagen">
                <img src="Recursos/Img/configuraciones.png" class="imagen_de_opciones_menu">
            </div>
            <div class="opciones_seccion_menu_sistema_inferior_texto">
                <form method="POST" class="form_opciones">
                    <input type="submit" class="opciones_menu_texto" value="Configuración" name="">
                </form>
            </div>
        </div>
        <div class="opciones_seccion_menu_sistema_inferior">
            <div class="opciones_seccion_menu_sistema_inferior_imagen">
                <img src="Recursos/Img/cerrarsesion.png" class="imagen_de_opciones_menu">
            </div>
            <div class="opciones_seccion_menu_sistema_inferior_texto">
                <form method="POST" class="form_opciones">
                    <input type="submit" class="opciones_menu_texto" value="Cerrar sesión" name="cerrar_sesion">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="contenedor_resultados_sistemas">
    <div class="seccion_titulo_resultados_sistema">
        <p class="titulo_sistema">Empleados</p>
    </div>

    <div class="seccion_principales_funciones_resultados_sistema">
        <div class="apartado_izquierdo_funciones_principales_sistemas">
            <div class="empresa_funciones_principales">
                <div class="empresa_funciones_principales_imagen"></div>
                <div class="empresa_funciones_principales_texto">
                    <p class="texto_usuario_registrado">Lista de empleados</p>
                </div>

            </div>

        </div>
        <div class="apartado_derecho_funciones_principales_sistemas">
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/empleados.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <p class="texto_tarjetas_funciones_especiales">Empleados</p>
                </div>
            </div>
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/agregarempleado.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <p class="texto_tarjetas_funciones_especiales">Nuevo empleado</p>
                </div>
            </div>
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/empleados.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <form class="form_opciones" method="POST">
                        <input type="submit" class="texto_tarjetas_funciones_especiales" value="Empleados" name="opcion_empleados">
                    </form>
                </div>
            </div>
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/eliminarempleado.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <p class="texto_tarjetas_funciones_especiales">Eliminar empleado</p>
                </div>
            </div>
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/comunicados.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <p class="texto_tarjetas_funciones_especiales">Modificar empleado</p>
                </div>
            </div>
            <div class="tarjetas_funciones_principales">
                <div class="seccion_imagen_tarjetas_funciones_principales">
                    <img src="Recursos/Img/reportes.png" class="imagen_tarjetasfunciones_especiales">
                </div>
                <div class="seccion_texto_tarjetas_funciones_principales">
                    <p class="texto_tarjetas_funciones_especiales">Ex-empleados</p>
                </div>
            </div>
            
        </div>
    </div>

    <div class="seccion_otras_funciones_resultados_sistema">

        <div class="contenedor_de_opciones_y_funciones_universal">
            <img src="Recursos/Img/basededatos.png" class="imagen_base_de_datos_universal">
        </div>

    </div>
</div>

</div>

</div>';

salir();
}

principal();

} /* Final del IF principal*/


?>