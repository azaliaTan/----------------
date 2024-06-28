<?php 

if(!isset($_SESSION['user_id'])){
    echo '<script>document.location.href="?page=profile"</script>';
}

?>
<div class="container">


    <div class="udal">
  <?php 
   if(isset($_GET['id'])){
    $get_id=$_GET['id'];
    $sql="SELECT * FROM category WHERE id='$get_id'";
    $result=$link->query($sql);
    $kat=$result->fetch();
   }
  ?>

        <p>вы действительно хотите удалить этот товар?
        </p>

        <p id="td"><?=$kat['name']?></p>
            
        <div class="knop">
            <a href="?page=del_kat&id=<?=$kat['id']?>&ok"><button>да, удалить</button></a>
            <a href="?page=admin"><button>нет, назад</button></a>
        </div>

        <?php 

       if(isset($_GET['ok'])){
        $sql="DELETE FROM category WHERE id='$get_id'";
        $link->query($sql);
        echo '<script>document.location.href="?page=admin"</script>';
       }
        ?>


    </div>
</div>