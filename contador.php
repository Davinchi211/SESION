   <?php
    //valida la sesion
    if(isset($_SESSION['barney'])){
      //crea un contador en la sesion
      $_SESSION['barney'] +=1;
    }else{
      //Valor 1 a la sesion
      $_SESSION['barney'] =1;
    }
    //envía mensaje/contador de sesión
    $mensaje= $_SESSION['barney'];
    echo $mensaje;

    ?>