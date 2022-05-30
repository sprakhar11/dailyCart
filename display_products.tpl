<div class="col">
        <div class="card h-100">
        <div class="col-md-4">
      <img src="{$value.imagePath}" class="img-fluid rounded-start" alt="...">
    </div>
          <div class="card-body">
              
            <h5 class="card-title">{$value.name}</h5>
            <p class="card-text">{$value.description}</p>
            <p class="card-text">{$value.price}</p>
        <form action="edit_product.php" method="POST">
        <button type="submit" class="btn btn-primary" name="submitEdit" value="{$value.id}">Edit</button>
        </form>

        <form action="manage_products.php" method="POST">

        <button type="submit" class="btn btn-primary" name="submit" value="{$value.id}">Delete</button>
        </form>
            
        </form>
          </div>
        </div>
</div>