<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                    <a id="pendaftaranPerkahwinan" class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar" >Pendaftaran Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageCard">Kad Nikah & Sijil</a>
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
                                <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">PERMOHONAN BERKAHWIN → MAKLUMAT PEMOHON</h3> <!--Content Header-->
                            </div>
                        <div >
                            <div style="padding: 20px;">
                            
                                <tr valign="top">
                                <td class="font12" align="center">        
                                        <table>
                                        <tr class="font12boldbiru">
                                        <td width="950" rowspan="2" align="center" class="font16"><br>
                                        <form name="Pemohon" method="POST">
                                            <input type="hidden" name="txtToken" value="e78b1330acf432f127b7e025babd3c32">
                                            <table class="table table-bordered" style="width: 100%; border-color: #000000">
                                                <tr class="text-center" style="color: #000; font-size: 14px">
                                                    <td class="bg-primary" style="width: 30%">
                                                    <h5 class="text-white">MAKLUMAT PEMOHON</h5>
                                                    </td>
                                                    <td style="width: 30%"><b>MAKLUMAT PASANGAN</b></td>
                                                    <td style="width: 30%"><b>MAKLUMAT PERKAHWINAN</b></td>
                                                </tr>
                                            </table>
                                    
                                        <table cellpadding="0" cellspacing="0" align="center" width="95%" style="border-color: black;">
                                        <tr align="center" class="font12" height="30">
                                        <td>Ruang yang bertanda (<font class="font12boldmerah">*</font>) adalah wajib diisi</td>
                                        </tr>
                                        </table>
                                        <br>
                                    
                                        <table class="table table-bordered" style="border-color: black;" cellpadding="1" cellspacing="1" align="center" width="100%">
                                        <tr class="font12" height="30">
                                        <td>
                                                <table cellpadding="1" cellspacing="1" align="center" width="100%" >
                                                <tr class="font12" height="30">
                                                <td width="25%">&nbsp; No. KP Baru</td>
                                                <td width="2%" align="center">:</td>
                                                <td width="73%" class="font12gray">&nbsp;</td>
                                                </tr>
                                                    
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Nama Pemohon</td>
                                                <td align="center">:</td>
                                                <td class="font12gray">&nbsp;</td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. KP Lama/Tentera/Polis</td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtTentera" maxlength="16" autocomplete="off" value=""  style="width:240px" onChange="javascript:this.value=this.value.toUpperCase();"></td>
                                                </tr>
                                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Tarikh Lahir<font class="font12boldmerah"> *(dd/mm/yyyy)</font></td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" style="width:150px" name="txtTkhLahir" id="txtTkhLahir" maxlength="10" autocomplete="off" value="">
                                                <font class="font12gray"</font></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Umur </td>
                                                <td align="center">:</td>
                                                <td>
                                                <input class="form-control" type="text" style="width:220px" name="txtUmur" id="txtUmur" maxlength="30" value=""></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Jantina </td>
                                                <td align="center">:</td>
                                                <td class="font12gray"></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Bangsa <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtBangsa" style="width:240px">
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="01" >MELAYU</option>
                                                                                                <option value="02" >CINA</option>
                                                                                                <option value="03" >INDIA</option>
                                                                                                <option value="04" >BANGLADESHI</option>
                                                                                                <option value="05" >PAKISTANI</option>
                                                                                                <option value="06" >SRI LANKA</option>
                                                                                                <option value="07" >INDONESIAN</option>
                                                                                                <option value="08" >BUMIPUTERA SABAH</option>
                                                                                                <option value="10" >BUMIPUTRA SARAWAK</option>
                                                                                                <option value="12" >ORANG ASLI (SEMENANJUNG)</option>
                                                                                                <option value="13" >LAIN-LAIN ASIA</option>
                                                                                                <option value="14" >EUROPEAN</option>
                                                                                                <option value="15" >ARAB</option>
                                                                        </select></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Warganegara <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtWarga" style="width:240px" >
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >WARGANEGARA</option>
                                                                        </select></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Alamat Dalam K/P<font class="font12boldmerah"> *</font></td>
                                                <td align="center">:</td>
                                                <td>
                                                <textarea name="txtAlmtKp" onchange="javascript:this.value=this.value.toUpperCase();" class="form-control font12"></textarea>
                                                </td>
                                                </tr>
                                            
                                                <tr class="font11gray" height="30">
                                                <td align="right"></td>
                                                <td align="center"></td>
                                                <td><input class="form-check-input" type="checkbox" name="txtSama" value="1"  onClick="document.forms[0].submit()">
                                                <em>Tanda Jika Alamat Semasa Sama Dengan Alamat Dalam K/P</em></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Alamat Semasa <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><textarea name="txtAlmtSms" onchange="javascript:this.value=this.value.toUpperCase();" class="form-control font12"></textarea>
                                                </td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. Telefon (Rumah)</td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtTelR" style="width:240px" maxlength="14" autocomplete="off" value="" /></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. Telefon (Bimbit) <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtTelB" style="width:240px;" maxlength="14" autocomplete="off" value="" /></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Taraf Pendidikan <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtTahap" style="width:240px">
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >PHD</option>
                                                                                                <option value="2" >MASTER</option>
                                                                                                <option value="3" >IJAZAH</option>
                                                                                                <option value="4" >DIPLOMA</option>
                                                                                                <option value="5" >STPM / HSC / SIJIL</option>
                                                                                                <option value="6" >SPM / MCE</option>
                                                                                                <option value="7" >PT3 / PMR / SRP / LC</option>
                                                                                                <option value="8" >UPSR</option>
                                                                                                <option value="9" >TIADA PENDIDIKAN RASMI</option>
                                                                        </select></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Sektor Pekerjaan <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtSektor" style="width:240px">
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >SEKTOR AWAM</option>
                                                                                                <option value="2" >SEKTOR SWASTA</option>
                                                                                                <option value="3" >BEKERJA SENDIRI</option>
                                                                                                <option value="4" >PESARA</option>
                                                                                                <option value="5" >TIDAK BEKERJA</option>
                                                                        </select></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Pekerjaan/Jawatan </td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" style="width:240px;" type="text" name="txtJawatan" autocomplete="off" maxlength="100" onchange="javascript:this.value=this.value.toUpperCase();document.forms['0'].submit()" value="" /></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Pendapatan <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td>RM <input class="form-control" type="text" style="width:200px" name="txtGaji" onKeyUp="CheckInt()" placeholder="0.00" autocomplete="off" value="" /></td>
                                                </tr>
                                                                    
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Alamat Tempat Kerja </td>
                                                <td align="center">:</td>
                                                <td ><textarea name="txtAlmtPej" onchange="javascript:this.value=this.value.toUpperCase();" class="form-control font12"></textarea></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. Telefon (Pejabat)</td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" style="width:240px" name="txtTelP" maxlength="15" autocomplete="off" value="" /></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Status Kahwin <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtStatusKhwn" onchange="document.forms['0'].submit()" style="width:240px">
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >TERUNA</option>
                                                                                                <option value="2" >BERISTERI</option>
                                                                                                <option value="3" >DUDA MATI ISTERI</option>
                                                                                                <option value="4" >DUDA CERAI</option>
                                                                        </select></td>
                                                </tr>
     
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Status Saudara Baru <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtMuallaf" style="width:240px" onchange="document.forms['0'].submit()">
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >YA</option>
                                                                                                <option value="2" >TIDAK</option>
                                                </select></td>
                                                </tr>

                                                <tr class="font12" height="30">
                                                <td colspan="3" align="center"><input class="btn btn-primary mt-3" type="submit" name="btnSimpan" value="Simpan" onclick="window.scrollTo(0, 0); document.forms['Pasangan'].style.display = 'block'; document.forms['Pemohon'].style.display = 'none'; return false;">
                                                </td>
                                                </tr>
                                                </table>
                                        </td></tr></table>                                     
                                        </form>

                                        <form name="Pasangan" method="POST" style="display: none;">
                                            <input type="hidden" name="txtToken" value="e78b1330acf432f127b7e025babd3c32">
                                            <table class="table table-bordered" style="width: 100%; border-color: #000000">
                                                <tr class="text-center" style="color: #000; font-size: 14px">
                                                    <td style="width: 30%"><b>MAKLUMAT PEMOHON</b></td>
                                                    <td class="bg-primary" style="width: 30%">
                                                    <h5 class="text-white">MAKLUMAT PASANGAN</h5>
                                                    </td>
                                                    <td style="width: 30%"><b>MAKLUMAT PERKAHWINAN</b></td>
                                                </tr>
                                            </table>
                                    
                                        <table cellpadding="0" cellspacing="0" align="center" width="95%" style="border-color: black;">
                                        <tr align="center" class="font12" height="30">
                                        <td>Ruang yang bertanda (<font class="font12boldmerah">*</font>) adalah wajib diisi</td>
                                        </tr>
                                        </table>
                                        <br>
                                    
                                        <table class="table table-bordered" style="border-color: black;" cellpadding="1" cellspacing="1" align="center" width="100%">
                                        <tr class="font12" height="30">
                                        <td>
                                                <table cellpadding="1" cellspacing="1" align="center" width="100%" >
                                                <tr class="font12" height="30">
                                                <td width="25%">&nbsp; No. KP Baru</td>
                                                <td width="2%" align="center">:</td>
                                                <td width="73%" class="font12gray">&nbsp;</td>
                                                </tr>
                                                    
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Nama Pasangan</td>
                                                <td align="center">:</td>
                                                <td class="font12gray">&nbsp;</td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. KP Lama/Tentera/Polis</td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtTentera" maxlength="16" autocomplete="off" value=""  style="width:240px" onChange="javascript:this.value=this.value.toUpperCase();"></td>
                                                </tr>
                                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Tarikh Lahir<font class="font12boldmerah"> *(dd/mm/yyyy)</font></td>
                                                <td align="center">:</td>
                                                <td><input type="text" style="width:150px" name="txtTkhLahir" id="txtTkhLahir" maxlength="10" autocomplete="off" value="">
                                                <font class="font12gray"</font></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Umur </td>
                                                <td align="center">:</td>
                                                <td>
                                                <input class="form-control" type="text" style="width:220px" name="txtUmur" id="txtUmur" maxlength="30" value=""></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Jantina </td>
                                                <td align="center">:</td>
                                                <td class="font12gray"></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Bangsa <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtBangsa" style="width:240px">
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="01" >MELAYU</option>
                                                                                                <option value="02" >CINA</option>
                                                                                                <option value="03" >INDIA</option>
                                                                                                <option value="04" >BANGLADESHI</option>
                                                                                                <option value="05" >PAKISTANI</option>
                                                                                                <option value="06" >SRI LANKA</option>
                                                                                                <option value="07" >INDONESIAN</option>
                                                                                                <option value="08" >BUMIPUTERA SABAH</option>
                                                                                                <option value="10" >BUMIPUTRA SARAWAK</option>
                                                                                                <option value="12" >ORANG ASLI (SEMENANJUNG)</option>
                                                                                                <option value="13" >LAIN-LAIN ASIA</option>
                                                                                                <option value="14" >EUROPEAN</option>
                                                                                                <option value="15" >ARAB</option>
                                                                        </select></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Warganegara <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtWarga" style="width:240px" >
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >WARGANEGARA</option>
                                                                        </select></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Alamat Dalam K/P<font class="font12boldmerah"> *</font></td>
                                                <td align="center">:</td>
                                                <td>
                                                <textarea name="txtAlmtKp" onchange="javascript:this.value=this.value.toUpperCase();" class="form-control font12"></textarea>
                                                </td>
                                                </tr>
                                            
                                                <tr class="font11gray" height="30">
                                                <td align="right"></td>
                                                <td align="center"></td>
                                                <td><input class="form-check-input" type="checkbox" name="txtSama" value="1"  onClick="document.forms[0].submit()">
                                                <em>Tanda Jika Alamat Semasa Sama Dengan Alamat Dalam K/P</em></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Alamat Semasa <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><textarea name="txtAlmtSms" onchange="javascript:this.value=this.value.toUpperCase();" class="form-control font12"></textarea>
                                                </td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. Telefon (Rumah)</td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtTelR" style="width:240px" maxlength="14" autocomplete="off" value="" /></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. Telefon (Bimbit) <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtTelB" style="width:240px;" maxlength="14" autocomplete="off" value="" /></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Taraf Pendidikan <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtTahap" style="width:240px">
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >PHD</option>
                                                                                                <option value="2" >MASTER</option>
                                                                                                <option value="3" >IJAZAH</option>
                                                                                                <option value="4" >DIPLOMA</option>
                                                                                                <option value="5" >STPM / HSC / SIJIL</option>
                                                                                                <option value="6" >SPM / MCE</option>
                                                                                                <option value="7" >PT3 / PMR / SRP / LC</option>
                                                                                                <option value="8" >UPSR</option>
                                                                                                <option value="9" >TIADA PENDIDIKAN RASMI</option>
                                                                        </select></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Sektor Pekerjaan <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtSektor" style="width:240px">
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >SEKTOR AWAM</option>
                                                                                                <option value="2" >SEKTOR SWASTA</option>
                                                                                                <option value="3" >BEKERJA SENDIRI</option>
                                                                                                <option value="4" >PESARA</option>
                                                                                                <option value="5" >TIDAK BEKERJA</option>
                                                                        </select></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Pekerjaan/Jawatan </td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" style="width:240px;" type="text" name="txtJawatan" autocomplete="off" maxlength="100" onchange="javascript:this.value=this.value.toUpperCase();document.forms['0'].submit()" value="" /></td>
                                                </tr>

                                                <tr class="font12" height="30">
                                                <td>&nbsp; Pendapatan <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td>RM <input class="form-control" type="text" style="width:200px" name="txtGaji" onKeyUp="CheckInt()" placeholder="0.00" autocomplete="off" value="" /></td>
                                                </tr>
                                                
                                                                    
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Alamat Tempat Kerja </td>
                                                <td align="center">:</td>
                                                <td ><textarea name="txtAlmtPej" onchange="javascript:this.value=this.value.toUpperCase();" class="form-control font12"></textarea></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. Telefon (Pejabat)</td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" style="width:240px" name="txtTelP" maxlength="15" autocomplete="off" value="" /></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Status Kahwin <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtStatusKhwn" onchange="document.forms['0'].submit()" style="width:240px">
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >TERUNA</option>
                                                                                                <option value="2" >BERISTERI</option>
                                                                                                <option value="3" >DUDA MATI ISTERI</option>
                                                                                                <option value="4" >DUDA CERAI</option>
                                                                        </select></td>
                                                </tr>
     
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Status Saudara Baru <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtMuallaf" style="width:240px" onchange="document.forms['0'].submit()">
                                                                        <option value="">-Sila Pilih-</option>
                                                                                                <option value="1" >YA</option>
                                                                                                <option value="2" >TIDAK</option>
                                                </select></td>
                                                </tr>

                                                <tr class="font12" height="30">
                                                <td colspan="3" align="center"><input class="btn btn-primary mt-3" type="submit" name="btnSimpan" value="Simpan" onclick="window.scrollTo(0, 0); document.forms['Perkahwinan'].style.display = 'block'; document.forms['Pasangan'].style.display = 'none'; return false;">
                                                </td>
                                                </tr>
                                                </table>
                                        </td></tr></table>                                     
                                        </form>

                                        <form name="Perkahwinan" method="POST" style="display: none;">
                                            <input type="hidden" name="txtToken" value="e78b1330acf432f127b7e025babd3c32">
                                            <table class="table table-bordered" style="width: 100%; border-color: #000000">
                                                <tr class="text-center" style="color: #000; font-size: 14px">
                                                    <td style="width: 30%"><b>MAKLUMAT PEMOHON</b></td>
                                                    <td style="width: 30%"><b>MAKLUMAT PASANGAN</b></td>
                                                    <td class="bg-primary" style="width: 30%">
                                                    <h5 class="text-white">MAKLUMAT PERKAHWINAN</h5>
                                                </tr>
                                            </table>
                                
                                    
                                        <table class="table table-bordered" style="border-color: black;" cellpadding="1" cellspacing="1" align="center" width="100%">
                                        <tr class="font12" height="30">
                                        <td>
                                                <table cellpadding="1" cellspacing="1" align="center" width="100%" >


                                                <tr class="font12" height="30">
                                                <td>&nbsp; Tarikh Mohon</td>
                                                <td align="center">:</td>
                                                <td class="font12gray"></td>
                                                </tr>
                                                                    
                                                <tr class="font12" height="30">
                                                <td width="33%">&nbsp; Nama Pemohon</td>
                                                <td width="1%" align="center">:</td>
                                                <td class="font12gray" width="66%"></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Nama Pasangan</td>
                                                <td align="center">:</td>
                                                <td class="font12gray"></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td colspan="3">&nbsp; TEMPAT KAHWIN :</td>
                                                </tr>
                                                
 
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Negeri<font class="font12boldmerah"> *</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtNegeri" style="width:240px" onchange="document.forms['0'].submit()">
                                                                            <option value="">-Sila Pilih-</option>
                                                                                                        <option value="01" >JOHOR</option>
                                                                                                        <option value="02" >KEDAH</option>
                                                                                                        <option value="03" >KELANTAN</option>
                                                                                                        <option value="04" >MELAKA</option>
                                                                                                        <option value="05" >NEGERI SEMBILAN</option>
                                                                                                        <option value="06" >PAHANG</option>
                                                                                                        <option value="07" >PULAU PINANG</option>
                                                                                                        <option value="08" >PERAK</option>
                                                                                                        <option value="09" >PERLIS</option>
                                                                                                        <option value="10" >SELANGOR</option>
                                                                                                        <option value="11" selected>TERENGGANU</option>
                                                                                                        <option value="12" >SABAH</option>
                                                                                                        <option value="13" >SARAWAK</option>
                                                                                                        <option value="14" >WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
                                                                                                        <option value="15" >WILAYAH PERSEKUTUAN LABUAN</option>
                                                                                                        <option value="16" >WILAYAH PERSEKUTUAN PUTRAJAYA</option>
                                                                            </select></td>
                                                </tr>
                                                                        
                                                <tr class="bg-primary">
                                                <td colspan="3" class="text-left">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="text-white">MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</h5>
                                                    </div>
                                                </td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Tarikh Akad Nikah <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtTkhAkad" id="txtTkhAkad" size="10" maxlength="10" autocomplete="off" style="width:150px" value="">
                                                        <font class="font12gray">dd/mm/yyyy</font></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Alamat Tempat Kahwin<font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><textarea name="txtAlmtAkad" class="form-control font12" onChange="javascript:this.value=this.value.toUpperCase();" onKeyUp="CheckText()"></textarea></td>
                                                </tr>
                                            
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Jenis Mas Kahwin <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtJnsMahar" style="width:150px">
                                                                            <option value="">-Sila Pilih-</option>
                                                                                                        <option value="1" >TUNAI</option>
                                                                                                        <option value="2" >HUTANG</option>
                                                                            </select></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Mas Kahwin <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td>
                                                
                                                                            RM <input type="text" style="width:150px" name="txtMasKahwin" maxlength="15" autocomplete="off" onKeyUp="CheckMasKahwin()" value="0.00">
                                                                            </td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Hantaran </td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtHantaran" maxlength="100" value="">
                                    </td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Pemberian Lain</td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtBeriLain" maxlength="250" autocomplete="off" onChange="javascript:this.value=this.value.toUpperCase();" value=""></td>
                                                </tr>
                                                
                                                                            
                                                <tr class="bg-primary">
                                                <td colspan="3" class="text-left">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="text-white">MAKLUMAT SAKSI</h5>
                                                    </div>
                                                    <p class="text-white">Untuk Mengesahkan Borang Permohonan Kebenaran Kahwin</p>
                                                </td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Nama Saksi (1) <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtNamaSaksi1" style="width:450px" maxlength="250" autocomplete="off" onChange="javascript:this.value=this.value.toUpperCase();" value="">
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. Kad Pengenalan Saksi (1) <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" style="width:240px" name="txtKpSaksi1" maxlength="15" autocomplete="off" value=""></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Alamat Saksi (1) <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><textarea name="txtAlmtSaksi1" style="width:480px" class="form-control font12" onChange="javascript:this.value=this.value.toUpperCase();" onKeyUp="CheckText()"></textarea></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No.Telefon Saksi (1) </td>
                                                <td align="center">:</td>
                                                <td><input type="text" style="width:240px" name="txtTelSaksi1" maxlength="15" autocomplete="off" value=""></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Nama Saksi (2) <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" name="txtNamaSaksi2" style="width:450px" maxlength="250" autocomplete="off" onChange="javascript:this.value=this.value.toUpperCase();" value="">
                                                </td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. Kad Pengenalan Saksi (2) <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" style="width:240px" name="txtKpSaksi2" maxlength="15" autocomplete="off" value=""></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Alamat Saksi (2) <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><textarea name="txtAlmtSaksi2" style="width:480px" class="form-control font12" onChange="javascript:this.value=this.value.toUpperCase();" onKeyUp="CheckText()"></textarea></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; No. Telefon Saksi (2)</td>
                                                <td align="center">:</td>
                                                <td><input class="form-control" type="text" style="width:240px" name="txtTelSaksi2" maxlength="15" autocomplete="off" value=""></td>
                                                </tr>
                                                
                                                <tr class="font12" height="30">
                                                <td>&nbsp; Kategori Nikah <font class="font12boldmerah">*</font></td>
                                                <td align="center">:</td>
                                                <td><select class="form-select" name="txtKatNikah" style="width:300px" onChange="document.forms['0'].submit()">
                                                                            <option value="">-Sila Pilih-</option>
                                                                                                        <option value="1" selected>BUKAN PERNIKAHAN SEMULA</option>
                                                                                                        <option value="2" >PERNIKAHAN SEMULA</option>
                                                                            </select></td>
                                                </tr>
                                                
                                                                            
                                                <tr class="font12" height="30">
                                                <td colspan="3" align="center">
                                                <input class="btn btn-primary mt-3" type="submit" name="btnSimpan" value="Simpan" href="<?= BASEURL ?>/MarriageCard">&nbsp;        
                                                </td>
                                                </tr>					
                                                </table><br>
                                                </td></tr></table>
                                                <br>

                                                <table width="100%" bordercolor="#cccccc" cellpadding="0" cellspacing="1">
                                                <tr height="25">
                                                <td colspan="3">&nbsp;</td>
                                                <td colspan="3">PERHATIAN! :</td>
                                                <td colspan="3">&nbsp;</td>
                                                </tr>
                                                
                                                <tr align="justify" class="font12">
                                                <td colspan="3">&nbsp;</td>
                                                <td colspan="3">Sila klik pada butang <font class="font12boldmerah">Hantar</font> untuk menghantar permohonan. Untuk melengkapkan permohonan, sila cetak borang permohonan <font class="font12boldmerah">TELAH HANTAR</font> bersama dengan dokumen lampiran yang diperlukan seperti di dalam borang permohonan ke Pejabat Agama Islam Daerah (PAID) yang dipohon.</td>
                                                <td colspan="3">&nbsp;</td>
                                                </tr>
                                                
                                                <tr >
                                                <td colspan="3"></td>
                                                </tr>
                                                
                                                <tr align="justify" class="font12">
                                                <td colspan="3">&nbsp;</td> 
                                                <td colspan="3">Anda masih boleh membuat perubahan (kemaskini) kepada maklumat permohonan setelah menyimpan permohonan ini sehingga permohonan anda DIHANTAR ke Pejabat Agama Islam yang memproses permohonan.<br>Sebarang Perubahan tidak lagi dibenarkan selepas maklumat dihantar.<br><br></td><td colspan="3">&nbsp;</td>
                                                    

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