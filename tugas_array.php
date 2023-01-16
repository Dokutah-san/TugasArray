<html>

<head>
    <title>Tugas Array PHP</title>
    <link rel="stylesheet" href="style_tugas_array.css">
</head>

<body>
    <h1>BELAJAR ARRAY DI PHP</h1>

    <?php
    $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
    for ($i = 0; $i < 7; $i++) {
        echo "<div class='for'>$hari[$i]</div>";
    }
    echo "<p>Looping dengan<br><b>FOR</b></p>";
    echo "<div class=br></div>";
    foreach ($hari as $m) {
        echo "<div class='foreach'>$m</div>";
    }
    echo "<p>Looping dengan<br><b>FOREACH</b></p>";
    ?>
</body>

</html>