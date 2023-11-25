<?php
session_start();
 include('conexion.php');

 if(isset($_POST['Usuario']) && isset($_POST['Contraseña'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $usuario = validate($_POST['Usuario']);
    $clave   = validate($_POST['Contraseña']);

    if(empty($usuario)){
        header("Location: ingresar.php?errors=El Usuario Es Requerido");
    }else if (empty($clave)){
        header("Location: ingresar.php?errors=La clave Es Requerido");
        exit();
    }else{
        $clave = md5($clave);

        $sql = "SELECT * FROM registro WHERE correo = '$usuario' AND contraseña = '$clave'";
        $result= mysqli_query($conexion,$sql);

        if(mysqli_num_rows($result)== 1){
            $row = mysqli_fetch_assoc($result);
            if($row['correo']=== $usuario && $row['contraseña']=== $clave){
                
                $_SESSION['Id'] = $row['ID'];
                $_SESSION['correo'] = $row['correo'];
                header("Location: index.php?id=".$_SESSION['Id']);
                exit();
            }else {
                header("Location: ingresar.php?errors=El Usuario o su contraseña son Incorrecta");
                exit();
            }
        }else {
            header("Location: ingresar.php?errors=El Usuario o su contraseña son Incorrecta");
            exit();
        }
    }   
 }else {
    header("Location: ingresar.php");
    exit();
}
?>