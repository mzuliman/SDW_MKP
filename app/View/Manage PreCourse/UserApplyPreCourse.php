<body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading" style="background-color: #91BCFD;";>
                    <p><b>ID : </b></p>
                    <p><b>NAME : </b></p>
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageRegistration">Pendaftaran Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Khidmat Nasihat</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Incentive">Insentif Khas Pasangan Pengantin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar-keluar" href="<?= BASEURL; ?>/LogIn/Logout">Keluar</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Page content-->
                <div class="body-content">

                    <!--Padding Between Container Contents & Homepage-->
                    <div style="padding: 20px">
                        <!--Content Container-->
                          <!-- Notification container -->
                            <div class="notification" id="notification">
                                <!-- Content for the notification -->
                                <p>Data has been submitted successfully!</p>
                            </div>
                        <div class="container-M1" style="background-color: #C7DDFE;">
                            <diV style="background-color:#152C7C; color: white;">
                                <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Daftar Kursus Pra-Perkahwinan</h3> <!--Content Header-->
                            </div>
                                <!--Content of container-->
                                <a class="btn btn-primary"  style="float: right; margin-right: 10px;" href="<?= BASEURL ?>/PreCourse/PreCourseView" role="button">Kembali</a>
                            <div >
                                <div class="container mt-5">
                                    <div>
                                    <table class="">
                                            <tr>
                                                <td><h4>Anjuran</h4></td>
                                                <td><h4>:</h4></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><h4>Tempat dan Tarikh</h4></td>
                                                <td><h4>:</h4></td>
                                                <td></td>
                                            </tr>
                                    </table>
                                    </div>
                            <form onsubmit="ApplyPreCourse()" id="upload" enctype="text/plain" class="form-control" method="post">
                                <div class="container mt-5">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <h6>No. Kad Pengenalan : </h6>
                                        </div>
                                        <div class="col">
                                            <h6>Nama Pemohon : </h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <h6>No Telefon : </h6>
                                        </div>
                                        <div class="col">
                                            <h6>Alamat : </h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <h6>Tahap Pendidikan : </h6>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="container">
                                                <div class="form-floating mb-1">
                                                    <input type="input" class="form-control" id="floatingInput" placeholder="">
                                                    <label for="floatingInput">Sektor Pekerjaan</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="input" class="form-control" id="floatingInput" placeholder="">
                                                    <label for="floatingPassword">No Resit Bayaran</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div style="padding: 20px;">
                                    <div class="container">
                                    </div>
                                </div>
                                <div style="padding: 20px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <a class="btn btn-primary" type="submit" onclick="showNotification()"  style="float: right; margin-right: 10px; color:white;" role="button">Kemaskini & Hantar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </diV>
                    </div>
                </div>
            </div>
        </div>
</body>