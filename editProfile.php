
<?php

include "./header.php";
include "./config/userSession.php";
include "./navbar.php";
if(empty($_SESSION['email'])) {

    header('Location: login.php?from_page=myAccount');

   }
// include "./userData.php";

$name = $phone = "";
$error="";


if(isset($_POST['submit']))
{
    if (isset($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
    } else {
        $name = "INVALID";
    }

    if (isset($_POST['phone'])) {
        $phone = htmlspecialchars($_POST['phone']);
    } else {
        $phone = "INVALID";
    }


    

    if ($name != "INVALID" && $phone != "INVALID" ) {

                $userId = $user['id'];
                echo $userId;
                $sql = "UPDATE customer SET name='$name' , phone='$phone' WHERE id='$userId' ";
                if ($conn->query($sql) === TRUE) {
                    // echo "Record updated successfully";
                } else {
                // echo "Error updating record: " . $conn->error;
                }
    } 
} else {
    // echo "form not submitted";
}


?>
<html>

<div class="container">

        <h1 style="text-align: center;">Edit Profile</h1>
        <br><br><br><br><br>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">phone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Save</button>
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