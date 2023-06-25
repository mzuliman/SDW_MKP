<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {

            background-color: lightblue;

        }


        .container {
            display: flex;
            height: 100vh;
            width: 100%;

        }

        .left-column {
            flex: 1;
            padding: 150px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            right: 200px;
            position: relative;
            bottom: 1px;
        }

        .left-column img {
            display: block;
            width: 600px;
            height: 720px;
            right: 80px;
            position: relative;
            bottom: 150px;
        }

        .right-column {
            flex: 1;
            padding: 20px;


        }

        .form {

            position: relative;
            right: 190px;
            position: relative;
            top: 100px;
            width: 120%;
        }

        .link {
            position: relative;
            top: 80px;


        }
    </style>
</head>

<body>
    
    <div class="container">
        <div class="left-column">

            <img src="<?= BASEURL ?>/img/BG-JAIP4.jpg" alt="login">



        </div>
        <div class="right-column">
            <h1 style="position:relative; right:40px;  position:relative; top :80px;"> Login </h1>
            <div class="form">
            <?php Flasher::Flash(); ?>
                <form action="<?= BASEURL; ?>/LogIn/verifyLogin" method="POST">
                    <input type="text" class="form-control" id="UserIC" name="UserIC" placeholder="No. Kad Pengenalan"
                        required>
                    <label for="floatingInput"> </label>
                    <input type="password" class="form-control" id="User_Password" name="User_Password"
                        placeholder="Kala Laluan" required>
                    <label for="floatingPassword"></label>
                    <div class="link">
                        <a href="<?= BASEURL; ?>/Register" class="button-link">Pengguna baru? </a>
                        <a href="<?= BASEURL; ?>/LogIn/ResetPassword" class="button-link">| Lupa kata Laluan?</a>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Masuk" style="position:relative; width: 100%">
                </form>
                <div class="row">
                    <div class="col-lg-6">
                        <?php Flasher::Flash(); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>