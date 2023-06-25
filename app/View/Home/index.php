<body>
    <div class="container shadow-lg rounded" style="background-color: #C7DDFE;">
      <div class="p-5 mt-5">
        <div class="container-fluid py-5">
          <div class="container-fluid">
            <div class="row">
              <div class="col-5">
                <h1 class="display-5 fw-bold">MOH KAHWIN PAHANG</h1>
                <p class="col-md-8 fs-4">Selamat Datang <?= $_SESSION['user_name'] ?></p>
              </div>
              <div class="col-7 text-center" >
              <div class="container-fluid mt-3">
                <div class="col">
                  <div class="row">
                  <a href="<?= BASEURL ?>/ManageProfile/" class="btn btn-primary btn-lg m-2">Profile</a>
                    <a href="<?= BASEURL ?>/PreCourse/" class="btn btn-primary btn-lg m-2">Kursus Pra-Perkahwinan</a>
                    <a href="<?= BASEURL ?>/MarriageRegistration/" class="btn btn-primary btn-lg m-2">Pendaftaran Perkahwinan</a>
                    <a href="<?= BASEURL ?>/MarriageApplication/" class="btn btn-primary btn-lg m-2">Permohonan Berkahwin</a>
                    <a href="<?= BASEURL ?>Consultation/" class="btn btn-primary btn-lg m-2">Khidmat Nasihat</a>
                    <a href="<?= BASEURL ?>/Incentive/" class="btn btn-primary btn-lg m-2">Insentif</a>
                  </div>
                </div>  
              </div>       
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
</body>
