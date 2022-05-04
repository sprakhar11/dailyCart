
<?php

include "./header.php";
include "./config/userSession.php";
include "./navbar.php";


// if(empty($_SESSION['email'])) {

//     header('Location: login.php?from_page=myAccount');

//    }
// include "./userData.php";

$name = $description = $price = $imagePath = "";
$nameErr = $descriptionErr = $priceErr = $imagePathErr = "";
$fileName = $targetDir = "";
$productExist="";


if(isset($_POST['submit']))
{
    if (!empty($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
    } else {
        $nameErr = "Product Name is missing!";
    }

    if (!empty($_POST['description'])) {
        $description = htmlspecialchars($_POST['description']);
    } else {
        $descriptionErr = "Description is missing!";
    }


    if (!empty($_POST['price'])) {
        $price = htmlspecialchars($_POST['price']);
    } else {
        $priceErr = "Price is missing!";
    }
    // if(!empty($_POST['$upload']))
    echo $_POST['upload'];
    if(!empty($_FILES['upload']['name'])) {
        $fileName = $_FILES['upload']['name'];
        $fileTmp = $_FILES['upload']['tmp_name'];
        $targetDir = "./productImages/$fileName";
        move_uploaded_file($fileTmp, $targetDir);
    } else {

        $imagePathErr = " Image is not uploaded Successfully!";
    }


    // echo "reached here";
    // echo $name;
    // echo $description;
    // echo $price;
    // echo $imagePath;
    

    if (empty($nameErr) && empty($descriptionErr) && empty($imagePathErr) && empty($priceErr)) {
        // echo $name;
        // echo "reached in product create";
                $sellerId = $user['id'];

                $sql = "INSERT INTO product ( name, description, price, imagePath, sellerId) VALUES (  '$name', '$description', '$price','$targetDir', '$sellerId')";
                
                if (mysqli_query($conn, $sql)) {

                    // successfully data registered
                    header('Location: myAccount.php');
                } else {
                    echo "Error:" . mysqli_error($conn);
                }
            
        
        
    

    
    } 
} else {
    // echo "form not submitted";
}


?>
<html>

<div class="container">

        <h1 style="text-align: center;">Seller Register Here</h1>
        <br><br><br><br><br>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" enctype="multipart/form-data">



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $nameErr; ?></div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
                <div id="emailHelp" class="form-text"><?php echo $descriptionErr; ?></div>
            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price">
                <div id="emailHelp" class="form-text"><?php echo $priceErr; ?></div>
            </div>  

            <label for="exampleInputEmail1" class="form-label">Upload Product Image </label>
            <input type="file" class="form-control" name="upload" id="">

            <div id="emailHelp" class="form-text"><?php echo $imagePathErr; ?></div>
            

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>




    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS --> -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
</body>

</html>