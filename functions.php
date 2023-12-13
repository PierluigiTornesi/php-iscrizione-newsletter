<?php 
    if((strpos($email,'@')) &&  (strpos($email,'.'))){
        $flag = true;
    }
?>

<?php 
    if($email === ''){
        echo '';
    }else{
        if($flag){
            echo 'La tua email ' . $email . ' é valida';
        }else{
            echo 'La tua email ' . $email . ' non é valida';
        }
    }
?>