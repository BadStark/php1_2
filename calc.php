<?php

if (isset($_GET['oper'])) {
    switch ($_GET['oper']) {
        case '+':
            $itog = $_GET['oper1'] + $_GET['oper2'];
            echo $_GET['oper1'] . ' + ' . $_GET['oper2'] . ' = ' . $itog;
            break;
        case '-':
            $itog = $_GET['oper1'] - $_GET['oper2'];
            echo $_GET['oper1'] . ' - ' . $_GET['oper2'] . ' = ' . $itog;
            break;
        case '/':
            if ($_GET['oper2']== 0) {
                echo 'На ноль делить нельзя!';
            } else {
                $itog = $_GET['oper1'] / $_GET['oper2'];
                echo $_GET['oper1'] . ' / ' . $_GET['oper2'] . ' = ' . $itog;
            }
            break;
        case '*':
            $itog = $_GET['oper1'] * $_GET['oper2'];
            echo $_GET['oper1'] . ' * ' . $_GET['oper2'] . ' = ' . $itog;
            break;
        default:
            echo 'Что-то пошло не так...';
    }
}
