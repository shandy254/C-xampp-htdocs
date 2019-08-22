<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> pre-order </title>

    <link rel="icon" href="hack.png">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <div  class="menu">
        <a href="index.html" class="home"> <img src="homeicon3.png" height="3%" width="3%"> </a>
        <a href="daftar.php" class="daftar"> daftar </a>
        <a href="data.php" class="data"> data </a>
    </div>

    <div class="text">
        <h2> list </h2>
        <p> check your Username here </p>

        
        <?php if( !isset($_POST["submit"]) || !isset($_POST["user"]) || !isset($_POST["pass"]) ) : ?>
            <p style="color: yellow;"> belum ada data <p>
        <?php endif ?>

        <?php if( isset($_POST["submit"]) && isset($_POST["user"]) && isset($_POST["pass"]) ) : ?>
        
        <table>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    Email
                </td>
            </tr>
            <tr style="color: yellow">
                <td>
                    <?= $_POST["user"]; ?>
                </td>
                <td>
                    <?= $_POST["pass"]; ?>
                </td>
            </tr>
        </table>

        <?php endif ?>
    </div>

</body>
</html>