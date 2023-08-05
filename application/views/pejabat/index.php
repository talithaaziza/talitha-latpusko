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
			<h1>Daftar Pejabat</h1>
            <div class="toolbar">
				<a href="<?= site_url('pejabat/create') ?>" class="button button-primary" role="button">Tambah</a>
			</div>
            <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Master Pejabat</th>
                <th>Tanggal Buat</th>
                <th>Tanggal Ubah</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 0;
            foreach ($pejabat as $row){
                $no = $no + 1;
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?= $row->nama_pejabat ?></td>
                <td><?= $row->jenis_kelamin ?></td>
                <td><?= $row->alamat ?></td>
                <td><?= $row->master_pejabat_name ?></td>
                <td><?= $row->tglBuat ?></td>
                <td><?= $row->tglUbah ?></td>
                <td>
                    <div class="action">
                        <a href="<?= site_url('pejabat/edit/' . $row->id) ?>" class="button button-success" class="button button-small " role="button">Edit</a>
                        <a href="<?= site_url('pejabat/delete/' . $row->id) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                        class="button button-small button-danger" role="button">Hapus</a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </table>	
			
			<?php $this->load->view('master/_partials/footer.php') ?>
		</div>
	</main>

</body>
</html>
