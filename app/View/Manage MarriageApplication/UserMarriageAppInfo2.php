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
                                            <a class="list-group-item list-group-item-action list-group-item-light, col-navbar">Persetujuan dan Wakalah Wali</a>
                                        </div>
                                        <div class="col">
                                            <a class="list-group-item list-group-item-action list-group-item-light, col-navbar, selected-navbar">Permohonan Ujian Saringan HIV</a>
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
                                    <p>Bahagian A :(Diisi Oleh Pemohon)</p>
                                </div>
                                <div class="row align-items-center">
                                    <p>Saya --Nama--  alamat --Alamat--</p>
                                    <p>No.Kad Pengenalan --IC-- no tell --No Tell-- dengan ini BERSETUJU</p>
                                    <p>secara sedar dan tanpa sebarang paksaan untuk menjalani ujian saringan HIV dan ujian-ujian lain</p>
                                    <p>yang berkaitan, memaklumkan keputusan ujian saringan HIV kepada pasangan dan menjalani sesi</p>
                                    <p>kaunseling bersama pasangan sekiranya diperlukan</p>
                                    <p b>Tarikh: <input class="col-2" type="date"> </p> 
                                </div>
                                <div style="background-color: lightblue;">
                                    <p>Bahagian B:(Diisi oleh pegawai perubatan kerajaan)</p>
                                </div>
                                <div class="row align-items-center">
                                    <p>Klinik Kesihatan <input class="col-2" type="text" placeholder="nama klinik">. Saya, pegawai perubatan seperti yang dinyatakan di</p>
                                    <p>atas dengan ini mengesahkan bahawa ujian saringan HIV telah dilakukan terhadap Encik --Nama user-- </p>
                                    <p>di klinik ini dan keputusannya adalah <input class="col-2" type="text" placeholder="nama"> .</p>
                                    <p b>Tarikh: <input class="col-2" type="date"> </p> 
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <a class="btn btn-primary"  style="float: right; margin-right: 10px;  color:white;" href="<?= BASEURL ?>/MarriageApplication/page3" role="button">Seterusnya</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</body>
