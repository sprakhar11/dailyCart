<!doctype html>
<html lang="en">
<?php include "./header.php" ;
        include "./navbar.php";


?>


<body>

    <?php

    $name = $mobileNumber = $email = $password = "";
    $nameErr= $mobileNumberErr = $emailErr = $passwordLengthErr = $passwordErr = $mobileAlreadyExists = "";
    $mailExists = false;
    if (isset($_POST['submit'])) {

        if (!empty($_POST['name'])) {
            $name = htmlspecialchars($_POST['name']);
        } else {
            $nameErr = "Name is missing";
        }

        if (!empty($_POST['mobileNumber'])) {
            $mobileNumber = $_POST['mobileNumber'];
        } else {
            $mobileNumberErr = "Mobile number is missing!";
        }
        if (!empty($_POST['mobileNumber']))
        if( strlen(strval($mobileNumber)) != 10)
        {
            // echo strval($phone);
            $mobileNumberErr = "Length should be 10 integers";
        }


        if (!empty($_POST['email'])) {
            $email = htmlspecialchars($_POST['email']);
        } else {
            $emailErr = "Email is missing!";
        }


        if (!empty($_POST['password'])) {
            $password = $_POST['password'];
            $passwordHash = password_hash("$password", PASSWORD_DEFAULT);

            //length check for password

            if( strlen($password) < 8 || strlen($password) > 16)
            {
                $passwordLengthErr = "Length should be between 8 and 16 characters";
            }

        } else {
            $passwordErr = "Password is missing";
        }



        if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($mobileNumberErr) && empty($passwordLengthErr)) { 

            $sqlEmail = "SELECT email FROM customer WHERE email='$email'";
            $queryMail = mysqli_query($conn, $sqlEmail);

            $resultMail = mysqli_fetch_array($queryMail);
            // check duplicate phone number
            $sqlPhone = "SELECT phone FROM customer WHERE phone='$phone'";
            $queryPhone = mysqli_query($conn, $sqlPhone);
            $resultPhone = mysqli_fetch_array($queryPhone);

            if(isset($resultPhone['phone']))
            if($resultPhone['phone'] == $phone) {
                $mobileAlreadyExists = "Mobile Number already exists";

                
            }


            
            if (!empty($email) && empty($mobileAlreadyExists)) {


                if ($resultMail['email'] == $email) {
                    $mailExists = "*This Mail is Already Registered";
                } else {


                    $sql = " INSERT INTO customer (name, phone, email, password ) VALUES ('$name', '$mobileNumber', '$email','$passwordHash')";
                    
                    if (mysqli_query($conn, $sql)) {

                        header('Location: login.php');
                    } else {
                        echo "Error:" . mysqli_error($conn);
                    }
                }
            }
        }

    }
?>












    <div class="container">

        <h1 style="text-align: center;">Signup Here</h1>
        <br><br><br><br><br>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $nameErr; ?></div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile Number </label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobileNumber">
                <div id="emailHelp" class="form-text"><?php echo $mobileNumberErr; ?></div>
                <div id="emailHelp" class="form-text"><?php echo $mobileAlreadyExists; ?></div>

            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text"><?php echo $emailErr; ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                <div id="emailHelp" class="form-text"><?php echo $passwordErr; ?></div>
                <div id="emailHelp" class="form-text"><?php echo $passwordLengthErr; ?></div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>




    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>