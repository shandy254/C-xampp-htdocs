<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php
        // cek apakah sudah disubmit
        if( isset($_POST["submit"]) ){
            
            // cek apakah username dan password benar
            if( $_POST["nama"]=="bandits" && $_POST["password"]=="hayoapa" ){
                
                // jika benar, redirect ke halaman latihan4
                header ("Location: latihan4.php");
                exit;
            }

            // jika salah, buat variabel baru bernilai true
            else {
                $error=true;
            }
        }
    
    ?>
</head>
<body>

    <h2> Login </h2>
    
    <!-- jika bernilai true, munculkan pesan error -->
    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;"> username / password salah </p>
    <?php endif ?>
    
    <ul>
        <form action="latihan4.php" method="post">
            <li>
                <label for="username"> Username : </label> 
                <input type="text" name="nama" id="username">  
            </li>
            <li>
                <label for="pass"> Password : </label> 
                <input type="text" name="password" id="pass">  
            </li>
            <li>
                <button type="submit" name="submit"> Submit </button>
            </li>
        </form>
    </ul>
    
</body>
</html>