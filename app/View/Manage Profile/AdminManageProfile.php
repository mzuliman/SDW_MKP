 <!-- Top navigation-->
 
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading" style="background-color: #91BCFD;";>
                    <p><b>ID : </b></p>
                    <p><b>NAME : </b></p>
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="#!">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="#!">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="#!">Permohonan Berkahwin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="#!">Pendaftaran Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="#!">Khidmat Nasihat</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="#!">Insentif Khas Pasangan Pengantin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar " href="#!">Pengguna</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar-keluar" href="#!">Keluar</a>
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
             <h1 style="padding-left: 12px;">Pengguna</h1> <!--Content Header-->
           </div>
           <!--Content of container-->
           <br>
           <label for="input-field" style="position:relative; left:240px;">No. KP Pengguna</label>
           <input type="text" id="input-field" name="number" style="position:relative; left:250px; width: 30%;">
           <button type="submit" id="search-button" style="position:relative; left:270px;">Search</button>

           <br><br>

           <table class="table-name">
             <tr>
               <th>Bil</th>
               <th>No.KP/ Nama Suami</th>
               <th>Email Pengguna</th>
               <th>Pernan</th>
               <th>Status</th>
               <th>Operasi</th>
             </tr>
             <tr>
               <td>1.</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td class="text-center">
                 <a class="btn" href="<?= BASEURL ?>ManageProfile/EditProfile" role="button">
                   <img src="<?= BASEURL ?>/img/EditIcon.png" alt="">
                 </a>
                 <a class="btn" href="<?= BASEURL ?>ManageProfile/" role="button">
                   <img src="<?= BASEURL ?>/img/DeleteIcon.png" alt="Hapus Permohonan">
                 </a>





               </td>
             </tr>

           </table>
           <br>

           <button type="submit" id="add-user" style="position:relative; left:60px;" onclick="openForm()">Add User</button><br><br>
         </div>
       </diV>
     </div>
   </div>
 </div>
 </div>

 <div class="form-popup" id="myForm">

   <div class="container py-5 h-100">

     <section class="vh-100 gradient-custom">
       <div class="container py-5 h-100">
         <div class="row justify-content-center align-items-center h-100">
           <div class="col-12 col-lg-9 col-xl-7">
             <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
               <div class="card-body p-4 p-md-5">
                 <center>
                   <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add new user</h3>
                 </center>
                 <form>

                   <div class="row">
                     <div class="col-md-6 mb-4">

                       <div class="form-outline">
                         <input class="form-control" id="UserIC" type="text" placeholder="IC number"> <br>
                         <input class="form-control" id="User_Name" type="text" placeholder="Name"><br>
                         <input class="form-control" id="User_PhoneNo" type="text" placeholder="Phone Number"><br>
                         <input class="form-control" id="User_Email" type="text" placeholder="Email"><br>
                         <input class="form-control" id="User_Race" type="text" placeholder="Race"><br>
                         <input class="form-control" id="User_Citizenship" type="text" placeholder="Citizenship"><br>
                         <select class="form-control" id="User_Gendar" aria-label=".form-select-sm example">
                           <option selected>Role</option>
                           <option value="1">User</option>
                           <option value="2">Staff</option>
                           <option value="3">Advisor</option>
                         </select><br>

                       </div>

                     </div>
                     <div class="col-md-6 mb-4">

                       <div class="form-outline">
                         <input class="form-control" id="User_Career" type="text" placeholder="Career"><br>
                         <input class="form-control" id="User_Address" type="text" placeholder="Address"><br>
                         <input class="form-control" id="User_Status" type="text" placeholder="Status"><br>
                         <label for="birthday">Date of Birth</label>
                         <input class="form-control" id="User_BirthDate" type="date" placeholder="Date of Birth"><br>
                         <label for="password"> Passowrd </label>
                         <input type="password" class="form-control" id="SA_Password" placeholder="Enter Password" style="border-radius: 5px;  height:43px ;"><br>
                         <h6 class="mb-2 pb-1">Gender: </h6>

                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" checked />
                           <label class="form-check-label" for="femaleGender">Female</label>
                         </div>

                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                           <label class="form-check-label" for="maleGender">Male</label>
                         </div>

                       </div>
                     </div>

                     <div class="row">
                       <div class="col-md-6 mb-4 d-flex align-items-center">

                         <button type="add" class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark" style="position:relative; left:220px;">Submit</button>
                         <button type="close" class="btn btn-outline-danger btn-rounded" data-mdb-ripple-color="dark" onclick="closeForm()" style="position:relative; left:250px;">Close </button>
                       </div>
                     </div>


                   </div>
               </div>
             </div>
           </div>
         </div>

       </div>
   </div>


 </div>