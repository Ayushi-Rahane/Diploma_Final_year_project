<html>
<head>
  <link rel="shortcut icon" type="x-icon" href="cnc-logo.png">
  <title>Concept N Controls</title>

  <link rel="stylesheet" href="style/navigation.css">
  <link rel="stylesheet" href="style/about-us.css">
  <link rel="stylesheet" href="style/contact-us.css">
  <link rel="stylesheet" href="style/general.css">
  <link rel="stylesheet" href="style/products.css">
  <link rel="stylesheet" href="style/service.css">
  <link rel="stylesheet" href="style/home.css">
  <link rel="stylesheet" href="style/chatbot.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Inclusive+Sans:ital@0;1&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  include('user-view/navbar.php');

  ?>

 <!--Home/Front Page-->
 <div class="home-outer-div">
    <div class="homer-inner-div">
        <?php

        include('config/dbcon.php');
    $query = "SELECT image FROM home_slider";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error fetching home_slider: " . mysqli_error($conn));
}

// Fetch image URLs into an array
$imageUrls = [];
while ($row = mysqli_fetch_assoc($result)) {
    $imageUrls[] = $row['image'];
}

// Get the current slide index from the query parameter
$slideIndex = isset($_GET['slide']) ? $_GET['slide'] : 0;

// Ensure the slide index is within bounds
if ($slideIndex < 0 || $slideIndex >= count($imageUrls)) {
    $slideIndex = 0; // Reset to the first image
}

echo "<p><a href='?slide=", ($slideIndex - 1 + count($imageUrls)) % count($imageUrls), "'> <button class='left-arrow-btn'><img class='left-arrow' src='front-img/left_arrow.png'></a> </button>";

// Display the current image
echo "<img id='front-img' class='front-img' src='uploads/{$imageUrls[$slideIndex]}' alt='Slideshow Image'>";

// Generate links to navigate to the previous or next slide

echo "<a href='?slide=", ($slideIndex + 1) % count($imageUrls), "'> <button class='right-arrow-btn' align='center'><img align='center' class='right-arrow' src='front-img/Right_arrow copy.png'></button></a></p>";

