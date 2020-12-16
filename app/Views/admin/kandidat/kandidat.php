<?= $this->extend('layout/master_admin') ?>

<?= $this->section('isi') ?>
<div class="align-item-center">
    <div class="row">
        <div class="col">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header row mb-3">
                        <a href="<?= base_url('kandidat/tambah') ?>" class="btn btn-primary">TAMBAH KANDIDAT</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($kandidat as $k) : ?>
                                <div class="col-md-3">
                                    <div class="card text-center">
                                        <h5 class="card-header"><?= $k['nama_calon'] ?></h5>
                                        <div class="card-body">
                                            <p class="card-text"><img src="<?= base_url('/assets/foto/' . $k['foto'])  ?>" alt="" width="200px" height="150px"></p>
                                            <div class="card-link">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> DETAIL</a>
                                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> EDIT</a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> HAPUS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>