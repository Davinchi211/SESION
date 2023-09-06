   <?php
    //Numeración y enviandola a la sesión
    if(isset($_SESSION['barney'])){
      $_SESSION['barney'] +=1;
    }else{
      $_SESSION['barney'] =1;
    }
    $mensaje= $_SESSION['barney'];
    echo $mensaje;

    ?>