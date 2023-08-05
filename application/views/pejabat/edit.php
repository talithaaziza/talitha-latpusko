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
            
            <form method="post" action="<?= site_url('pejabat/update/' . $pejabat->id) ?>">
                <label for="nama_pejabat">Nama Pejabat: </label>
                <input type="text" name="nama_pejabat" value="<?= $pejabat->nama_pejabat ?>" required>
                <br>
                <br>
                <div class="form-group">
                <label>Jenis Kelamin:</label>
                <select name="jenis_kelamin" required>
                    <option value="Laki-laki" <?php echo ($pejabat->jenis_kelamin == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php echo ($pejabat->jenis_kelamin == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                </select><br>
                </div>
                <br>
                <br>
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" value="<?= $pejabat->alamat ?>" required>
                <br>
                <br>
                <label for="m_pejabat_id">Jabatan:</label>
                <select name="m_pejabat_id">
                    <?php foreach ($pejabat_options as $master_pejabat): ?>
                        <option value="<?= $master_pejabat->id ?>" <?= ($master_pejabat->id == $pejabat->m_pejabat_id) ? 'selected' : '' ?>>
                            <?= $master_pejabat->nama ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <!-- <select name="m_pejabat_id">
                    <?php foreach ($pejabat_options as $pejabat) { ?>
                        <option value="<?php echo $pejabat->id; ?>"><?php echo $pejabat->nama; ?></option>
                     <?php } ?>
                </select> -->
                <br>
                <button type="submit">Simpan</button>
                <br>
            </form>
            
            <a href="<?= site_url('pejabat') ?>">Kembali</a>
            <?php $this->load->view('master/_partials/footer.php') ?>

        </div>
    </main>


</body>
</html>
