<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detail Blog</h1>
    <h2><?php echo $blog['title']; ?></h2>
    <p><?php echo $blog['content']; ?></p>
    <a href="<?php echo site_url();?>">Kembali</a>
</body>
</html>




