<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji Coba Formulir</title> 
    <link rel="stylesheet" type="text/css" href="loginstyle.css">   
</head>
<body>
    <div class="form-wrapper">
        <form action="prosesform.php" method="post">
            <h2>Formulir Pendaftaran</h2>
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>

            <label for="NIM">NIM:</label>
            <input type="number" id="NIM" name="NIM" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <!-- Alternating background color submit button -->
            <input type="submit" class="submit-button" value="Submit">
        </form>
    </div>
</body>
</html>
