
 <!-- баннер -->
 <div class="banner">
        <div class="kartinka">
            <img src="assets/img/ban.png" alt="banner">
            <img src="assets/img/banner.png" alt="banner">
        </div>

        <div class="container">

            <div class="text_bane">
                <p>zenskin</p>
            

            <button>в каталог</button>
        </div>
        
        </div>
    </div>

   



<!--------------------------------------баннер-------------------------->

<!--каталог-->
<div class="container">
    <p id="zagolovok">каталог</p>

    <div class="katalog_cards">
      
    <?php 

    $sql="SELECT * FROM tovar";
    $result=$link->query($sql);
   
    foreach($result as $tovar){?>
        <a href="?page=tovar&id=<?=$tovar['id']?>">
        <div class="cards">
            <div class="card_img">
                <img src="assets/img/tovar.png" alt="tovar" id="tovar">
                <img src="assets/img/lov.png" alt="love" id="izb">
            </div>
      

        <div class="card_text">
            <p id="name_firma"><?=$tovar['name']?></p>
            <p id="name_tovar"><?=$tovar['sort']?></p>
            <p id="price"><?=$tovar['price']?></p>
            <button> купить</button>
            <button id="but"> в избранное</button>
        </div>
         </div></a>
   <? }
    
    ?>
    </div>
</div>
 <!--вопросы-->
<div class="vopr">
    <div class="container">
        <div class="anketa">

            <div class="anketa_text">

            <p id="zagol">Задай вопрос</p>
            <input type="text" placeholder="Твое имя" >
            <input type="text" placeholder="Твой номер">
           <textarea name="" id="z" cols="1" rows="1">Твой вопрос</textarea>
           <button>Отправить</button>

        </div>
           
        <div class="anketa_img">
            <img src="assets/img/karttt.png" alt="">
        </div>

        </div>

    </div>
</div>

<!--------------------------------------вопросы-------------------------->
