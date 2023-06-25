<body>

<div class="container">
    <div class="p-5 mt-5 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h3>MAKLUMAT MAHASISWA</h3>
            <p class="col-md-8 fs-4">ID : <?= $data['mhs']['ID']; ?></p>
            <p class="col-md-8 fs-4">NAME : <?= $data['mhs']['name']; ?></p>
            <p class="col-md-8 fs-4">TAHUN : <?= $data['mhs']['tahun']; ?></p>
            <p class="col-md-8 fs-4">PROGRAM : <?= $data['mhs']['program']; ?></p>
            <a href="<?= BASEURL ?>/Mahasiswa" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div> 

</body>

