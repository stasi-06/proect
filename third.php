<?php
// Ввод двух чисел
$number1 = (float)readline("Введите первое число: ");
$number2 = (float)readline("Введите второе число: ");

// Выполнение деления
$division = ($number2 != 0) ? $number1 / $number2 : "Деление на ноль невозможно";

// Вывод результата
echo "Деление: $number1 / $number2 = $division\n";
?>
