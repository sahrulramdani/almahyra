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
            <h3>Halaman User</h3>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-header row align-items-center">
                    <div class="col-lg-3 mb-1">
                        <h5 class="header-title m-auto d-block">List User</h5>
                    </div>
                    <div class="col-lg-9 mb-1">
                        <a href="/dashboard/user/new" class="btn btn-primary button-tambah">Tambah </a>
                    </div>
                </div>
                <div class="table-responsive text-nowrap p-4" style="font-size: 13px;">
                    <table class="table" id="testimoni">
                        <thead class="table-light">
                            <tr>
                                <th>ID </th>
                                <th>Nama User</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>No Telp</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listUser as $lu) : ?>
                            <tr>
                                <td><?= $lu['id_user']; ?></td>
                                <td><?= $lu['nama']; ?></td>
                                <td><?= $lu['username']; ?></td>
                                <td><?= $lu['level_user']; ?></td>
                                <td><?= $lu['no_telp']; ?></td>
                                <td>
                                    <img src="/images/upload/<?= $lu['foto']; ?>" alt="" width="20%">
                                </td>
                                <td class="action">
                                    <a href=""><i class='bx bx-edit-alt'></i></a>
                                    <a href="/dashboard/user/delete/<?= $lu['id_user']; ?>"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Secara Permanen ?')">
                                        <i class='bx bxs-x-square'></i>
                                    </a>
                                </td>
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
    $('#testimoni').DataTable();
});
</script>


<?= $this->endSection(); ?>