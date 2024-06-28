

<?php 

if(!isset($_SESSION['user_id'])){
    echo '<script>document.location.href="?page=profil"</script>';
}

if($SIGNIN_USER['role']==1){
    echo  '<script>document.location.href="?page=profil"</script>';
}

?>


<div class="container">

<?php 

if(isset($_GET['id'])){
    $get_id=$_GET['id'];
    $sql="SELECT * FROM category WHERE id='$get_id'";
    $result=$link->query($sql);
    $kat=$result->fetch();



}


 if(isset($_POST['red_kat'])){
    $name=$_POST['name'];

    $error_name='';


    if(empty($name)){
        $error_name='pysto';

    }

    if(empty($error_name)){
        $sql="UPDATE  category SET name='$name'  WHERE id='$get_id'";
        $link->query($sql);
        echo  '<script>document.location.href="?page=admin"</script>';
    }
 }

?>
<form method="POST" name="red_kat" id="red">


<input type="text" name="name" value="<?=$kat['name']?>">
<?php  if(isset($error_name)){ echo $error_name;}
?>
  <input type="submit" value="Создать" id="vhod" name="red_kat">

 </form>
 </div>