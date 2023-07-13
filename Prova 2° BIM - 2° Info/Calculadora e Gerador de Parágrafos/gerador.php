<?php
$nump = filter_input(INPUT_GET, 'nump', FILTER_SANITIZE_NUMBER_INT);
$cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

if ($cor == 'verde') {
    $corfundo = 'bg-success-subtle';
    $cortxt = "text-success-emphasis";
} elseif ($cor  == 'azul') {
    $corfundo = 'bg-primary-subtle';
    $cortxt = 'text-primary-emphasis';
} elseif ($cor  == 'vermelho') {
    $corfundo = 'bg-danger-subtle';
    $cortxt = "text-danger-emphasis";
}

require 'head.php';
require 'header-gerador.php';


?>

<main>
    <section>
        <h3>Perfil de cores (tema)</h3>
        <div class="row justify-content-between mb-4">
            <div class="col-1"></div>
            <div class="col-2 fs-2">
                <a class="link-danger" href="?cor=vermelho&nump=<?= $nump; ?>">Vermelho</a>
            </div>
            <div class="col-2 fs-2">
                <a class="link-success" href="?cor=verde&nump=<?= $nump; ?>">Verde</a>
            </div>
            <div class="col-2 fs-2">
                <a class="link-primary" href="?cor=azul&nump=<?= $nump; ?>">Azul</a>
            </div>
            <div class="col-1"></div>
        </div>
    </section>
    <section>
        <h3>Número de parágrafos</h3>
        <div class="row justify-content-between fs-2 mb-4">
            <div class="col-1"></div>
            <div class="col-1">
                <a class="link-primary" href="?nump=1&cor=<?= $cor; ?>">#1</a>
            </div>
            <div class="col-1">
                <a class="link-primary" href="?nump=2&cor=<?= $cor; ?>">#2</a>
            </div>
            <div class="col-1">
                <a class="link-primary" href="?nump=3&cor=<?= $cor; ?>">#3</a>
            </div>
            <div class="col-1">
                <a class="link-primary" href="?nump=5&cor=<?= $cor; ?>">#5</a>
            </div>
            <div class="col-1">
                <a class="link-primary" href="?nump=12&cor=<?= $cor; ?>">#12</a>
            </div>
            <div class="col-1">
                <a class="link-primary" href="?nump=32&cor=<?= $cor; ?>">#32</a>
            </div>
            <div class="col-1"></div>

        </div>


        <?php
        if (isset($_GET['nump'])) {

            $cont = 1;
            while ($cont <= $_GET['nump']) {
                $nump = $cont;
        ?>
                <div class="row fs-2">
                    <div class='col-1'></div>
                    <div class="col-4">
                        <p>Lorem Ipsum <?= $cont; ?></p>
                    </div>
                </div>
        <?php
                $cont++;
            }
        }



      
        $corfundo = filter_input(INPUT_GET, "corfundo", FILTER_SANITIZE_SPECIAL_CHARS);
        $cortxt = filter_input(INPUT_GET, "cortxt", FILTER_SANITIZE_SPECIAL_CHARS);

        ?>

    </section>
</main>

<?php
require 'footer.php';
?>