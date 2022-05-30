<!doctype html>
<html lang="en">
<body>
<br>

{if ($user)}
    <h5>Welcome {$user.name}</h5>
        <a href='add_address.php'>Add Address</a>

    
    {if $user.profile eq 'customer'}
        <a href='editProfile.php'>Edit Profile</a>



    <h1>You are a customer if you want to be a seller fill up the form</h1>

    <a href='sellerForm.php'>Form</a>
    <a href='manage_address.php'>Manage Address</a>

    <h3>Add Address : </h3>
    {* {include file="./add_address.php"} *}
    {/if}
{/if}

{if ($user)}
    {if $user.profile eq 'seller'}
        <h1>You are a seller : </h1>
        <a href='editProfile.php'>Edit Profile</a>

        <a href="add_product.php">Add Product</a>
        <a href="manage_products.php">Manage Products</a>
        <a href='manage_address.php'>Manage Address</a>
    {/if}
{/if}

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

</body>