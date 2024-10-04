<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Start Field -->

    <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,300&display=swap');

body {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
 
  background-color: #000000;
  background-image: linear-gradient(147deg, #000000 0%, #2c3e50     74%);
}


/* Start Field */

.sub-menu{
  display: flex;
  justify-content: center;
  overflow: hidden;
}

.sub-menu .Top  {
  float: left;
  font-size: 16px;
  min-width: 90px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: all .5s;
}

.sub-menu-details {
    font-size: 16px;
    min-width: 90px;
    background-color: #ccc;
    display: flex;
    justify-content: center; 
    align-items: center; 
    text-align: center; 
    height: 45px;
    position: relative;
    top: 14px;
    width: 235px;
    left: 15%;
    border-radius: 15px;
    background-color: #4F6B82;
}
}


.active {
  background: #2C3E50;
}

.sub-menu .Top:hover {
  background-color: #2C3E50;
}



.sub-menu-alt, .Top  {
  min-width: 90px;
  float: left;
  color: white;
  text-decoration: none;
}

.sub-menu-alt .Top:hover .sub-menu-left:hover {
  background-color: #eee;
  color: #000;
}

.sub-menu-nav:hover {
  display: block;
}

@media screen and (max-width: 600px) {
  .sub-menu {
      flex-direction: column;
  }
  .sub-menu-nav {
    text-align:center;
    width:100%;
  }
 
}
.container {
    
  display: flex;
  justify-content: space-between;
}

.left{
    width: 30%;
    height: 100vh;
    background-color: #4F6B82;
}


.right {
  width: 60%;
  height: 100vh;
  background-color: #4F6B82;
}
.profile-pic {
  width: 150px; 
  height: 150px; 
  border-radius: 50%; 
  object-fit: cover; 
  border: 2px solid #fff; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  position: relative;
  left: 25%;
  top: 9px;
}



        </style>
</head>
<body>
   

<div class="sub-menu">
  <a  href="index.php" class="Top">Home</a>
  <div class="sub-menu">
    <a class="active Top" href="#">Details</a>
    
  </div> 

  <div class="sub-menu">
    <a href="#" class="Top">Education</a>
    
  </div> 
  <div class="sub-menu">
    <a href="#" class="Top">Biography</a>
   
  </div>
  <a href="#" class="Top">Projects</a>
</div>

<div class="container">
  <div class="left">
   <img src="https://www.kindpng.com/picc/m/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png" class="profile-pic" alt="profile">
   <div class="sub-menu-details">
    <a class="sub-menu-left Top" onclick="func()" id="Two" >Personal Details</a>
   </div>
   <div class="sub-menu-details">
    <a class="sub-menu-left Top" href="#">Documents</a>
   </div>
   <div class="sub-menu-details">
    <a class="sub-menu-left Top" href="#">Services</a>
   </div>

  </div>
  <div class="right" id="Two">Right</div>
</div>

<script>
  function func(){
    document.getElementbyID("Two").innerHTML="NOw..";
  }
  </script>

    
</body>
</html>