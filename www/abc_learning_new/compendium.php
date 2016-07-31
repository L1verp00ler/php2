<?php

//var_dump(gd_info());
//echo "<br>";

/*
// посылает заголовок браузеру изображении формата PNG
header("Content-type: image/png");
// создает изображение в памяти и возвращает его идентификатор
$image = imagecreatetruecolor (100, 100);
// вывод сообщение в окно браузера
imagepng($image);
// уничтожение изображения из памяти
imagedestroy($image);
*/

/*
header("Content-type: image/png");
// закрузка изображения из файла
$image = imagecreatefrompng("black_square.png");
// вывод изображения
imagepng($image);
// уничтожение изображения из пёмяти
imagedestroy($image);
*/

/*
header("Content-type: image/png");
$image = imagecreatetruecolor (100, 100);
// определение цвета
$white = imagecolorallocate($image, 255, 255, 255);
// рисование линии
imageline($image, 0, 0, 99, 99, $white);
imageline($image, 0, 99, 99, 0, $white);
// вывод изображения
imagepng($image);
// удаление изображения из памяти
imagedestroy($image);
*/

/*
header("Content-type: image/png");
// создание пустого изображения
$image = imagecreate (100, 100);
// цвет фона зеленый
$green = imagecolorallocate($image, 0, 128, 0);
// цвет белый
$white = imagecolorallocate($image, 255, 255, 255);
// рисование кривых линий
imagearc($image, 49, 49, 90, 90, 0, 360, $white);
imagearc($image, 49, 70, 50, 20, 0, 180, $white);
imagearc($image, 49, 49, 5, 20, 0, 360, $white);
imagearc($image, 29, 30, 20, 5, 0, 360, $white);
imagearc($image, 69, 30, 20, 5, 0, 360, $white);
// вывод изображения
imagepng($image);
// уничтожение изображения из памяти
imagedestroy($image);
*/

/*
header("Content-type: image/png");
$image = imagecreate (100, 100);
$green = imagecolorallocate($image, 0, 128, 0);
$yellow = imagecolorallocate($image, 255, 255, 0);
$black = imagecolorallocate($image, 0, 0, 0);
imagearc($image, 49, 49, 90, 90, 0, 360, $black);
imagearc($image, 49, 70, 50, 20, 0, 180, $black);
// закрашиваем лицо в желтый цвет
imagefill ($image, 49, 49, $yellow);
imagearc($image, 49, 49, 5, 20, 0, 360, $black);
imagearc($image, 29, 30, 20, 5, 0, 360, $black);
imagearc($image, 69, 30, 20, 5, 0, 360, $black);
// вывод изображения
imagepng($image);
// уничтожение изображения из памяти
imagedestroy($image);
*/

/*
header("Content-type: image/png");
$image = imagecreatetruecolor (100, 100);
$white = imagecolorallocate($image, 255, 255, 255);
// создание строки
imagestring($image, 3, 5, 49, "Hello, World!", $white);
// вывод изображения
imagepng($image);
// уничтожение изображения из памяти
imagedestroy($image);
*/

/*
header("Content-type: image/png");
$image = imagecreatetruecolor (100, 100);
$white = imagecolorallocate($image, 255, 255, 255);
// создание строки
imagettftext($image, 9, 0, 5, 49, $white, "Snap.ttf", "Hello, World!");
// вывод изображения
imagepng($image);
// удаление изображения из памяти
imagedestroy($image);
*/

/*
header("Content-type: image/png");
$image = imagecreatetruecolor (200, 200);
$white = imagecolorallocate($image, 255, 255, 255);
// строка для вывода
$str = "Hello, World!";
// расчет координат начала строки
$х = (200 - strlen($str) * imagefontwidth(4)) /2;
$у = (200 - imagefontheight(4)) / 2;
// создание строки
imagestring($image, 4, $х, $у, $str, $white);
// вывод изображения
imagepng($image);
// удаление изображения из памяти
imagedestroy($image);
*/

/*
header("Content-type: image/png");
$image = imagecreatetruecolor (100, 100);
$white = imagecolorallocate($image, 255, 255, 255);
// записываем массив координат
$mas_loc = imagettfbbox(15, 23, "Snap.ttf", "Hello, World!");
// расчет координат начала строки
$х = 100 - ($mas_loc[0] + $mas_loc[2] + $mas_loc[4] + $mas_loc[6]) / 4;
$y = 100 - ($mas_loc[1] + $mas_loc[3] + $mas_loc[5] + $mas_loc[7]) / 4;
// создание строки
imagettftext($image,15, 23, $x, $y, $white, "Snap.ttf", "Hello, World!");
// вывод изображения
imagepng($image);
// уничтожение изображения из памяти
imagedestroy($image);
*/

//exit;

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

echo "<br>";
echo time(); // выводит 1092486666
echo "<br>";
echo date("d.m.y");
echo "<br>";
echo date("\\t\he \\t\i\me \i\s H:i:s");
// выводит "the time is 14:21:15"
echo "<br>";
echo date("d.m.y H.i.s", 0);
// выведет "01.01.70 03:00:00"
echo "<br>";
print_r (getdate());
echo "<br>";
$hour = 0; $minute = 0; $second = 0; $month = 5; $day = 5; $year = 1954;
// Если у вас платформа Windows, то будет ошибка
echo mktime($hour, $minute, $second, $month, $day, $year);
echo "<br>";
