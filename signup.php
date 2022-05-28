
<?php 

    include "./header.php" ;  
    require './vendor/autoload.php';
    $smarty = new Smarty();  


    $name = $mobileNumber = $email = $password = "";
    $nameErr= $mobileNumberErr = $emailErr = $passwordLengthErr = $passwordErr = "";
    $mailExists = "";

    $smarty->assign('name', $name);
    $smarty->assign('mobileNumber', $mobileNumber);
    $smarty->assign('email', $email);
    $smarty->assign('password', $password);
    $smarty->assign('nameErr', $nameErr);
    $smarty->assign('mobileNumberErr', $mobileNumberErr);
    $smarty->assign('passwordLengthErr', $passwordLengthErr);
    $smarty->assign('passwordErr', $passwordErr);
    $smarty->assign('mailExists', $mailExists);
    $smarty->assign('emailErr', $emailErr);



    if (isset($_POST['submit'])) {

        if (!empty($_POST['name'])) {
            $name = htmlspecialchars($_POST['name']);
        } else {
            $nameErr = "Name is missing";
            $smarty->assign('nameErr', $nameErr);
        }

        if (!empty($_POST['mobileNumber'])) {
            $mobileNumber = $_POST['mobileNumber'];
        } else {
            $mobileNumberErr = "Mobile number is missing!";
            $smarty->assign('mobileNumberErr', $mobileNumberErr);
        }
        if (!empty($_POST['mobileNumber']))
        if( strlen(strval($mobileNumber)) != 10)
        {
            // echo strval($phone);
            $mobileNumberErr = "Length should be 10 integers";
            $smarty->assign('mobileNumberErr', $mobileNumberErr);
            
        }


        if (!empty($_POST['email'])) {
            $email = htmlspecialchars($_POST['email']);
        } else {
            $emailErr = "Email is missing!";
            $smarty->assign('emailErr', $emailErr);
        }


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



        if (empty($nameErr) 
            && empty($emailErr) 
            && empty($passwordErr) 
            && empty($mobileNumberErr) 
            && empty($passwordLengthErr)) 
        { 

            

            // check duplicate email address
            $sqlMail = "SELECT email FROM customer WHERE email='$email'";
            $queryMail = mysqli_query($conn, $sqlMail);
            $resultMail = mysqli_fetch_array($queryMail);

            


            if(isset($resultMail['email']))
            if($resultMail['email'] == $email) {
                $mailExists = "Email id already exists";
            }


            
            if (!empty($email) 
                && empty($mailExists)) 
            {

                if ($resultMail['email'] == $email) {
                    $mailExists = "*This Mail is Already Registered";
                    $smarty->assign('mailExists', $mailExists);
                } else {


                    $sql = " INSERT INTO 
                    customer (name, phone, email, password ) 
                    VALUES (
                    '$name', 
                    '$mobileNumber', 
                    '$email',
                    '$passwordHash'
                    )";
                    
                    if (mysqli_query($conn, $sql)) {

                        header('Location: login.php');
                    } else {
                        echo "Error:" . mysqli_error($conn);
                    }
                }
            }
        }

    }

    $smarty->display('signup.tpl');
?>
