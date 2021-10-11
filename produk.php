<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body>
    <?php require 'menu.php' ?>
    <h2>PRODUK</h2>

    <?php
    $peserta = [
        'nama barang' =>'Drinking Water',
        'size' =>'500 ',
        'harga' =>'70 ',
    ];
    ?>
    <table>
        <tr>
            <td>Nama barang:</td>
            <td><?php echo $peserta['nama barang']; ?></td>
        </tr>
        <tr>
            <td>Size:</td>
            <td><?php echo $peserta['size']; ?> ml</td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td><?php echo $peserta['harga']; ?>sen</td>
        </tr>
    </table>
</body>

</html>