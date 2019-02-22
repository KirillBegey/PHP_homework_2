<?php
//function task1
function printStrings($strings, $oneLine=false)
{
    if (!$oneLine) {
        foreach ($strings as $string) {
            echo "<p> $string </p>";
        }
    } else {
        echo implode($strings);
    }
}

//function task2
function calcEverything(string $arithmeticOperation, ...$numbers)
{
    switch ($arithmeticOperation) {
        case "+":
            $result = array_sum($numbers);
            break;
        case "-":
            $firstNumberDifference = array_shift($numbers);
            $secondNumberDifference = array_sum($numbers);
            $result = $firstNumberDifference - $secondNumberDifference;
            break;
        case "*":
            $result = array_product($numbers);
            break;
        case "/":
            $firstNumberDivision = array_shift($numbers);
            $secondNumberDivision = array_product($numbers);
            $result = $firstNumberDivision / $secondNumberDivision;
            break;
    }
    if ($firstNumberDivision) {
        return $firstNumberDivision . "/" . implode($arithmeticOperation, $numbers) . " = " . $result;
    } else {
        return implode($arithmeticOperation, $numbers) . " = " . $result;
    }
}

//function task3
function multiplicationTable(int $rows, int $cols)
{
    if (empty($rows)) {
        echo "Не указано количество строк";
        return;
    } elseif (empty($cols)) {
        echo "Не указано количество столбцов";
        return;
    } else {
        echo "<table>";
        for ($tr = 1; $tr <= $rows; $tr++) {
            echo "<tr>";
            for ($td = 1; $td <= $cols; $td++) {
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
function currentDate()
{
    date_default_timezone_set("Europe/Moscow");
    echo date('d.m.Y H:i');
    echo "<br>";
}
function customDate($date)
{
    echo strtotime($date);
}

//function task5
function letterRemoval($letter, $string)
{
    echo str_replace($letter, '', $string);
}
function wordReplacement($deleteWord, $insertWord, $string)
{
    echo str_replace($deleteWord, $insertWord, $string);
}

//function task6
function workWithFile()
{
    file_put_contents("test.txt", "Hello again!");
    echo file_get_contents('test.txt');
}
