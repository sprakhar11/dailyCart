
<?php

include "./header.php";
include "./config/userSession.php";
include "./navbar.php";

require './vendor/autoload.php';
$smarty = new Smarty();

// if user is not logged in
if(empty($_SESSION['email'])) {

    header('Location: login.php?from_page=myAccount');

}
// include "./userData.php";

$name = $phone = "";
$nameErr = $phoneErr = $emailErr = $passwordErr = $passwordLengthErr = "";
$smarty->assign('name', $name);
$smarty->assign('phone', $phone);
$smarty->assign('nameErr', $nameErr);
$smarty->assign('emailErr', $emailErr);
$smarty->assign('phoneErr', $phoneErr);
$smarty->assign('passwordLengthErr', $passwordLengthErr);
$smarty->assign('passwordErr', $passwordErr);

$smarty->assign('user', $user);

// name update
if(isset($_POST['submit1']))
{
    if (!empty($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
    } else {
        $nameErr = "Name is missing";
        $smarty->assign('nameErr', $nameErr);
    }

    if (empty($nameErr)) {

                $userId = $user['id'];
                // echo $userId;
                $sql = "UPDATE customer SET name='$name' WHERE id='$userId' ";
                if ($conn->query($sql) === TRUE) {
                    // echo "Record updated successfully";
                $nameErr = "Successfully Updated";
                $smarty->assign('nameErr', $nameErr);

                

                } else {
                // echo "Error updating record: " . $conn->error;
                }
    } 
}

if(isset($_POST['submit2']))
{
    if (!empty($_POST['phone'])) {
        $phone = htmlspecialchars($_POST['phone']);
        
    } else {
        $phoneErr = "Phone Number is missing";
        $smarty->assign('phoneErr', $phoneErr);
    }

    if (!empty($_POST['phone']))
    if( strlen(strval($phone)) != 10)
    {
        // echo strval($phone);
        $phoneErr = "Length should be 10 integers";
        $smarty->assign('phoneErr', $phoneErr);
    }
    
    if (empty($phoneErr)) {

                $userId = $user['id'];
                // echo $userId;
                $sql = "UPDATE customer SET phone='$phone' WHERE id='$userId' ";
                if ($conn->query($sql) === TRUE) {
                    // echo "Record updated successfully";
                $phoneErr = "Successfully Updated";
                $smarty->assign('phoneErr', $phoneErr);

                } else {
                // echo "Error updating record: " . $conn->error;
                }
    } 
}

if(isset($_POST['submit3']))
{
    if (!empty($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
    } else {
        $emailErr = "Email is missing";
        $smarty->assign('emailErr', $emailErr);
    }
    

    if (empty($phoneErr)) {

                $userId = $user['id'];
                echo $userId;
                $sql = "UPDATE customer SET email='$email' WHERE id='$userId' ";
                if ($conn->query($sql) === TRUE) {
                    // echo "Record updated successfully";
                    header("Location: login.php");
                } else {
                // echo "Error updating record: " . $conn->error;
                }
    } 
}
if(isset($_POST['submit4'])) {

    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
        $passwordHash = password_hash("$password", PASSWORD_DEFAULT);

        //length check for password

        if( strlen($password) < 8 || strlen($password) > 16)
        {
            $passwordLengthErr = "Length should be between 8 and 16 characters";
            $smarty->assign('passwordLengthErr', $passwordLengthErr);
        }

    } else {
            $passwordErr = "Password is missing";
            $smarty->assign('passwordErr', $passwordErr);
    }

    if(empty($passwordLengthErr) && empty($passwordErr)) {

        $userId = $user['id'];
            // echo $userId;
            $sql = "UPDATE customer SET password='$passwordHash' WHERE id='$userId' ";
            if ($conn->query($sql) === TRUE) {
                // echo "Record updated successfully";
                header("Location: login.php");
            } else {
            // echo "Error updating record: " . $conn->error;
            }
    }
}

$smarty->display('editProfile.tpl');



?>
