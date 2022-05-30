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

{if (!$check)}
    <li class="nav-item" style="list-style:none;">
        <a class="nav-link " href="login.php">Login</a>
    </li>

    <li class="nav-item" style="list-style:none;">
        <a class="nav-link " href="signup.php">Signup</a>
    </li>
{/if}




{if ($check)}
    <div class="btn-group dropstart">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons" style="font-size:20px;">person</i>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="myAccount.php">My Account</a></li>
            <li><a class="dropdown-item" href="userProducts.php">Your Products</a></li>


            <li><a class="dropdown-item" href='logout.php'><button type="button" class="btn btn-danger">Logout</button></a></li>
        </ul>
    </div>
{/if}

                
            </form>
        </div>
    </div>
</nav>