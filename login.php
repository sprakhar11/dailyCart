<!doctype html>
<html lang="en">
<?php 

    include "./config/db_connt.php";
    session_start();

    require './vendor/autoload.php';
    $smarty = new Smarty();

?>


    
<?php 
$smarty->assign('loginmessage', '');
if(isset($_GET['from_page'])){

    $smarty->assign('loginmessage' , 'Login first');
}



$email = $password = $errMessage = ""; 
$smarty->assign('email', "");
$smarty->assign('password', "");
$smarty->assign('errMessage', "");

// print_r($_POST['submit']);
if(isset($_POST['submit'])) {

    if(isset($_POST['email'])) {

        $email = $_POST['email'];
        
    } else {
        $email = "INVALID";
        $smarty->assign('email', $email);
    }

    if(isset($_POST['password'])) {

        $password = $_POST['password'];
    } else {
        $password = "INVALID";
        $smarty->assign('password', $password);
    }

    
    if(($email != "INVALID") && ($password != "INVALID")) {

        $passwordQuery = "SELECT password FROM customer WHERE email='$email'";

        $queryPass = mysqli_query($conn, $passwordQuery);
        $result = mysqli_fetch_array($queryPass);

        if(!isset($result['password']))
        {
            $errMessage = "Wrong password or email";
            $smarty->assign('errMessage', 'Wrong password or email');
        }
        else
        if(password_verify($password, $result['password'])) {

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

        } else {

            $errMessage = "Wrong password or email";
            $smarty->assign('errMessage', 'Wrong password or email');


        }


        if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
            // var_dump($_SESSION);

            $sql="SELECT * FROM customer  WHERE email='$email' ";
            $query=mysqli_query($conn,$sql);
            $user=mysqli_fetch_array($query);
            $method = 'AES-128-CBC';

    // Set the encryption key

            $encryption_key = 'myencryptionkey';
            $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
            $data = $user['id'];
            $encrypted = openssl_encrypt($data, $method, $encryption_key, 0, $iv);
            // $decrypted = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
            setcookie('id', $encrypted, time() + (86400 * 30), "/");

            $data = $email;
            $encrypted = openssl_encrypt($data, $method, $encryption_key, 0, $iv);
            setcookie('email', $encrypted, time() + (86400 * 30), "/");


            header("Location: userDashboard.php");
        }
    }




}

$smarty->display('login.tpl');
?>