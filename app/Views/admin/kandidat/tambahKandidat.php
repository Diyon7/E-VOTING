<?= $this->extend('layout/master_admin') ?>

<?= $this->section('isi') ?>
<div class="align-item-center">
    <div class="row">
        <div class="col">
            <div class="col-lg-12">
                <div class="card">
                    <?= form_open_multipart('kandidat/tambah') ?>
                    <div class="card-body">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" value="<?= set_value('nama', '', true) ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Visi</label>
                            <textarea name="visi" class="form-control textarea <?= ($validation->hasError('visi')) ? 'is-invalid' : '' ?>"><?= set_value('visi', '', true) ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('visi') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Misi</label>
                            <textarea name="misi" class="form-control textarea <?= ($validation->hasError('misi')) ? 'is-invalid' : '' ?>"><?= set_value('misi', '', true) ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('misi') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Misi</label>
                            <textarea name="misi" class="form-control textarea <?= ($validation->hasError('misi')) ? 'is-invalid' : '' ?>"><?= set_value('misi', '', true) ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('fotokandidat') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto Kandidat</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('fotokandidat')) ? 'is-invalid' : '' ?>" name="fotokandidat" id="customFile">
                                <label class="custom-file-label" for="customFile">Pilih Foto</label>
                                <span class="text-sm">* Foto Format .jpg .jpeg .png Berukuran Maksimal 2MB</span>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('fotokandidat') ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('.textarea').summernote()
    })
</script>
<?= $this->endSection() ?>