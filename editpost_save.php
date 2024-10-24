<?php
    session_start();
    $cate=$_POST['category'];
    $top=$_POST['topic'];
    $comment=$_POST['comment'];
    $post_id=$_POST['post_id'];
    $user_id=$_SESSION['user_id'];

    $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql="UPDATE post set title='$top',content='$comment',post_date=NOW(),
    cat_id='$cate',user_id='$user_id' WHERE id='$post_id'";
    $query=$conn->exec($sql);
    if ($query){
        $_SESSION['edit_success']=1;
    }else{
        $_SESSION['edit_success']=0;
    }
    $conn=null;
    header("location:editpost.php?id=$post_id");
    die();
?>