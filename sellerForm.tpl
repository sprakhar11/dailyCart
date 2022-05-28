
<div class="container">

        <h1 style="text-align: center;">Seller Form</h1>
        <br><br><br><br><br>

        <form action="sellerForm.php" method="POST">

            <!-- <div id="emailHelp" class="form-text" style="color: red;"><?php echo $existingMailMessage; ?></div> -->


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text">{$nameErr}</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bussiness Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">{$emailErr}</div>


            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Warehouse address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
                <div id="emailHelp" class="form-text">{$addressErr}</div>

            </div>
            

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <div id="emailHelp" class="form-text">{$formSubmitted}<div>

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