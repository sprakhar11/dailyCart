<div class="col">
        <div class="card h-100">
        <div class="col-md-4">
      <img src="{$value.imagePath}" class="img-fluid rounded-start" alt="...">
    </div>
          <div class="card-body">
              
            <h5 class="card-title">{$value.name}</h5>
            <p class="card-text">{$value.description}</p>
            <p class="card-text">{$value.price}</p>
        <form action="manage_products.php" method="POST">
        <button type="submit" class="btn btn-primary" name="submitEdit" value="<?php echo $value['id'] ?>">Edit</button>

        <button type="submit" class="btn btn-primary" name="submit" value="<?php echo $value['id'] ?>">Delete</button>
            
        </form>
          </div>
        </div>
</div>