// Close the database connection
mysqli_close($conn);
?>
</div>
  </div>

  <!--Service section-->
  <div>
    <div class="title-div">
      <h1 class="title-hidden">Services</h1>
    </div>
    <div class="service-item-outer-div">
      <a href="services/service_list/spindle_repair.php">
      <div class="service-item-inner-div-hidden">
        <div>
          <img class="service-img" src="services/service1.jpeg">
        </div>
        <div>
          <p class="service-name">Spindle Repair</p>
        </div>
        <div class="service-info-div">
          <p  class="service-info">
           <ul style="color:darkcyan;">
            <li>ATC Ball Bearing Spindle</li>
            <li>Air Bearing Spindle</li>
            <li>MTC Water Cooled Routing Spindle</li>
           </ul>    
        </p>
        </div>
      </div>
      </a>
      <a href="services/service_list/Ball_Screw_Repair.php">
      <div class="service-item-inner-div-hidden">
        <div>
          <img class="service-img" src="services/Ball_Screw.jpg">
        </div>
        <div>
          <p class="service-name">Ball Screw Repair</p>
        </div>
        <div class="service-info-div">
          <p class="service-info">Concept and Controls Company excels in ball screw repairs, offering comprehensive services for CNC machines. </p>
        </div>
      </div>
      </a>
      <a href="services/service_list/spindle_repair.php">
      <div class="service-item-inner-div-hidden">
        <div>
          <img class="service-img" src="services/service3.png">
        </div>
        <div>
          <p class="service-name">Spindle Repair</p>
        </div>
        <div class="service-info-div">
          <p class="service-info">
          <ul style="color:darkcyan;">
            <li>ATC Ball Bearing Spindle</li>
            <li>Air Bearing Spindle</li>
            <li>MTC Water Cooled Routing Spindle</li>
           </ul></p>
        </div>
      </div></a>
    </div>
    <div class="enquire-div">
      <a class="enquiry-link" href="equire/equiry_form.php">Enquiry</a>
    </div>
  </div>

  <!--Product section-->
  <div>
    <div class="title-div">
      <h1 class="title-hidden">Products</h1>
    </div>
    <div class="product-item-div">
      <?php
      include('config/dbcon.php');
      $query = "SELECT * FROM add_product";

      $product = $query_run = mysqli_query($conn, $query);
      if (mysqli_num_rows($product) > 0) {
        foreach ($product as $item) {
      ?>
          <div class="product-item1-div-hidden">
            <div>
              <img class="product-img" src="uploads/<?= $item['image']; ?>" alt="Product Image">
            </div>
            <div>
              <div class="product-title-div">
                <p class="product-title"><?= $item['name']; ?></p>
              </div>
              <div class="product-info-div"><?= $item['description']; ?>
              </div>
              <div class="enquire-div">
                <a class="enquiry-link" href="equire/equiry_form.php">Enquiry</a>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>

    </div>
    <!--Contact us Section-->
    <div id="contact-us" class=contact_us>
      <div class="title-div">
        <h1 class="title-hidden">Contact Us</h1>
      </div>
      <div class="contact-us-div-hidden">


        <div class="social-media-logo-div">
          <a href="https://wa.me/qr/RPTMSTH4SLSCP1" class="special-link-logo"><i class="fa-brands fa-whatsapp"></i></a>
          <span class="mid-logo"><a class="special-link-logo" href="https://www.linkedin.com/in/concept-n-controls-b3bb35283"><i class="fa-brands fa-linkedin-in"></i> </a></span>
          <a href="mailto:m_rahane@yahoo.com" class="special-link-logo"><i class="fa-solid fa-envelope"></i></a>
        </div>
        <div class="outer-office-address-div">
          <div class="inner-office-address-div">
            <div class="office-title">
              Office 1:
            </div>
            <div class="address-detail">
              <div>SHREE APARTMENT, NEHRU GARDEN, LOKRUCHINAGAR, RAHATA, DIST. AHMEDNAGAR-423107,</div>
              <div><b>Ph No.</b> 9810113459</div>
              <div><b>Email: </b>m_rahane@yahoo.com</div>
            </div>
          </div>

          <div class="inner-office-address-div">
            <div class="office-title">
              Office 2:
            </div>
            <div class="address-detail">
              <div>4311, STREET NO. 9, AJITNAGAR, GANDHINAGAR, DELHI-110031,</div>
              <div><b>Ph No.</b> 7827802939</div>
              <div><b>Email: </b>m_rahane@yahoo.com</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--About us section-->
    <div class="about-us" id="aboutus">
  <div class="title-div">
    <h1 class="title-hidden" style="color:aliceblue">About Us</h1>
    </div>
  <div class="about-us-header">Concept N Controls</div>
  <div class="about-us-contact">

    <div class="left-about-us-contact"> Connect with us <br>
      <br><span class="about-us-contact-us-logo">
        <a href="https://wa.me/qr/RPTMSTH4SLSCP1" class="special-link-logo"><i  class="fa-brands fa-whatsapp"></i></a>
        <a href="mailto:m_rahane@yahoo.com" class="special-link-logo"><i class="fa-solid fa-envelope"></i></a>
      <a class="special-link-logo" href="https://www.linkedin.com/in/concept-n-controls-b3bb35283"><i class="fa-brands fa-linkedin-in"></i></a></span></div>
  
      <div class="right-about-us-contact">
        <div class="about-us-address"><span class="about-us-content-title">RAHATA OFFICE:</span> <br>SHREE APARTMENT, NEHRU GARDEN, LOKRUCHINAGAR, RAHATA, DIST. AHMEDNAGAR-423107, <br> <b>Ph No.</b> 9810113459 <br><b>Email: </b>m_rahane@yahoo.com</div>

        <div class="about-us-address"> <span class="about-us-content-title">DELHI OFFICE:</span> <br>4311, STREET NO. 9, AJITNAGAR, GANDHINAGAR, DELHI-110031,<br> <b>Ph No.</b> 7827802939 <br><b>Email: </b>m_rahane@yahoo.com</div>  
      </div>
    
  </div>
  <div class="about-us-service-product">
      <div>
        <span class="about-us-content-title">Services:</span> <br>
        <li class="about-us-item"><a href="services/service_list/spindle_repair.php" class="about-us-item">Spindle Repair</a></li>
        <li class="about-us-item"><a href="services/service_list/Ball_Screw_Repair.php" class="about-us-item">Ball Screw Repair</a></li>
        <li class="about-us-item"><a href="services/service_list/Servo_Motors_and_Drive_Repair.php" class="about-us-item">Servo Motors and Drive Repair</a></li>
        <li class="about-us-item"><a href="services/service_list/cnc_machine_prevention_maintenance.php" class="about-us-item" >CNC Machine Preventive Maintenance</a></li>
        <li class="about-us-item"><a href="services/service_list/cnc_machine-breakdown-maintenance.php" class="about-us-item">CNC Machine Breakdown Maintenance</a></li>
        <li class="about-us-item"><a href="services/service_list/retrofitting_of_cnc_machine.php" class="about-us-item">Retrofitting of CNC Machine</a></li>
      </div>
     
      <div class="about-us-product">
        <span class="about-us-content-title">Product</span>
        <li class="about-us-item"><a href="products/cnc_drilling_and_routing_machine.php" class="about-us-item">CNC Drilling and Routing Machine</a></li>
                   <li class="about-us-item" ><a href="products/spindles.php" class="about-us-item">Spindles</a></li>
                   <li class="about-us-item"><a href="products/toolstation.php" class="about-us-item">Tool Station</a></li>
                   <li class="about-us-item"><a href="products/Servo_Motors_and_Driver.php" class="about-us-item">Servo Motors and Drives</a></li>
          
      </div>
    </div>
  <div class="about-us-item"> <a href="mailto:m_rahane@yahoo.com" class="special-link-logo">m_rahane@yahoo.com</a></div>
 </div>

    <!--Chat Bot-->
    <?php include('user-view/chatbot.php') ?>
</body>
<script src="script.js">
</script>

    </html>