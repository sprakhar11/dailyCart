<html>

<div class="container">

        <h1 style="text-align: center;">Edit Profile</h1>
        <br><br><br><br><br>

        <form action="editProfile.php" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input placeholder="{$user.name}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text">{$nameErr}</div>
            
            </div>


            <button type="submit" class="btn btn-primary" name="submit1">Save</button>
        </form>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                <input placeholder="{$user.phone}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
                <div id="emailHelp" class="form-text">{$phoneErr}</div>
            
            </div>


            <button type="submit" class="btn btn-primary" name="submit2">Save</button>
        </form>
        <form action="editProfile.php" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address(You need to login Again)</label>
               
                <input placeholder="{$user.email}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">{$emailErr}</div>
          
            </div>


            <button type="submit" class="btn btn-primary" name="submit3">Save</button>
        </form>
        <form action="editProfile.php" method="POST">


            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password(You need to login Again)</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
                <div id="emailHelp" class="form-text">{$passwordErr}</div>
                <div id="emailHelp" class="form-text">{$passwordLengthErr}</div>
            
            </div>


            <button type="submit" class="btn btn-primary" name="submit4">Save</button>
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