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
                        <div class="container-M1 mb-2" style="background-color: #C7DDFE;">
                            <diV style="background-color:#152C7C; color: white;">
                                <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Kursus Pra-Perkahwinan</h3> <!--Content Header-->
                            </div>
                                <!--Content of container-->
                            <div class="container mt-5">
                                <div class="row g-5 align-items-center mb-3 mt-2">
                                </div>
                                <div>
                                <input class="form-control" type="text" id="searchInput" onkeyup="search()" placeholder="Search...">
                                </div>
                            </div>
                            <div class="container" style = "padding: 20px">

                            <!-- Popup container -->
                            <div class="overlay" id="overlay"></div>
                            <div class="popup" id="popup">
                            <!-- Content to display in the popup -->
                            <h2>Data from Database</h2>
                            <p id="popupContent"></p>
                            <button onclick="closePopup()">Close</button>
                            </div>
                                <div class="row g-2 align-items-center mb-3">
                                </div>
                                <table class="table table-bordered">
                                        <thead>
                                            <tr class="table-dark">
                                            <th class = "w-10" scope="col">Bil</th>
                                            <th class = "w-25" scope="col">Anjuran</th>
                                            <th class = "w-20" scope="col">Tempat</th>
                                            <th class = "w-15" scope="col">Tarikh</th>
                                            <th class = "w-20" scope="col">Kapasiti Peserta</th>
                                            <th class = "w-20" scope="col">Kekosongan</th>
                                            <th class = "w-20" scope="col">Papar Lanjut</th>
                                            <th class = "w-20" scope="col">Daftar Penyertaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-light">
                                                <th scope="row">-</th>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td class="text-center">
                                                    <a class="btn" onclick="openPopup()"role="button">
                                                        <img src="<?= BASEURL ?>/img/ViewIcon.png" alt="Lihat">
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn" href="<?= BASEURL ?>/PreCourse/PreCourseApply" role="button">
                                                        <img src="<?= BASEURL ?>/img/ReviewIcon.png" alt="Melihat Ulasan">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </diV>
                    </div>
                </div>
            </div>
        </div>
</body>
