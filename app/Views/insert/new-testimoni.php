<?= $this->extend('layout-dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <h4 class="fw-bold mb-4"><span class="text-muted fw-light">Forms/</span> Tambah Testimoni</h4>

    <form action="/dashboard/testimoni/save" method="post" enctype="multipart/form-data">
        <div class="card mb-2 p-3">
            <div class="row">
                <div class="col"><a href="/dashboard/testimoni" class="btn btn-primary">Kembali</a></div>
                <div class="col"><button type="submit" class="btn btn-success float-end">Simpan</button></div>
            </div>
        </div>

        <div class="card p-3">
            <div class="row mb-1">
                <div class="col-sm-2"></div>
                <div class="col-sm-10"><img src="/images/upload/default.png" alt="" class="imgPreview"
                        style="width: 35%;">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="fotoTestimoni">Foto</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="file" class="form-control" id="fotoTestimoni" name="fotoTestimoni"
                            onchange="imgPreview()" />
                        <label class="input-group-text" for="fotoTestimoni">Upload</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
function imgPreview() {
    const foto = document.querySelector('#fotoTestimoni');
    const imgPreview = document.querySelector('.imgPreview');

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(foto.files[0]);

    fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
    }
}
</script>

<?= $this->endSection(); ?>