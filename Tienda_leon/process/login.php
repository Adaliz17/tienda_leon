<?php
    session_start();
     require("server.php");
  
    $usuario = $_POST['loginName'];
    $passw = $_POST['loginPassword'];


    $sql = mysql_query("SELECT* FROM login WHERE nombreusr='$usuario'");
    if($f=mysql_fetch_array($sql)){
        if($passw==$f['passwordusr']){
            $_SESSION['id']=$f['Id_usr'];
            $_SESSION['username']=$f['nombreusr'];
            header("Location: ../contenido.php");
        }else{
            echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
        
            echo "<script>location.href='../index.php'</script>";
        }
    }else{
        
        echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
        
        echo "<script>location.href='../index.php'</script>"; 

    }
?>