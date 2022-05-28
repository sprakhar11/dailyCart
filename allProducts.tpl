<!doctype html>
<html lang="en">
<body>
<h1 style="text-align: center;">Shopping</h1>

<br><br><br><br><div class="container">

<div class="row row-cols-1 row-cols-md-3 g-4">

{foreach $product as $value}
    
        <div class="col">
            <div class="card h-100">
            <div class="col-md-4">
          <img src="{$value.imagePath}" class="img-fluid rounded-start" alt="...">
        </div>
              <div class="card-body">
                  
                <h5 class="card-title">{$value.name}</h5>
                <p class="card-text">{$value.description}</p>
                <p class="card-text">Rs.{$value.price}</p>
    
                <button type="button" class="btn btn-warning">BuyNow</button>
              </div>
            </div>
          </a>
        </div>
    
{/foreach}
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
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