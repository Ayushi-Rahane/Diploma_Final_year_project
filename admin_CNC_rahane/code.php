<?php
session_start();

   include('../config/dbcon.php');
   include('../functions/myfunctions.php');
   if(isset($_POST['add_product_btn'])){
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    // Check if an image is uploaded
    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $path="../uploads";
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().".".$image_ext;

        //run query to insert data in db
        $product_query = "INSERT INTO add_product (name, slug, description, meta_title, meta_description, meta_keywords, image) VALUES ('$name','$slug','$description','$meta_title','$meta_description','$meta_keyword','$filename')";

        $product_query_run = mysqli_query($conn, $product_query);

        if($product_query_run)
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
            redirect("add_product.php","Product Added Successfully");
        }
        else{
            redirect("add_product.php","Something Went Wrong");
        }
    } else {
        redirect("add_product.php","Please upload an image");
    }
}
  else if(isset($_POST['update_product_btn'])){

    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    //uploading image
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image !=""){
      //$update_filename = $new_image;
      $image_ext = pathinfo($new_image,PATHINFO_EXTENSION);
      $update_filename= time().".".$image_ext;
    }
    else{
      $update_filename = $old_image;
    }
    $path="../uploads";

    $update_query = "UPDATE add_product SET name='$name', slug='$slug',description='$description',meta_title='$meta_title',meta_description='$meta_description',meta_keywords='$meta_keyword',image='$update_filename' WHERE id='$product_id'";

    $update_query_run = mysqli_query($conn, $update_query);

    if($update_query_run)
    {
      if($_FILES['image']['name'] != "")
      {
          move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$update_filename);
          if(file_exists("../uploads/".$old_image))
          {
            unlink("../uploads/".$old_image);
          }
    }
        redirect("edit-product.php?id=$product_id","product updated Successfully");
  }
    else{
      redirect("edit-product.php?id=$product_id","Something went wrong");
      }
  }
  else if(isset($_POST['delete_product_btn'])){
    $product_id = mysqli_real_escape_string($conn,$_POST['product_id']);
    $product_query = "SELECT * FROM add_product WHERE id='$product_id'";
    $product_query_run = mysqli_query($conn,$product_query);
    $product_data = mysqli_fetch_array($product_query_run);
    $image = $product_data['image'];
    $delete_query = "DELETE FROM add_product WHERE id='$product_id' ";
    $delete_query_run = mysqli_query($conn,$delete_query);

    if($delete_query_run){
      if(file_exists("../uploads/".$image))
      {
        unlink("../uploads/".$image);
      }
      redirect("product.php","Product deleted Successfully..");
    }
    else{
      redirect("product.php","Something wnet wrong..");
    }
  }
  else if(isset($_POST['delete_enquiry_btn'])){
    $enquiry_id = mysqli_real_escape_string($conn,$_POST['enquiry_id']);
    $enquiry_query = "SELECT * FROM enquiry WHERE id='$enquiry_id'";
    $enquiry_query_run = mysqli_query($conn,$enquiry_query);
    $enquiry_data = mysqli_fetch_array($enquiry_query_run);
    $delete_query = "DELETE FROM enquiry WHERE id='$enquiry_id' ";
    $delete_query_run = mysqli_query($conn,$delete_query);

    if($delete_query_run){
      redirect("enquires.php","Enquiry deleted Successfully..");
    }
    else{
      redirect("enquires.php","Something went wrong..");
    }
  }
  else if(isset($_POST['add_slider_btn'])){
    //uploading image
    if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $path="../uploads";
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().".".$image_ext;

        //run query to insert data in db
        $slider_query =  "INSERT INTO home_slider (image) VALUES ('$filename')";

        $slider_query_run = mysqli_query($conn, $slider_query);

        if($slider_query_run)
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
            redirect("home_slides.php","Slide Added Successfully");
        }
        else{
            redirect("home_slides.php","Something Went Wrong");
        }
    } else {
        redirect("home_slides.php","Please upload an image");
    }
}

  else if(isset($_POST['delete_slider_btn'])){
    $slider_id = mysqli_real_escape_string($conn,$_POST['slider_id']);
    $product_query = "SELECT * FROM home_slider WHERE id='$slider_id'";
    $product_query_run = mysqli_query($conn,$product_query);
    $product_data = mysqli_fetch_array($product_query_run);
    $image = $product_data['image'];
    $delete_query = "DELETE FROM home_slider WHERE id='$slider_id' ";
    $delete_query_run = mysqli_query($conn,$delete_query);

    if($delete_query_run){
      if(file_exists("../uploads/".$image))
      {
        unlink("../uploads/".$image);
      }
      redirect("home_slides.php","Slide deleted Successfully..");
    }
    else{
      redirect("home_slides.php","Something wnet wrong..");
    }
  }

?>