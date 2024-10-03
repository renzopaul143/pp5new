<?php include('header.php');?>
<?php include('dbcon.php');?>





<!-- cards 1 -->

<div class="box2"><br>
<br><br><br>
<h2>ADMIN DASHBOARD</h2>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
   
    <div class="card-body">
        <h5 class="card-title">TOTAL EARNINGS</h5>
        <span class="fs-3 fw-medium">₱63,448.78</span>
         <h6 class="fs-3 fw-medium text-dark lh-base mb-0">45%</h6>
   <div class="progress">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
</div>

      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body">
      <h5 class="card-title">CUSTOMERS</h5>
        <span class="fs-3 fw-medium">₱20,354.00</span>
         <h6 class="fs-3 fw-medium text-dark lh-base mb-0">20%</h6>
         <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
     
      <div class="card-body">
      <h5 class="card-title">PRODUCTS</h5>
        <span class="fs-3 fw-medium">₱39,354.00</span>
         <h6 class="fs-3 fw-medium text-dark lh-base mb-0">70%</h6>
         <div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
<!-- end of cards 1 -->

<!-- cards 2 -->
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
     
    <div class="card-body">
      <h5 class="card-title">TOTAL SALES</h5>
        <span class="fs-3 fw-medium">₱423,39.00</span>
         <h6 class="fs-3 fw-medium text-dark lh-base mb-0">65%</h6>
         <div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
   
    <div class="card-body">
      <h5 class="card-title">REFUNDS</h5>
        <span class="fs-3 fw-medium">₱39,354.00</span>
         <h6 class="fs-3 fw-medium text-dark lh-base mb-0">15%</h6>
         <div class="progress">
         <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body">
        <h5 class="card-title">NO. VISIT THE WEBSITE</h5>
        <span class="fs-3 fw-medium">200,000 Users</span>
                    <h6 class="fs-3 fw-medium text-dark lh-base mb-0">80%</h6>

        <div class="progress mt-6" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-primary" style="width: 100%"></div>
                  </div>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
<!-- end of cards 2 -->
</div>

<div class="box1">
<h2>ALL PRODUCTS</h2>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 ADD PRODUCTS
</button>
</div>

<!-- display tables in index -->
<table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PRODUCT NAME</th>
                        <th>PRODUCT DETAILS</th>
                        <th>CATEGORY</th>
                        <th>PRICE</th>
                        <th>ACTION</th>
                        <th>ACTION</th>
                    </tr>
                </thead> 
                <tbody>

                    <?php

                    $query = "select * from `products1`";

                    $result = mysqli_query($connection, $query);

                    if(!$result){
                        die("query Failed" .mysqli_error());
                    }
                    else{
                       while($row = mysqli_fetch_assoc($result)){
                  ?>
                <tr>
                       <td><?php echo $row['id']; ?></td>
                       <td><?php echo $row['pname']; ?></td>
                       <td><?php echo $row['pdetails']; ?></td>
                       <td><?php echo $row['pcategory']; ?><br></td>
                       <td><?php echo $row['pprice']; ?> ₱</td>
                       <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
                       <td><a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>   

                            <?php
                       }
                    }


                    ?>

                  </tbody>
    </table>      
<!-- end of table -->
                

<!-- Modal for insert --> f
<form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD PRODUCTS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form>
            <div class="form-group">
            <label for="productname">Product Name</label>
            <input type="text" name="productname" class="form-control">
            </div>
            <div class="form-group">
            <label for="productdetails">Product Details</label>
            <input type="text" name="productdetails" class="form-control">
            </div>
            <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control">
            </div>
            <div class="form-group">
            <label for="price"> Price</label>
            <input type="number" name="price" class="form-control" min="0" step="1" >
            </div><br>
            
  
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_product" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>
<!-- end of modal  -->




<!-- message in delete -->
<?php
              if(isset($_GET['delete_msg'])){
                    echo"<h6>".$_GET['delete_msg']."</h6>";

              }
?>
<!-- message in insert -->
<?php
              if(isset($_GET['insert_msg'])){
                    echo"<h6>".$_GET['insert_msg']."</h6>";

              }
?>

<?php
              if(isset($_GET['update_msg'])){
                    echo"<h6>".$_GET['update_msg']."</h6>";

              }
?>



































<?php include('footer.php');?>