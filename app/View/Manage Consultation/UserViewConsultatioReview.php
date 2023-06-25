<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">

            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar"
                    href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar"
                    href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar"
                    href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar"
                    href="<?= BASEURL; ?>/MarriageRegistration">Pendaftaran Perkahwinan</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar"
                    href="<?= BASEURL; ?>/Consultation">Khidmat Nasihat</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar"
                    href="<?= BASEURL; ?>/Incentive">Insentif Khas Pasangan Pengantin</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar-keluar"
                    href="<?= BASEURL; ?>/LogIn/Logout">Keluar</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Page content-->
            <div class="body-content">

                <!--Padding Between Container Contents & Homepage-->
                <div style="padding: 20px">
                    <!--Content Container-->
                    <div class="container-M1" style="background-color: #C7DDFE;">
                        <diV style="background-color:#152C7C; color: white;">
                            <h3 class="pt-2 pb-2 align-middle" style="padding-left: 12px;">Khidmat Nasihat - Ulasan</h3>
                            <!--Content Header-->
                        </div>
                        <!--Content of container-->
                        <a class="btn btn-primary" style="float: right; margin-right: 10px;" href="<?= BASEURL ?>/Consultation"
                            role="button">Kembali</a>
                        <div>
                            <div class="container mt-5">
                                <div class="row mb-3">
                                    <div class="col">
                                        <h6><b>Maklumat Pengawai Penasihat</b></h6>
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <h6>Name : </h6>
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <h6>Jabatan : </h6>
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <h6>Tarikh : </h6>
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <h6>No. Telefon Bimbit : </h6>
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid" style="padding: 20px">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="mb-3">
                                        <h6><b>Pernyataan masalah</b></h6>
                                            <textarea readonly class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <h6><b>Ulasan Pengawai Penasihat</b></h6>
                                            <textarea readonly class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </diV>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>