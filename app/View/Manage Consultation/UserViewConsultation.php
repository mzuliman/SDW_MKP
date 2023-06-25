<body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageRegistration">Pendaftaran Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar" href="<?= BASEURL; ?>/Consultation">Khidmat Nasihat</a>
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
                        <div class="container-M1" style="background-color: #C7DDFE;">
                            <diV style="background-color:#152C7C; color: white;">
                                <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Khidmat Nasihat - Lihat Permohonan</h3> <!--Content Header-->
                            </div>
                                <!--Content of container-->
                                <a class="btn btn-primary"  style="float: right; margin-right: 10px;" href="<?= BASEURL ?>/Consultation" role="button">Kembali</a>
                            <div >
                                <div class="container mt-5">

                                    <div class="row">
                                        <div class="col-6">
                                            <h6><b>Maklumat Suami</b><h6>
                                            <div class="container">
                                                <div class="form-floating mb-1">
                                                    <input type="email" class="form-control" id="floatingInput" placeholder="Name" readonly>
                                                    <label for="floatingInput">Name</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="password" class="form-control" id="floatingPassword" placeholder="No. Kad Pengenalan" readonly>
                                                    <label for="floatingPassword">No. Kad Pengenalan</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Alamat" readonly>
                                                    <label for="floatingPassword">Alamat</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="password" class="form-control" id="floatingPassword" placeholder="No.Telefon Bimbit" readonly>
                                                    <label for="floatingPassword">No. Telefon Bimbit</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h6><b>Maklumat Isteri</b><h6>
                                            <div class="container">
                                                <div class="form-floating mb-1">
                                                    <input type="email" class="form-control" id="floatingInput" placeholder="Name" readonly>
                                                    <label for="floatingInput">Name</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="password" class="form-control" id="floatingPassword" placeholder="No. Kad Pengenalan" readonly>
                                                    <label for="floatingPassword">No. Kad Pengenalan</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Alamat" readonly>
                                                    <label for="floatingPassword">Alamat</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="password" class="form-control" id="floatingPassword" placeholder="No.Telefon Bimbit" readonly>
                                                    <label for="floatingPassword">No. Telefon Bimbit</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div style="padding: 20px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h6>Tujuan Pengaduan</h6>
                                            </div>
                                            <div class="col-5">
                                                <p>Nota : Sila Nyatakan Bagi Tujuan Pengaduan : Lain-Lain</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                            <div class="form-floating mb-1">
                                                    <input type="text" class="form-control" id="floatingPassword" readonly>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-floating mb-1">
                                                    <input type="text" class="form-control" id="floatingPassword" placeholder="Lain-Lain" readonly>
                                                    <label for="floatingPassword">Lain-Lain</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding: 20px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-5">
                                                <h6>Keterangan Aduan</h6>
                                            </div>
                                            <div class="col-5">
                                                <h6>Solusi Yang Telah Dibuat</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="mb-3">
                                                        <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            <div class="col-5">
                                                <div class="mb-3">
                                                    <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label"><b>Tarikh</b></label>
                                                    <input type="text" class="form-control" id="floatingPassword" readonly>
                                                </div>
                                                </div>
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label"><b>Masa</b></label>
                                                    <input type="text" class="form-control" id="floatingPassword" readonly>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label"><b>Cara Perjumpaan</b></label>
                                                    <input type="text" class="form-control" id="floatingPassword" readonly>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label"><b>Nama Pengawai</b></label>
                                                        <input type="text" class="form-control" id="floatingPassword" readonly>
                                                    </div>
                                                </div>
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
</body>