<?= $this->extend('layout-dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <h4 class="fw-bold mb-4"><span class="text-muted fw-light">Forms/</span> Tambah Produk</h4>

    <form action="/dashboard/product/save" method="post" enctype="multipart/form-data">
        <div class="card mb-2 p-3">
            <div class="row">
                <div class="col"><a href="/dashboard/product" class="btn btn-primary">Kembali</a></div>
                <div class="col"><button type="submit" class="btn btn-success float-end">Simpan</button></div>
            </div>
        </div>

        <div class="card p-3">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="nama_produk">Nama Produk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                        placeholder="Umroh / Haji Murah" required />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="jenis_produk">Jenis Produk</label>
                <div class="col-sm-4">
                    <select id="jenis_select" class="form-select" name="jenis_produk" id="jenis_produk">
                        <option value="1">Umroh</option>
                        <option value="2">Haji</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="tanggal_berangkat">Tanggal Berangkat</label>
                <div class="col-sm-2">
                    <input class="form-control" type="date" id="tanggal_berangkat" name="tanggal_berangkat"
                        value="<?php echo $tanggal; ?>" />
                </div>
            </div>


            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="tanggal_pulang">Tanggal Pulang</label>
                <div class="col-sm-2">
                    <input class="form-control" type="date" id="tanggal_pulang" name="tanggal_pulang"
                        value="<?php echo $tanggal; ?>" />
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-sm-2"></div>
                <div class="col-sm-10"><img src="/images/upload/default.png" alt="" class="imgPreview"
                        style="width: 35%;">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="fotoProduct">Foto</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="file" class="form-control" id="fotoProduct" name="fotoProduct"
                            onchange="imgPreview()" />
                        <label class="input-group-text" for="fotoProduct">Upload</label>
                    </div>
                </div>
            </div>


            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="nama_pembimbing">Nama Pembimbing</label>
                <div class="col-sm-4">
                    <select id="jenis_select" class="form-select" name="nama_pembimbing" id="nama_pembimbing">
                        <?php foreach ($listPembimbing as $lp) : ?>
                        <option value="<?= $lp['id_pembimbing']; ?>"><?= $lp['nama_pembimbing']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="catatan">Catatan</label>
                <div class="col-sm-10">
                    <textarea id="catatan" name="catatan" class="form-control" rows="4" cols="50" required></textarea>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
function imgPreview() {
    const foto = document.querySelector('#fotoProduct');
    const imgPreview = document.querySelector('.imgPreview');

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(foto.files[0]);

    fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
    }
}
</script>

<?= $this->endSection(); ?>