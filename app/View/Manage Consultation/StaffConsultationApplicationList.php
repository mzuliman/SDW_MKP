<body>
        
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
        
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Permohonan Berkahwin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Pendaftaran Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar" href="<?= BASEURL; ?>/Consultation">Khidmat Nasihat</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Jadual Sesi Khidmat Nasihat</a>
                    <a style = "background-color:green" class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Senarai Permohonan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Insentif Khas Pasangan Pengantin</a>
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
                            <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Khidmat Nasihat</h3> <!--Content Header-->
                            </div>
                                <!--Content of container-->
                                <a onclick = "return confirm('Kembali Ke Halaman Utama?');" class="btn btn-primary"  style="float: right; margin-right: 10px;" href="<?= BASEURL ?>/Home" role="button">Kembali</a>
                            <div >
                                <div class="container mt-5 col-5">
      
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="No.K/P / Passport" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"> Cari </button>
                                </div>
    
                                </div>
                                <div class="container" style = "padding: 20px">
                                    <h6><b>Senarai Permohonan</b></h6>
                                    <table class="table table-bordered mt-3">
                                        <thead>
                                            <tr class="table-dark">
                                            <th class = "w-10" scope="col">Bil</th>
                                            <th class = "w-25" scope="col">ID / Name Pengadu</th>
                                            <th class = "w-20" scope="col">No Daftar</th>
                                            <th class = "w-25" scope="col">Tarikh Mohon</th>
                                            <th class = "w-20" scope="col">Status</th>
                                            <th class = "w-20" scope="col">Operasi</th>
                                            <th class = "w-20" scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-light">
                                                <th scope="row">1.</th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center">
                                                    <a class="btn"href="<?= BASEURL ?>/Consultation/" role="button">
                                                        <img src="<?= BASEURL ?>/img/ViewIcon.png" alt="Kemaskini Permohonan">
                                                    </a>
                                                </td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </diV>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>