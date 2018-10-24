<?php

function articles_all($link){
	$query = "SELECT * FROM items ORDER BY id DESC";
	$result = mysqli_query($link, $query);
	
	if (!$result)
	die(mysqli_error($link));
	
	//Извлечение
	
	$n = mysqli_num_rows($result);
	$articles = array();
	
	for ($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$articles[] = $row;
	}
	
	return $articles;
	
}


function articles_get($link, $id_article){
	$query = sprintf("SELECT * FROM items WHERE id=%d",

	(int)$id_article);
	$result = mysqli_query($link, $query);
	
	if(!$result)
	die(mysqli_error($link));
	
	$article = mysqli_fetch_assoc($result);
	return $article;
}

function articles_new($link, $name, $full, $img, $prace){
    $name = trim($name);
    $full = trim($full);
    $prace = trim($prace);
    $img = trim($img);

    if ($name == '')
        return false;

    $t = "INSERT INTO items (name, full, img, prace) VALUES ('%s', '%s', '%s', '%s')";

    $query = sprintf($t,
        mysqli_real_escape_string($link, $name),

        mysqli_real_escape_string($link, $full),

        mysqli_real_escape_string($link, $img),

        mysqli_real_escape_string($link, $prace));

    echo $query;
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return true;


}





?>