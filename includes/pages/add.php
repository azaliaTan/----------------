<?php 

if(!isset($_SESSION['user_id'])){
    echo '<script>document.location.href="?page=profile"</script>';
}

?>

<div class="forma">
    <p id="formp">Добавить товар </p>
    <?php 
   $name='';
   $sort='';
   $price='';
    if(isset($_POST['add'])){
        $name=$_POST['name'];
        $sort=$_POST['sort'];
        $category=$_POST['category'];
        $price=$_POST['price'];

        $error_name='';
        $error_sort='';
        $error_category='';
        $error_price='';

        if(empty($name)){
            $error_name='pysto';

        }
        if(empty($sort)){
            $error_sort='pysto';
            
        }
        if(empty($price)){
            $error_name='pysto';
            
        }
        if(empty($price)){
            $error_name='pysto';
            
        }
        if($_POST['category'] == 0){
            $error_category='pysto';
            
        }

         if(empty($error_name)&& empty($error_sort)&& empty($error_price) && empty($error_category)){
            $sql="INSERT INTO tovar (`name`, `sort`,`category`,`price`,`author_id`) VALUE ('$name','$sort','$category','$price','$USER_ID')";
            $link->query($sql);
            echo '<script>document.location.href="?page=admin"</script>';
         }

    }

    
    
    
    
    
    ?>
   
    <form method="POST" name="add" id="red">
  <select name="category" id="">
 <option value="0">Выберите из списка</option>
 <?php 

 $sql="SELECT * FROM category";
 $result=$link->query($sql);
 foreach($result as $kat){?>
    <option value="<?=$kat['id']?>"><?=$kat['name']?></option><?
 }

 ?>
  </select>
  <?php if(isset ($error_category)){echo $error_category;}?>
        <p>Наименование фирмы</p>
        <input type="text" name="name" value="<?=$name?>">
        <?php if(isset ($error_name)){echo $error_name;}?>

        <p>Наименование продукта</p>
        <input type="text" name="sort" value="<?=$sort?>">
        <?php if(isset ($error_sort)){echo $error_sort;}?>

      
        <p>Стоимость</p>
        <input type="text" name="price" value="<?=$price?>">
        <?php if(isset ($error_sort)){echo $error_sort;}?>

        <input type="submit" value="Добавить" id="sohr" name="add">

    </form>



    </div>