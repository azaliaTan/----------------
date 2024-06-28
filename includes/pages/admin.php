<?php 

if(!isset($_SESSION['user_id'])){
    echo '<script>document.location.href="?page=vhod"</script>';
}

if($SIGNIN_USER['role']==1){
    echo '<script>document.location.href="?page=profile"</script>';
}
?>






<div class="container">
    <p id="pan">панель администратора</p>

    <div class="name_pan">
        <p>товары</p>
      <a href="?page=add"> <img src="assets/img/plus.png" alt="add"></a> 
    </div>

    <div class="panel">

     <?php 
     $sql="SELECT * FROM tovar";
     $result=$link->query($sql);
     foreach($result as $tovar){?>
        <div class="pan_tovar">

           

            <div class="pan_tovar_name">
               <a href="tovar.html"><p><?=$tovar['name']?></p></a>
                <p id="a"><?=$tovar['price']?></p>
            </div>

            <div class="pan_img">
                <img src="assets/img/pan.png" alt="tovar">
            </div>
            
            <div class="pan_icons">
                <a href="?page=red&id=<?=$tovar['id']?>"><img src="assets/img/red.png" alt="red"></a>
                <a href="?page=del&id=<?=$tovar['id']?>"><img src="assets/img/del.png" alt="del"></a>
            </div>

        </div>
   <?  }
     
     ?>
        


        <div class="pagi">
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>...</p>
            <p>99</p>
        </div>


    </div>

    <div class="name_pan">
        <p>категории</p>
        <a href="?page=add_kat"> <img src="assets/img/plus.png" alt="add"></a> 
    </div>
         
    <div class="pan_kat">
        <?php 
         $sql="SELECT * FROM category";
         $result=$link->query($sql);
         foreach($result as $kat){?>
            <div class="kategori">
            <p><?=$kat['name']?></p>
            <div class="icon_kat">
                <a href="?page=red_kat&id=<?=$kat['id']?>"><img src="assets/img/red.png" alt="red"></a>
                <a href="?page=del_kat&id=<?=$kat['id']?>"><img src="assets/img/del.png" alt="del"></a>
            </div>
        </div>
         <?}
        ?>
       
       
    </div>

    <div class="pagi">
        <p>1</p>
        <p>2</p>
        <p>3</p>
        <p>...</p>
        <p>99</p>
    </div>

  </div>