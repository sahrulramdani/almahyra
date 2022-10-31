<?= $this->extend('layout-dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <h4 class="fw-bold mb-4"><span class="text-muted fw-light">Forms/</span> Tambah Alur Pendaftaran</h4>

    <form action="/dashboard/pendaftaran/save" method="post">
        <div class="card mb-2 p-3">
            <div class="row">
                <div class="col"><a href="/dashboard/pendaftaran" class="btn btn-primary">Kembali</a></div>
                <div class="col"><button type="submit" class="btn btn-success float-end">Simpan</button></div>
            </div>
        </div>

        <div class="card p-3">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="judul">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Pengajuan" required />
                </div>
            </div>

            <div class="row mb-1">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <i class="" id="visualIcon" style="font-size:xx-large;"></i>
                </div>
                <div class="col-sm-7">
                    <p class="fs-8">Icon akan muncul otomatis setelah mengklik Coba Icon</p>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="icon">Icon</label>
                <div class="col-sm-6 mb-1">
                    <input type="text" class="form-control" id="icon" name="icon"
                        placeholder="Paste class icon contoh : ( fa fa-address-book )" required />
                </div>
                <div class="col-sm-2 mb-1">
                    <button type="button" class="btn btn-warning" onclick="getIcon()">Coba Icon</button>
                </div>
                <div class="col-sm-2 mb-1">
                    <a href="https://fontawesome.com/v4/icons/" class="btn btn-info" target="_blank">Cari Icon</a>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                        placeholder="Lakukan Pengajuan Ke Kantor" required />
                </div>
            </div>

        </div>
    </form>
</div>

<script>
function getIcon() {
    var a = document.getElementById("icon").value;
    var b = document.getElementById("visualIcon");

    b.setAttribute('class', a);
}
</script>

<?= $this->endSection(); ?>