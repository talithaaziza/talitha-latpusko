<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('master/_partials/head.php') ?>
    <title>Daftar Pejabat</title>
</head>
<body>
<main class="main">
		<?php $this->load->view('master/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Daftar Master Pejabat</h1>
            <div class="toolbar">
				<a href="<?= site_url('masterpejabat/create') ?>" class="button button-primary" role="button">Tambah</a>
			</div>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal Buat</th>
                <th>Tanggal Ubah</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($pejabat as $row): ?>
            <tr>
                <td><?= $row->id ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->tglBuat ?></td>
                <td><?= $row->tglUbah ?></td>
                <td>
                    <div class="action">
                        <a href="<?= site_url('masterpejabat/edit/' . $row->id) ?>" class="button button-success" class="button button-small " role="button">Edit</a>
                        <a href="<?= site_url('masterpejabat/delete/' . $row->id) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                        class="button button-small button-danger" role="button">Hapus</a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>	
			
			<?php $this->load->view('master/_partials/footer.php') ?>
		</div>
	</main>

</body>
</html>
