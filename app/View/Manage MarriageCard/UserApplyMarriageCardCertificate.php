<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" >Pendaftaran Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 col-navbar, selected-navbar"  href="<?= BASEURL; ?>/MarriageCard">Kad Nikah & Sijil</a>
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
                                <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">KAD NIKAH & SIJIL</h3> <!--Content Header-->
                            </div>
                        <div >
                            <div style="padding: 20px;">
                            
                                <tr valign="top">
                                <td class="font12" align="center">        
                                        <table>
                                        <tr class="font12boldbiru">
                                        <td width="950" rowspan="2" align="center" class="font16"><br>
                                        <form name="MarriageCard" method="POST">
                                            <input type="hidden" name="txtToken" value="e78b1330acf432f127b7e025babd3c32">
                                   
                                        <table class="table table-bordered" style="border-color: black;" cellpadding="1" cellspacing="1" align="center" width="100%">
                                        <tr class="font12" height="30">
                                        <td>
                                                <table cellpadding="1" cellspacing="1" align="center" width="100%" >
                                                
                                                <tr class="font12" height="30">
                                                <td width="25%">&nbsp; Nama Pasangan</td>
                                                <td width="2%" align="center">:</td>
                                                <td width="73%" class="font12gray">&nbsp;</td>
                                                </tr>
                                                    
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Nama Pemohon</td>
                                                <td align="center">:</td>
                                                <td class="font12gray">&nbsp;</td>
                                                </tr>

                                                <tr class="font12" height="30">
                                                <td>&nbsp; Tarikh Mohon</td>
                                                <td align="center">:</td>
                                                <td class="font12gray">&nbsp;</td>
                                                </tr>

                                                <tr class="font12" height="30">
                                                <td>&nbsp; Tarikh Terima</td>
                                                <td align="center">:</td>
                                                <td class="font12gray">&nbsp;</td>
                                                </tr>

                                                <tr class="font12" height="30">
                                                <td>&nbsp; No Permohonan Online</td>
                                                <td align="center">:</td>
                                                <td class="font12gray">&nbsp;</td>
                                                </tr>

                                                <tr class="font12" height="30">
                                                <td>&nbsp; No Akuan Terima</td>
                                                <td align="center">:</td>
                                                <td class="font12gray">&nbsp;</td>
                                                </tr>

                                                <tr class="font12" height="30">
                                                <td>&nbsp; Status Pendaftaran Nikah</td>
                                                <td align="center">:</td>
                                                <td class="font12gray">&nbsp;</td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No Resit Bayaran</td>
                                                <td align="center">:</td>
                                                <td>
                                                <input class="form-control" type="text" style="width:220px" name="resitNo" id="resit" maxlength="30" value=""></td>
                                                </tr>
                                                
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Pilihan Penghantaran <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="DeliveryAddress" style="width:240px" >
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >COD</option>
                                                                                                <option value="2" >Pungutan Di Pejabat</option>
                                                                        </select></td>
                                                </tr>
                                            
                                                </table>
                                        </td></tr></table>                                     
                                        </form>
                                </td></tr></table>                                                               
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </body>