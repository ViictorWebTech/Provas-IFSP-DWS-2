<?php
require 'head.php';

require 'header-calc.php';


$num = filter_input(INPUT_POST, "num", FILTER_SANITIZE_NUMBER_INT);
$oper = filter_input(INPUT_POST, "oper", FILTER_SANITIZE_NUMBER_INT);


if ($_POST['oper'] == 'quad') {
    $sup = "2";
    $result = $num * $num;
    if ($result % 2 == 1) {
        $tipo = 'Ímpar';
        $cortipo = "text-warning";
    } else {
        $tipo = 'Par';
        $cortipo = 'text-primary';
    }
} elseif ($_POST['oper'] == 'cubo') {
    $sup = "3";
    $result = $num * $num * $num;
    if ($result % 2 == 1) {
        $tipo = 'Ímpar';
        $cortipo = "text-warning";
    } else {
        $tipo = 'Par';
        $cortipo = 'text-primary';
    }
} elseif ($_POST['oper'] == 'quinta') {
    $sup = "5";
    $result = $num * $num * $num * $num * $num;
    if ($result % 2 == 1) {
        $tipo = 'Ímpar';
        $cortipo = "text-warning";
    } else {
        $tipo = 'Par';
        $cortipo = 'text-primary';
    }
} elseif ($_POST['oper'] == 'oitava') {
    $sup = "8";
    $result = $num * $num * $num * $num * $num * $num * $num * $num;
    if ($result % 2 == 1) {
        $tipo = 'Ímpar';
        $cortipo = "text-warning";
    } else {
        $tipo = 'Par';
        $cortipo = 'text-primary';
    }
}
?>

<main>
    <p class="fs-2">O resultado da expressão <span class="rosa"><?= $num; ?><sup><?= $sup; ?></sup></span> é <b><?= $result; ?>.</b></p>
    <p class="fs-2"><b><?= $result; ?></b> é <span class="<?= $cortipo; ?>"><?= $tipo; ?></span>.</p>
</main>

<?php
require 'footer.php';
?>