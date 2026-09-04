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






