
    <?php
    include 'zt_logo.php';
    function nothooson($too)
    {
        if ($too != "") {
            return $too;
        }
        return;
    }

    function calculate($nom1, $uildel, $nom2)
    {
        switch ($uildel) {
            case "+":
                return $nom1 + $nom2;
                break;
            case "-":
                return $nom1 - $nom2;
                break;
            case "*":
                return $nom1 * $nom2;
                break;
            case "/":
                return $nom1 / $nom2;
                break;

            default:
                return 'Aldaa';
        }
        return 'Mash tom aldaa';
    }

    if (nothooson($_POST['nomer1']) && nothooson($_POST['uildel']) && nothooson($_POST['nomer2'])) {
        $hariu = calculate($_POST['nomer1'], $_POST['uildel'], $_POST['nomer2']);
        if(nothooson($hariu)){
            echo " hariug hevlesen";
        }
    }

    ?>