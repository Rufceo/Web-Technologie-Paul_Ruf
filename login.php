<?php
session_start();

// Admin-Zugangsdaten (diese können später in eine Datenbank ausgelagert werden)
$admin_username = 'admin';
$admin_password = '12345';

// Überprüfen, ob die Daten vom Formular gesendet wurden
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validierung der Zugangsdaten
    if ($username === $admin_username && $password === $admin_password) {
        // Erfolgreicher Login
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: upload.php');  // Weiterleitung zur Upload-Seite
        exit;
    } else {
        // Fehlgeschlagener Login, Fehlermeldung anzeigen
        echo '<p>Falscher Benutzername oder Passwort. Bitte versuchen Sie es erneut.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fehler</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Login Fehler</h1>
    </header>

    <section class="error-section">
        <p>Der Login war nicht erfolgreich. Bitte überprüfen Sie Ihre Eingaben.</p>
        <a href="login.html">Zurück zum Login</a>
    </section>

    <footer>
        <p>&copy; 2024 Gasthaus Zum Goldenen Krug - Alle Rechte vorbehalten</p>
    </footer>
</body>
</html>
