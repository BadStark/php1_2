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

<?php


?>
<form action="/calc.php" method="get">
    <input type="number" name="oper1">

    <select name="oper">
        <option> </option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>


        <input type="number" name="oper2">
        <button type="submit">=</button>

</form>






   <?php                                    // ЗАДАНИЕ 2
   require __DIR__ . '/mass.php';
                foreach ($img as $key => $value) {
                    ?>
                    <a href="/image.php?id=<?php echo $key; ?>">
                        <img src="<?php echo $value; ?>">
                    </a>
                    <?php }

?>

</body>
</html>