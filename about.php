<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About Us</title>
    <style>
        .navbar {
            background-color: rgb(59, 62, 83);
            overflow: hidden;
            display: flex;
            align-items: center;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
           
            margin: 0;
            padding: 0;
        }
        
        .container {
            width: 85%;
            margin: 0 auto;
            
            padding: 60px;
            border-radius: 5px;
            background-color: rgb(59, 62, 83, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            font-size: 40px;
            color: lightblue;
            text-align: center;
        }
        
        h2 {
      font-size: 30px;
      color: white;
      text-align: center;
    }
              
    h3 {
      font-size: 16px;
      color: lightblue;
     
    }
        p {
            font-size: 16px;
            color: white;
        }
        
        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
          
        }
        
        .team-member {
            width: 350px;
            padding: 10px;
            max-height: 350px;
            background-color: transparent;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.8);
            text-align: center;
            margin-bottom: 20px;
          
           
            
        }
        
        .team-member img {
            width: 50%;
            border-radius: 20%;
            margin-top: 20px;
            
        }
        
        .team-member h3 {
            font-size: 18px;
            color: white;
            margin: 10px 0;
        }
        
        .team-member p {
            font-size: 15px;
            color: lightblue;
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .team-member {
            max-width: 350px;
            padding: 10px;
            max-height: 300px;
            justify-content: center;
            }
            .team-member img {
            max-width: 60%;
            border-radius: 20%;
        }
        
            .container {
            width: 85%;
            margin: 0 auto;
            justify-content: center;
            padding: 20px;
            border-radius: 5px;
            background-color: rgb(59, 62, 83, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        }
    </style>
</head>
<body>


<div class="navbar" id="myNavbar">
<ul href="index.php" ><img src="images/shoplogo.png" style="width:120px;" margin="auto"></ul>
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="services.php"><i class="fa fa-cog"></i> Services</a>
  <a href="updates.php"><i class="fa fa-fw fa-bell"></i> Updates</a> 
  <a href="about.php"><i class="fa fa-fw fa-info-circle"></i> About</a>
  <br>
    <br>
  <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<br>
<br>
<br>
<br>

<h1>About Us</h1>
<div class="container">
    <h2>About </h2>
    <p>
    <p>
About Us Welcome to TarpShop – Your Trusted Tarpaulin Experts

At TarpShop, we are your dedicated team of tarpaulin specialists, committed to providing top-quality products and unmatched service. Our mission is to be your ultimate source for high-quality tarpaulins, custom covers, and innovative solutions to meet your needs.

Why Choose TarpShop?<br><br>
- Quality You Can Trust: Our tarpaulins are designed to withstand the harshest conditions, ensuring superior protection for your valuable assets.<br><br>
- Custom Solutions: We offer customizable tarpaulins tailored to your specific requirements, whether it's for protection, advertising, or creative projects.<br><br>
- Expertise and Innovation: Our team is always here to provide expert guidance and personalized solutions. We go the extra mile to help you find the perfect tarpaulin for your unique needs.

Discover the Difference<br><br>
Join our satisfied customers and experience the power of TarpShop. Whether you need to safeguard, advertise, or innovate, we're here to support your projects and ambitions. Your success is our success, and at TarpShop, we deliver nothing less than the best.

Contact us today and discover the TarpShop advantage for all your covering, advertising, and success needs.<br><br>
<h3>Contact Information<br><br>
- <a href="http://localhost/tarpaulin/index.php" style="color: lightblue; ">tarpshop.000webhostapp.com</a><br>
- 09123456789<br>
- <a href="mailto:balinasanjanel@gmail.com" style="color: lightblue; ">BossAnjanel@gmail.com</a><br>
- <a style="color: lightblue; " href="https://www.google.com/maps/@14.6233285,120.969629,3a,75y,244.5h,76.65t/data=!3m6!1e1!3m4!1sE-xOGmjP89dNeXy7KEkvig!2e0!7i
16384!8i8192?entry=ttu" >Rodriguez Rizal Sample Street</a></h3>
        </p>
    </p>
    <br>
    <h2>Our Team</h2>
  
    <div class="team">
   
        <div class="team-member">
            <img src="members/imgs1.jpg" alt="Anjanel Balinas"> <!-- Replace with the actual image path -->
            <h3>Anjanel Balinas</h3>
            <p>CEO Main Boss</p>
        </div>
        <div class="team-member">
            <img src="members/imgs2.jpg" alt="Jaspher Siao"> <!-- Replace with the actual image path -->
            <h3>Jaspher Siao</h3>
            <p>Team Member</p>
        </div>
        <div class="team-member">
            <img src="members/imgs3.jpg" alt="Kenshyn Nicolas"> <!-- Replace with the actual image path -->
            <h3>Kenshyn Nicolas</h3>
            <p>Team Member</p>
        </div>
        <div class="team-member">
            <img src="members/imgs4.jpg" alt="Joseph Iban"> <!-- Replace with the actual image path -->
            <h3>Joseph Iban</h3>
            <p>Team Member</p>
        </div>
        <div class="team-member">
            <img src="members/imgs5.jpg" alt="Joven Evangelista"> <!-- Replace with the actual image path -->
            <h3>Joven Evangelista </h3>
            <p>Team Leader</p>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<script src="script.js"></script>

</body>

<footer>
  <div class="footer-content">
    <p>&copy; 2023 TarpShop. All rights reserved.</p>
    <ul class="footer-links">
    <a href="index.php" style="color: lightblue;"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="updates.php" style="color: lightblue;"><i class="fa fa-fw fa-bell"></i> Updates</a>
    <a href="about.php" style="color: lightblue;"><i class="fa fa-fw fa-info-circle"></i> About</a>
    </ul>
  </div>
  <p>Created by: Anjanel Balinas<br>
  <a href="mailto:balinasanjanel@gmail.com" style="color: lightblue; ">BossAnjanel@gmail.com</a></p>
</footer>

</html>
