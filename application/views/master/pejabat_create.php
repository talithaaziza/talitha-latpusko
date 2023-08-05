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
                <h1>Tambah Master Pejabat</h1>
                <form method="post" action="<?= site_url('MasterPejabat/store') ?>">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" required><br>
                    <div class="toolbar">
                        <button class="button button-primary" role="button" type="submit">Simpan</button>
			        </div>
                </form>

                <a href="<?= site_url('MasterPejabat') ?>">Kembali</a>	
                
                <?php $this->load->view('master/_partials/footer.php') ?>
            </div>
    </main>



<!-- <form method="post" action="<?= site_url('MasterPejabat/store') ?>">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br>
    <button type="submit">Simpan</button>
</form> -->


</body>
</html>
