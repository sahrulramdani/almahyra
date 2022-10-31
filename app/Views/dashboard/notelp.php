<?= $this->extend('layout-dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success mt-1" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('gagal')) : ?>
    <div class="alert alert-danger mt-1" role="alert">
        <?= session()->getFlashdata('gagal'); ?>
    </div>
    <?php endif; ?>

    <div class="card mb-2">
        <h5 class="card-header">Nomor Telepon Tercantum</h5>
        <div class="card-body">
            <div class="mb-3 col-12 mb-0">
                <div class="alert alert-warning">
                    <h6 class="alert-heading fw-bold mb-1">Nomor Telepon Aktif</h6>
                    <p class="mb-0">Nomor telepon yang dicantumkan terdapat di setiap header-desc dan di setiap tombol
                        "Hubungi Kami"</p>
                    <br>
                    <p class="mb-0">Link akan secara otomatis terubah mengikuti nomor telepon yang diganti, dan
                        diharapkan no telepon terhubung dengan "Whatsapp"</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-no-telp">Nomor Telepon</label>
                        <input type="text" class="form-control" id="basic-default-no-telp" readonly
                            value="<?= $telpData['no_telp']; ?>" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-whatsapp">Link Whatsapp</label>
                        <input type="text" class="form-control" id="basic-default-whatsapp" readonly
                            value="<?= $telpData['link_telp']; ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Ganti Nomor Telepon</h5>
        <div class="card-body">
            <form action="/dashboard/no-telp/update" method="post">
                <input type="hidden" class="form-control" id="idTelp" name="idTelp" readonly
                    value="<?= $telpData['id_telp']; ?>" />

                <div class="mb-3 col-12 mb-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label" for="no-telp">Nomor Telepon</label>
                                <input type="number" class="form-control" id="no-telp" name="no-telp"
                                    placeholder="Nomor Telepon Yang Terhubung Dengan Whatsapp" required />
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-danger deactivate-account"
                    onclick="return confirm('Apakah Anda Yakin Ingin Mengubah')">Ganti Nomor</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>