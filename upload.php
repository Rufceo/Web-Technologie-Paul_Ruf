<?php
session_start();

// Überprüfen, ob der Benutzer eingeloggt ist
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html');  // Zurück zur Login-Seite, falls nicht eingeloggt
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload - Gasthaus Zum Goldenen Krug</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Dateien hochladen</h1>
        <nav>
            <ul class="nav-grid">
                <li><a href="index.html">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="upload-section">
        <h2>PDFs für Speisekarte, Mittagsstammtisch und Happy Hour hochladen</h2>

        <!-- Upload-Formular für Speisekarte PDF -->
        <form action="upload_file.php" method="POST" enctype="multipart/form-data">
            <label for="speisekarte_pdf">Speisekarte PDF hochladen:</label>
            <input type="file" name="speisekarte_pdf" accept=".pdf" required>
            <button type="submit" name="upload_pdf_speisekarte">Speisekarte hochladen</button>
        </form>

        <!-- Upload-Formular für Mittagsstammtisch PDF -->
        <form action="upload_file.php" method="POST" enctype="multipart/form-data">
            <label for="mittagsstammtisch_pdf">Mittagsstammtisch PDF hochladen:</label>
            <input type="file" name="mittagsstammtisch_pdf" accept=".pdf" required>
            <button type="submit" name="upload_pdf_mittagsstammtisch">Mittagsstammtisch hochladen</button>
        </form>

        <!-- Upload-Formular für Happy Hour PDF -->
        <form action="upload_file.php" method="POST" enctype="multipart/form-data">
            <label for="happyhour_pdf">Happy Hour PDF hochladen:</label>
            <input type="file" name="happyhour_pdf" accept=".pdf" required>
            <button type="submit" name="upload_pdf_happyhour">Happy Hour hochladen</button>
        </form>

    </section>

    <footer>
        <p>&copy; 2024 Gasthaus Zum Goldenen Krug - Alle Rechte vorbehalten</p>
    </footer>

</body>
</html>
