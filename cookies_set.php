<?php 
include "./config/db_connt.php";
include "./config/userSession.php";


if(isset($_SESSION['email']))
$email=$_SESSION['email'];


if(isset($_SESSION['email']))
$welcomeMessage=$_SESSION['email']." welcome";
 

if(isset($_SESSION['email']) && isset($_SESSION['password'])){



    // $ciphering = "AES-128-CTR";// it store the cipher method
    // $option = 0;// it holds the bitwise disjunction of the flags
    // $encryption_iv = "1234567890123456";
    // $encryption_key = "prakhar";

    // $encrypt_data = $user['id'];

    // $dataEncrypt = openssl_encrypt($encrypt_data, $ciphering, $encryption_iv, $option, $encryption_key);

    $method = 'AES-128-CBC';

    // Set the encryption key
    $encryption_key = 'myencryptionkey';

    // Generet a random initialisation vector
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));

    // Define the date to be encrypted
    $data = $user['id'];

    // var_dump("Before encryption: $data");

    // Encrypt the data
    $encrypted = openssl_encrypt($data, $method, $encryption_key, 0, $iv);

    // var_dump("Encrypted: $encrypted");

    // Append the vector at the end of the encrypted string
    $encrypted = $encrypted . ':' . $iv;
    var_dump($encrypted);

    // Explode the string using the `:` separator.
    $parts = explode(':', $encrypted);
    // var_dump("COUNT: " . count($parts));

    // Decrypt the data
    $decrypted = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);

    var_dump("Decrypted: $decrypted");

    setcookie('id', $encrypted, time() + (86400 * 30), "/"); // 30 days

    

    // var_dump($decrypted);
    // var_dump($encrypted);
    die;


}
?>