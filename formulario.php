<?php
    session_start();

    include_once('Conexion.php');

if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['numero']) && isset($_POST['mensaje'])) {
    function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }


    $nombre =  validar($_POST['nombre']);
    $correo =  validar($_POST['correo']);
    $clave =  validar($_POST['numero']);
    $rClave =  validar($_POST['mensaje']);

    $usuario_Datos = 'nombre=' . $nombre . '&nombre=' . $correo;
    

    if (empty($nombre)) {
        header("location: contactanos.php?errors=El nombre del contacto es requerido&$usuarios_Datos");
        exit();
    }elseif (empty($correo)) {
        header("location: contactanos.php?errors=El correo  es requerido&$usuarios_Datos");
        exit();
    }elseif (empty($telefono)) {
        header("location: contactanos.php?errors=el telefono es requerido&$usuarios_Datos");
        exit();
    }elseif (empty($mensaje)) {
        header("location: contactanos.php?errors=mensaje  requerida&$usuarios_Datos");
        exit();
    }else {
        //hashing
        $clave = md5($clave);

        $sql = "SELECT * FROM contactanos WHERE nombre = '$nombre'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: contactanos.php?errors=Este nombre de contacto ya existe&$usuarios_Datos");
            exit();
        }else {
            $sql2 = "INSERT INTO registro(usuario, correo, contraseña) VALUES ('$nombre','$correo','$telefono','$mensaje')";
            $query2 = $conexion->query($sql2);

            if ($query2) {
                header("location: contactanos.php?success=Mensaje enviado  con exito!&$usuarios_Datos");     
                exit();
            }else {
                header("location: contactanos.php?errors=Error desconocido&$usuarios_Datos");
                exit();
            }
        }
    }

}else {
    header("location: ../contactanos.php");
    exit();
}