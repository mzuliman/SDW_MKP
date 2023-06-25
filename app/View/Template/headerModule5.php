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
    <link rel="stylesheet" href="<?= BASEURL; ?>css/applyincentive.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/mainpageincentive.css">
   
    <style>
        .body-content{
            background-image: url("<?= BASEURL; ?>/img/BG-JAIP.png");
        }
    </style>
</head>

<!-- Top navigation-->
<nav class="navbar navbar-expand-lg border-bottom shadow" style="background-color: #1976D2;">
    <div class="container-fluid " style="display: table; position: relative;">
        <button class="btn" id="sidebarToggle"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAAAXNSR0IArs4c6QAAAN1JREFUaEPtl8ENAjEMBHcrgVLoBDoBOjk6uVKgkqD8eMDFF1tGUdZSfo69mji2TAxoHFAzJDrr1URapDcIqDxUHlOVRynlAuCc9ewfeR4kl195Nz9iKeUG4PoH0XeSNfdXk+jAF+knHSgiNJSGSyjOqfp0Frm9eVot7wjgsDdogP+L5FN9OoBkK0R/nx51jJ8A1JNtK8m1q6azlVrzaSJaSXn9RNpL0Hq/NRG1uVhJAphvuNRtvJ5sW7q38Wyl1nxqeVZSXj+R9hK03hdpKymvn0h7CVrvi7SVlNfvDTPzQS6whsbiAAAAAElFTkSuQmCC"/></button>
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




