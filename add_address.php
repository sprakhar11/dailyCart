
<?php

$country = $name = $phone = $pincode = $addline1 = $city = $state = $type = $userid = "";
$countryErr = $nameErr = $phoneErr = $pincodeErr = $addline1Err = $cityErr = $stateErr = $typeErr = $useridErr = "";
$userId = $user['id'];
// echo $userId;
if (isset($_POST['submit'])) {


    if (!empty($_POST['country'])) {
        $country = htmlspecialchars($_POST['country']);
    } else {
        $countryErr = "country is missing";
    }

    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $nameErr = "name is missing!";
    }
    if (!empty($_POST['phone'])) {
        $phone = $_POST['phone'];
    } else {
        $phoneErr = "Mobile number is missing!";
    }
    if (!empty($_POST['phone']))
    if( strlen(strval($phone)) != 10)
    {
        // echo strval($phone);
        $phoneErr= "Length should be 10 integers";
    }
    if (!empty($_POST['pincode'])) {
        $pincode = $_POST['pincode'];
    } else {
        $pincodeErr = "pincode is missing!";
    }
    if (!empty($_POST['addline1'])) {
        $addline1 = $_POST['addline1'];
    } else {
        $addline1Err = "Address is missing!";
    }

    if (!empty($_POST['city'])) {
        $city = $_POST['city'];
    } else {
        $cityErr = "City is missing!";
    }
    if (!empty($_POST['state'])) {
        $state = $_POST['state'];
    } else {
        $stateErr = "State is missing!";
    }
    if (!empty($_POST['type'])) {
        $type = $_POST['type'];
    } else {
        $typeErr = "Type is missing!";
    }

    if (empty($nameErr) && empty($countryErr) && empty($phoneErr) && empty($pincodeErr) && empty($addline1Err) && empty($stateErr) && empty($cityErr) && empty($typeErr)) {

                $userId = $user['id'];

                $sql = "INSERT INTO address ( country, name, phone, pincode, addline1, city, state, type, userid) VALUES ('$country', '$name', '$phone', '$pincode', '$addline1', '$city', '$state', '$type', '$userId')";
                
                if (mysqli_query($conn, $sql)) {

                    // successfully data registered
                    header('Location: myAccount.php');
                    echo 'hialkdnsa;ldfndsl;fndslfjnsd;lfnj';
                } else {
                    echo "Error:" . mysqli_error($conn);
                }
    }
}
?>










<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <title>Hello, world!</title> -->
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Country</label>
            <input type="text" class="form-control" id="inputEmail4" name="country">
            <div id="emailHelp" class="form-text"><?php echo $countryErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="name">
            <div id="emailHelp" class="form-text"><?php echo $nameErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Mobile Number</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">

            <div id="emailHelp" class="form-text"><?php echo $phoneErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Pincode</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pincode">

            <div id="emailHelp" class="form-text"><?php echo $pincodeErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Address:</label>
            <input type="text" class="form-control" id="inputEmail4" name="addline1">
            <div id="emailHelp" class="form-text"><?php echo $addline1Err; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">City</label>
            <input type="text" class="form-control" id="inputEmail4" name="city">
            <div id="emailHelp" class="form-text"><?php echo $cityErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">State</label>
            <input type="text" class="form-control" id="inputEmail4" name="state">
            <div id="emailHelp" class="form-text"><?php echo $stateErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Type</label>
            <input type="text" class="form-control" id="inputEmail4" name="type">
            <div id="emailHelp" class="form-text"><?php echo $typeErr; ?></div>

        </div>
            
        
        
        
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Address</button>
    </form>

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