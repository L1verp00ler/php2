<?php

//phpinfo();
$a = 'aaa';
echo $a, 'bbb';
echo "<br>";

$closets = array("Петров" => "Майка", "Иванов" => "Кроссовки", "Сидоров" => "Шорты");
//echo reset($closets); // выводит слово "Майка"
//echo "<br>";
print_r(each($closets)); // выводит массив
echo "<br>";

/*
$closets = array (0 => "Майка", 1 => "Кроссовки", 2 => "Шорты");
list ($thing_1, $thing_2, $thing_3) = $closets;
echo $thing_1; // выводит "Майка"
echo "<br>";
echo $thing_2; // выводит "Кроссовки"
echo "<br>";
echo $thing_3; // выводит "Шорты"
*/

/*
$closets = array("Петров"=>"Майка", "Иванов"=>"Кроссовки", "Сидоров"=>"Шорты");
reset($closets); // установка указателя на первый элемент
while (list($key, $value) = each($closets))
{
    echo $key . " " . $value . "<br>"; // вывод элемента
}

echo "<br>";

$closets_1 = array (0 => 2, 1 => 3, 2 => "Кроссовки");
sort($closets_1, SORT_NUMERIC);
foreach ($closets_1 as $key => $value)
{
    echo $key . " " . $value . "<br>"; // вывод элемента
}
$closets_2 = array (0 => 2, 1 => 3, 2 => "Кроссовки");
sort($closets_2, SORT_STRING);
foreach ($closets_2 as $key => $value)
{
    echo $key . " " . $value . "<br>"; // вывод элемента
}
*/

echo "<br>";

$lang = array("Петров" => array("Английский", "Испанский", "Немецкий"), "Иванов" => array("Французский", "Итальянский"), "Сидоров" => array("Немецкий"));
foreach ($lang as $key => $value) {
    echo $key . "<br>";
    foreach ($value as $sub_key => $sub_value) {
        echo $sub_key . " " . $sub_value, "<br>"; // вывод элемента
    }
    echo "<br>";
}

echo "<br>";
$str = "Число 8 в двоичном представлении: %b";
// выводит: Число 8 в двоичном представлении: 1000
printf($str, 8);

echo "<br>";
$str = "%-10s";
printf($str, "Hello");

echo "<br>";
$str = "Hello, World!";
// длина строки
echo strlen($str);

echo "<br>";
$len = strlen($str);
for ($i = 0; $i < $len; $i++) {
    echo $str[$i] . '---';
    echo "<br>";
}

echo "<br>";
$str = "Hello";
// выведет: Переменная имеет имя $str
echo 'Переменная имеет имя $str';
echo "<br>";
// выедет: Переменная имеет имя $str
echo "Переменная имеет имя $str";
echo "<br>";
echo "Переменная имеет имя \$str";

echo "<br>";
$str = 'Ivan';
// выведет: Hello, Ivans!
echo "Hello, {$str}s!";

echo "<br>";
$str = "Петров, Иванов, Сидоров";
// подстрока
$substr = "Иванов";
echo strstr($str, $substr);
echo "<br>";
if (!strstr($str, $substr))
{
    echo "Фамилия не найдена";
}
else
{
    echo "Фамилия найдена";
}


exit();

require_once __DIR__ . '/models/news.php';

$items = getAllNews();

require_once __DIR__ . '/views/index.php';
