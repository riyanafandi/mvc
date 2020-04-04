<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman <?= $data["judul"]; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="<?= BASEURL; ?>" class="navbar-brand">Riyan Burg</a>
        <button class="navbar-toggler" data-target="#navbar" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar">
            <div class="navbar-nav">
                <a href="<?= BASEURL; ?>" class="nav-link nav-item">Home</a>
                <a href="<?= BASEURL; ?>about" class="nav-link nav-item">About</a>
            </div>
        </div>
    </div>
</nav>