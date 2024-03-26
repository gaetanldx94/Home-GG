<?php
if (isset($_GET['file'])) {
    $file = 'res/' . basename($_GET['file']);

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    } else {
        echo "Le fichier n'existe pas.";
    }
} else {
    echo "Paramètre 'file' manquant dans l'URL.";
}
?>
