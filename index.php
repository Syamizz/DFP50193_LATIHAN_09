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
        <h3>PRODUK</h3>
        <?php $detail = array ('Name barang: Drinking water', 'Size: 500ml ' , 'Harga: 70sen') ; ?>
        <ul>
            <li><?php echo $detail[0]; ?></li>
            <li><?php echo $detail[1]; ?></li>
            <li><?php echo $detail[2]; ?></li>
        </ul>

    
</body>
</html>