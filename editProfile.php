
<?php

include "./header.php";
include "./config/userSession.php";
include "./navbar.php";

// if user is not logged in
if(empty($_SESSION['email'])) {

    header('Location: login.php?from_page=myAccount');

}
// include "./userData.php";

$name = $phone = "";
$nameErr = $phoneErr = $emailErr = $passwordErr = $passwordlengthErr = "";

// name update
if(isset($_POST['submit1']))
{
    if (!empty($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
    } else {
        $nameErr = "Name is missing";
    }

    if (empty($nameErr)) {

                $userId = $user['id'];
                // echo $userId;
                $sql = "UPDATE customer SET name='$name' WHERE id='$userId' ";
                if ($conn->query($sql) === TRUE) {
                    // echo "Record updated successfully";
                $nameErr = "Successfully Updated";

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
    }

    if (!empty($_POST['phone']))
    if( strlen(strval($phone)) != 10)
    {
        // echo strval($phone);
        $phoneErr = "Length should be 10 integers";
    }
    
    if (empty($phoneErr)) {

                $userId = $user['id'];
                // echo $userId;
                $sql = "UPDATE customer SET phone='$phone' WHERE id='$userId' ";
                if ($conn->query($sql) === TRUE) {
                    // echo "Record updated successfully";
                $phoneErr = "Successfully Updated";

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
        }

    } else {
            $passwordErr = "Password is missing";
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




?>
<html>

<div class="container">

        <h1 style="text-align: center;">Edit Profile</h1>
        <br><br><br><br><br>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input placeholder="<?php echo $user['name'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $nameErr; ?></div>
            
            </div>


            <button type="submit" class="btn btn-primary" name="submit1">Save</button>
        </form>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                <input placeholder="<?php echo $user['phone'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
                <div id="emailHelp" class="form-text"><?php echo $phoneErr; ?></div>
            
            </div>


            <button type="submit" class="btn btn-primary" name="submit2">Save</button>
        </form>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address(You need to login Again)</label>
               
                <input placeholder="<?php echo $user['email'] ?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text"><?php echo $emailErr; ?></div>
          
            </div>


            <button type="submit" class="btn btn-primary" name="submit3">Save</button>
        </form>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">


            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password(You need to login Again)</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
                <div id="emailHelp" class="form-text"><?php echo $passwordErr; ?></div>
                <div id="emailHelp" class="form-text"><?php echo $passwordlengthErr; ?></div>
            
            </div>


            <button type="submit" class="btn btn-primary" name="submit4">Save</button>
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