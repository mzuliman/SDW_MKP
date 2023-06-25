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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
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
                        <div class="container-M1 mb-2" style="background-color: #C7DDFE;">
                            <div style="background-color:#152C7C; color: white;">
                                <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Permohonan Berkahwin</h3> <!--Content Header-->
                            </div>
                                <!--Content of container-->
                                
                            <div class="container" style="overflow: auto;">
                                <div class="list-group list-group-flush">
                        
                                    <div class="row">
                                        <div class="col">
                                            <a class="list-group-item list-group-item-action list-group-item-light, col-navbar, selected-navbar">Persetujuan dan Wakalah Wali</a>
                                        </div>
                                        <div class="col">
                                            <a class="list-group-item list-group-item-action list-group-item-light, col-navbar">Permohonan Ujian Saringan HIV</a>
                                        </div>
                                        <div class="col">
                                            <a class="list-group-item list-group-item-action list-group-item-light, col-navbar">Akuan Permaustautinan</a>
                                        </div>
                                        <div class="col">
                                            <a class="list-group-item list-group-item-action list-group-item-light, col-navbar">Permohonan Kebenaran Berkahwin</a>
                                        </div>
                                    </div>
                                </div>
                                <div style="background-color: lightblue;">
                                    <p>Persetujuan Wali</p>
                                </div>
                                <div class="row align-items-center">
                                    <p>Saya --Nama-- No.Kad Pengenalan --IC-- adalah --wali-- kepada --nama pasangan--</p>
                                    <p>dengan ini membuat pengakuan bahawa saya bersetuju dengan perkahwinan antara --nama pasangan--</p>
                                    <p>dengan --nama user-- mas kahwinnya RM --mas kahwin-- tunai.</p>
                                    <p>Saya akan mengakad nikahkan sendiri perkahwinan ini.</p>
                                    <p b>Tarikh: <input class="col-2" type="date"> </p> 
                                </div>
                                <div style="background-color: lightblue;">
                                    <p>Wakalah Wali</p>
                                </div>
                                <div class="row align-items-center">
                                    <p>Saya --Nama-- No.Kad Pengenalan --IC-- adalah --wali-- kepada --nama pasangan--</p>
                                    <p>dengan ini mewakilkan kepada --nama-- No. Kad Pengenalan --IC--</p>
                                    <p>sebagai <input class="col-2" type="text" placeholder="nama"> untuk mengakadnikahkan --nama pasangan--.</p>
                                    <p>Saya --nama user-- dengan mas kahwinnya RM --mas kahwin-- tunai.</p>
                                    <p b>Tarikh: <input class="col-2" type="date"> </p> 
                                </div>
                                <div style="background-color: lightblue;">
                                    <p>Saksi Wakalah Wali</p>
                                </div>
                                <div class="row">
                                        <div class="col-6">
                                            <h6><b>Saksi 1</b><h6>
                                            <div class="container">
                                                <div class="form-floating mb-1">
                                                    <input type="text" class="form-control" id="" placeholder="Name">
                                                    <label for="">Name</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="text" class="form-control" id="" placeholder="No. Kad Pengenalan">
                                                    <label for="">No. Kad Pengenalan</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="text" class="form-control" id="" placeholder="Alamat">
                                                    <label for="">Alamat</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="date" class="form-control" id="">
                                                    <label for="">Tarikh</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h6><b>Saksi 2</b><h6>
                                            <div class="container">
                                                <div class="form-floating mb-1">
                                                    <input type="text" class="form-control" id="" placeholder="Name">
                                                    <label for="">Name</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="text" class="form-control" id="" placeholder="No. Kad Pengenalan">
                                                    <label for="">No. Kad Pengenalan</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="text" class="form-control" id="" placeholder="Alamat">
                                                    <label for="">Alamat</label>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="date" class="form-control" id="">
                                                    <label for="">Tarikh</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div style="background-color: lightblue;">
                                    <p>Pengesahan Wakalah Wali</p>
                                </div>
                                <div class="row align-items-center">
                                    <p>Saya <input class="col-2" type="text" placeholder="nama"> mengesahkan bahwa Wakalah Wali di atas adalah dibuat dihadapan</p>
                                    <p>saya di <input class="col-2" type="text" placeholder="tempat"> dan ia mengikut kehendak Hukum Syarak.</p>
                                    <p b>Tarikh: <input class="col-2" type="date"> </p> 
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <a class="btn btn-primary"  style="float: right; margin-right: 10px;  color:white;" href="<?= BASEURL ?>/MarriageApplication/page2" role="button">Seterusnya</a>
                                    </div>
                                </div>
                                    
                            </div>
                    </div>
                </div>
            </div>
        </div>
</body>
