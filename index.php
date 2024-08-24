<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Home</title>

</head>
  <style>
.fixed-navbar {
      position: fixed;
      top: 0;
      width: 100%;
    }


   .navbar {
      background-color: rgb(59, 62, 83);
      overflow: hidden;
      display: flex;
      align-items: center;

    }

    /*box form*/
    .vid {
    margin: 50px;
  }
    /* Next & previous buttons */
   
.cont {
            max-width: 90%;
           
            margin: 0 auto;
            justify-content: center;
            padding: 18px;
            border-radius: 5px;
            background-color: rgb(59, 62, 83, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: justify;
}

/*mobile view*/
@media (max-width: 768px) {
  .cont {
    max width: 100%;
          
            justify-content: center;
            padding: 20px;
            border-radius: 5px;
            background-color: rgb(59, 62, 83, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: justify;
  }
  .vid {
    margin: 20px;
    margin-top: 20px;
  }

  .get-started-button {
  padding: 5px 8px;
  font-size: 12px;

}

}

iframe {
            max-width: 100%;
            /* You can adjust this value based on your preference */
        }
 .slides {
      animation: fade 1s;
      display: none;
    }

    .slides1 {
      animation: fade 1s;
      display: none;
    }

    @keyframes fade {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    h1 {
      font-size: 50px;
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


  <div class="header">
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1><img src="images/shoplogo.png" style="width:300px"></h1>
    <h1>Explore Now!</h1> 
  </div>
  <br />
  
  <div class="jumbotron">
  <h3>Tarpaulin Services</h3> 
  <div class="row">
    <div class="column">
      <h2>Customize Sample Templates</h2>
      <div class="custom"><p>Welcome to TarpShop in Montalban, your trusted source for high-quality tarpaulins. Discover a world of versatile, weather-resistant covers designed to meet all your needs. 
        Whether you require custom protection solutions or creative marketing tools, we've got you covered. Our range of high-quality, customizable tarpaulins empowers you to redefine the way you safeguard, 
        advertise, and thrive in your projects. Explore our offerings today and experience the difference that TarpShop in Montalban can make.
       
      </p></div>
      <br>
      <br>
      <center><a href="cust1.php" class="get-started-button">Templates</a></center>
    </div>
    <div class="column">
      <h2>Application Services Features</h2>
      <div class="perso"><p>Welcome to TarpShop in Montalban, your trusted source for high-quality tarpaulins. Discover a world of versatile, weather-resistant covers designed to meet all your needs. Whether you require
         custom protection solutions or creative marketing tools, we've got you covered. Our range of high-quality, customizable tarpaulins empowers you to redefine the way you safeguard, advertise, and thrive in your projects. 
         Explore our offerings today and experience the difference that TarpShop in Montalban can make.
        
      </p></div>
      <br>
      <br>
      <center><a href="services.php" class="get-started-button">Services</a></center>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <h2>Download the App</h2>
      <div class="custom"><p>Welcome to TarpShop in Montalban, your trusted source for high-quality tarpaulins. Discover a world of versatile, weather-resistant covers designed to meet all your needs. 
        Whether you require custom protection solutions or creative marketing tools, we've got you covered. Our range of high-quality, customizable tarpaulins empowers you to redefine the way you safeguard, 
        advertise, and thrive in your projects. Explore our offerings today and experience the difference that TarpShop in Montalban can make.
       
      </p></div>
      <br>
      <br>
      <center><a href="https://drive.google.com/drive/folders/19zsEx8uV-q9hOctQN48JhFiEk0FDowbW?usp=drive_link" class="get-started-button">Download</a></center>
    </div>
   
  </div>
  <br>
  <br>
  <br>
</div>
<br>

<div class="jumbotron">
<h3>Tarpaulin Offer</h3>
  <div class="row">
    <div class="column">
      <h2>Sample Quality Tarpaulin</h2>
      
  <div class="cont">
    <img class="slides" src="images/image1.jpg" style="width:100%">
    <img class="slides" src="images/image2.jpg" style="width:100%">
    <img class="slides" src="images/image3.jpg" style="width:100%">
    <img class="slides" src="images/image4.jpg" style="width:100%">
    <img class="slides" src="images/image5.jpg" style="width:100%">
    <img class="slides" src="images/image6.jpg" style="width:100%">
    <img class="slides" src="images/image7.jpg" style="width:100%">
  </div>
  
  <h2>High Quality Tarpaulin</h2>
  <div class="custom"><p>At TarpShop, quality is our hallmark. Our high-quality tarpaulins are designed to meet and exceed your expectations. Crafted with precision and manufactured from the finest materials,
         our tarpaulins are your trusted shield against the elements. Whether it's safeguarding your assets, covering construction sites, or enhancing your outdoor space, we offer unmatched durability and protection. 
         When you choose TarpShop, you're choosing excellence in tarpaulins.
        
        </p></div>
    </div>
  
  
    <div class="column">
      <h2>Free delivery</h2>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/D9bwnJclcas?si=TZFCJ7mPZdnHjtcZ" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   

  <h2>Quality Templates</h2>
      <div class="perso"><p>At TarpShop in Montalban, we're your go-to destination for premium tarpaulins. Our commitment to quality and durability sets us apart. We take pride in offering top-notch tarpaulin solutions for 
        all your protection needs. Whether it's safeguarding valuable assets, covering construction sites, or promoting your brand, our tarpaulins are designed to excel in even the harshest conditions. When you choose TarpShop 
        in Montalban, you're choosing unwavering reliability and peace of mind.
     
      </p></div>
     
    </div>
  </div>
  <br>
  <br>
  <br>
</div>
<br>



  <script src="script.js"></script>





  
</body>
<br>
<br>
<br>
<br>

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
