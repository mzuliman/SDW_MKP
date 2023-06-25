<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/styling.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/clock.css">
    <script src="/public/js/script.js"></script>
    <style>
        .body-content{
            background-image: url("<?= BASEURL; ?>/img/BG-JAIP.png");
        }
    </style>
</head>

<!-- Top navigation-->
<nav class="navbar navbar-expand-lg border-bottom shadow" style="background-color: #1976D2;">
    <div class="container-fluid " style="display: table; position: relative;">
    <a class="btn" href="<?= BASEURL ?>/Login/Logout" role="button">
        <img height="30" src="<?= BASEURL ?>/img/box-arrow-left.svg" alt="Melihat Ulasan">
    </a>
        <a  style="color: white; vertical-align: middle; font-size: 20px; padding-left: 10px;" class="navbar-brand float-left" href="<?= BASEURL; ?>/Home">e-Munakahat</a>
        <img src="<?= BASEURL; ?>/img/headerlogo.png" style="height: 40px; vertical-align: middle;" alt="">
        <img src="<?= BASEURL; ?>/img/KementerianMalaysialogo.png" style="height: 40px; padding-left: 20px; vertical-align: middle;" alt="">
        <div class="clock-date-box clock-date-container col-3" style="display: table-cell; vertical-align: middle;">
            <span id="date" class="date"></span>
            <span id="clock" class="clock"></span>
        </div>
        <a style="color: white; text-decoration: none; display: table-cell; vertical-align: middle; text-align: right;" class="col-2" href="<?= BASEURL; ?>/Home">
            HUBUNGI KAMI
        </a>
    </div>
</nav>




