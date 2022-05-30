<?php
include "./login_check.php";

include "./header.php";
include "./navbar.php";

// $country = $name = $phone = $pincode = "";
// $addline1 = $city = $state = $type = $userid = "";
// $countryErr = $nameErr = $phoneErr = "";
// $pincodeErr = $addline1Err = "";
// $cityErr = $stateErr = $typeErr = $useridErr = "";


$smarty->assign('country', "");
$smarty->assign('name', "");
$smarty->assign('phone', "");
$smarty->assign('pincode', "");
$smarty->assign('addline1', "");
$smarty->assign('city', "");
$smarty->assign('state', "");
$smarty->assign('type', "");
$smarty->assign('countryErr', "");
$smarty->assign('nameErr', "");
$smarty->assign('phoneErr', "");
$smarty->assign('pincodeErr', "");
$smarty->assign('addline1Err', "");
$smarty->assign('cityErr', "");
$smarty->assign('stateErr', "");
$smarty->assign('typeErr', "");
$smarty->assign('addressAdded', "");

$userId = $user['id'];
// $addressAdded = ""; 
// echo $userId;
if (isset($_POST['submit'])) {


    if (!empty($_POST['country'])) {
        $country = htmlspecialchars($_POST['country']);
    } else {
        $countryErr = "country is missing";
        $smarty->assign('countryErr', 'Country is missing');
    }

    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $nameErr = "name is missing!";
        $smarty->assign('nameErr', 'Name is missing');
    }
    if (!empty($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $phoneErr = "Mobile number is missing!";
        $smarty->assign('phoneErr' , $phoneErr);
    }
    if (!empty($_POST['phone']))
    if( strlen(strval($phone)) != 10)
    {
        // echo strval($phone);
        $phoneErr= "Length should be 10 integers";
        $smarty->assign('phoneErr' , $phoneErr);

    }
    if (!empty($_POST['pincode'])) {
        $pincode = $_POST['pincode'];
    } else {
        $pincodeErr = "pincode is missing!";
        $smarty->assign('pincodeErr' , $pincodeErr);

    }
    if (!empty($_POST['addline1'])) {
        $addline1 = $_POST['addline1'];
    } else {
        $addline1Err = "Address is missing!";
        $smarty->assign('addline1', 'Address is missing!');
    }

    if (!empty($_POST['city'])) {
        $city = $_POST['city'];
    } else {
        $cityErr = "City is missing!";
        $smarty->assign('cityErr', 'City is missing!');
    }
    if (!empty($_POST['state'])) {
        $state = $_POST['state'];
    } else {
        $stateErr = "State is missing!";
        $smarty->assign('stateErr', $stateErr);

    }
    if (!empty($_POST['type'])) {
        $type = $_POST['type'];
    } else {
        $typeErr = "Type is missing!";
        $smarty->assign('typeErr', $typeErr);
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
         $userId = $user['id'];

                $sql = "INSERT INTO address ( country, name, phone, pincode, addline1, city, state, type, userid) VALUES ('$country', '$name', '$phone', '$pincode', '$addline1', '$city', '$state', '$type', '$userId')";
                
                if (mysqli_query($conn, $sql)) {

                    // successfully data registered
                    $addressAdded = "Address added Successfully";
                    $smarty->assign('addressAdded', $addressAdded);
                    header('Location: myAccount.php');
                   
                    // echo 'hit 1';
                } else {
                    // echo "Error:" . mysqli_error($conn);
                }
    }
}


$smarty->display('add_address.tpl')
?>










