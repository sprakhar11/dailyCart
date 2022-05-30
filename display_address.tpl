<div >
       
          <div class="card-body">
            <h6 class="card-title">Country: {$value.country}</h6>
            <h6 class="card-text">Name: {$value.name}</h6>
            <h6 class="card-text">Mobile Number :{$value.phone}</h6>
            <h6 class="card-text">Pincode: {$value.pincode}</h6>
            <h6 class="card-text">Address: {$value.addline1}</h6>
            <h6 class="card-text">City: {$value.city}</h6>
            <h6 class="card-text">State: {$value.state}</h6>
            <h6 class="card-text">Type: {$value.type}</h6>

        <form action="edit_address.php" method="POST">
        <button type="submit" class="btn btn-primary" name="submitEdit" value="{$value.id}">Edit</button>
        </form>
        <a href="{$url}"> Delete </a>

    </div>
</div>
   
      
