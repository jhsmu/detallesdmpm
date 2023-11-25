<?php
    session_start();

    include_once('Conexion.php');

if (isset($_POST['Usuario']) && isset($_POST['correo']) && isset($_POST['contraseña']) && isset($_POST['contra'])) {
    function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }


    $usuario =  validar($_POST['Usuario']);
    $correo =  validar($_POST['correo']);
    $clave =  validar($_POST['contraseña']);
    $rClave =  validar($_POST['contra']);

    $usuario_Datos = 'nombre=' . $nombre . '&Nombre=' . $correo;
    

    if (empty($usuario)) {
        header("location: registro.php?errors=El nombre del contacto es requerido&$usuarios_Datos");
        exit();
    }elseif (empty($correo)) {
        header("location: registro.php?errors=El correo  es requerido&$usuarios_Datos");
        exit();
    }elseif (empty($clave)) {
        header("location: registro.php?errors=La clave es requerida&$usuarios_Datos");
        exit();
    }elseif (empty($rClave)) {
        header("location: registro.php?errors=Repetir la clave es requerida&$usuarios_Datos");
        exit();
    }elseif ($clave !== $rClave) {
        header("location: registro.php?errors=Las claves no coinciden&$usuarios_Datos");
        exit();
    }else {
        //hashing
        $clave = md5($clave);

        $sql = "SELECT * FROM registro WHERE usuario = '$usuario'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: registro.php?errors=Este nombre de contacto ya existe&$usuarios_Datos");
            exit();
        }else {
            $sql2 = "INSERT INTO registro(usuario, correo, contraseña) VALUES ('$usario','$correo','$clave')";
            $query2 = $conexion->query($sql2);

            if ($query2) {
                header("location: registro.php?success=Usuario creado con exito!&$usuarios_Datos");     
                exit();
            }else {
                header("location: registro.php?errors=Error desconocido&$usuarios_Datos");
                exit();
            }
        }
    }

}else {
    header("location: ../registro.php");
    exit();
}