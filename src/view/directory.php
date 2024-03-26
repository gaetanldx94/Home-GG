<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de fichiers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<a href="/home" class="btn btn-primary mb-3 ml-0" style="position: absolute; top: 1.5%; left: 1%;">Retour à la page d'accueil</a>
<div class="container mt-5">
    <br>
    <br>

    <h2>Gestion de fichiers</h2>
    
    <div class="list-group mt-3">
        <?php
        $files = glob('res/*');
        foreach ($files as $file) {
            $fileName = basename($file);
            echo '<a href="/download?file=' . urlencode($fileName) . '" class="list-group-item list-group-item-action">' . $fileName . '</a>';
        }
        ?>
    </div>

    <!-- Formulaire pour uploader un fichier -->
    <form action="/upload" method="post" enctype="multipart/form-data" class="mt-3">
        <div class="form-group">
            <label for="file">Sélectionnez un fichier à uploader :</label>
            <input type="file" name="file" id="file" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>

</body>
</html>
