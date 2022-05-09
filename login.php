<!doctype html>
<html lang="en">
 <?php include "./header.php"  ?>
  <body>
    
<?php if(isset($_GET['from_page'])): ?>
    <h1>Login first</h1>

<?php endif ?>



<?php





session_start();



$email = $password = $errMessage = ""; 
// print_r($_POST['submit']);
if(isset($_POST['submit'])) {
    if(isset($_POST['email'])) {

        $email = $_POST['email'];
    } else {
        $email = "INVALID";
    }

    if(isset($_POST['password'])) {

        $password = $_POST['password'];
    } else {
        $password = "INVALID";
    }


    if(($email != "INVALID") && ($password != "INVALID")) {

        $passwordQuery = "SELECT password FROM customer WHERE email='$email'";

        $queryPass = mysqli_query($conn, $passwordQuery);
        $result = mysqli_fetch_array($queryPass);

        if(!isset($result['password']))
        {
            $errMessage = "Wrong password or email";
        }
        else
        if(password_verify($password, $result['password'])) {

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

        } else {

            $errMessage = "Wrong password or email";
        }


        if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
            header("Location: userDashboard.php");
        }
    }




}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <br><br><br>
    <br><br><br><br><br>

    <center><h1 >Login</h1></center>
    
    <div class="container" >

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" >Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <!-- <div class="form-group form-check"> -->
                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
            <!-- </div> -->
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <div id="emailHelp" class="form-text"><?php echo $errMessage; ?></div>

            <!-- <button type="submit" action="" class="btn btn-primary">Submit</button> -->
        </form>

        <br>
        <button type="submit" class="btn btn-primary">

            <a href="signup.php" style="color: white;text-decoration:none">Signup</a>
        </button>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

