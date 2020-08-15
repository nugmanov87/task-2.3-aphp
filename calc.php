<?php
$exception = new Exception();
try {
    if (empty($_GET)) {
        throw new exception ('Ничего не передано!');
    }
} catch (exception $e) {
    echo 'Поймано исключение: ', $e->getMessage(), "\n";
} finally {
    echo "Не передана операция.\n";
}

if (empty($_GET['x1']) || empty($_GET['x2'])) {
    return 'Не переданы аргументы';
}

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        $result = $x1 / $x2;
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;