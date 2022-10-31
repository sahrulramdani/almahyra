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
            <h3>Halaman Layout Header - Desc</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6"><img src="/images/layouts/header-desc.png" alt="" class="introduction-img"></div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-header row align-items-center">
                    <div class="col-lg-3 mb-1">
                        <h5 class="header-title m-auto d-block">List Header - Desc</h5>
                    </div>
                    <div class="col-lg-9 mb-1">
                        <a href="/dashboard/header-desc/new" class="btn btn-primary button-tambah">Tambah </a>
                    </div>
                </div>
                <div class="table-responsive text-nowrap p-4" style="font-size: 13px;">
                    <table class="table" id="example">
                        <thead class="table-light">
                            <tr>
                                <th>ID </th>
                                <th>Judul</th>
                                <th>SubJudul</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($headerlist as $hl) : ?>
                            <tr>
                                <td><?= $hl['id_banner_head']; ?></td>
                                <td><?= $hl['judul']; ?></td>
                                <td><?= $hl['subjudul']; ?></td>
                                <td class="action">
                                    <a href="/dashboard/header-desc/edit/<?= $hl['id_banner_head']; ?>">
                                        <i class='bx bx-edit-alt'></i>
                                    </a>
                                    <a href="/dashboard/header-desc/delete/<?= $hl['id_banner_head']; ?>"
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
    $('#example').DataTable();
});
</script>


<?= $this->endSection(); ?>