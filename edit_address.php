<?php

include "./header.php";
include "./login_check.php";
include "./navbar.php";
// var_dump($_POST);
if (isset($_POST['submit'])) {
    $country = $name = $phone = $pincode = $addline1 = $city = $state = $type = $addressid = "";
        $countryErr = $nameErr = $phoneErr = $pincodeErr = $addline1Err = $cityErr = $stateErr ="";
        $typeErr = $addressidErr = "";
        $smarty->assign('countryErr', "");
        $smarty->assign('nameErr', "");
        $smarty->assign('phoneErr', "");
        $smarty->assign('pincodeErr', "");
        $smarty->assign('addline1Err', "");
        $smarty->assign('cityErr', "");
        $smarty->assign('stateErr', "");
        $smarty->assign('typeErr', "");


    
    $editAddressId = $_COOKIE['editaddressid']; 

    $sql="SELECT * FROM address  WHERE id='$editAddressId'";

    $query=mysqli_query($conn,$sql);

    $address=mysqli_fetch_array($query);

    if (!empty($_POST['country'])) {
        $country = htmlspecialchars($_POST['country']);
        // $smarty->assign('country', $_POST['country']);
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
        $smarty->assign('country', $address['country']);
        $smarty->assign('name', $address['name']);
        $smarty->assign('phone', $address['phone']);
        $smarty->assign('pincode', $address['pincode']);
        $smarty->assign('addline1', $address['addline1']);
        $smarty->assign('city', $address['city']);
        $smarty->assign('state', $address['state']);
        $smarty->assign('type', $address['type']);

    if (empty($nameErr)
        && empty($countryErr)
        && empty($phoneErr)
        && empty($pincodeErr)
        && empty($addline1Err)
        && empty($stateErr)
        && empty($cityErr)
        && empty($typeErr)) {
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

            var_dump(mysqli_query($conn,$sql));

            // header('Location: manage_address.php?update=done');

        } else {

        }
    }
}

if(isset($_POST['submitEdit'])){

    $editAddressId = $_POST['submitEdit'];

    
    $sql="SELECT * FROM address  WHERE id='$editAddressId'";

    $query=mysqli_query($conn,$sql);

    $address_verify = mysqli_fetch_array($query);
    $_COOKIE['id'] = urldecode($_COOKIE['id']);


    $encrypted_id = $_COOKIE['id'];
    $method = 'AES-128-CBC';
    $encryption_key = 'myencryptionkey';
    // var_dump($encrypted_id);

    $parts = explode(':', $encrypted_id);
    $decrypted_id = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
    // var_dump($parts[1]);
    // var_dump($decrypted_id);
        

        $country = $name = $phone = $pincode = $addline1 = $city = $state = $type = $addressid = "";
        $countryErr = $nameErr = $phoneErr = $pincodeErr = $addline1Err = $cityErr = $stateErr ="";
        $typeErr = $addressidErr = "";
        $smarty->assign('countryErr', "");
        $smarty->assign('nameErr', "");
        $smarty->assign('phoneErr', "");
        $smarty->assign('pincodeErr', "");
        $smarty->assign('addline1Err', "");
        $smarty->assign('cityErr', "");
        $smarty->assign('stateErr', "");
        $smarty->assign('typeErr', "");

    if($decrypted_id ==  $address_verify['userid']) {
        
        // save address 
        $sql="SELECT * FROM address  WHERE id='$editAddressId'";

        $query=mysqli_query($conn,$sql);

        $address=mysqli_fetch_array($query);

        $smarty->assign('country', $address['country']);
        $smarty->assign('name', $address['name']);
        $smarty->assign('phone', $address['phone']);
        $smarty->assign('pincode', $address['pincode']);
        $smarty->assign('addline1', $address['addline1']);
        $smarty->assign('city', $address['city']);
        $smarty->assign('state', $address['state']);
        $smarty->assign('type', $address['type']);
        setcookie('editaddressid', $editAddressId, time() + (86400 * 30), "/");


    } else {
        header ("Location: myAccount.php");
    }

}


$smarty->display('edit_address.tpl');

// include ('save_address.php');
?>










