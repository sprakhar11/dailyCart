<?php

include "./header.php";
include "./config/userSession.php";
include "./navbar.php";

if(!empty($_SESSION['editaddressid'])){
    $editAddressId = $_SESSION['editaddressid'];
    
    // verify user id from the received address id :
    
    $sql="SELECT * FROM address  WHERE id='$editAddressId'";

    $query=mysqli_query($conn,$sql);

    $address_verify = mysqli_fetch_array($query);

    $encrypted_id = $_COOKIE['id'];
    $method = 'AES-128-CBC';
    $encryption_key = 'myencryptionkey';
    $parts = explode(':', $encrypted_id);
    $decrypted_id = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
        $sql="SELECT * FROM address  WHERE id='$editAddressId'";

        $query=mysqli_query($conn,$sql);

        $address=mysqli_fetch_array($query);

        $country = $name = $phone = $pincode = $addline1 = $city = $state = $type = $addressid = "";
        $countryErr = $nameErr = $phoneErr = $pincodeErr = $addline1Err = $cityErr = $stateErr ="";
         $typeErr = $addressidErr = "";
    if( $decrypted_id !=  $address_verify['userid']) {
        //show error message and
        var_dump($decrypted_id);
        var_dump($address_verify['id']);
        
        echo "Error";
        die;



    } else {
        // save address 
        if(isset($_POST['submit'])){
            

// $addressId = $address['id'];
// echo $addressId;
if (isset($_POST['submit'])) {


    if (!empty($_POST['country'])) {
        $country = htmlspecialchars($_POST['country']);
    } else {
        $country = $address['country'];

    }

    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = $address['name'];
    }
    if (!empty($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $phone = $address['phone'];
    }
    if (!empty($_POST['phone']))
    if( strlen(strval($phone)) != 10)
    {
        // echo strval($phone);
        $phoneErr= "Length should be 10 integers";
    }
    if (!empty($_POST['pincode'])) {
        $pincode = $_POST['pincode'];
    } else {
        $pincode = $address['pincode'];
    }
    if (!empty($_POST['addline1'])) {
        $addline1 = $_POST['addline1'];
    } else {
        $addline1 = $address['addline1'];
    }

    if (!empty($_POST['city'])) {
        $city = $_POST['city'];
    } else {
        $city = $address['city'];
    }
    if (!empty($_POST['state'])) {
        $state = $_POST['state'];
    } else {
        $state = $address['state'];
    }
    if (!empty($_POST['type'])) {
        $type = $_POST['type'];
    } else {
        $type = $address['type'];
    }

    if (empty($nameErr)
        && empty($countryErr)
        && empty($phoneErr)
        && empty($pincodeErr)
        && empty($addline1Err)
        && empty($stateErr)
        && empty($cityErr)
        && empty($typeErr)
    ) {
        $sql = "
        UPDATE
        address 
        SET
        country='$country',
        name='$name',
        phone='$phone',
        pincode='$pincode',
        addline1='$addline1',
        city='$city',
        type='$type',
        state='$state'
        WHERE id='$editAddressId'
        ";
                
        if (mysqli_query($conn, $sql)) {

            // successfully data registered
            header('Location: manage_address.php');
            // echo 'hialkdnsa;ldfndsl;fndslfjnsd;lfnj';
        } else {
            // echo "Error:" . mysqli_error($conn);
        }
    }
}
        }

    }
} else {
    //show error and redirect
    echo "Error2";
        die;
}



include ('save_address.php')
?>










