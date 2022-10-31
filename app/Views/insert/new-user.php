<?= $this->extend('layout-dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">

    <?php if (session()->getFlashdata('gagal')) : ?>
    <div class="alert alert-danger mt-1" role="alert">
        <?= session()->getFlashdata('gagal'); ?>
    </div>
    <?php endif; ?>

    <h4 class="fw-bold mb-4"><span class="text-muted fw-light">Forms/</span> Tambah User</h4>

    <form action="/dashboard/user/save" method="post" enctype="multipart/form-data">
        <div class="card mb-2 p-3">
            <div class="row">
                <div class="col"><a href="/dashboard/user" class="btn btn-primary">Kembali</a></div>
                <div class="col"><button type="submit" class="btn btn-success float-end">Simpan</button></div>
            </div>
        </div>

        <div class="card p-3">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="nama_user">Nama User</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Nama User"
                        required />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="username">Username</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                        required />
                </div>
            </div>


            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="password">Password</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password"
                        required />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="level_user">Level User</label>
                <div class="col-sm-4">
                    <select id="jenis_select" class="form-select" name="level_user" id="level_user" required>
                        <option value="1">Superadmin</option>
                        <option value="2">Admin</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="no_telp">Nomor Telepon</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" />
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-sm-2"></div>
                <div class="col-sm-10"><img src="/images/upload/default.png" alt="" class="imgPreview"
                        style="width: 35%;">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="fotoUser">Foto</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="file" class="form-control" id="fotoUser" name="fotoUser" onchange="imgPreview()" />
                        <label class="input-group-text" for="fotoUser">Upload</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<script>
function imgPreview() {
    const foto = document.querySelector('#fotoUser');
    const imgPreview = document.querySelector('.imgPreview');

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(foto.files[0]);

    fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
    }
}
</script>

<?= $this->endSection(); ?>