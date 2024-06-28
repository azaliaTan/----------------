

<?php 

if(!isset($_SESSION['user_id'])){
    echo '<script>document.location.href="?page=vhod"</script>';
}

?>


<div class="container">

<?php 

if(isset($_GET['id'])){
    $get_id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id='$get_id'";
    $result=$link->query($sql);
    $user=$result->fetch();



}


 if(isset($_POST['red_p'])){
    $name=$_POST['name'];

    $error_name='';


    if(empty($name)){
        $error_name='pysto';

    }

    if(empty($error_name)){
        $sql="UPDATE  users SET name='$name'  WHERE id='$get_id'";
        $link->query($sql);
        echo  '<script>document.location.href="?page=profile"</script>';
    }
 }

?>
<form method="POST" name="red_p" id="red">

<p>Твое имя</p>
<input type="text" name="name" value="<?=$user['name']?>">
<?php  if(isset($error_name)){ echo $error_name;}
?>
  <input type="submit" value="Создать" id="vhod" name="red_p">

 </form>
 </div>