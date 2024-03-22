<?php
echo ("Task 1 <br>");
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:

$order =& $very_bad_unclear_name;
$order .= ' and Coca Cola, please';

// Don't change the line below
echo "Your order is: $very_bad_unclear_name. <br>";

echo ("<br> Task 2 <br>");
$number1 = 10;
echo $number1;
echo "<br>";
$number2 = 5.5;
echo $number2;
echo "<br>";
echo $number1 + $number2;
$last_month = 1187.23;
$this_month = 1089.98;
$difference = $last_month - $this_month;
echo "\nРазница между расходами в прошлом месяце и в этом месяце: " . $difference . "<br>";

echo ("<br> Task 11 <br>");
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "Среднее количество дней, затраченное на изучение каждого языка программирования: " . $days_per_language . "<br>";

echo ("<br> Task 12 <br>");
echo 8 ** 2 . "<br>";

echo ("<br> Task 13 <br>");
$my_num = 5;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer . "<br>";

echo ("<br> Task 14 <br>");
$a = 10;
$b = 3;
$remainder = $a % $b;
echo "Остаток от деления $a на $b: $remainder <br>";

$a = 10;
$b = 3;
if ($a % $b == 0) {
	echo "Делится: " . ($a / $b) . "<br>";
} else {
	echo "Делится с остатком: " . ($a % $b) . "<br>";
}

$st = pow(2, 10);
echo "2 в степени 10 равно $st<br>";

$sqrt = sqrt(245);
echo "Квадратный корень из 245: $sqrt<br>";

$arr = [4, 2, 5, 19, 13, 0, 10];
$total = 0;
foreach ($arr as $num) {
	$total += pow($num, 2);
}
$sqrt_sum = sqrt($total);
echo "Корень из суммы квадратов элементов массива: $sqrt_sum<br>";

$sqrt_round = sqrt(379);
echo "Квадратный корень из 379: " . round($sqrt_round) . ", " . round($sqrt_round, 1) . ", " . round($sqrt_round, 2) . "<br>";

$sqrt_ceil_floor = sqrt(587);
$result = [
	'floor' => floor($sqrt_ceil_floor),
	'ceil' => ceil($sqrt_ceil_floor)
];
echo "Квадратный корень из 587: floor - " . $result['floor'] . ", ceil - " . $result['ceil'] . "<br>";

$numbers = [4, -2, 5, 19, -130, 0, 10];
$min = min($numbers);
$max = max($numbers);
echo "Минимальное число: $min, максимальное число: $max<br>";

$random_num = rand(1, 100);
echo "Случайное число от 1 до 100: $random_num<br>";

$random_arr = [];
for ($i = 0; $i < 10; $i++) {
	$random_arr[] = rand(1, 100);
}
print_r($random_arr);
echo "\n";

$a = 5;
$b = 8;
$module = abs($a - $b);
echo "Модуль разности $a и $b: $module<br>";

$numbers = [1, 2, -1, -2, 3, -3];
$new_arr = array_map(function($num) {
	return abs($num);
}, $numbers);
print_r($new_arr);
echo "<br>";

$number = 30;
$divisors = [];
for ($i = 1; $i <= $number; $i++) {
	if ($number % $i == 0) {
		$divisors[] = $i;
	}
}
print_r($divisors);
echo "<br>";

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;

foreach ($array as $element) {
	$sum += $element;
	$count++;

	if ($sum > 10) {
		break;
	}
}

echo "Количество элементов для суммы больше 10: $count<br>";

echo ("<br> Task 15 <br>");
function printStringReturnNumber($string) {
	echo $string . "<br>";
	return 123;
}

$my_num = printStringReturnNumber("Hello World");
echo $my_num . "<br>";

echo ("<br> Task 16 <br>");
function increaseEnthusiasm($str) {
	return $str . "!";
}

function repeatThreeTimes($str) {
	return $str . $str . $str;
}

echo increaseEnthusiasm(repeatThreeTimes("World"));

function cut($str, $num = 10) {
	return substr($str, 0, $num);
}

echo cut("This is a long string", 5) . "<br>";
echo cut("Another long string");

