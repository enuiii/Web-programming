<?php
echo ("Task 1\n");
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:

$order =& $very_bad_unclear_name;
$order .= ' and Coca Cola, please';

// Don't change the line below
echo "Your order is: $very_bad_unclear_name.\n";

echo ("Task 2\n");
$number1 = 10;
echo $number1;
echo "\n";
$number2 = 5.5;
echo $number2;
echo "\n";
echo $number1 + $number2;
$last_month = 1187.23;
$this_month = 1089.98;
$difference = $last_month - $this_month;
echo "\nРазница между расходами в прошлом месяце и в этом месяце: " . $difference . "\n";

echo ("Task 11\n");
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "Среднее количество дней, затраченное на изучение каждого языка программирования: " . $days_per_language . "\n";

echo ("Task 12\n");
echo 8 ** 2 . "\n";

echo ("Task 13\n");
$my_num = 5;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer . "\n";

echo ("Task 14\n");
$a = 10;
$b = 3;
$remainder = $a % $b;
echo "Остаток от деления $a на $b: $remainder\n";

$a = 10;
$b = 3;
if ($a % $b == 0) {
	echo "Делится: " . ($a / $b) . "\n";
} else {
	echo "Делится с остатком: " . ($a % $b) . "\n";
}

$st = pow(2, 10);
echo "2 в степени 10 равно $st\n";

$sqrt = sqrt(245);
echo "Квадратный корень из 245: $sqrt\n";

$arr = [4, 2, 5, 19, 13, 0, 10];
$total = 0;
foreach ($arr as $num) {
	$total += pow($num, 2);
}
$sqrt_sum = sqrt($total);
echo "Корень из суммы квадратов элементов массива: $sqrt_sum\n";

$sqrt_round = sqrt(379);
echo "Квадратный корень из 379: " . round($sqrt_round) . ", " . round($sqrt_round, 1) . ", " . round($sqrt_round, 2) . "\n";

$sqrt_ceil_floor = sqrt(587);
$result = [
	'floor' => floor($sqrt_ceil_floor),
	'ceil' => ceil($sqrt_ceil_floor)
];
echo "Квадратный корень из 587: floor - " . $result['floor'] . ", ceil - " . $result['ceil'] . "\n";

$numbers = [4, -2, 5, 19, -130, 0, 10];
$min = min($numbers);
$max = max($numbers);
echo "Минимальное число: $min, максимальное число: $max\n";

$random_num = rand(1, 100);
echo "Случайное число от 1 до 100: $random_num\n";

$random_arr = [];
for ($i = 0; $i < 10; $i++) {
	$random_arr[] = rand(1, 100);
}
print_r($random_arr);
echo "\n";

$a = 5;
$b = 8;
$module = abs($a - $b);
echo "Модуль разности $a и $b: $module\n";

$numbers = [1, 2, -1, -2, 3, -3];
$new_arr = array_map(function($num) {
	return abs($num);
}, $numbers);
print_r($new_arr);
echo "\n";

$number = 30;
$divisors = [];
for ($i = 1; $i <= $number; $i++) {
	if ($number % $i == 0) {
		$divisors[] = $i;
	}
}
print_r($divisors);
echo "\n";

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

echo "Количество элементов для суммы больше 10: $count\n";

echo ("Task 15\n");
function printStringReturnNumber($string) {
	echo $string . "\n";
	return 123;
}

$my_num = printStringReturnNumber("Hello World");
echo $my_num . "\n";

echo ("Task 16\n");
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

echo cut("This is a long string", 5) . "\n";
echo cut("Another long string");

function printArray($arr, $i = 0) {
	if($i < count($arr)) {
		echo $arr[$i] . "\n";
		printArray($arr, $i + 1);
	}
}

$array = [1, 2, 3, 4, 5];
printArray($array);

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

echo ("Task 17\n");
$array = [];
for ($i = 1; $i <= 5; $i++) {
	$array[] = str_repeat('x', $i);
}
print_r($array);

function arrayFill($value, $count) {
	$result = [];
	for ($i = 0; $i < $count; $i++) {
		$result[] = $value;
	}
	return $result;
}
print_r(arrayFill('x', 5));

$numbers = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($numbers as $subArray) {
	$sum += array_sum($subArray);
}
echo $sum;

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

$array = [2, 5, 3, 9];
$result = ($array[0] * $array[1]) + ($array[2] * $array[3]);
echo $result."\n";;

$user = ['name' => 'Vladislav', 'surname' => 'Karpichev', 'patronymic' => 'Andreevich'];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic']."\n";;

$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day']."\n";;

$arr = ['a','b','c','d','e'];
echo count($arr)."\n";;

$arr = ['a','b','c','d','e'];
echo end($arr)."\n";;

$lastIndex = count($arr) - 2;
echo $arr[$lastIndex]."\n";
