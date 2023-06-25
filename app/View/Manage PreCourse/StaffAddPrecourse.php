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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar-keluar" href="<?= BASEURL; ?>/LogIn/">Keluar</a>
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
                            <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Krusus Pra Perkahwinan</h3> <!--Content Header-->
                            </div>
                                <!--Content of container-->
                        <form onsubmit="AddCourse()" id="upload" enctype="text/plain" class="form-control" method="post">
                            <div >
                            <div class="container mt-5">
                                <div class="row mb-3">
                                    <div class="container">
                                            <div class="form-floating mb-1">
                                                <input type="text" id="Tempat" list="tempat" placeholder="Sila Pilih Tempat">
                                                    <datalist id="tempat">
                                                        <option value="Dewan Cheese">
                                                        <option value="Dewan Sos">
                                                        <option value="Dewan itu">
                                                        <option value="Dewan ini">
                                                        <option value="Dewan sebegitu">
                                                    </datalist>
                                                </div>
                                                <div class="form-floating mb-1">
                                                    <input type="text" class="form-control" id="" placeholder="No telefon">
                                                    <label for="">No Telefon</label>
                                                </div>
                                            </div>
                                </div>
                                <div class="container" style = "padding: 20px">
                                <a class="btn btn-primary"  style="margin-bottom: 8px; float: right;" onclick="showNotification()" role="button">Tambah</a>
                        </form>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="table-dark">
                                            <th class = "w-10" scope="col">Bil</th>
                                            <th class = "w-25" scope="col">Nama Tempat</th>
                                            <th class = "w-20" scope="col">No Telefon</th>
                                            <th class = "w-20" scope="col">Operasi</th>
                                            <th class = "w-20" scope="col">Ulasan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-light">
                                                <th scope="row">-</th>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td class="text-center">
                                                    <a class="btn" href="<?= BASEURL ?>/PreCourse/addPrecourseInfo" role="button">
                                                        <img src="<?= BASEURL ?>/img/EditIcon.png" alt="Kemaskini">
                                                    </a>
                                                    <a class="btn" href="<?= BASEURL ?>" role="button">
                                                        <img src="<?= BASEURL ?>/img/DeleteIcon.png" alt="buang">
                                                    </a>
                                                </td>
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
</body>