function printArray($arr, $i = 0) {
	if($i < count($arr)) {
		echo $arr[$i] . "<br>";
		printArray($arr, $i + 1);
	}
}

$array = [1, 2, 3, 4, 5];
printArray($array);
echo "<br>";

function sumDigits($num) {
	$sum = 0;
	while($num > 0) {
		$sum += $num % 10;
		$num = (int)($num / 10);
	}
	if($sum > 9) {
		return sumDigits($sum);
	} else {
		return $sum;
	}
}

echo sumDigits(12345) . "\n";
echo "<br>";

echo ("<br> Task 17 <br>");
$array = [];
for ($i = 1; $i <= 5; $i++) {
	$array[] = str_repeat('x', $i);
}
print_r($array);
echo "<br>";

function arrayFill($value, $count) {
	$result = [];
	for ($i = 0; $i < $count; $i++) {
		$result[] = $value;
	}
	return $result;
}

print_r(arrayFill('x', 5));
echo "<br>";
$numbers = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($numbers as $subArray) {
	$sum += array_sum($subArray);
}
echo $sum."<br>";

$array = [];
$count = 1;
for ($i = 0; $i < 3; $i++) {
	$subArray = [];
	for ($j = 0; $j < 3; $j++) {
		$subArray[] = $count++;
	}
	$array[] = $subArray;
}
print_r($array);
echo "<br>";

$array = [2, 5, 3, 9];
$result = ($array[0] * $array[1]) + ($array[2] * $array[3]);
echo $result."<br>";;

$user = ['name' => 'Vladislav', 'surname' => 'Karpichev', 'patronymic' => 'Andreevich'];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic']."<br>";

$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day']."<br>";

$arr = ['a','b','c','d','e'];
echo count($arr)."<br>";

$arr = ['a','b','c','d','e'];
echo end($arr)."<br>";

$lastIndex = count($arr) - 2;
echo $arr[$lastIndex]."<br>";
echo "<br>";

echo ("<br> Task 18 <br>");
function isSumGreaterThanTen($num1, $num2) {
	if ($num1 + $num2 > 10) {
		return true;
	} else {
		return false;
	}
}
$a = 5;
$b = 10;

echo "Number $b greater than $a is: " . (isSumGreaterThanTen($b, $a) ? "true" : "false") . "<br>";
function areNumbersEqual($num1, $num2) {
	if ($num1 == $num2) {
		return true;
	} else {
		return false;
	}
}

echo "Are numbers $a and $b equal? " . (areNumbersEqual($a, $b) ? "Yes" : "No") . "<br>";

$test = 0;
if ($test == 0) echo 'верно'."<br>";;

$age = 45;
if ($age < 10 || $age > 99) {
	echo 'Число меньше 10 или больше 99'."<br>";;
} else {
	$sum = array_sum(str_split($age));
	if ($sum <= 9) {
		echo 'Сумма цифр однозначна'."<br>";;
	} else {
		echo 'Сумма цифр двузначна'."<br>";
	}
}

$arr = [5, 8, 10];
if (count($arr) == 3) {
	echo 'Сумма элементов массива: ' . array_sum($arr);
}
echo "<br>";
echo ("<br> Task 19 <br>");
for ($i = 0; $i <= 20; $i++) {
	for ($j = $i; $j > 0; $j--) {
		echo "x";
	}
	echo "<br>";
}

echo ("<br> Task 20 <br>");
$arr= [1,10,5,9,4,9,5,10];

$result = array_sum($arr)/ count($arr);
echo "Среднее арифметическое: ".$result."<br>";;

$result = (1 + 100) * 100 /2;
echo  $result."<br>";

$arr = [1, 4, 9, 16, 25, 36, 49, 64, 81, 100];
$arrSqrt = array_map('sqrt', $arr);
print_r($arrSqrt);
echo "<br>";

$values = range(1, 26);
$keys = range('a', 'z');
$array = array_combine($keys, $values);
print_r($array);
echo "<br>";

$string = '1234567890';
$numbers = str_split($string, 2);
$sum = array_sum($numbers);
echo $sum."<br>";
