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
                            <h3 class="pt-2 pb-2 align-middle" style="padding-left: 12px;">Insentif Khas Pasangan Pengantin</h3>
                        </div>
                        <!-- Content of container -->
                        <br>
                        <h3 class="pt-2 pb-2 align-middle" style="padding-left: 12px;">SENARAI DOKUMEN</h3>
                        <ul id="fileList"></ul>
                        <br>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Fail</th>

                                    <th scope="col">Operasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>KAD PENGENALAN PEMOHON</td>
                                    <td><a class="btn" href="<?= BASEURL ?>/Incentive/UserApplyIncetive" role="button">
                                            <img src="<?= BASEURL ?>/img/ViewIcon.png" alt="Melihat Permohonan">
                                        </a>
                                        <a class="btn" href="<?= BASEURL ?>/Incentive/UserApplyIncetive" role="button">
                                            <img src="<?= BASEURL ?>/img/printer.png" alt="Melihat Permohonan">
                                        </a>
                                    </td>

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>PENYATA AKAUN BANK PEMOHON</td>
                                    <td><a class="btn" href="<?= BASEURL ?>/Incentive/UserApplyIncetive" role="button">
                                            <img src="<?= BASEURL ?>/img/ViewIcon.png" alt="Melihat Permohonan">
                                        </a>
                                        <a class="btn" href="<?= BASEURL ?>/Incentive/UserApplyIncetive" role="button">
                                            <img src="<?= BASEURL ?>/img/printer.png" alt="Melihat Permohonan">
                                        </a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>

                        <div class="button-container me-md-3 S">
                            <input type="button" class="btn btn-danger" value="TERIMA">
                            <input type="button" class="btn btn-danger" style="background-color: red;" value="TOLAK" ">

                                </div>


                 <br>