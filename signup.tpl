<div class="container">

        <h1 style="text-align: center;">Signup Here</h1>
        <br><br><br><br><br>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $nameErr; ?></div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile Number </label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobileNumber">
                <div id="emailHelp" class="form-text"><?php echo $mobileNumberErr; ?></div>

            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text"><?php echo $emailErr; ?></div>
                <div id="emailHelp" class="form-text"><?php echo $mailExists; ?></div>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                <div id="emailHelp" class="form-text"><?php echo $passwordErr; ?></div>
                <div id="emailHelp" class="form-text"><?php echo $passwordLengthErr; ?></div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Signup</button>
        </form>




    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>