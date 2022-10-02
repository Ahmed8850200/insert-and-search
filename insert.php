<?php


$host = "localhost";
$user = 'root';
$password = "";
$dbname = "test";



$dsn = 'mysql:host='. $host .';dbname='. $dbname;


$pdo = new PDO($dsn ,$user ,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
$title=$_POST['title'];
$body=$_POST['body'];
$author=$_POST['author'];


$sql="INSERT INTO posts (title,body,author) VALUES(:title,:body,:author)";
$stmt=$pdo->prepare($sql);
$stmt->execute(['title'=>$title,'body'=>$body,'author'=>$author]);
echo "added successfuly";