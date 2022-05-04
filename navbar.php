<?php



if (!empty($_SESSION['email'])) {
    $sql="SELECT * FROM customer  WHERE email='$email' ";

    $query=mysqli_query($conn,$sql);

    $user=mysqli_fetch_array($query);
}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="userDashboard.php" style="color: red;">DailyCart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="userDashboard.php">Home</a>
                </li>
                
            </ul>
            <form class="d-flex">

                <?php if (!isset($_SESSION['email'])):?>

                    <li class="nav-item" style="list-style:none;">
                        <a class="nav-link " href="login.php">Login</a>
                    </li>

                    <li class="nav-item" style="list-style:none;">
                        <a class="nav-link " href="signup.php">Signup</a>
                    </li>

                <?php endif?>




                <?php if (isset($_SESSION['email'])):?>

                    <div class="btn-group dropstart">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons" style="font-size:20px;">person</i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='<?php

                                                                $userId = $user['id'];

                                                                echo "myAccount.php" . "?id=$userId";


                                                                ?>'>My Account</a></li>
                            <!-- <li><button class="dropdown-item" type="button">My wishlist</button></li> -->

                            <li><a class="dropdown-item" href='logout.php'><button type="button" class="btn btn-danger">Logout</button></a></li>
                        </ul>
                    </div>





                <?php endif?>
            </form>
        </div>
    </div>
</nav>