<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar">Pendaftaran Perkahwinan</a>
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
                    <div style="padding: 20px;">
                        <tr valign="top">
                            <td class="font12" align="center">
                                <table>
                                    <tr class="font14boldbiru">
                                        <br>
                                        <table cellpadding="0" cellspacing="1" align="center" width="100%">
                                            <tr class="font14" align="center">
                                                <td> No. K/P Pasangan :</td>
                                                <td>&nbsp;</td>
                                            </tr>

                                            <tr align="center" class="font12">
                                                <td><input class="form-control" style="width: 200px;" autocomplete="off" value=""
                                                        maxlength="20" onKeyUp="CheckInput()"></td>
                                                <td>&nbsp;</td>
                                            </tr>

                                        </table>
                                        <br>
                                    </tr>
                                </table>

                                <table cellpadding="0" cellspacing="1" align="center" width="100%">
                                    <tr class="font12" align="center">
                                        <td colspan="2">Kategori Pendaftaran Nikah :</td>
                                    </tr>

                                    <tr align="center" class="font12">
                                        <td colspan="2">
                                            <select class="form-select" name="txtKategori" style="width:400px"
                                                onChange="showMessage(this.value)">
                                                <option value="">-Sila Pilih-</option>
                                                <option value="1">PENDAFTARAN NIKAH DENGAN KEBENARAN</option>
                                                <option value="2">PENDAFTARAN NIKAH TANPA KEBENARAN</option>
                                                <option value="3">PENDAFTARAN NIKAH SUKARELA</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr class="font12">
                                        <td colspan="2">&nbsp;</td>
                                    </tr>

                                    <tr class="font12" align="center" id="akuanTerimaRow" style="display: none;">
                                        <td colspan="2">No. Akuan Terima Kebenaran Berkahwin:</td>
                                    </tr>

                                    <tr align="center" class="font12" id="noRujukRow" style="display: none;">
                                        <td colspan="2"><input class="form-control" type="text" name="txtNoRujuk" style="width:400px"
                                                autocomplete="off" value="" maxlength="25"></td>
                                    </tr>

                                    <tr class="font12" align="center" id="pengesahanNikahRow" style="display: none;">
                                        <td colspan="2">No. Akuan Terima Pengesahan Nikah:</td>
                                    </tr>

                                    <tr align="center" class="font12" id="noRujukRow2" style="display: none;">
                                        <td colspan="2"><input class="form-control" type="text" name="txtNoRujuk2" style="width:400px"
                                                autocomplete="off" value="" maxlength="25"></td>
                                    </tr>

                                    <tr class="font12" align="center" id="sukarelaRow" style="display: none;">
                                        <td colspan="2">No. Akuan Terima Salinan:</td>
                                    </tr>

                                    <tr align="center" class="font12" id="noRujukRow3" style="display: none;">
                                        <td colspan="2"><input class="form-control" type="text" name="txtNoRujuk3" style="width:400px"
                                                autocomplete="off" value="" maxlength="25"></td>
                                    </tr>

                                    <script>
                                        function showMessage(value) {
                                            var akuanTerimaRow = document.getElementById("akuanTerimaRow");
                                            var noRujukRow = document.getElementById("noRujukRow");
                                            var pengesahanNikahRow = document.getElementById("pengesahanNikahRow");
                                            var noRujukRow2 = document.getElementById("noRujukRow2");

                                            if (value === "1") {
                                                akuanTerimaRow.style.display = "table-row";
                                                noRujukRow.style.display = "table-row";
                                                pengesahanNikahRow.style.display = "none";
                                                noRujukRow2.style.display = "none";
                                                sukarelaRow.style.display = "none";
                                                noRujukRow3.style.display = "none";
                                            } else if (value === "2") {
                                                pengesahanNikahRow.style.display = "table-row";
                                                noRujukRow2.style.display = "table-row";
                                                akuanTerimaRow.style.display = "none";
                                                noRujukRow.style.display = "none";
                                                sukarelaRow.style.display = "none";
                                                noRujukRow3.style.display = "none";
                                            } else if (value === "3") {
                                                sukarelaRow.style.display = "table-row";
                                                noRujukRow3.style.display = "table-row";
                                                akuanTerimaRow.style.display = "none";
                                                noRujukRow.style.display = "none";
                                                pengesahanNikahRow.style.display = "none";
                                                noRujukRow2.style.display = "none";
                                            } else {
                                                akuanTerimaRow.style.display = "none";
                                                pengesahanNikahRow.style.display = "none";
                                                noRujukRow.style.display = "none";
                                                noRujukRow2.style.display = "none";
                                                sukarelaRow.style.display = "none";
                                                noRujukRow3.style.display = "none";
                                            }
                                        }
                                    </script>
                                
                                        <tr class="font12">
                                            <td colspan="2">&nbsp;</td>
                                        </tr>

                                        <tr align="center" class="font12">
                                            <td align="right" style="padding-right: 10px;">
                                              <!-- <form name="frmTeruskan" method="post" action="frmDaftar.php"> -->
                                                <input class="btn btn-primary" type="submit" name="btnSubmit" value="Teruskan" onclick="window.location.href='<?= BASEURL ?>/MarriageRegistration/EditMarriageRegistration'">
                                              <!-- </form> -->
                                            </td>
                                            <td align="left" style="padding-left: 10px;">
                                              <form name="frmKembali" method="post" action="frmDaftar.php">
                                                <input class="btn btn-primary" type="submit"  name="btnKembali" value="Kembali">
                                              </form>
                                            </td>
                                        </tr>
                                          
                                          
                                </table>
                        </tr>
                    </div>
                </div>
                </div>
                 </div>
            </div>
        </div>
    </div>
</body>