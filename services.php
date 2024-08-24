<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Services</title>
  
</head>
<style>
/* CSS for image grid layout */
.image-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  /* Adjust this as needed for spacing between images */
}

.image-container img {
  max-width: 350px;
  max-height: 550px; /* Set a maximum height of 500px */
  width: auto;
  height: auto; /* Maintain aspect ratio */
  margin: 20px; /* Add spacing between images */
}

/* Media query for mobile screens */
@media only screen and (max-width: 767px) {
 
  .image-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  /* Adjust this as needed for spacing between images */
}

.image-container img {
  max-width: 350px;
  max-height: 650px; /* Set a maximum height of 500px */
  width: auto;
  height: auto; /* Maintain aspect ratio */
  margin: 30px; /* Add spacing between images */
}



  .column {
      width: 80%;
       }
  
}


h1 {
      font-size: 40px;
      color: lightblue;
      text-align: center;
  }
/* jubotron styles */

.jumbotron {
            width: 90%;
            margin: 0 auto;
            justify-content: center;
            padding: 20px;
            border-radius: 5px;
            background-color: rgb(59, 62, 83, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      .row {
          display: flex;
          justify-content: space-between;
          margin: auto;
          align-items: stretch;
          flex-wrap: wrap;
      }

      .column {

          flex: 1;
          flex-basis: 30%;
          padding: 10px;
          margin: 20px;
          align-items: stretch;
      }
      
        .perso{
          font-size: 16px;
          color: white;
        }
        .custom{
          font-size: 16px;
          color: white;
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
      font-size: 40px;
      color: white;
      text-align: center;
  }

    /*button*/
    .get-started-button {
  padding: 20px 40px;
  font-size: 18px;
  border-radius: 20px;
  background-color: green; 
  color: #fff; 
  border: none; 
  cursor: pointer; 
}


.get-started-button:hover {
  background-color: #3498db;
}


 
</style>


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


<body >
  <br>
  <br>
  <br>
  <br>
  <br>
    <h1>Application Services</h1>
  <br>
  <div class="jumbotron">
 
  <br>
<h3>Application features</h3>
<div class="image-container">
<div class="row">
    <div class="column">
      <h2>Application Main Pages</h2>
      <div class="custom"><p>Welcome to TarpShop in Montalban, your trusted source for high-quality tarpaulins. Discover a world of versatile, weather-resistant covers designed to meet all your needs. 
        Whether you require custom protection solutions or creative marketing tools, we've got you covered. Our range of high-quality, customizable tarpaulins empowers you to redefine the way you safeguard, 
        advertise, and thrive in your projects. Explore our offerings today and experience the difference that TarpShop in Montalban can make.
      </p></div>
      <br>
     
    </div>
  </div>
  <img src="services/mainpg1.jpg" >
  <img src="services/mainpg2.jpg" >
  <img src="services/mainpg3.jpg" >
  <img src="services/mainpg4.jpg" >
  <img src="services/mainpg5.jpg" >
  <img src="services/mainpg6.jpg" >
  <img src="services/mainpg7.jpg" >
  <img src="services/mainpg8.jpg" >
  <div class="row">
    <div class="column">
      <h2>Application Tarpaulin Status Pages</h2>
      <div class="custom"><p>Welcome to TarpShop in Montalban, your trusted source for high-quality tarpaulins. Discover a world of versatile, weather-resistant covers designed to meet all your needs. 
        Whether you require custom protection solutions or creative marketing tools, we've got you covered. Our range of high-quality, customizable tarpaulins empowers you to redefine the way you safeguard, 
        advertise, and thrive in your projects. Explore our offerings today and experience the difference that TarpShop in Montalban can make.
      </p></div>
      <br>
    </div>
  </div>
  <img src="services/stats1.jpg" >
  <img src="services/stats2.jpg" >
  <img src="services/stats3.jpg" >
  <img src="services/stats4.jpg" >
  <img src="services/stats5.jpg" >
  <img src="services/stats6.jpg" >
  <img src="services/stats7.jpg" >
  <img src="services/stats8.jpg" >
  <img src="services/stats9.jpg" >
  <img src="services/stats10.jpg" >
  <img src="services/stats11.jpg" >
  <img src="services/stats12.jpg" >
  <div class="row">
    <div class="column">
      <h2>Application Upload Own Design Pages</h2>
      <div class="custom"><p>Welcome to TarpShop in Montalban, your trusted source for high-quality tarpaulins. Discover a world of versatile, weather-resistant covers designed to meet all your needs. 
        Whether you require custom protection solutions or creative marketing tools, we've got you covered. Our range of high-quality, customizable tarpaulins empowers you to redefine the way you safeguard, 
        advertise, and thrive in your projects. Explore our offerings today and experience the difference that TarpShop in Montalban can make.
      </p></div>
      <br> 
    </div>
  </div>
  <img src="services/own1.jpg" >
  <img src="services/own2.jpg" >
  <img src="services/own3.jpg" >
  <img src="services/own4.jpg" >

  <div class="row">
    <div class="column">
      <h2>Application Custom Design Pages</h2>
      <div class="custom"><p>Welcome to TarpShop in Montalban, your trusted source for high-quality tarpaulins. Discover a world of versatile, weather-resistant covers designed to meet all your needs. 
        Whether you require custom protection solutions or creative marketing tools, we've got you covered. Our range of high-quality, customizable tarpaulins empowers you to redefine the way you safeguard, 
        advertise, and thrive in your projects. Explore our offerings today and experience the difference that TarpShop in Montalban can make.
      </p></div>
      <br>
    </div>
  </div>
  <img src="services/custom1.jpg" >
  <img src="services/custom2.jpg" >
  <img src="services/custom3.jpg" >
  <img src="services/custom4.jpg" >
  <img src="services/custom5.jpg" >
  <img src="services/custom6.jpg" >
  <img src="services/custom7.jpg" >
  <img src="services/custom8.jpg" >
  <img src="services/custom9.jpg" >
  <img src="services/custom10.jpg" >
  <img src="services/custom11.jpg" >
  <img src="services/custom12.jpg" >
  <img src="services/custom13.jpg" >
  <img src="services/custom14.jpg" >
  <img src="services/custom15.jpg" >
  <img src="services/custom16.jpg" >

  <div class="row">
    <div class="column">
      <h2>Application Concern Pages</h2>
      <div class="custom"><p>Welcome to TarpShop in Montalban, your trusted source for high-quality tarpaulins. Discover a world of versatile, weather-resistant covers designed to meet all your needs. 
        Whether you require custom protection solutions or creative marketing tools, we've got you covered. Our range of high-quality, customizable tarpaulins empowers you to redefine the way you safeguard, 
        advertise, and thrive in your projects. Explore our offerings today and experience the difference that TarpShop in Montalban can make.
      </p></div>
      <br> 
    </div>
  </div>
  <img src="services/service1.jpg" >
  <img src="services/service2.jpg" >
  <img src="services/service3.jpg" >
  <img src="services/service4.jpg" >

</div>
<h1>Shop Services</h1>
  <div class="row">
    <div class="column">
      <h2>Download the App</h2>
      <div class="custom"><p>Welcome to TarpShop in Montalban, your trusted source for high-quality tarpaulins. Discover a world of versatile, weather-resistant covers designed to meet all your needs. 
        Whether you require custom protection solutions or creative marketing tools, we've got you covered. Our range of high-quality, customizable tarpaulins empowers you to redefine the way you safeguard, 
        advertise, and thrive in your projects. Explore our offerings today and experience the difference that TarpShop in Montalban can make.
       
      </p></div>
      <br>
      <center><a href="https://drive.google.com/drive/folders/19zsEx8uV-q9hOctQN48JhFiEk0FDowbW?usp=drive_link" class="get-started-button">Download</a></center>
    </div>
   
  </div>
<br>
<br>
<br>
  </div>
  <br>
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
