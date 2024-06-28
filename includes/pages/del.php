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
 $sql="SELECT * FROM tovar WHERE id='$get_id'";
 $result=$link->query($sql);
 $tovar=$result->fetch();
}



 ?>

        <p>вы действительно хотите удалить этот товар?
        </p>

        <p id="td"><?=$tovar['name']?></p>
            
        <div class="knop">
            <a href="?page=del&id=<?=$tovar['id']?>&ok"><button>да, удалить</button></a>
            <a href="?page=admin"><button>нет, назад</button></a>
        </div>

        <?php 

        if(isset($_GET['ok'])){
         $sql="DELETE FROM tovar WHERE id='$get_id'";
         $link->query($sql);
         echo '<script>document.location.href="?page=admin"</script>';
        }
        ?>


    </div>
</div>