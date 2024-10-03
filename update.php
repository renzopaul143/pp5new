<?php include('header.php');?>
<?php include('dbcon.php');?>

<?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];

           
        }
                    $query = "select * from `products1` where `id` = '$id'";

                    $result = mysqli_query($connection, $query);

                    if(!$result){
                        die("query Failed" .mysqli_error());
                    }
                    else{
                       
                        $row = mysqli_fetch_assoc($result);

        }
?>

<?php

if(isset($_POST['update_products'])) {

      if(isset($_GET['id_new'])){
              $idnew = $_GET['id_new'];

      }



      $productname = $_POST['productname'];
      $productdetails = $_POST['productdetails'];
      $category = $_POST['category'];
      $price = $_POST['price'];

      $query = "update `products1` set `pname` = '$productname' , `pdetails` = '$productdetails' , `pcategory` = '$category' , `pprice` = '$price' where `id` = '$idnew' ";

      $result = mysqli_query($connection, $query);

      if(!$result){
          die("query Failed" .mysqli_error());
      }

      else{
           header('location:index.php?delete_msg=You Have successfully updated the data');

      }


}         

?>



<h2>UPDATE FORM</h2>


<form action="update.php?id_new=<?php echo $id; ?>" method="post">
            <div class="form-group">
            <label for="productname">Product Name</label>
            <input type="text" name="productname" class="form-control" value="<?php echo $row['pname']  ?>">
            </div>
            <div class="form-group">
            <label for="productdetails">Product Details</label>
            <input type="text" name="productdetails" class="form-control" value="<?php echo $row['pdetails']  ?>">
            </div>
            <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control" value="<?php echo $row['pcategory']  ?>">
            </div>
            <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" value="<?php echo $row['pprice']  ?>">
            </div>
            <br>
            <input type="submit" class="btn btn-success" name="update_products" value="UPDATE">
</form>     





<?php include('footer.php');?>

