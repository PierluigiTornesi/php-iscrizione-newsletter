<?php 
    $flag = false;
    if((strpos($email,'@')) &&  (strpos($email,'.'))){
    $flag = true;
    }
    $class = '';
    if($email === ''){
        $class = 'alert-primary';
    }else{
        if($flag){
            $class = 'alert-success';
        }else{
            $class = 'alert-danger';
        }
    }
?>

<div class="alert   <?php echo $class ?>" role="alert">
    <?php 
    if($email === ''){
        echo 'Inserisci la tua email';
    }else{
        if($flag){
            echo 'La tua email " ' . $email .  ' " é valida';
        }else{
            echo 'La tua email " ' . $email .  ' " non é valida';
        }
    } 
    ?>
</div>