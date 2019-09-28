
<?php /*
$string = 'abcdefghijk';
if(preg_match("/fgh/", $string)) {
  echo 'String berisi pola fgh';
} else {
  echo 'Tidak ada pola fgh dalam string';
} */




$username = "Bagus T";
$password = "hayo apa";


function validate_username($username)
{
    if( preg_match("/[A-Za-z ]{5,9}$/", $username))
    {
        echo "benar";
    }	
    else {
        echo "salah";
    }
}

function validate_password($password)
{
    if( !preg_match("/^[A-Za-z0-9@_-]{8}$/", $password))
    {
        return false;
    }	
    return true;
}

echo validate_username($username);
echo "<br>";
echo validate_password($password);

echo "fin";

// /^[a-z0-9_-]{3,16}$/
/*
requirement :
●   	menggunakan REGEX
●   	Format username: 
            merupakan kombinasi dari huruf kecil 
            dan huruf besar dengan panjang tepat 6 karakter. 
            Username tidak boleh terdapat angka / karakter special.
●   	Format password: 
            merupakan kombinasi dari huruf kecil, 
            huruf besar minimal satu karakter, angka minimal satu karakter, 
            dan karakter spesial minimal satu karakter 
            dengan panjang password 5-10 karakter. 
            Password juga harus diawali oleh angka “7”.

*/


?> 
