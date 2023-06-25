<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageRegistration">Pendaftaran Perkahwinan</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Khidmat Nasihat</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar" href="<?= BASEURL; ?>/Incentive">Insentif Khas Pasangan Pengantin</a>
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
                        <div style="background-color:#152C7C; color: white;">
                        <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Insentif Khas Pasangan Pengantin</h3> <!--Content Header-->
                        </div>
                        <!--Content of container-->


                        <h4>SYARAT KELAYAKAN INSENTIF KHAS PASANGAN PENGANTIN YANG BERDAFTAR DI NEGERI PAHANG</h4>
                        <ul>
                            <li>Hanya anak-anak Pahang sahaja yang layak menerima insentif ini.</li>
                            <li>Samada pengantin lelaki atau perempuan mestilah anak kelahiran Negeri Pahang.</li>
                            <li>Pasangan pengantin yang mana pengantin lelaki sahaja berpendapatan RM5000.00 dan ke bawah layak menerima insentif.</li>
                            <li>Bagi pemastautin di negeri Pahang sekurang-kurangnya 10 tahun atau lebih, perlu mendapatkan pengesahan dari Penghulu/ADUN Kawasan/pengurus FELDA/Imam Qaryah atau Penyelaras.</li>
                            <li>Duda atau Janda atau salah seorang yang mana pasangannya adalah anak negeri Pahang dan berkelayakan, perkahwinan kali pertama dengan pasangan yang lain, layak untuk menerima insentif.</li>
                        </ul>
                        <h4>ANDA TIDAK LAYAK SEKIRANYA</h4>
                        <ul>
                            <li>Poligami</li>
                            <li>Nikah Tanpa Kebenaran</li>
                            <li>Kedua Pasangan Bukan Asal Pahang</li>
                            <li>Pendapatan Lelaki Melebihi RM 5,000.00</li>
                        </ul>
                        <h4>Dokumen Diperlukan</h4>
                        <ul>
                            <li>Salinan Kad Pegenalan Pemohon (Depan Dan Belakang)</li>
                            <li>Salinan Catatan Akad Nikah Pemohon</li>
                            <li>Salinan Penyata Akaun Bank Pemohon</li>
                        </ul>


                        <div class="text-right" style="margin-top: 20px;">
                            <a class="btn btn-primary" href="<?= BASEURL ?>/Incentive/ViewIncentive" role="button">SEJARAH PERMOHONAN</a>

                            <a class="btn btn-primary" href="<?= BASEURL ?>Incentive/ApplyIncentive" role="button">PERMOHONAN BARU</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/View/js/scripts.js"></script>
</body>