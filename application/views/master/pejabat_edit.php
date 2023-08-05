<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('master/_partials/head.php') ?>
    <title>Edit Pejabat</title>
</head>
<body>
    <main class="main">
        <?php $this->load->view('master/_partials/side_nav.php') ?>
        <div class="content">

            <h1>Edit Pejabat</h1>
            
            <form method="post" action="<?= site_url('MasterPejabat/update/' . $pejabat->id) ?>">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="<?= $pejabat->nama ?>" required><br>
                <button type="submit">Simpan</button>
            </form>
            
            <a href="<?= site_url('MasterPejabat') ?>">Kembali</a>
            <?php $this->load->view('master/_partials/footer.php') ?>
        </div>


    </main>


</body>
</html>
