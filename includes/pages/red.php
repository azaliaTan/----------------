<?php 

if(!isset($_SESSION['user_id'])){
    echo '<script>document.location.href="?page=profile"</script>';
}

?>
<div class="forma">
<?php 
if(isset($_GET['id'])){
    $get_id=$_GET['id'];
    $sql="SELECT * FROM tovar WHERE id='$get_id'";
    $result=$link->query($sql);
    $tovar=$result->fetch(PDO::FETCH_ASSOC);
    if($tovar['author_id']!= $USER_ID){
        echo  '<script>document.location.href="?"</script>' ;
    }else{
 $get_id=$_GET['id'];
 $sql="SELECT * FROM tovar WHERE id='$get_id'";
 $result=$link->query($sql);
 $tovar=$result->fetch();
}

    if(isset($_POST['red'])){
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
            $sql="UPDATE  tovar SET name='$name', sort='$sort',category='$category',price='$price' WHERE id='$get_id'";
            $link->query($sql);
            echo '<script>document.location.href="?page=admin"</script>';
         }
    } }?>





    <p id="formp">Редактировать товар </p>
    <form method="POST" name="red" id="red">
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
        <input type="text" name="name" value="<?=$tovar['name']?>">
        <?php if(isset ($error_name)){echo $error_name;}?>

        <p>Наименование продукта</p>
        <input type="text" name="sort" value="<?=$tovar['sort']?>">
        <?php if(isset ($error_sort)){echo $error_sort;}?>

      
        <p>Стоимость</p>
        <input type="text" name="price" value="<?=$tovar['sort']?>">
        <?php if(isset ($error_sort)){echo $error_sort;}?>

        <input type="submit" value="Добавить" id="sohr" name="red">

    </form>
