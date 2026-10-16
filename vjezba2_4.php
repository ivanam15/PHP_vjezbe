<?php
$c = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
 
    $c = (3 * $a - $b) / 2;
}
?>
 
<!DOCTYPE html>
<html lang="hr">
<head>
<meta charset="UTF-8">
<title>Izračun vrijednosti c</title>
</head>
<body>
 
    <form method="post">
        Vrijednost a:
<input type="number" name="a" step="any" required>
<br><br>
 
        Vrijednost b:
<input type="number" name="b" step="any" required>
<br><br>
 
        <button type="submit">Pošalji</button>
</form>
 
    <?php
    if ($c !== "") {
        echo "<h3>Vrijednost c: $c</h3>";
    }
    ?>
 
</body>
</html>