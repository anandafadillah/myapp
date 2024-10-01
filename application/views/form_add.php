<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Artikel</title>
</head>
<body>
    <h1>Tambah Artikel</h1>
    <form method="POST">
        <div class="">
            <label>Judul Artikel</label>
            <input type="text" name="title">
        </div>
        <div class="">
            <label>URL</label>
            <input type="text" name="url">
        </div>
        <div class="">
            <label>Konten</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" >Simpan</button>
        <a href="<?php echo site_url();?>">Kembali</a>
    </form>
</body>
</html>