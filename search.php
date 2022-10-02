<?php


$host = "localhost";
$user = "root";
$password = "";
$dbname = "test";
$dsn = 'mysql:host='. $host .';dbname='. $dbname;
$pdo = new PDO($dsn ,$user ,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
$search = "%e";
$sql = "SELECT * from posts where title LIKE ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
   $search
]);
$posts = $stmt->fetchAll();
foreach ($posts as $post){
    echo $post->title . "<br>";
}
?>

