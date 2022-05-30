<?php

include "./header.php";
include "./login_check.php";
include "./navbar.php";




if(isset($_POST['submitEdit'])){

        $editProductId = $_POST['submitEdit'];


        $name = $description = $price = $imagePath = "";
        $nameErr = $descriptionErr = $priceErr = $imagePathErr = "";
        $fileName = $targetDir = "";
        $productExist="";

        $smarty->assign('name', $name);
        $smarty->assign('description', $description);
        $smarty->assign('price', $price);
        $smarty->assign('imagePath', $imagePath);
        $smarty->assign('productExist', $productExist);
        $smarty->assign('nameErr', $nameErr);
        $smarty->assign('descriptionErr', $descriptionErr);
        $smarty->assign('fileName', $fileName);
        $smarty->assign('targetDir', $targetDir);
        $smarty->assign('priceErr', $priceErr);
        $smarty->assign('imagePathErr', $imagePathErr);



        $sql="SELECT * FROM product  WHERE id='$editProductId'";

        $query=mysqli_query($conn,$sql);

        $product=mysqli_fetch_array($query);


        if(isset($_POST['submit']))
        {
            if (!empty($_POST['name'])) {
                $name = htmlspecialchars($_POST['name']);
            } else {
                $name= $product['name'];
                $smarty->assign('name', $name);

            }

            if (!empty($_POST['description'])) {
                $description = htmlspecialchars($_POST['description']);
            } else {
                $description = $product['description'];
                $smarty->assign('description', $description);
            }


            if (!empty($_POST['price'])) {
                $price = htmlspecialchars($_POST['price']);
            } else {
                $price = $product['price'];
                $smarty->assign('price', $price);

            }
            // if(!empty($_POST['$upload']))
            echo $_POST['upload'];
            if (!empty($_FILES['upload']['name'])) {
                $fileName = $_FILES['upload']['name'];
                $fileTmp = $_FILES['upload']['tmp_name'];
                $targetDir = "./productImages/$fileName";
                move_uploaded_file($fileTmp, $targetDir);
            } else {

                $targetDir = $product['imagePath'];
                
            }

            if (empty($nameErr) && empty($descriptionErr) && empty($imagePathErr) && empty($priceErr)) {

                        $sql = "UPDATE product SET name='$name', description='$description', price='$price', imagePath='$targetDir' WHERE id='$editProductId'";
                        
                        if (mysqli_query($conn, $sql)) {

                            // successfully data registered
                            header('Location: manage_products.php?updated=done');

                        } else {
                            // echo "Error:" . mysqli_error($conn);
                        }
                        
            } 
        } else {
            // echo "form not submitted";
        }
} else {

    header('Location: myAccount.php');
}


?>
