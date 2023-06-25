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
                    <div class="container-M1 mb-2" style="background-color: #C7DDFE;">
                        <diV style="background-color:#152C7C; color: white;">
                            <h3 class="pt-2 pb-2 align-middle" style="padding-left: 12px;">Khidmat Nasihat - Memilih
                                Tarikh Dan Pengawai Penasihat</h3> <!--Content Header-->
                        </div>
                        <!--Content of container-->
                        <a class="btn btn-primary" style="float: right; margin-right: 10px;"
                            href="<?= BASEURL ?>/Consultation" role="button">Kembali</a>
                        <div class="container mt-5">
                            <div class="row g-5 align-items-center mb-3 mt-2">
                                <div class="col-2">
                                    <label for="inputPassword6" class="col-form-label"><b>Pilih Tarikh*</b></label>
                                </div>
                                <div class="col-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-5 align-items-center mb-3">
                                <div class="col-2">
                                    <label for="inputPassword6" class="col-form-label"><b>Pilih Masa*</b></label>
                                </div>
                                <div class="col-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <label for="inputPassword6" class="col-form-label"><b>Pilih Cara
                                            Perjumpaan*</b></label>
                                </div>
                                <div class="col-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">Secara atas Talian</option>
                                        <option value="2">Secara Bersemuka</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-5 align-items-center mb-3">
                                <div class="col-2">
                                    <label for="inputPassword6" class="col-form-label"><b>Penasihat*</b></label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" type="text" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="row g-5 align-items-center mb-3">
                                <div class="col-2">
                                    <label for="inputPassword6" class="col-form-label"></label>
                                </div>
                                <div class="col-8">
                                    <p><i>Nota : Sila Tandakan Kotak Di Bawah Untuk Pilih Pengawai Penasihat</i></p>
                                </div>
                            </div>


                        </div>
                        <div class="container" style="padding: 20px">
                            <div class="row g-2 align-items-center mb-3">
                                <div class="col-4">
                                    <label for="inputPassword6" class="col-form-label"><b>Senarai Pengawai Penasihat
                                            Yang Bertugas Pada</b></label>
                                </div>
                                <div class="col-3">
                                    <input class="form-control" type="text" placeholder="" readonly>
                                </div>
                            </div>

                            <table class="table table-bordered">
                                <thead>
                                    <tr class="table-dark">
                                        <th class="w-10" scope="col">Bil</th>
                                        <th class="w-30" scope="col">ID/Nama Pengawai Penasihat</th>
                                        <th class="w-25" scope="col">Jabatan</th>
                                        <th class="w-10" scope="col">No. Telefon Bimbit</th>
                                        <th class="w-10" scope="col">Pilih</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-light">
                                        <th scope="row">-</th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <div class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1">
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col">
                                    <a class="btn" onclick = "return confirm('Sudai selesai? Kelik Okay untuk Kemaskini & Hantar, Kelik Cancel sekiranya belum selesai');"
                                        style="float: right; margin-right: 10px; background-color: green; color:white;"
                                        href="<?= BASEURL ?>/Consultation/" role="button">Kemaskini &
                                        Hantar</a>
                                </div>
                            </div>

                        </div>

                    </diV>
                </div>
            </div>
        </div>
    </div>
</body>