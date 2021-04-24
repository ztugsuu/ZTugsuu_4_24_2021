<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$massage = $_POST['massage'];
$oguulber = "Variables can store data of different types, and different data types can do different things.";
echo strlen($massage);

if ($email == "") {
    echo " Email hayg hooson baina";
    echo "<br>";
    die();
} else if ($pass == "") {
    echo "Pass hiigeegvi baina";
    echo "<br>";
    die();
} else if (strlen($massage) == 0) {
    echo " Massage hayg hooson baina";
    echo "<br>";
}

?>
<?php
echo $oguulber;
?>
</h1>

<h1>
    {<?php echo $pass; ?> }
    ( <span class="badge bg-secondary"><?php echo $email; ?></span> )
    <?php echo $massage; ?>
</h1>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>4/20 PHP tutorial</title>
</head>

<body>
    <?php
    echo "ZT soft";
    ?>
    <?php

    function nothooson($too)
    {
        if ($too != "") {
            return 1;
        }
        return 0;
    }

    function calculate($num1, $num2, $uild)
    {
        switch ($uild) {
            case "+":
                return $num1 + $num2;
                break;
            case "-":
                return $num1 - $num2;
                break;
            case "*":
                return $num1 * $num2;
                break;
            case "/":
                return $num1 / $num2;
                break;
            default:
                return  " aldaa";
        }
        return 'Mash tom aldaa';
    }

    if (
        nothooson($_POST['nomer1']) && nothooson($_POST['nomer2']) && nothooson($_POST['uildel'])
    ) {
        $hariu = calculate($_POST['numer1'], $_POST['nomer2'], $_POST['uildel']);
    }

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="index.php" method="POST">
                    <h2>Calculator</h2>
                    <div class="row">
                        <div class="col-2">
                            <input name="nomer1" type="number" placeholder="#1" required />
                        </div>
                        <div class="col-1">
                            <select required name="uildel" class="form-select" aria-label="Uildel">
                                <option selected></option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <input name="nomer2" type="number" placeholder="#2" required />
                        </div>
                        <div class="col-1">
                            <h1 style="font-weight: bold;  ">=</h1>
                        </div>
                        <div class="col-2">
                            <h1> <?php echo $hariu  ?> </h1>
                        </div>
                        <button type="submit">Bodoh</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</body>

</html>