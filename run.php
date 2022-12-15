<?php

// Deklarasi variabel
$angka1 = 0;
$angka2 = 0;
$operator = "";

// Jika form telah disubmit
if (isset($_POST['submit'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    // Switch statement untuk menentukan operator
    switch ($operator) {
        case "+":
            $hasil = $angka1 + $angka2;
            break;
        case "-":
            $hasil = $angka1 - $angka2;
            break;
        case "*":
            $hasil = $angka1 * $angka2;
            break;
        case "/":
            $hasil = $angka1 / $angka2;
            break;
        default:
            $hasil = "Operator tidak dikenal";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator PHP</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="angka1" value="<?php echo $angka1; ?>">
        <select name="operator">
            <option value="+" <?php if ($operator == "+") echo "selected"; ?>>+</option>
            <option value="-" <?php if ($operator == "-") echo "selected"; ?>>-</option>
            <option value="*" <?php if ($operator == "*") echo "selected"; ?>>*</option>
            <option value="/" <?php if ($operator == "/") echo "selected"; ?>>/</option>
        </select>
        <input type="text" name="angka2" value="<?php echo $angka2; ?>">
        <input type="submit" name="submit" value="Hitung">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        echo "Hasil: " . $hasil;
    }
    ?>
</body>
</html>

