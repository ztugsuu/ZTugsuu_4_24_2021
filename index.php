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
include 'form.php';
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