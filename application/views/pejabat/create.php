<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('master/_partials/head.php') ?>
    <title>Tambah Pejabat</title>
</head>
<body>
    <main class="main">
    <?php $this->load->view('master/_partials/side_nav.php') ?>

        <div class="content">

            <h1>Tambah Pejabat</h1>
            
            <form method="post" action="<?= site_url('Pejabat/store') ?>">
                <label for="nama_pejabat">Nama Pejabat:</label>
                <input type="text" name="nama_pejabat" required>
                <br>
                <br>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">--Jenis Kelamin--</option>
                        <option value="Laki-laki">Laki_Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <br>
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" required>
                <br>
                <br>
                <label for="m_pejabat_id">Pilih Pejabat:</label>
                <select name="m_pejabat_id">
                    <?php foreach ($pejabat_options as $pejabat) { ?>
                        <option value="<?php echo $pejabat->id; ?>"><?php echo $pejabat->nama; ?></option>
                     <?php } ?>
                </select>
                <br>
                <br>
                <div class="toolbar">
                        <button class="button button-primary" role="button" type="submit">Simpan</button>
			    </div>
            </form>
            <a href="<?= site_url('pejabat') ?>">Kembali</a>
            <?php $this->load->view('master/_partials/footer.php') ?>

        </div>
    </main>


</body>
</html>
