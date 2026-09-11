<?php

echo "<h2>Основы синтаксиса</h2>";

// Однострочный коннентарий

/* Многострочный
    комментарий */

// Оператор вывода
echo "Вывод текста";
echo "<p>Вывод текста и HTML<p>";

// Инициализация переменной
$variable = "Значение переменной";
$number = 50;
$decimal = 10.6;

echo "Вывод переменной variable: ";
echo $variable;

echo "<p>Текст $number</p>";
// Оператор конкатенации - операция склеивания двух или более линейных объектов (чаще всего текстовых строк)
echo '<p>Текст ' . $number . '</p>';
echo "<p>Текст " . $number . "</p>";

echo "<p>Текст $number яблок</p>";
echo "<p>Текст {$number}яблок</p>";
echo (2 + $number) * 10;
echo ($number==50) ? "Это круто" : "Это не круто";
echo true;
echo false;
echo "ОГБПОУ \"ТЭПК\"";
// % - целочисленный отстаток от деления, ** - возведение в степень
echo ( (2 + 3) - (5 * 2) / 5**2) % 2;
$increment = 10;
echo $increment++; //10
echo ++$increment; //12
$bool = 10 <= 11;
echo $bool . "<br>";
$a = "10";
$b = 10;
echo "<br>" . ($a == $b) . "- истинно";
echo "<br>" . ($a === $b) . " - ложно";

// Конструкция if..else
if ($a >= $b) {
    echo "<p>$a >= $b</p>";
} else {
    echo "<p>$a < $b</p>";
}


// Тернарная операция
$a1 = 10;
$b1 = 20;
echo ($a > $b) ? "Истина" : "Ложь";

// Оператор switch (сравнивает только значение)
switch ($a1) {
    case 1: echo "1"; break;
    case "10": echo "Строка 10"; break;
    //case 10: echo "Число 10"; break;
    default: echo "Not Found"; break;
}

// Оператор match (сравнивает не только значение, но и тип данных)
echo match($a1) {
    1 => "1",
    "10" => "Строка 10",
    10 => "Число 10",
    default => "Not Found",
};

// Цикл for
for($i=1; $i<=10; $i++){
    echo "<p>$i</p>";
}

// Цикл do...while (цикл с постусловием)
$counter = 1;
do {
    echo "<p>$counter штук</p>";
    $counter++;
} while ($counter < 10);

// Цикл while (цикл с предусловием)
$counter = 1;
while ($counter < 10) {
    echo "<p>$counter</p>";
    $counter++;
}

// Операторы continue и break
for($i=1; $i<=10; $i++){
    if ($i % 3 == 0) continue;  // перейти к следующей итерации (шагу)
    if ($i == 8) break;         // выход из конструкции (в данном случае - завершение цикла)
    echo "<p>Число - $i</p>";
}

