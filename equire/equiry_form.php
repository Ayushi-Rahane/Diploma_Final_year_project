<php>
    <head>
        <title>Enquiry Now</title>
        <link rel="stylesheet" href="..\style\navigation.css">
        <link rel="stylesheet" href="..\style\about-us.css">
        <link rel="stylesheet" href="..\style\general.css">
        <link rel="stylesheet" href="..\style\home.css">
        <link rel="stylesheet" href="..\style\spindle_repair.css">
        <link rel="stylesheet" href="..\style\enquiry.css">

         <!--Alertify Js-->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Inclusive+Sans:ital@0;1&family=Raleway:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="header">
        <div class="left-header">
        <span class="header-logo"><a href="https://wa.me/qr/RPTMSTH4SLSCP1" class="special-link-logo"><i  class="fa-brands fa-whatsapp"></i></a></span> 
        <a class="special-link-logo" href="https://www.linkedin.com/in/concept-n-controls-b3bb35283"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <div class="mid-header">
        <a href="mailto:m_rahane@yahoo.com" class="special-link-logo" class="email"><i class="fa-solid fa-envelope"></i> m_rahane@yahoo.com</a>  <br> <br>
         <i class="fa-solid fa-phone"></i> +919810113459, +917827802939 
        </div>
        <div class="right-header">
         <a href="../index.php#contact-us" onclick="smoothScroll('contact-us')" class="contact-us-link">contact us</a>
        </div>
       </div>
           <div class="nav">
            <div class="left-div">
       <a href="..\index.php"> <img class="logo-img" src="..\cnc-logo.png"></a>  
            </div>
          
            <div class="mid-div">
              </div>
              <input type="checkbox" id="check" onclick="hide_header(this);">
              <label for="check" class="menu-icon">
                <i class="fa-solid fa-bars"></i>
              </label>
              
              
            
           
          
          <ul class="menu-ul">
             <li><a class="menu-item" href="../index.php">Home</a></li> 
             <li class="services">
                <a class="menu-item">Our Services</a>
                <ul class="service-drop-down-menu">
                  <li class="service-list"><a class="service-list-link special-link" href="../services/service_list/spindle_repair.php" >Spindle Repair</a></li>
                  <li class="service-list"><a class="service-list-link special-link" href="../services/service_list/Ball_Screw_Repair.php"> Ball Screw Repair</a></li>
                  <li class="service-list"><a class="service-list-link special-link" href="../services/service_list/Servo_Motors_and_Drive_Repair.php">Servo Motors and Drive Repair</a></li>
                  <li class="service-list"><a class="service-list-link special-link" href="../services/service_list/cnc_machine_prevention_maintenance.php">CNC Machine Preventive Maintenance</a></li>
                  <li class="service-list"><a class="service-list-link special-link" href="../services/service_list/cnc_machine-breakdown-maintenance.php">CNC Machine Breakdown Maintenance</a></li>
                  <li class="service-list"><a class="service-list-link special-link" href="../services/service_list/retrofitting_of_cnc_machine.php">Retrofitting of CNC Machine</a></li>
                 </ul>
            </li>
            <li class="products">
              <a class="menu-item">Our Products</a>
              <ul class="product-drop-down-menu">
                <li class="product-list"><a class="service-list-link special-link"href="../products/cnc_drilling_and_routing_machine.php">CNC Drilling and Routing Machine</a></li>
                <li class="product-list"><a class="service-list-link special-link" href="../products/spindles.php">Spindles</a></li>
                <li class="product-list"><a class="service-list-link special-link" href="../products/toolstation.php">Tool Station</a></li>
                <li class="product-list"><a class="service-list-link special-link" href="../products/Servo_Motors_and_Driver.php">Servo Motors and Drives</a></li>
                <li class="product-list"><a class="service-list-link special-link" href="../products/Linear_Guide.php">Linear Guide</a></li>
               </ul>
            </li>  
             <li><a class="menu-item" href="../index.php#contact-us">Contact Us</a></li> 
             <li><a class="menu-item" href="../index.php#aboutus">About Us</a></li> 
            </ul>
           </div>
               
           <div class="title-div">
            <h1 class="title-hidden" style="margin-top:222px; margin-bottom:0%;">Enquiry Now</h1>
            </div>
            <div  class="container-super-div"> 
            <div class="container">
              <div class="text">
                 Contact us Form
              </div>
            
              <form action="../functions/authcode.php" method="POST" id="form">
                 <div class="form-row">
                    <div class="input-data">
                       <input type="text" required name="First_Name">
                       <div class="underline"></div>
                       <label for="">First Name</label>
                    </div>
                    <div class="input-data">
                       <input type="text" name="Last_Name" required>
                       <div class="underline"></div>
                       <label for="">Last Name</label>
                    </div>
                 </div>
                 <div class="form-row">
                    <div class="input-data">
                       <input type="email" id="email" name="Email" required>
                       <div class="underline"></div>
                       <label for="">Email Address</label>
                    </div>
                    <div class="input-data">
                       <input type="text" id="ph_no" name="Phone_no" required>
                       <div class="underline"></div>
                       <label for="">Phone no.</label>
                    </div>
                 </div>
                 <div class="form-row">
                   <div class="input-data">
                      <input type="text" name="Address" required>
                      <div class="underline"></div>
                      <label for="">Address</label>
                   </div>
                   <div class="input-data">
                      <input type="text" name="Company_Name" required>
                      <div class="underline"></div>
                      <label for="">Company Name</label>
                   </div>
                </div>
                 <div class="form-row">
                 <div class="input-data textarea">
                    <textarea id="myTextarea" rows="6" cols="50" name="Message" required></textarea>
                    <br />
                    <div class="underline"></div>
                    <label for="">Write your message</label>
                    <div class="form-row submit-btn">
                      <div class="input-data">
                         <div class="inner"></div>
                         <input type="submit" name="enquiry_btn" value="submit">
                      </div>
                      
                   </div>
               </form>
              </div>
            </div>
          
          
    </body>
    <script src="../script.js">

    </script>
   
    <!--Alertify JS-->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
   <?php
   session_start();
  if(isset($_SESSION['msg'])){ ?>
   
   alertify.set('notifier','position', 'bottom-right');
   alertify.success(<?= $_SESSION['msg']?>);
   <?php
      unset($_SESSION['msg']);
   }
   ?>
 
   </script>
</php>