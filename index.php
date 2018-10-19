<?php

require __DIR__ . '/functions.php';

$singsOfOperations = [
    'add' => '+',
    'sub' => '-',
    'div' => '/',
    'multi' => '*',
];


if (isset($_POST['x'])) {
    $x = $_POST['x'];
} else {
    $x = false;
}

if (isset($_POST['y'])) {
    $y = $_POST['y'];
} else {
    $y = false;
}

if (isset($_POST['operations'])) {
    $operations = $_POST['operations'];
} else {
    $operations = false;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/index.php" method="POST" >
    <input type="number" name="x" value="<?php echo $x; ?>" placeholder="введите число X">
    <select name="operations">
        <?php foreach ( $singsOfOperations as $key => $value ) :?>
            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="number" name="y" value="<?php echo $x; ?>" placeholder="введите число Y">
    <input type="submit" value="=">
    <?php echo calculator($x, $operations, $y); ?>
</form>
</body>
</html>
