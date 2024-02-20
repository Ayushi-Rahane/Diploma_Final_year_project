<?php
session_start();
include("includes/header.php");
include('../functions/myfunctions.php');
?>

<?php


if(isset($_SESSION['adminLogin']) && isset($_SESSION['admin']))
{
    echo '';
}
else
{
echo '<script>location.href="./includes/login.php"</script>';
// header("includes/login.php"); 
}
?>

<div class="container">
<?php 
            if(isset($_SESSION['alert']))
            {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Hey!</strong> <?= $_SESSION['alert']; ?>.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
unset($_SESSION['alert']);
            }
?>
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Image</h4>
            </div>
            <div class="card-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                
                <div class="col-md-12">
                <label for="">Upload Image</label>
                <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="add_slider_btn">Save</button>
                </div>
                <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>All Images</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $product = getAll("home_slider");
                        if(mysqli_num_rows($product)>0){
                            foreach( $product as $item){
                                ?>
                                    <tr>
                                    <td><?= $item['id'] ?> </td>
                                    
                                    <td>
                                        <img src="../uploads/<?= $item['image']; ?>" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="slider_id" value="<?= $item['id'] ?>">
                                        <button class="btn btn-danger" type="submit"name="delete_slider_btn">Delete</button>
                                        </form>
                                    </td>
                                    
                                    </tr>
                                <?php
                            }
                            
                        }
                        else{
                            echo"No records found.";
                        }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
        </div>
            </div>
            </form>
            
                
            </div>
        </div>
    </div>
    </div>
</div>
<?php include("includes/footer.php");?>