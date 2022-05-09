    
<?php

include "./header.php";
include "./config/userSession.php";
include "./navbar.php";
// include "./userData.php";

$name = $email = $address = "";
$nameErr = $emailErr = $addressErr = "";
$formSubmitted = "";


if(isset($_POST['submit']))
{
    if (!empty($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
    } else {
        $nameErr = "Name is missing";
    }

    if (!empty($_POST['email'])) {
        $name = htmlspecialchars($_POST['email']);
    } else {
        $emailErr = "Email is missing";
    }


    if (!empty($_POST['address'])) {
        $address = htmlspecialchars($_POST['address']);
    } else {
        $addressErr = "address is missing";
    }




            if (empty($nameErr) && empty($emailErr) && empty($addressErr)) {
                //update profile to seller
                $userId = $user['id'];
                $sql = "UPDATE customer SET profile='seller' WHERE id=$userId ";
                if ($conn->query($sql) === TRUE) {
                    $formSubmitted = "You are a seller now . Go to My Account to add products";
                  } else {
                    // echo "Error updating record: " . $conn->error;
                  }

                $sqlEmail = "SELECT email FROM seller WHERE email='$email'";
                $queryMail = mysqli_query($conn, $sqlEmail);
                $resultMail = mysqli_fetch_array($queryMail);

                if (!empty($email)) {


                    if ($resultMail['email'] == $email) {
                        $mailExists = "*This Mail is Already Registered";
                    } else {

                        // adding in the table (create customer)
                        
                        $sql = " INSERT INTO seller (id,name, email, phone, address) VALUES ('$userId', '$name', '$email', '$mobileNumber','$address')";
                        
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


?>


<div class="container">

        <h1 style="text-align: center;">Seller Form</h1>
        <br><br><br><br><br>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">

            <!-- <div id="emailHelp" class="form-text" style="color: red;"><?php echo $existingMailMessage; ?></div> -->


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $nameErr; ?></div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bussiness Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text"><?php echo $emailErr; ?></div>


            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Warehouse address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
                <div id="emailHelp" class="form-text"><?php echo $addressErr; ?></div>

            </div>
            

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <div id="emailHelp" class="form-text"><?php echo $formSubmitted; ?></div>

        </form>




    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>