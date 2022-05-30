<?php 


if(isset($_COOKIE['id'])) {
    // decrypt id cookies and check if valic or not

    $_COOKIE['id'] = urldecode($_COOKIE['id']);

    $encrypted_id = $_COOKIE['id'];
    $method = 'AES-128-CBC';
    $encryption_key = 'myencryptionkey';
    $parts = explode(':', $encrypted_id);
    $decrypted_id = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
    



    $sql="SELECT * FROM customer  WHERE id='$decrypted_id'";
    $query=mysqli_query($conn,$sql);
    $user=mysqli_fetch_array($query);

    if(!$user){

        
        header('Location: ../login.php?from_page=error1');

    }

} else {
    
    header('Location: login.php?from_page=error2');
}

?>