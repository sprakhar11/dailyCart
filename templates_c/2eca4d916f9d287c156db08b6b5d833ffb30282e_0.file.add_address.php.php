<?php
/* Smarty version 4.1.1, created on 2022-05-27 20:05:07
  from 'C:\xampp\htdocs\dailycart\add_address.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_629112d378b300_78586605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eca4d916f9d287c156db08b6b5d833ffb30282e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart\\add_address.php',
      1 => 1653674702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629112d378b300_78586605 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>


require './vendor/autoload.php';
$smarty = new Smarty();

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

$userId = $user['id'];
$addressAdded = ""; 
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
                    header('Location: myAccount.php');
                   
                    // echo 'hit 1';
                } else {
                    // echo "Error:" . mysqli_error($conn);
                }
    }
}


$smarty->display('add_address.tpl')
<?php echo '?>'; ?>











<?php }
}
