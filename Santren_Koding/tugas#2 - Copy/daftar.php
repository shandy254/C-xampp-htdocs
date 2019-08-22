<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> pre-order </title>

    <link rel="icon" href="hack.png">
    <link rel="stylesheet" href="style.css">

    <!--
    <?php /*
        // cek apakah sudah disubmit
        if( isset($_POST["submit"]) ){
            
                // jika sudah, buat variabel
                $selamat=true;
            }
            <?php /* if( isset($selamat) ) : 
        <p style="color: pink; font-style: italic; margin-left: 2cm"> anda sudah masuk dalam daftar waiting list, <br>
    silahkan cek di halaman <a href="data.php">data</a> </p>
     endif */ ?>
    */
    ?>
            -->

</head>
<body>
    
    <div  class="menu">
        <a href="index.html" class="home"> <img src="homeicon3.png" height="3%" width="3%"> </a>
        <a href="daftar.php" class="daftar"> daftar </a>
        <a href="data.php" class="data"> data </a>
    </div>

    <div class="text">
        <h3> Daftar </h3>
        <br>

        

        <form action="data.php" method="post">
        <table border="0" style="text-align:left">
            <tr>
                <th> <label for="username">Username </label> </th>
                <td>
                    : <input type="text" placeholder="username" id="username" name="user">
                </td>
            </tr>
            <tr>
                <th> <label for="pass">Email </label> </th>
                <td>
                    : <input type="text" placeholder="email" id="pass" name="pass">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td  colspan="2" align="center"> 
                    <button type="submit" name="submit"> submit </button>
                    <button type="reset" name="reset"> reset </button> 
                </td>
            </tr>
        </table>
        </form>
    </div>


    

</body>
</html>