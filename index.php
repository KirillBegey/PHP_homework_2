<?php
require("src/function.php");

//task1
$strings = ["Hello", "world", "!"];

printStrings($strings, true);
echo "<hr>";

//task2
echo calcEverything("+", 1, 2, 3, 4, 5);
echo "<hr>";

//task3
multiplicationTable(5, 5);
echo "<hr>";

//task4
currentDate();
$randomDate = "24.02.2016 00:00:00";
customDate($randomDate);
echo "<hr>";

//task5
$proverb = "Карл у Клары украл Кораллы";
$letter = "К";
echo $proverb;
echo "<br>";
letterRemoval($letter, $proverb);
echo "<br>";
$arbitraryString = "Две бутылки лимонада";
$deleteWord = "Две";
$insertWord = "Три";
echo $arbitraryString;
echo "<br>";
wordReplacement($deleteWord, $insertWord, $arbitraryString);
echo "<br>";
echo "<hr>";

//task6
workWithFile();
