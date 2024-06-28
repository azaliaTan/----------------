<?php 

try{
    $link=new PDO("mysql:host=localhost;dbname=botanica",'root','root');
} catch(PDOException $e){
    echo '$e';
}

?>