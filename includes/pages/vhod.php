<?php 

if(isset($_SESSION['user_id'])){
    echo '<script>document.location.href="?page=profile"</script>';
}

?>


<div class="forma">
    <p id="formp"> Авторизация </p>






    <?php 
 $SIGNIN_USER = array();
  $email='';

  if(isset($_POST['vhod'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE email='$email'";
    $result=$link->query($sql);
    $temp_user= $result->fetch();
    
    $error_email='';
    $error_password='';

    if(empty($email)){
        $error_email='pysto';

    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error_email='false';
    }elseif($temp_user==false){
        $error_email='net takogo email';
    }

    if(empty($password)){
        $error_password='pysto';

    } elseif(!password_verify($password, $temp_user['password'])){
        $error_password='neverno';

    }

    if(empty($error_email) && empty($error_password)){
        $_SESSION['user_id']=$temp_user['id'];
        
        $SIGNIN_USER['role']=$temp_user['role'];

        if($SIGNIN_USER['role'] == 1){
            echo '<script>document.location.href="?page=profile"</script>';
        } elseif ($SIGNIN_USER['role'] == 2) {
          echo '<script>document.location.href="?page=admin"</script>';
        }
        }
    }
    
    
    
  
    ?>
   
    <form method="POST" name="vhod" id="red">

<p>Адрес почты</p>
<input type="text" name="email" id="" value="<?=$email?>">
<?php  if(isset($error_email)){ echo $error_email;}
?>

<p>пароль</p>
<input type="password" name="password">
<?php  if(isset($error_password)){ echo $error_password;}
?>




<input type="submit" value="Создать" id="vhod" name="vhod">


</form>
    <div class="pv">
        <p id="eee">Нет аккаунта?</p>
        <a href="?page=reg">создать</a>
    </div>



    </div>
