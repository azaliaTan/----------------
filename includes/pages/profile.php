<?php 

if(!isset($_SESSION['user_id'])){
    echo '<script>document.location.href="?page=vhod"</script>';
}

if($SIGNIN_USER['role']==2){
    echo '<script>document.location.href="?page=admin"</script>';
}
?>

<div class="container">
    <p id="pan">ПРОФИЛЬ </p>
      
    <div class="name_pan">
        <p>Товары <?=$SIGNIN_USER['name']?></p>
      <a href="add.html"> <img src="assets/img/plus.png" alt="add"></a> 
      <a href="?do=exit">выход из профиля</a>
      <a href="?page=red_prof&id=<?=$SIGNIN_USER['id']?>"> редактировать</a>
    </div>

    <div class="panel">

       
        <?php 

        $sql="SELECT * FROM tovar WHERE author_id='$USER_ID'";
        $result=$link->query($sql);
        foreach($result as $tovar){?>
            <div class="pan_tovar">
          
            <div class="pan_tovar_name">
               <a href="tovar.html"><p><?=$tovar['name']?></p></a>

               <?php 
               $a_id=$tovar['author_id'];
               $sql="SELECT * FROM users WHERE id='$a_id'";
               $result=$link->query($sql);
               $author=$result->fetch(PDO::FETCH_ASSOC);
               ?>
                <p id="a">АВтор <?=$author['name']?></p>
            </div>

            <div class="pan_img">
                <img src="assets/img/pan.png" alt="tovar">
            </div>
            
            <div class="pan_icons">
                <a href="red.html"><img src="assets/img/red.png" alt="red"></a>
                <a href="del.html"><img src="assets/img/del.png" alt="del"></a>
            </div>
            </div>
       <? }
        
        
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
        <a href="add.html"> <img src="assets/img/plus.png" alt="add"></a> 
    </div>
         
    <div class="pan_kat">
        <div class="kategori">
            <p>Крем для лица</p>
            <div class="icon_kat">
                <a href="red.html"><img src="assets/img/red.png" alt="red"></a>
                <a href="del.html"><img src="assets/img/del.png" alt="del"></a>
            </div>
        </div>
        <div class="kategori">
            <p>Крем для тела</p>
            <div class="icon_kat">
                <a href="red.html"><img src="assets/img/red.png" alt="red"></a>
                <a href="del.html"><img src="assets/img/del.png" alt="del"></a>
            </div>
        </div>
        <div class="kategori">
            <p>Скраб для тела</p>
            <div class="icon_kat">
                <a href="red.html"><img src="assets/img/red.png" alt="red"></a>
                <a href="del.html"><img src="assets/img/del.png" alt="del"></a>
            </div>
        </div>
       
    </div>

    <div class="pagi">
        <p>1</p>
        <p>2</p>
        <p>3</p>
        <p>...</p>
        <p>99</p>
    </div>

  </div>