<?php
include './src/functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2-Homework</title>
    <style>
        p {
            font-size: 22px;
            color: dimgrey;
        }

        section {
            border-bottom: solid 2px red;
            margin: 50px;

        }

        table {
            margin: 40px 0;
            font-family: arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr:hover {
            background-color: #999;
            color: azure;
            cursor: pointer;
        }
    </style>
</head>
<body>

<section>
    <h2>Задание #1</h2>
    <strong>Функция должна принимать массив строк и выводить каждую строку в отдельном
        параграфе. Если в функцию передан второй параметр true, то возвращать (через return)
        результат в виде одной объединенной строки.</strong>
    <?php
    // task1
    $string1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $string2 = 'Donec aliquet pretium leo vel gravida.';
    $string3 = 'Maecenas convallis nibh sed dui elementum, id sodales ex posuere.';
    $arrOfStrings = [$string1, $string2, $string3];

    // второй параметр по умолчанию false;
    echo task1($arrOfStrings, true);
    ?>
</section>
<section>
    <h2>Задание #2</h2>
    <strong>Функция должна принимать переменное число аргументов. Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое необходимо выполнить со всеми
        передаваемыми аргументами. Остальные аргументы это целые и/или вещественные числа.</strong>
    <p>Результат: <?php echo task2('+', 15, 2, 7); ?></p>
</section>
<section>
    <h2>Задание #3</h2>
    <strong>Функция должна принимать два параметра – целые числа. Если в функцию передали 2 целых числа, то функция должна отобразить таблицу умножения размером со значения параметров, переданных в функцию. В остальных случаях выдавать корректную ошибку.</strong>
    <?php echo task3(3.1, 8); ?>
</section>
<section>
    <h2>Задание #4</h2>
    <strong>Выведите информацию о текущей дате в формате 31.12.2016 23:59</strong>
    <p>Текущая дата: <?php echo task4(); ?></p>
    <strong>Выведите unixtime время соответствующее 24.02.2016 00:00:00</strong>
    <p>Время соответствующее 24.02.2016 00:00:00: <?php echo task5(); ?> </p>
</section>
<section>
    <h2>Задание #5</h2>
    <strong>Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.</strong>
    <p>Результат: <?php echo task6('Карл у Клары украл Кораллы'); ?></p>
    <strong>Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”.</strong>
    <p>Результат: <?php echo task67('Две', 'Три', 'Две бутылки лимонада'); ?></p>
</section>
<section>
    <h2>Задание #6</h2>
    <strong>Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”.  Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.</strong>
    <p>Содержимое файла: <?php echo task8('test.txt'); ?></p>
</section>
</body>
</html>

