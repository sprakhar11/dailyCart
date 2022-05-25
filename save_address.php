<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    >

    <!-- <title>Hello, world!</title> -->
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Country</label>
            <input type="text" placeholder="<?php echo $address['country'] ?>" class="form-control" id="inputEmail4"
             name="country">
            <div id="emailHelp" class="form-text"><?php echo $countryErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" placeholder="<?php echo $address['name'] ?>" class="form-control" id="inputEmail4"
             name="name">
            <div id="emailHelp" class="form-text"><?php echo $nameErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Mobile Number</label>
            <input type="number" placeholder="<?php echo $address['phone'] ?>" class="form-control"
             id="exampleInputEmail1"
             aria-describedby="emailHelp" name="phone">

            <div id="emailHelp" class="form-text"><?php echo $phoneErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Pincode</label>
            <input type="number" placeholder="<?php echo $address['pincode'] ?>" class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp" name="pincode">

            <div id="emailHelp" class="form-text"><?php echo $pincodeErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Address:</label>
            <input type="text" placeholder="<?php echo $address['addline1'] ?>" class="form-control" id="inputEmail4"
            name="addline1">
            <div id="emailHelp" class="form-text"><?php echo $addline1Err; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">City</label>
            <input type="text" placeholder="<?php echo $address['city'] ?>" class="form-control" id="inputEmail4"
            name="city">
            <div id="emailHelp" class="form-text"><?php echo $cityErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">State</label>
            <input type="text" placeholder="<?php echo $address['state'] ?>" class="form-control" id="inputEmail4" 
            name="state">
            <div id="emailHelp" class="form-text"><?php echo $stateErr; ?></div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Type</label>
            <input type="text" placeholder="<?php echo $address['type'] ?>" class="form-control" id="inputEmail4" 
            name="type">
            <div id="emailHelp" class="form-text"><?php echo $typeErr; ?></div>

        </div>
            
        
        
        
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
    crossorigin="anonymous"></script>
   
</body>

</html>