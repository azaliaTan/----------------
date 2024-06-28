<?php 

if(isset($_SESSION['user_id'])){
    echo '<script>document.location.href="?page=profile"</script>';
}

?>


<div class="forma">


  <?php 
  $name='';
  $email='';

  if(isset($_POST['reg'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_repeat=$_POST['password_repeat'];


    $error_name='';
    $error_email='';
    $error_password='';
    $error_rep='';

    if(empty($name)){
        $error_name='pysto';

    }
    if(empty($email)){
        $error_email='pysto';

    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error_email='false';
    }
    if(empty($password)){
        $error_password='pysto';

    } elseif(mb_strlen($password)<5){
        $error_password='korotko';
    }

    if(empty($password_repeat)){
        $error_rep='pysto';
    }elseif($password != $password_repeat){
        $error_rep='ne sovpadayt';

    }

    if(empty($error_name)&& empty($error_email) && empty($error_password) && empty($error_password_rep )&& ($password == $password_repeat)){
        $sql="SELECT COUNT(*) FROM users WHERE email='$email'";
        $user_count=$link->query($sql)->fetchColumn();

        if($user_count==1){
            echo 'вы уже в базе';

        } else{
            $hash_password=password_hash($password,PASSWORD_DEFAULT);
            $sql="INSERT INTO users (`name`,`email`,`password`,`role`) VALUES ('$name','$email', '$hash_password',1)";
            $link->query($sql);
            echo '<script>document.location.href="?page=vhod"</script>';
        }
    } else{
        echo 'регистрация не удалась';
    }
    
  }
  
  
  ?>

    <p id="formp"> Регистрация </p>
   
    <form method="POST" name="reg" id="red">

        <p>Твое имя</p>
        <input type="text" name="name" value="<?=$name?>">
        <?php  if(isset($error_name)){ echo $error_name;}
        ?>

        <p>Адрес почты</p>
        <input type="text" name="email" id="" value="<?=$email?>">
        <?php  if(isset($error_email)){ echo $error_email;}
        ?>

        <p>пароль</p>
        <input type="password" name="password">
        <?php  if(isset($error_password)){ echo $error_password;}
        ?>

        <p>Повторите пароль</p>
        <input type="password" name="password_repeat">
        <?php  if(isset($error_rep)){ echo $error_rep;}
        ?>
       

        <input type="submit" value="Создать" id="vhod" name="reg">
       

    </form>
    <div class="pv">
        <p id="eee">Уже есть аккаунт?</p>
        <a href="?page=vhod">Войти</a>
    </div>



    </div>
