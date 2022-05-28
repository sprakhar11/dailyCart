<?php 
include "./config/db_connt.php";
include "./config/userSession.php";

var_dump($_SESSION['email']);

if(isset($_SESSION['email']))
$email=$_SESSION['email'];


if(isset($_SESSION['email']))
$welcomeMessage=$_SESSION['email']." welcome";
 

if(isset($_SESSION['email']) && isset($_SESSION['password'])){

    $method = 'AES-128-CBC';

    // Set the encryption key

    $encryption_key = 'myencryptionkey';
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
    $data = $user['id'];
    $encrypted = openssl_encrypt($data, $method, $encryption_key, 0, $iv);
    $encrypted = $encrypted . ':' . $iv;
    
    
    setcookie('id', $encrypted, time() + (86400 * 30), "/"); // 30 days
    $parts = explode(':', $_COOKIE['id']);
    var_dump($parts);
    $decrypted = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
    var_dump($decrypted);
    

}
?>