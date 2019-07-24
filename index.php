<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>


<!--
                                                 ЗАДАНИЕ 1
-->

<?php

$a = false;
$b = false;


?>

<table border="1" align="center">
    <caption>Таблица истинности a&&b</caption>
    <tr>
        <th> a </th>
        <th> b </th>
        <th>a&&b</th>
    </tr>
    <tr>
        <td><?php echo (int)$a ?></td>
        <td><?php echo (int)$b ?></td>
        <td><?php echo (int)($a&&$b); ?></td>
    </tr>
    <tr>
        <td><?php echo (int)!$a ?></td>
        <td><?php echo (int)$b ?></td>
        <td><?php echo (int)(!$a&&$b); ?></td>
    </tr>
    <tr>
        <td><?php echo (int)$a ?></td>
        <td><?php echo (int)!$b ?></td>
        <td><?php echo (int)($a&&!$b); ?></td>
    </tr>
    <tr>
        <td><?php echo (int)!$a ?></td>
        <td><?php echo (int)!$b ?></td>
        <td><?php echo (int)(!$a&&!$b); ?></td>
    </tr>
</table>

<table border="1" align="center">
    <caption>Таблица истинности a||b</caption>
    <tr>
        <th> a </th>
        <th> b </th>
        <th>a||b</th>
    </tr>
    <tr>
        <td><?php echo (int)$a ?></td>
        <td><?php echo (int)$b ?></td>
        <td><?php echo (int)($a||$b); ?></td>
    </tr>
    <tr>
        <td><?php echo (int)!$a ?></td>
        <td><?php echo (int)$b ?></td>
        <td><?php echo (int)(!$a||$b); ?></td>
    </tr>
    <tr>
        <td><?php echo (int)$a ?></td>
        <td><?php echo (int)!$b ?></td>
        <td><?php echo (int)($a||!$b); ?></td>
    </tr>
    <tr>
        <td><?php echo (int)!$a ?></td>
        <td><?php echo (int)!$b ?></td>
        <td><?php echo (int)(!$a||!$b); ?></td>
    </tr>
</table>

<table border="1" align="center">
    <caption>Таблица истинности a xor b</caption>
    <tr>
        <th> a </th>
        <th> b </th>
        <th>a xor b</th>
    </tr>
    <tr>
        <td><?php echo (int)$a ?></td>
        <td><?php echo (int)$b ?></td>
        <td><?php echo (int)($a xor $b); ?></td>
    </tr>
    <tr>
        <td><?php echo (int)!$a ?></td>
        <td><?php echo (int)$b ?></td>
        <td><?php echo (int)(!$a xor $b); ?></td>
    </tr>
    <tr>
        <td><?php echo (int)$a ?></td>
        <td><?php echo (int)!$b ?></td>
        <td><?php echo (int)($a xor !$b); ?></td>
    </tr>
    <tr>
        <td><?php echo (int)!$a ?></td>
        <td><?php echo (int)!$b ?></td>
        <td><?php echo (int)(!$a xor !$b); ?></td>
    </tr>
</table>



</body>
</html>






<br>
<hr/>
<!--
                                                 ЗАДАНИЕ 2
-->

<?php
$a = 3;
$b = 5;
$c = 1;
$d = disc ($a, $b, $c);

assert(13 == disc(3, 5, 1));
assert(-159 == disc(8,1,5));
assert(77 == disc(1,9,1));

?>

Имеем квадратное уравнение вида ax^2 + bx + c = 0,
где a = <?php echo $a; ?>, b = <?php echo $b; ?> и c = <?php echo $c; ?> <br>
Для решения уравнения находим дискриминант: D = <?php
function disc ($a, $b, $c) {
    return ($b * $b) - (4 * $a * $c);
}
echo $d; ?> <br>
<?php
if ($d > 0) {
    $kor1 = (-$b + sqrt($d)) / (2 * $a);
    $kor2 = (-$b - sqrt($d)) / (2 * $a);
    echo 'Дискриминант больше нуля, значит будет 2 корня. Корень 1 = ' . $kor1 . ' Корень 2 = ' . $kor2;

}  elseif ($d==0) {
    $kor = -$b / (2 * $a);
    echo 'Дискриминант D равен нулю, а значит имеет лишь один корень = ' . $kor;
} else {
    echo 'Дискриминант D отрицательный, корней нет';
}

?>




<br>
<hr/>

<!--
                                                ЗАДАНИЕ 3
-->
<?php

var_dump(include __DIR__ . '/1.php');
var_dump(include __DIR__ . '/2.php');
var_dump(include __DIR__ . '/3.php');



?>
<br>
<hr/>
<!--
                                                ЗАДАНИЕ 4
-->

<?php

function gender($my_name)
{
    $a = mb_substr($my_name, -1);

    if ($my_name === 'Саша' || $my_name === 'Слава' || $my_name === 'Женя') {
        return null;

    } elseif ($my_name === 'Илья' || $my_name === 'Гена' || $my_name === 'Володя' || $my_name === 'Боря' || $my_name === 'Ваня' || $my_name === 'Вася' ){
        return 'male';

    }
    elseif  ($a === 'а' || $a === 'я' || $a === 'ь') {
        return 'female';
    } elseif
    ($a === 'й' || $a === 'н' || $a === 'с' || $a === 'г' || $a === 'д' || $a === 'л' || $a === 'т' || $a ==='м' || $a ==='в') {
        return 'male';
    } else {
        return null;
    }
}


$is_name = 'Геннадий';
$one_gend = gender($is_name);

switch ($one_gend){
    case 'male':
        echo 'Имя ' . $is_name . ' - мужское';
        break;

    case 'female':
        echo 'Имя ' . $is_name . ' - женское';
        break;
        
    default:
        echo 'Имя ' . $is_name . ' - может быть как мужским, так и женским. Пол не определен.';
}


assert('male' == gender('Вазген'));
assert(null == gender('Саша'));
assert(null == gender('Кузмич'));
assert('female' == gender('Света'));

?>

</body>
</html>
