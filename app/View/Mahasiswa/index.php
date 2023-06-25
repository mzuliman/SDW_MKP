<body>

    <div class="container mt-5">

        <div class="row">

            <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Add
            </button>
            <br></br>
                <h3 class="mb-4">Maklumat Mahasiswa</h3>
                <?php foreach ($data['mhs'] as $mhs ) : ?>      
                <div class="list-group">
                    <a href="<?= BASEURL; ?>Mahasiswa/detail/<?= $mhs['ID']?>" class="list-group-item list-group-item-action"><?= $mhs['name']; ?></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>


    </div>

    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="titleModal">Add Mahasiswa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="<?=  BASEURL; ?>Mahasiswa/AddInfo" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="Tahun">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun">
            </div>
            <div class="form-group">
                <label for="Program">Select Program</label>
                <select class="form-control" id="program" name="program">
                    <option value = "SOFTWARE ENGINEERING">SOFTWARE ENGINEERING</option>
                    <option value = "NETWORKING">NETWORKING</option>
                    <option value = "GRAFIK">GRAFIK</option>
                </select>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
        </div>

   
        </div>
    </div>
    </div>

</body>