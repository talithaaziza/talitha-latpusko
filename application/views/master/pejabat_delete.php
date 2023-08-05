<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Hapus Pejabat</title>
</head>
<body>

<h1>Konfirmasi Hapus Pejabat</h1>

<p>Apakah Anda yakin ingin menghapus pejabat dengan ID: <?= $pejabat->id ?>?</p>

<form method="post" action="<?= site_url('masterpejabat/delete/' . $pejabat->id) ?>">
    <button type="submit">Hapus</button>
</form>

<a href="<?= site_url('masterpejabat') ?>">Kembali</a>

</body>
</html>
