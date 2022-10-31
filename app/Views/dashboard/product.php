<?= $this->extend('layout-dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <div class="row">
        <div class="col">
            <h3>Halaman Produk</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6"><img src="/images/layouts/product-desc.png" alt="" class="introduction-img"></div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-header row align-items-center">
                    <div class="col-lg-3 mb-1">
                        <h5 class="header-title m-auto d-block">List Produk</h5>
                    </div>
                    <div class="col-lg-9 mb-1">
                        <a href="/dashboard/product/new" class="btn btn-primary button-tambah">Tambah </a>
                    </div>
                </div>
                <div class="table-responsive text-nowrap p-4" style="font-size: 13px;">
                    <table class="table" id="testimoni">
                        <thead class="table-light">
                            <tr>
                                <th>ID </th>
                                <th>Nama Produk</th>
                                <th>Jenis Produk</th>
                                <th>Nama Pembimbing</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listProduk as $lp) : ?>
                            <tr>
                                <td><?= $lp['id_produk']; ?></td>
                                <td><?= $lp['nama_produk']; ?></td>
                                <td>
                                    <?= $lp['jenis_produk'] == '2' ? 'Haji' : 'Umroh'; ?>
                                </td>
                                <td><?= $lp['nama_pembimbing']; ?></td>
                                <td>
                                    <img src="/images/upload/<?= $lp['foto']; ?>" alt="" width="30%">
                                </td>
                                <td class="action">
                                    <a href="/dashboard/product/edit/<?= $lp['id_produk']; ?>"><i
                                            class='bx bx-edit-alt'></i></a>
                                    <a href="/dashboard/product/delete/<?= $lp['id_produk']; ?>"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"><i
                                            class='bx bxs-x-square'></i></a>
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