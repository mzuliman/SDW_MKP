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
                        <diV style="background-color:#152C7C; color: white;">
                            <h3 class="pt-2 pb-2 align-middle" style="padding-left: 12px;">Insentif - Permohonan Baru</h3>
                        </div>
                        <!--Content of container-->

                        <div class="container">

                            <!-- Form encrypted as text -->
                            <form id="form-print" enctype="text/plain" class="form-control" method="post">
                                <div class="form-container">

                                    <div class="row">
                                        <div class="container-M3 col-10">
                                            <h3>Borang Permohonan Tuntutan Insentif Khas pasangan Pengantin (IKPP)</h3>
                                        </div>
                                    </div>

                                    <div class="container-M4">
                                        <h4>1. Maklumat Pemohon</h4>
                                    </div>

                                    <!-- Form for "Maklumat Pemohon" -->

                                    <!-- Form for "Maklumat Pemohon" -->
                                    <div class="form-group">
                                        <label for="inputName">Nama Pemohon</label>
                                        <input type="text" class="form-control" id="inputName" value = "<?= $data['user'] ['User_Name'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputIC">No. Kad Pengenalan</label>
                                        <input type="number" class="form-control" id="inputIC" value = "<?= $data['user'] ['UserIC'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputnoPassport">No. Passport/Tentera/Polis</label>
                                        <input type="number" class="form-control" id="inputnoPassport" placeholder="Masukkan No. Passport/Tentera/Polis">
                                    </div>
                                    <div class="form-group">
                                        <label for="nobank">No. Akaun Bank</label>
                                        <input type="number" class="form-control" id="nobank" placeholder="Masukkan No. Akaun Bank">
                                    </div>
                                    <div class="form-group">
                                        <label for="bankname">Nama Bank</label>
                                        <input type="text" class="form-control" id="bankname" placeholder="Nama Bank">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Alamat Semasa</label>
                                        <input type="text" class="form-control" id="inputAddress" value = "<?= $data['user'] ['User_Address'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">No. Telefon</label>
                                        <input type="text" class="form-control" id="inputPhone" value = "<?= $data['user'] ['User_PhoneNo'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputBirthdate">Tarikh Lahir</label>
                                        <input type="text" class="form-control" id="inputBirthdate" placeholder="Masukkan Tarikh Lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputBirthplace">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="inputBirthplace" placeholder="Masukkan Tempat Lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNasionality">Warganegara</label>
                                        <input type="text" class="form-control" id="inputNasionality" placeholder="Warganegara">
                                    </div>
                                </div>

                                <div class="form-container">
                                    <div class="container-M4">
                                        <h4>2. Maklumat Pasangan</h4>
                                    </div>

                                    <!-- Form for "Maklumat Pasangan" -->
                                    <div class="form-group">
                                        <label for="inputSpouseName">Nama Pasangan</label>
                                        <input type="text" class="form-control" id="inputSpouseName" value = "<?= $data['userpartner']['UserPartner_Name'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputIC">No. Kad Pengenalan</label>
                                        <input type="number" class="form-control" id="inputIC" value = "<?= $data['userpartner']['UserPartnerIC'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputnoPassport">No. Passport/Tentera/Polis</label>
                                        <input type="number" class="form-control" id="inputnoPassport" placeholder="Masukkan No. Passport/Tentera/Polis">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Alamat Semasa</label>
                                        <input type="text" class="form-control" id="inputAddress"  value = "<?= $data['userpartner'] ['UserPartner_Address'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSpouseSalary">Pendapatan</label>
                                        <input type="int" class="form-control" id="inputSpouseSalary" placeholder="Pendapatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone">No. Telefon</label>
                                        <input type="text" class="form-control" id="inputPhone" value = "<?= $data['userpartner']['UserPartner_PhoneNum'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputBirthdate">Tarikh Lahir</label>
                                        <input type="text" class="form-control" id="inputBirthdate" placeholder="Masukkan Tarikh Lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAge">Umur</label>
                                        <input type="text" class="form-control" id="inputAge" placeholder="Masukkan Umur">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputBirthplace">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="inputBirthplace" placeholder="Masukkan Tempat Lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNasionality">Warganegara</label>
                                        <input type="text" class="form-control" id="inputNasionality" placeholder="Warganegara">
                                    </div>
                                </div>

                                <div class="container-M4">
                                    <h4>3. Maklumat Pekerjaan Pemohon</h4>
                                </div>

                                <!-- Form for "Maklumat Pekerjaan Pemohon" -->
                                <div class="form-container">
                                    <div class="form-group">
                                        <label for="inputJob">Pekerjaan</label>
                                        <input type="text" class="form-control" id="inputJob" placeholder="Pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputJobType">Jenis Pekerjaan</label>
                                        <input type="text" class="form-control" id="inputJobType" placeholder="Jenis Pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSalary">Pendapatan</label>
                                        <input type="text" class="form-control" id="inputSalary" placeholder="Pendapatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmployerName">Nama Majikan</label>
                                        <input type="text" class="form-control" id="inputEmployerName" placeholder="Majikan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmployerAddress">Alamat Majikan</label>
                                        <input type="text" class="form-control" id="inputEmployerAddress" placeholder="Alamat Majikan">
                                    </div>
                                </div>

                                <div class="form-container">
                                    <div class="container-M4">
                                        <h4>4. Maklumat Waris Terdekat Yang Boleh Dihubungi</h4>
                                    </div>

                                    <!-- Form for "Maklumat Waris" -->
                                    <div class="form-group">
                                        <label for="inputRelativeName">Nama Waris</label>
                                        <input type="text" class="form-control" id="inputRelativeName" placeholder="Masukkan nama waris">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRelativeType">Hubungan</label>
                                        <input type="text" class="form-control" id="inputRelativeType" placeholder="Hubungan">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRelativePhone">No. Telefon</label>
                                        <input type="text" class="form-control" id="inputRelativePhone" placeholder="Masukkan no. telefon waris">
                                    </div>

                                </div>

                                <div class="form-container">
                                    <div class="container-M4">
                                        <h4>5. Pengakuan Pemohon</h4>
                                    </div>

                                    <!-- Form for "Pengakuan Pemohon" -->
                                    <div class="declaration">
                                        <form>
                                            <h6>Saya, <input type="text" id="name" name="name" required> No.
                                                K/Pengenalan
                                                <input type="text" id="ic" name="IC" required> mengaku dengan nama
                                                Allah
                                                S.W.T bahawa saya telah bermastautin di Negeri Pahang lebih 10
                                                <strong>Tahun</strong> dan
                                                semua keterangan yang telah diberikan adalah benar. Pihak kerajaan
                                                Negeri Atau Jabatan Agama Islam Pahang berhak menolak permohonan
                                                saya
                                                ini sekiranya maklumat / keterangan yang diberikan Adalah
                                                <strong>TIDAK BENAR.</strong>
                                            </h6>
                                        </form>
                                    </div>

                                    <div class="date">
                                        <label for="inputApplicantDate">Tarikh</label>
                                        <input type="date" class="form-control" id="inputApplicantDate" placeholder="Masukkan Tarikh">
                                    </div>

                                </div>
                                <br>
                                <form id="upload" enctype="text/plain" class="form-control" method="post">
                                    <div class="upload-container">
                                        <div class="container-M4">
                                            <h4>MUAT NAIK DOKUMEN</h4>
                                        </div>

                                        <div class="upload-document">
                                            <label for="document">Kad Pengenalan Pemohon (Depan & Belakang):</label>
                                            <input type="file" id="document" name="document" accept=".pdf">
                                            <br>
                                            <label for="document">Penyata Akaun Bank Pemohon:</label>
                                            <input type="file" id="document" name="document" accept=".pdf">

                                            <h6>*FORMAT PDF SAHAJA</6>
                                        </div>
                                        <br>
                                        <!-- Add a submit button if needed -->
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="#">Upload</button>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <!-- Modal -->
                                <div class="button-container">
                                    <input type="button" class="btn btn-danger" value="HANTAR" onclick="showSuccessModal()">
                                    <input type="button" class="btn btn-primary" onclick="GeneratePdf();" value="CETAK">

                                </div>
                            </form>


                            <script>
                                function showSuccessModal() {
                                    $('#successModal').modal('show'); // Show the success modal
                                }
                                // Function to generate a single PDF with the contents of all forms with the ID 'form-print'
                                function GeneratePdf() {
                                    var forms = document.querySelectorAll('#form-print');
                                    var mergedContent = '';

                                    for (var i = 0; i < forms.length; i++) {
                                        var form = forms[i];
                                        mergedContent += form.innerHTML;
                                    }

                                    // Create a temporary element to hold the merged content
                                    var tempElement = document.createElement('div');
                                    tempElement.innerHTML = mergedContent;

                                    // Generate the PDF from the merged content
                                    html2pdf().from(tempElement).save();
                                }
                            </script>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>