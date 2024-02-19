<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Formulir</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">   
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $NIM = isset($_POST["NIM"]) ? $_POST["NIM"] : '';

    if ($name && $email && $NIM) {
        echo "<div class='output-wrapper'>";
        echo "<h2>Selamat Datang, " . $name . "!</h2>";
        echo "<p>Email Anda: " . $email . "</p>";
        echo "<p>NIM Anda: " . $NIM . "</p>";
        echo "</div>";
    } else {
        echo "<div class='output-wrapper'>";
        echo "<p>Mohon lengkapi semua kolom pada formulir.</p>";
        echo "</div>";
    }
}
?>

</body>
</html>
