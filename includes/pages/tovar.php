<main>

<?php 

if(isset($_GET['id'])){
    $get_id=$_GET['id'];
    $sql="SELECT * FROM tovar WHERE id='$get_id'";
    $result=$link->query($sql);
    $tovar=$result->fetch();



}?>
      <!-- ТОВАР-->
<div class="container">
      <div class="tovar">

        <div class="tovar_img">
            <img src="assets/img/tovar.png" alt="tovar" id="tovark">
            <img src="assets/img/lov.png" alt="love" id="tovarl">
        </div>
          
        <div class="tovar_text">

            <div class="tovar_text_naz">
                <p><?=$tovar['name']?></p>
                <p><?=$tovar['sort']?></p>
                <p ><?=$tovar['price']?></p>
            </div>

            <div class="tovar_text_opis">
                <p>арикул : 01010101</p>
                <p>Объем : 80 мл</p>
                <?php 

                $kat_id=$tovar['category'];
                $sql="SELECT * FROM category WHERE id='$kat_id'";
                $result=$link->query($sql);
                $kategory=$result->fetch(PDO::FETCH_ASSOC);
                
                ?>
                <p>категория : <?=$kategory['name']?></p>
                <p>тип действия: увлажняющий</p>
                <p>производитель: франция</p>
            </div>

      
            <button>купить</button>
            



        </div>
      </div>
      
      <div class="opisanie">
        <p>Описание</p>

        <div class="opisanie_text">
           <?=$tovar['opis']?>
        </div>
        <p id="ra">развернуть</p>
      </div>

    </div>
</main>