// Вложенные циклы
echo "<table border='1'>";
for($i=1; $i<=9; $i++){
    echo "<tr>";
    for($j=1; $j<=9; $j++){
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Массивы
$mas1 = array(1,2,3,4,5,6,7,8,9);
echo $mas1[5];

$mas2 = [1,2,3,4,5,6,7,8,9];
echo $mas2[5];

// Пустой массив
$mas3 = [];

// Перебор элементов массива
$sum = 0;
for($i=0; $i<=8; $i++){
    echo $mas2[$i] . " ";
    $sum += $mas2[$i];
}
echo "<p>Сумма элементов массива: $sum</p>";

$mas4 = [0 => 10, 1 => 20, 4 => 30, 8 => 40];

// Цикл foreach
foreach($mas4 as $el){
    echo $el . " ";
}

echo "<br>";

foreach($mas4 as $key => $el){
    echo "Индекс {$key} - значение {$el} <br>";
}

// Оператор вывода сложных типов print_r
print_r($mas4);

// Ассоциативный массив
$colors = ["red" => "Красный", "green" => "Зелёный", "blue" => "Синий"];
print_r($colors);
echo($colors["red"]);
echo($colors["green"]);
echo($colors["blue"]);

echo "<br>";
foreach($colors as $index => $color){
    echo $color . "<br>";
}

$data = [ 1=>"Стас", "foor" => "Егор", 20 => "Кирилл", 1.3 => "Иван", "Василий"];
print_r($data);

// Многомерный массив
$users = [
    ["id" => 1, "Стас", "Студент"],
    ["id" => 70, "Егор", "Водитель"],
    "two" => ["id" => 178, "Данил", "Страховщик"]
];
echo "<h2>Двумерный массив</h2>";
$users[2][1] = "Кирилл";
print_r($users);

// Вывод многомерного массива
echo "<table border='1'>";
foreach ($users as $user) {
    echo "<tr>";
    foreach ($user as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo $users["two"]["id"];

// Функции
function Hello()
{
    echo "<br> Привет! <br>";
}
function Summa($a, $b)
{
    return $a + $b;
}
// Вызов функции
Hello();
// $summa = Summa(2, 3);
echo Summa(2, 3);

// Необязательные параметры в функции
function displayInfo($name, $age = 18)
{
    echo "<p>Имя: {$name}, возраст {$age}</p>";
}
displayInfo("Даниил", 17);
displayInfo("Станислав");

// Именованные параметры
displayInfo(age: 38, name: "Василий");

function test($name, $age, $sex, $surname)
{
    echo "<p>Фамилия: {$surname}, имя: {$name}, возраст: {$age}, пол: {$sex}</p>";
}

test("Никита", 17, surname: "Казаков", sex: "Мужской");

// Переменное количество параметров
// Оператор ... (оператор распаковки): упаковка аргументов в обычный массив, распаковка массива
function displayUsers(...$names)
{
    foreach ($names as $name) {
        echo "<p>{$name}</p>";
    }
}

displayUsers("Иван", "Кирилл", "Станислав", "Максим", "Сергей", "Егор","Диниил", "Данил", "Никита");

function displayUsers2($prepod, ...$names)
{
    echo "<p>Преподваватель: {$prepod}</p> Студенты:";
    foreach ($names as $name) {
        echo "<p>{$name}</p>";
    }
}
displayUsers2("Иван", "Кирилл", "Станислав", "Максим", "Сергей", "Егор","Диниил", "Данил", "Никита");

function displayUsers3($prepod, ...$names)
{
    echo "<p>Преподваватель: {$prepod}</p> Студенты:";
    foreach ($names as $name) {
        echo "<p>{$name}</p>";
    }
}
displayUsers3("Василий", "Иван", "Кирилл", "Станислав", "Максим", "Сергей", "Егор","Диниил", "Данил", "Никита");

// Анонимные функции
$hi = function ($name) {
    echo "<p>Приветствую вас, {$name}!</p>";
};
// Вызов анонимной функции
$hi("товарищ Сталин");

// Замыкания
// Выражение use() получает внешние переменные
$number = 1005;
$name = "Алик";
$showNumber = function () use ($number, $name) {
    echo "<p>{$name} должен мне {$number} рубасиков</p>";
};
$showNumber();

function Info($number, $name)
{
    echo "<p>{$name} должен мне {$number} рубасиков</p>";
}
Info($number, $name);

// Стрелочные функции

$info = fn() => $name . " должен мне " . $number . " рубасиков";
echo $info();

// Генераторы
function generator()
{
    yield 18;
    yield 19;
    yield 20;
}

foreach (generator() as $value) {
    echo "<p>{$value}</p>";
}

print_r(iterator_to_array(generator()));

// Ссылки
$one = "Первое значение";
$two = &$one;
$two = "Второе значение";
echo $one;
echo $two;


function inf(&$b)
{
    echo $b *= 25;
}
$a = 10;
inf($a);
echo $a;

// глобальный массив позволяющий обращаться к переменным программы по их имени
echo $GLOBALS["two"];

// Константы
const PI = 3.14;
echo PI;

define("PII", 3.14);
echo PII;

// Магические константы

echo "<br>" . __FILE__ . " - хранит полный путь и имя текущего файла<br>";
echo "<br>" . __LINE__ . " - хранит текущий номер стороки, которую обрабатывает интерпритатор<br>";
echo "<br>" . __DIR__ . " - хранит каталог текущего файла<br>";
function f1()
{
    echo "<br>" . __FUNCTION__ . " - название обрабатываемой функции<br>";
}
f1();

echo "<br>" . __CLASS__ . " - название текущего класса<br>";
echo "<br>" . __TRAIT__ . " - название текущего трейта<br>";
echo "<br>" . __METHOD__ . " - название обрабатываемого метода<br>";
echo "<br>" . __NAMESPACE__ . " - название текущего пространства имен<br>";

// Проверка существования констант
if (__FILE__) {
    echo "Путь существует";
} else {
    echo "Путь не существует";
}

if (!__CLASS__) {
    echo "Класс не существует";
} else {
  echo "Класс существует";
}

// Проверка существования переменных
$a= null;
if (isset($a)) {
    echo "Переменная A существует и = {$a}";
}
// Проверка переменной на пустоту
if (empty($a)) {
    echo "Переменная A имеет пустое значение";
}
// Уничтожение переменных
unset($a);
// echo $a; - выдаст ошибку, так как $a уже не существует


$a = "10";
$a = (int)$a;
if ($a === 10) {
    echo "Истинно!";
}





