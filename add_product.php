
<?php
include "./login_check.php";
include "./header.php";
include "./navbar.php";

$name = $description = $price = $imagePath = "";
$nameErr = $descriptionErr = $priceErr = $imagePathErr = "";
$fileName = $targetDir = "";
$productExist="";

$smarty->assign('name', $name);
$smarty->assign('description', $description);
$smarty->assign('price', $price);
$smarty->assign('imagePath', $imagePath);

$smarty->assign('productExist', $productExist);
$smarty->assign('nameErr' , $nameErr);
$smarty->assign('priceErr' , $priceErr);
$smarty->assign('imagePathErr' , $imagePathErr);
$smarty->assign('descriptionErr', $descriptionErr);
$smarty->assign('fileName', $fileName);
$smarty->assign('targetDir', $targetDir);



if(isset($_POST['submit']))
{
    if (!empty($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
    } else {
        $nameErr = "Product Name is missing!";
        $smarty->assign('nameErr' , $nameErr);

    }

    if (!empty($_POST['description'])) {
        $description = htmlspecialchars($_POST['description']);
    } else {
        $descriptionErr = "Description is missing!";
        $smarty->assign('descriptionErr', $descriptionErr);

    }


    if (!empty($_POST['price'])) {
        $price = htmlspecialchars($_POST['price']);
    } else {
        $priceErr = "Price is missing!";
        $smarty->assign('priceErr', $priceErr);
    }
    // if(!empty($_POST['$upload']))
    // echo $_POST['upload'];
    if(!empty($_FILES['upload']['name'])) {
        $fileName = $_FILES['upload']['name'];
        $fileTmp = $_FILES['upload']['tmp_name'];
        $targetDir = "./productImages/$fileName";
        move_uploaded_file($fileTmp, $targetDir);
    } else {

        $imagePathErr = " Image is not uploaded Successfully!";
        $smarty->assign('imagePathErr', $imagePathErr);
    }


    // echo "reached here";
    // echo $name;
    // echo $description;
    // echo $price;
    // echo $imagePath;
    

    if (empty($nameErr) 
    && empty($descriptionErr) 
    && empty($imagePathErr) 
    && empty($priceErr)) 
    {
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

$smarty->display('add_product.tpl');


?>
