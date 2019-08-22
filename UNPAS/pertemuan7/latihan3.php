<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="latihan4.php" method="post">
        Masukan nama: <br>
        <input type="text" name="nama"> <br>
        <button type="submit" name="submit"> Submit </button>
    </form>


    <!--
        jika 'action' & 'method' dikosongkan / tidak ada
        maka akan dianggap default. secara default,
        form akan dikirimkan ke halaman form itu sendiri,
        dan 'method' akan secara otomatis memakai 'GET'
        
        contoh:
    -->
<br><br><br>
    <form action="" method="post">
        Masukan nama: <br>
        <input type="text" name="nama2"> <br>
        <button type="submit" name="submit2"> Submit </button>
    </form>

    <!-- 
        berikut untuk menampilkan 'form' 
        apabila 'submit2' sudah ada value-nya 
    -->
    <?php if( isset($_POST["submit2"]) ) : ?>
        <h2> hai <?= $_POST["nama2"]; ?>!! </h2>
    <?php endif ?>


</body>
</html>