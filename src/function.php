<?php
//function task1
function arrayOutput($array, $oneLine=0)
{
    if ($oneLine) {
        foreach ($array as $value) {
            echo "$value ";
        }
    } else {
        foreach ($array as $value) {
            echo "<p> $value </p>";
        }
    }
}

//function task2
function calcEverything(string $arithmeticOperation, ...$numbers)
{
    $calc = [];
    foreach ($numbers as $number) {
        $calc[] = $number;
    }
    switch ($arithmeticOperation) {
        case "+":
            $result = array_sum($calc);
            break;
        case "-":
            $firstNumberDifference = array_shift($calc);
            $secondNumberDifference = array_sum($calc);
            $result = $firstNumberDifference - $secondNumberDifference;
            break;
        case "*":
            $result = array_product($calc);
            break;
        case "/":
            $firstNumberDivision = array_shift($calc);
            $secondNumberDivision = array_product($calc);
            $result = $firstNumberDivision % $secondNumberDivision;
            break;
    }
    return $result;
}

//function task3
function multiplicationTable(...$numbers)
{
    $arrayNubbers = [];
    foreach ($numbers as $number) {
        $arrayNubbers[] = $number;
    }
    $arrayLength = count($arrayNubbers);
    if($arrayLength > 2) {
        echo "Вы ввели больше 2х аргументов!";
    } elseif ($arrayLength == 1) {
        echo "Введите еще один аргумент!";
    } elseif ($arrayLength == 0) {
        echo "Вы не ввели аргументы!";
    } else {
        echo "<table>";
        for ($tr = 1; $tr <= $arrayNubbers[0]; $tr++) {
            echo "<tr>";
            for ($td = 1; $td <= $arrayNubbers[1]; $td++) {
                echo "<td>";
                $result = $tr * $td;
                echo $result;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

//function task4
function theCurrentDate()
{
    date_default_timezone_set("Europe/Moscow");
    $timeIsNow = date('d.m.Y H:i');
    echo $timeIsNow;
    echo "<br>";
}
function customDate($date)
{
    echo strtotime($date);
}

//function task5
function letterRemoval($string)
{
    echo str_replace('К', '', $string);
}
function wordReplacement($string)
{
    echo str_replace('Две', 'Три', $string);
}

//function task6
function workWithFile()
{
    $openFile = fopen("test.txt", "w");
    fwrite($openFile, "Hello again!");
    echo file_get_contents('test.txt');
}
