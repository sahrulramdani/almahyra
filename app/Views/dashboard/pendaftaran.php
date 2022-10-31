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

    <div class="row">
        <div class="col">
            <h3>Halaman Layout Alur Pendaftaran</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6"><img src="/images/layouts/pendaftaran.png" alt="" class="introduction-img"></div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-header row align-items-center">
                    <div class="col-lg-3 mb-1">
                        <h5 class="header-title m-auto d-block">List Alur Pendaftaran</h5>
                    </div>
                    <div class="col-lg-9 mb-1">
                        <a href="/dashboard/pendaftaran/new" class="btn btn-primary button-tambah">Tambah </a>
                    </div>
                </div>
                <div class="table-responsive text-nowrap p-4" style="font-size: 13px;">
                    <table class="table" id="pendaftaran">
                        <thead class="table-light">
                            <tr>
                                <th>ID </th>
                                <th>Judul</th>
                                <th>Nama Icon</th>
                                <th>Icon</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pendaftaranList as $pl) : ?>
                            <tr>
                                <td><?= $pl['id_mdaftar']; ?></td>
                                <td><?= $pl['judul']; ?></td>
                                <td><?= $pl['icon']; ?></td>
                                <td><i class="<?= $pl['icon']; ?>"></i></td>
                                <td><?= $pl['deskripsi']; ?></td>
                                <td class="action">
                                    <a href="/dashboard/pendaftaran/edit/<?= $pl['id_mdaftar']; ?>"><i
                                            class='bx bx-edit-alt'></i></a>
                                    <a href="/dashboard/pendaftaran/delete/<?= $pl['id_mdaftar']; ?>"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')">
                                        <i class='bx bxs-x-square'></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>

    </div>

</div>

<?= $this->include('layout-dashboard/datatables'); ?>

<script>
$(document).ready(function() {
    $('#pendaftaran').DataTable();
});
</script>


<?= $this->endSection(); ?>