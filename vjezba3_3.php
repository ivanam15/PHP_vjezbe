
<?php
if (isset($_POST["izracunaj"])) {
    $ocjene = [
        $_POST["kolokvij1"],
        $_POST["kolokvij2"]
    ];

    if ($ocjene[0] == 1 || $ocjene[1] == 1) {
        $rezultat = "Negativna ocjena: 1";
    } else {
        $prosjek = array_sum($ocjene) / count($ocjene);
        $rezultat = "Prosjek: " . $prosjek .
                    ",  Konačna ocjena: " . round($prosjek);
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Ocjene kolokvija</title>
</head>
<body>

<h3>Ocjene kolokvija</h3>

<form method="POST">
    Upiši ocjenu I. kolokvija:
    <input type="number" name="kolokvij1" min="1" max="5" required>
    <br><br>

    Upiši ocjenu II. kolokvija:
    <input type="number" name="kolokvij2" min="1" max="5" required>
    <br><br>

   Rezultat:
<br>

<?php
if (isset($rezultat)) {
    echo $rezultat;
}
?>

<br><br>

<button type="submit" name="izracunaj">Izračunaj</button>
</form>


</body>
</html>

