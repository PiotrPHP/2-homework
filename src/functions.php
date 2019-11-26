<?php

// task1
// второй параметр по умолчанию false;
function task1($arrOfStrings, $concatString = false)
{
    $result = '';
    if ($concatString) {
        $result = '<p>' . implode(' ', $arrOfStrings). '</p>';
    } else {
        foreach ($arrOfStrings as $value) {
            $result .= '<p>' . $value . '</p>';
        }
    }
    return $result;
}

//////////////////////////////////////////////////////////////////////////////
// task2
function task2($operator, ...$operand)
{
    // Первое число необходимо для начала операции;
    $result = $operand[0];
    // Мы начинаем считать со второго числа, ибо первое у нас уже есть $result = $operand[0];
    for ($i = 1; $i < count($operand); $i++) {
        if ($operator == '+') {
            $result += $operand[$i];
        } elseif ($operator == '-') {
            $result -= $operand[$i];
        } elseif ($operator == '*') {
            $result *= $operand[$i];
        } elseif ($operator == '/') {
            if (in_array(0, $operand)) {
                $result = "!!деление на ноль невозможно!!";
            } else {
                $result /= $operand[$i];
            }
        }
    }
    $resultInString = implode($operator, $operand);
    return $resultInString . ' = ' . $result;
}

//////////////////////////////////////////////////////////////////////////////
// task3
function task3($row, $col)
{
    if (is_numeric($row) && is_numeric($col)) {
        echo '<table>';
        for ($i = 1; $i <= $row; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $col; $j++) {
                echo '<td>';
                echo $i * $j;
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Неверные данные';
    }
}

//////////////////////////////////////////////////////////////////////////////
// task4
function task4()
{
    return date('d.m.Y H:i');
}

function task5()
{
    return mktime(0, 0, 0, 2, 24, 2016);
}

//////////////////////////////////////////////////////////////////////////////
// task5

// Если будем искать латинские буквы вместо русских, ничего не будет найдено или изменено :)

function task6($string)
{
    return str_replace('К', '  ', $string);
}

function task7($string)
{
    return str_replace('Две', 'Три', $string);
}

function task67($changeFrom, $changeTo, $string)
{
    return str_replace($changeFrom, $changeTo, $string);
}

//////////////////////////////////////////////////////////////////////////////
// task6
function task8($fileName)
{
    file_put_contents($fileName, 'Hello again');
    return file_get_contents($fileName);
}
