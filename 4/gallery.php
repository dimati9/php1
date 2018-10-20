<?php
$dir = './img';
$files = scandir($dir);

//var_dump($files);


?>

<body>
<div class="gallery">
    <?php
    foreach($files as $file){
    if($file != '.' && $file != '..'){

    ?> <a href="<?=$dir.'/'.$file?>" target="_blank">
            <img src="<?=$dir.'/'.$file?>" alt="">
        </a>

    <?php
    };
    };

    ?>
</div>
</body>
