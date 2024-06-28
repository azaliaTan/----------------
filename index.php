<?php 

include('includes/connect.php');
include('includes/session.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>ZENSKIN</title>
</head>
<body>

<?php 

include('includes/header.php');
if(isset($_GET['page'])){
    $page=$_GET['page'];

    if($page=='add') include ('includes/pages/add.php');
    
    if($page=='reg') include ('includes/pages/reg.php');
    if($page=='vhod') include ('includes/pages/vhod.php');
    if($page=='admin') include ('includes/pages/admin.php');
    if($page=='profile') include ('includes/pages/profile.php');
    if($page=='red_prof') include ('includes/pages/red_prof.php');
    if($page=='tovar') include ('includes/pages/tovar.php');
    if($page=='red') include ('includes/pages/red.php');
    if($page=='del') include ('includes/pages/del.php');
    if($page=='red_kat') include ('includes/pages/red_kat.php');
    if($page=='del_kat') include ('includes/pages/del_kat.php');
    if($page=='add_kat') include ('includes/pages/add_kat.php');
}else{
    include('includes/start.php');
}
include('includes/footer.php');


?>

</body>
</html>