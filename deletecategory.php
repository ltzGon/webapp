<?php 
    session_start();
    $name = $_POST['name'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql = "DELETE FROM category WHERE id=$_GET[id]";
    $result=$conn->exec($sql);

    $_SESSION['State_cate'] = 'delete_success';

    $conn = null;
    header("location:category.php");
    die();
?>