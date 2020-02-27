<!--#Выполнить домашнее задание #0 (Приведение кода к стандарту PSR-2)-->

<?php

define('TEST_CONSTANTA', 'asd');

$user_name = "Igor";

function showSomething() {
    RETURN 'SOMETHING';
}

if (1 == 1) {
    echo 'hi  <br>';
}

//Выполнить домашнее задание #1
//Задание #1

$name = 'Vasia';
$age = '32';

echo "Меня зовут: ​$name <br>";
echo  "Мне $age лет <br>";
echo  "“!|/’”\"  <br>";

//Задание #2
define('ALL',80);
define('FLOMASTER',23);
define('KARANDASH',40);

$kraski = ALL - (FLOMASTER + KARANDASH);
echo $kraski . '<br>';

//Задание #3
$age2 = rand(1,120);

if ($age2 > 18 && $age2 < 65){
    echo 'Вам еще работать и работать <br>';
}else if($age2 > 65 ){
    echo 'Вам пора на пенсию <br>';
}else if($age > 1 && $age <=17){
    echo 'Вам ещё рано работать <br>';
}else{
    echo 'Неизвестный возраст <br>';
}

//Задание #4
$day = rand(1,10);

switch ($day){
    case $day >= 1 && $day <= 5 ? true : false; {
        echo 'Это рабочий день' . " $day" . '<br>';
        break;
    }
    case $day >= 6 && $day <= 7 ? true : false; {
        echo 'Это выходной день' . " $day" . '<br>';
        break;
    }
    default:{
        echo 'Неизвестный день' . " $day" . '<br>';
    }
}
//Задание #5

$bmw = ['model' => 'X5', 'speed' => '120', 'doors' => '5', 'year' => '2015'];
$toyota = ['model' => 'Auris', 'speed' => '140', 'doors' => '4', 'year' => '2017'];
$mercedes = ['model' => 'GLS550', 'speed' => '220', 'doors' => '5', 'year' => '2020'];

$arr[0] = $bmw;
$arr[1] = $toyota;
$arr[2] = $mercedes;

function res (array $arr) : string{
    $res = '';

    foreach ($arr as $key => $value ){
        if (is_array($value)){
            $res .= res($value) . ',<br>';
        }else{
            $res .= $value . ',<br>';
        }
    }

    return $res;
}

print_r(res($arr));

//Задание #6
echo '<table>';
for ($i = 1; $i < 10; $i++){
    echo '<tr>';
    for ($j = 1; $j < 10; $j++){
        if ($i * $j % 2){
            echo '<td style="background: aqua">';
            echo $i * $j .' ';
            echo '</td>';
        }else{
            echo '<td style="background: cadetblue">';
            echo $i * $j .' ';
            echo '</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';
