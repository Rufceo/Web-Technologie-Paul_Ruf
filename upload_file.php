<?php
session_start();

// Überprüfen, ob der Benutzer eingeloggt ist
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html');
    exit;
}

// Pfade für die Uploads definieren
$speisekarteUploadPath = 'uploads/speisekarte.pdf';
$mittagsstammtischUploadPath = 'uploads/mittagsstammtisch.pdf';
$happyHourUploadPath = 'uploads/happyhour.pdf';

// PDF-Upload für die Speisekarte
if (isset($_POST['upload_pdf_speisekarte'])) {
    $pdfFile = $_FILES['speisekarte_pdf'];

    if ($pdfFile['type'] == 'application/pdf') {
        if (move_uploaded_file($pdfFile['tmp_name'], $speisekarteUploadPath)) {
            echo "Speisekarte PDF erfolgreich hochgeladen!";
        } else {
            echo "Fehler beim Hochladen der Speisekarte PDF.";
        }
    } else {
        echo "Bitte laden Sie nur PDF-Dateien hoch.";
    }
}

// PDF-Upload für den Mittagsstammtisch
if (isset($_POST['upload_pdf_mittagsstammtisch'])) {
    $pdfFile = $_FILES['mittagsstammtisch_pdf'];

    if ($pdfFile['type'] == 'application/pdf') {
        if (move_uploaded_file($pdfFile['tmp_name'], $mittagsstammtischUploadPath)) {
            echo "Mittagsstammtisch PDF erfolgreich hochgeladen!";
        } else {
            echo "Fehler beim Hochladen der Mittagsstammtisch PDF.";
        }
    } else {
        echo "Bitte laden Sie nur PDF-Dateien hoch.";
    }
}

// PDF-Upload für die Happy Hour
if (isset($_POST['upload_pdf_happyhour'])) {
    $pdfFile = $_FILES['happyhour_pdf'];

    if ($pdfFile['type'] == 'application/pdf') {
        if (move_uploaded_file($pdfFile['tmp_name'], $happyHourUploadPath)) {
            echo "Happy Hour PDF erfolgreich hochgeladen!";
        } else {
            echo "Fehler beim Hochladen der Happy Hour PDF.";
        }
    } else {
        echo "Bitte laden Sie nur PDF-Dateien hoch.";
    }
}
?>
