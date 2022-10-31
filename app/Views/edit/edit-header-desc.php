<?= $this->extend('layout-dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <h4 class="fw-bold mb-4"><span class="text-muted fw-light">Forms/</span> Edit Header Desc</h4>

    <form action="/dashboard/header-desc/update" method="post">
        <div class="card mb-2 p-3">
            <div class="row">
                <div class="col"><a href="/dashboard/header-desc" class="btn btn-primary">Kembali</a></div>
                <div class="col"><button type="submit" class="btn btn-success float-end">Simpan</button></div>
            </div>
        </div>
        <div class="card p-3">
            <input type="text" id="idBanner" name="idBanner" value="<?= $dataHeader['id_banner_head'] ?>" hidden>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="judul">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Bingung Cari Umroh ?"
                        value="<?= $dataHeader['judul']; ?>" required />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="subjudul">Sub Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subjudul" name="subjudul"
                        value="<?= $dataHeader['subjudul']; ?>" placeholder="Apa yang kami tawarkan ?" required />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4" cols="50"
                        placeholder="Kami adalah Prawira Tour" aria-label="Kami adalah Prawira Tour"
                        required><?= $dataHeader['deskripsi']; ?></textarea>
                </div>
            </div>

        </div>
    </form>

</div>

<?= $this->endSection(); ?>