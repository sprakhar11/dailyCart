    
<?php

include "./header.php";
include "./config/userSession.php";
include "./navbar.php";
// include "./userData.php";


$name = $email = $address = "";
$nameErr = $emailErr = $addressErr = "";
$formSubmitted = "";

$smarty->assign('name', $name);
$smarty->assign('address', $address);
$smarty->assign('emailErr', $emailErr);
$smarty->assign('nameErr', $nameErr);
$smarty->assign('addressErr', $addressErr);
$smarty->assign('formSubmitted', $formSubmitted);
$smarty->assign('mailExists', "");




if(isset($_POST['submit']))
{
    if (!empty($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
    } else {
        $nameErr = "Name is missing";
$smarty->assign('nameErr', $nameErr);

    }

    if (!empty($_POST['email'])) {
        $name = htmlspecialchars($_POST['email']);
    } else {
        $emailErr = "Email is missing";
        $smarty->assign('emailErr', $emailErr);

    }


    if (!empty($_POST['address'])) {
        $address = htmlspecialchars($_POST['address']);
    } else {
        $addressErr = "address is missing";
        $smarty->assign('addressErr', $addressErr);

    }




            if (empty($nameErr) && empty($emailErr) && empty($addressErr)) {
                //update profile to seller
                $userId = $user['id'];
                $sql = "UPDATE customer SET profile='".$SELLER_NAME."' WHERE id=$userId ";
                if ($conn->query($sql) === TRUE) {
                    $formSubmitted = "You are a seller now . Go to My Account to add products";
                    $smarty->assign('formSubmitted', $formSubmitted);


                  } else {
                    // echo "Error updating record: " . $conn->error;
                  }

                $sqlEmail = "SELECT email FROM seller WHERE email='$email'";
                $queryMail = mysqli_query($conn, $sqlEmail);
                $resultMail = mysqli_fetch_array($queryMail);

                if (!empty($email)) {


                    if ($resultMail['email'] == $email) {
                        $mailExists = "*This Mail is Already Registered";
                        $smarty->assign('mailExists', $mailExists);

                    } else {

                        // adding in the table (create customer)
                        
                        $sql = " INSERT INTO seller (name, email, phone, address) VALUES ('$name', '$email',
                        '$mobileNumber','$address') WHERE id=$userid ";
                        
                        if (mysqli_query($conn, $sql)) {

                            // successfully data registered
                            header('Location: myAccount.php');
                        } else {
                            echo "Error:" . mysqli_error($conn);
                        }
                    }
                }
            }

            // submit post form bracket end here
        } else {
            // echo "form not submitted";
        }
        $smarty->display('sellerForm.tpl');


?>

