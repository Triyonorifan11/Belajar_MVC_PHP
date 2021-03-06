<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
</head>

<body>

    <section class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid container">
                <a class="navbar-brand" href="<?= BASEURL; ?>/home">RIYO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASEURL; ?>/portofolio">Portofolio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Projek</a></li>
                                <li><a class="dropdown-item" href="#">Desain</a></li>
                                <li><a class="dropdown-item" href="#">WhatsApp</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>