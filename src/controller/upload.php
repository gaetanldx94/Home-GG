<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $target_dir = "res/";

    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    if (file_exists($target_file)) {
        echo "Le fichier existe déjà.";
        exit();
    }

    if ($_FILES["file"]["size"] > 5000000) { // 5 MB
        echo "Désolé, votre fichier est trop volumineux.";
        exit();
    }

    $allowed_types = array('jpg', 'jpeg', 'png', 'gif', 'pdf');
    $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (!in_array($file_extension, $allowed_types)) {
        echo "Désolé, seuls les fichiers JPG, JPEG, PNG, GIF, et PDF sont autorisés.";
        exit();
    }

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "Le fichier " . htmlspecialchars(basename($_FILES["file"]["name"])) . " a été uploadé avec succès.";
        header("Location: /directory");
    } else {
        echo "Une erreur s'est produite lors de l'upload du fichier.";
    }
} else {
    header("Location: /");
    exit();
}
?>
