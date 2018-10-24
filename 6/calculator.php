<form action="" method="post" name="formSubmit"/>
<input type="text" name="a" />
<input type="text" name="b" />
<input type="submit" name="submit" value="Решить" />
<select name="selection" id="select">
    <option value="">Выберете действие</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="/">/</option>
    <option value="*">*</option>
</select>
</form>

<?php
$a = $_POST['a'];
$b = $_POST['b'];
$select = $_POST['selection'];
//echo $select;

if($select != "") {
    if ($a != "" && $b != "") {
        echo $a.$select.$b." = ";
     switch ($select) {
         case "+":

             echo $a + $b;
             break;
         case "-":
             echo $a - $b;
             break;
         case "/":
             echo $a / $b;
             break;
         case "*":
             echo $a * $b;
             break;
     }
    }
    else {
        echo "Заполните поля";
    }


}
else {
    echo "Выберете действие";
}






?>