<?php
require 'head.php';
require 'header-calc.php';
?>

<main>

    <form action="calculadora-result.php" method="POST">
        <div class="row mb-3">
            <span class="col-1 d-flex">

                <label for="num" class="form-label">Num 1: </label>
                </span>

                <span class="col-2 d-flex">
                <input type="number" class="form-control p-1" name="num" title="num" required min="0">
</span>
            </span>
</div>
        <div class="row d-flex">
            <div class="col-5 mb-3">
                <label for="oper" class="form-label">Operação: </label>
                <select name="oper" id="oper" required>
                    <option value="nada">[selecione]</option>
                    <option value="quad" name="quad">Ao quadrado (x²)</option>
                    <option value="cubo" name="cubo">Ao cubo (x³)</option>
                    <option value="quinta" name="quinta">À quinta potência (x^5)</option>
                    <option value="oitava" name="oitava">À oitava potência (x^8)</option>
                </select>

            </div>
        </div>

        <div class="row">
            <div class="col-1"></div>

            <div class="d-flex col-1">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </div>
    </form>

</main>



<?php
require 'footer.php';
?>