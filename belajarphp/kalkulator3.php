<!DOCTYPE html>
<html>
    <head>
        <title>KALKULATOR SEDERHANA</title>
    </head>
    <body>
        <h2>KALKULATOR SEDERHANA</h2>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="angka1">Angka Pertama:</label>
    <input type="number" name="angka1" id="angka1" required>

    <label for="operator">Operator:</label>
    <select name="operator" id="operator" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <label for="angka2">Angka Kedua:</label>
    <input type="number" name="angka2" id="angka2" required>

    <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if($angka2 !=0) {
                    $hasil = $angka1 / $angka2;
                }else{
                    echo "Error : Tidak bisa membagi dengan angka 0.";
                }
                break;
        }
        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
    </body>
</html>