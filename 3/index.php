<? 
// Задание 1
echo "Задание 1: <br>";
$i = 0;
while ($i <= 100) {
    if ($i % 3 == 0) {
        echo "<br>" . $i;
    }
    $i++;
}

//Задание 2
echo "<br><br> Задание 2: <br>";

$i = 0;
do {
    if ($i == 0) {
        echo "<br>" . $i . " - ноль <br>";
        $i++;
    }
    if ($i % 2 == 0) {
        echo "<br>" . $i . " - четное число <br>";
    }
    else {
        echo "<br>" . $i . " - нечетное число <br>";
    }

    $i++;
    
} while ($i <= 15);


// Задание 3
echo "<br><br> Задание 3: <br>";

$array = [
    "Московская область" =>  [
        "Апрелевка", "Верея", "Дедовск", "Подольск", "Чехов"
    ],
    "Челябинская область" =>  [
        "Златоуст", "Челябинск", "Миасс", "Куса", "Аша"
    ]
];

//echo count($array) . "<br><br>";
//var_dump($array) . "<br><br>";
//var_dump($array[0]);
//echo $array[1][1] . "<br><br>";

foreach($array as $key => $value) 
{ 
   echo "$key:<br>"; 
   for ($m = 0; $m < count($value); $m++ ) {
    echo $value[$m] . "<br>";
}
echo "<br>";
} 

// Задание 4
echo "<br><br> Задание 4: <br>";


function translit($s) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        
        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($s, $converter);
}

function converter($str) {
    // переводим в транслит
    $str = translit($str);
    // в нижний регистр
    $str = strtolower($str);
    // заменям все ненужное нам на "-"
    $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
    // удаляем начальные и конечные '-'
    $str = trim($str, "-");
    return $str;
}

echo converter("Не выходи из комнаты, не совершай ошибку.");



// Задание 5
echo "<br><br> Задание 5: <br>"; 

function returner($a) {
    $arr = array(
        " " => "_", 
    );
    return strtr($a, $arr);
}

echo returner("Что-то тут написано?!"); 

// Задание 6
echo "<br><br> Задание 6: <br>";  

$ul = [
    'Menu' => 'menu.html',
    'Shop' => 'shop.php',
    'Cart' => 'cart.php',
    
];

foreach($ul as $key => $value) 
{ 
   echo "<ul>";
    echo "<li>";
    echo "<a href=$value>" . "$key" . "</a>";
    echo "</li>";
    echo "</ul>";
}

// Задание 7
echo "<br><br> Задание 7: <br>"; 

for ($a = 0; $a < 10; print($a), $a++){ 

}
?>