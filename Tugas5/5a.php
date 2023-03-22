<?php
$mhs = [
    [
        'Nama' => 'Rendy Pratama Putra',
        'NRP' => '223040102',
        'Jurusan' => 'Teknik Informatika',
        'Email' => 'rendy3212@gmail.com',
        'Gambar' => '12.jpg'
    ],
    [
        'Nama' => 'Babang Siregar',
        'NRP' => '223040002',
        'Jurusan' => 'Teknik Informatika',
        'Email' => 'Siregar212@gmail.com',
        'Gambar' => '1.jpg'
    ],
    [
        'Nama' => 'Mamat Kamarudin',
        'NRP' => '223040123',
        'Jurusan' => 'Teknik Informatika',
        'Email' => 'mametal32@gmail.com',
        'Gambar' => '3.jpg'
    ],
    [
        'Nama' => 'Kaisar Alkatiri',
        'NRP' => '223040012',
        'Jurusan' => 'Teknik Informatika',
        'Email' => 'kaikai22@gmail.com',
        'Gambar' => '4.jpg'
    ],
    [
        'Nama' => 'Reza Arya',
        'NRP' => '223040100',
        'Jurusan' => 'Teknik Informatika',
        'Email' => 'rezzza3415@gmail.com',
        'Gambar' => '13.png'
    ],
    [
        'Nama' => 'Suhendar',
        'NRP' => '223040111',
        'Jurusan' => 'Teknik Informatika',
        'Email' => 'suhe87@gmail.com',
        'Gambar' => '14.jpg'
    ],
    [
        'Nama' => 'Stevani Aghata',
        'NRP' => '223040231',
        'Jurusan' => 'Teknik Informatika',
        'Email' => 'aghtaaaa472@gmail.com',
        'Gambar' => '7.jpg'
    ],
    [
        'Nama' => 'Wildan Syah',
        'NRP' => '223040114',
        'Jurusan' => 'Teknik Informatika',
        'Email' => 'thewil782@gmail.com',
        'Gambar' => '8.jpg'
    ],
    [
        'Nama' => 'Maman Herman',
        'NRP' => '223040004',
        'Jurusan' => 'Teknik Informatika',
        'Email' => 'yoman465@gmail.com',
        'Gambar' => '9.jpg'
    ],
    [
        'Nama' => 'Ghozali Putra',
        'NRP' => '223040023',
        'Jurusan' => 'Teknik Informatika',
        'Email' => 'ptraa797@gmail.com',
        'Gambar' => '10.jpg'
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mhs as $m ) : ?>
        <ul>
        <li>
            <img src="img/<?= $m["Gambar"]; ?>">
        </li>
        <li>Nama : <?=$m["Nama"];?></li>
        <li>NRP : <?=$m["NRP"];?></li>
        <li>Email : <?=$m["Email"];?></li>
        <li>Jurusan : <?=$m["Jurusan"];?></li>

        </ul>
        <?php endforeach; ?>
</body>
</html>