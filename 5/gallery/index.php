<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <?php
	require_once("datebase.php");
require_once("models/articles.php");

$link = db_connect();
$articles = articles_all($link);

//include("views/articles.php");


$page = $_GET['page'];

if(!isset($page)){
 	require('main.php');
}
elseif ($page == 'article'){
$id = $_GET['id'];
$good = [];
foreach ($articles as $product){
	if($product['id'] == $id){
	$good = $product;
	break;
	}
  }
  require('article.php');
  
}
?>


</body>
</html>