<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                    <a id="pendaftaranPerkahwinan" class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar" >Pendaftaran Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Khidmat Nasihat</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Incentive">Insentif Khas Pasangan Pengantin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar-keluar" href="<?= BASEURL; ?>/LogIn/">Keluar</a>
                </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <!-- Page content-->
            <div class="body-content">
                    <!--Padding Between Container Contents & Homepage-->
                    <div style="padding: 20px">
                        <!--Content Container-->
                        <div class="container-M1" style="background-color: #C7DDFE;">
                            <diV style="background-color:#152C7C; color: white;">
                                <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Pendaftaran Perkahwinan</h3> <!--Content Header-->
                            </div>
                        <div >
                            <div style="padding: 20px;">
                                    <table cellpadding="0" cellspacing="1" align="center">
                                        <tr class="font14" align="center">
                                        <td>No. K/P Pasangan</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        </tr>
                                        
                                        <tr align="center" class="font12">
                                            <td>
                                                <form name="" method="post">
                                                <input type="text" class="form-control" style="float: right; margin-right: 10px" name="txtKpPsgn" autocomplete="off" style="margin-right: 10px;">
                                                </form>
                                            </td>
                                            <td>
                                                <form name="frmCari" method="post">
                                                <input class="btn btn-primary"  style="float: right; margin-right: 10px" type="submit" name="btnCari" class="butang" value="Cari..">
                                                </form>
                                            </td>
                                            <td>
                                                <input class="btn btn-primary"  style="float: right; margin-right: 10px" name="btnDaftar" type="submit"  onclick="window.location.href='<?= BASEURL ?>/MarriageRegistration/ApplyMarriageRegistration'" value="Daftar Baru">
                                                </form>
                                            </td>
                                        </tr>

                                    </table>
                                    <br>
                                    <table class="table-name">
                                        <tr>
                                            <th class="table-col1">Bil</th>
                                            <th class="table-col1">KP/Nama Isteri</th>
                                            <th class="table-col2">No.Slip Permohonan</th>
                                            <th class="table-col3">Tarikh Mohon</th>
                                            <th class="table-col4">Status</th>
                                            <th class="table-col5">Operasi</th>
                                        </tr>
                                        <tr>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </body>