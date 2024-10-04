<!DOCTYPE html>
<html>
     <head>
    <title>Jmolomo</title>
    <link href="style/style.css" rel="stylesheet" type="text/css"/>
    <style>
    body, html {
     height: 100%;
     margin: 0; 
   }
   
   .bg {
     /* The image used */
     background-image: url("background/Home_Background.jpg");
   
     
     height: 100%; 
   
    
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
   }
   .vertical-center {
  margin: 0;
  position: absolute;
  margin-left: 50%;
  top: 50%;

}
#b1{
     background-color: blue;
     padding: 10px 25px;
     border-radius: 14px;
     border: 2px solid  black;
     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
     transition-duration: 0.4s;
}
#b1:hover { 
  background-color: #04AA6D;
  color: #ccc;
} 
#info{

}
.d1 {
  position: absolute;
  top: 491%; left: 207%; bottom: 50%; right: 50%;
}
.button-container {
    position: relative;
    width: 290px; /* Adjust the width as needed */
   
    height: 250px; /* Adjust the height as needed */
    margin-left:-300px;
    margin-right: -300;
    margin-bottom: -300px;
    margin-top: -300px;
  }

  .button-container a {

    position: absolute;
    border-radius: 25%;
    width: 90px;
    height:40px;
    background-color: blue; 
    color: white; /* White text */
    cursor: pointer;
  }

  .button-container a:nth-child(1) {
    transform: rotate(0deg);
    top: 0;
    left: 40%;
    margin-left: -25px; /* Center horizontally */
  }

  .button-container a:nth-child(2) {
    transform: rotate(0deg);
   
    top: 50%;
    left: 78%;
    margin-top: -25px; /* Center vertically */
  }

  .button-container a:nth-child(3) {
    transform: rotate(0deg);
    bottom: 0;
    left: 40%;
    margin-left: -25px; /* Center horizontally */
  }

  .button-container a:nth-child(4) {
    transform: rotate(0deg);
    top: 50%;
    left: -48px;
    margin-top: -25px; /* Center vertically */
  }
  .buttonss{
    background-color: blue;
    border: 2px solid lightblack;
    border-radius: 3px;
    padding: 4px 6px;
  }
   </style>
    </head> 
    <body>
    <div class="bg"> 
    <div class="vertical-center" >
      <div class="d1" id="D1" ></div>
    <button id="b1" onclick="func()" >AboutMe</button>
    </div>
    </div>
     <script>
      function func(){
        document.getElementById('D1').innerHTML = `
        <div class="button-container">
 
  <a href="#about" id="buttonss" style="border-radius:15px; background-color: blue; "><img width="20" height="20" src="https://img.icons8.com/material-rounded/24/user-male-circle.png" alt="user-male-circle"/>Details</a>
  <a href="#about" id="buttonss" style="border-radius:15px; background-color: blue; "><img width="20" height="20" src="https://img.icons8.com/material-rounded/24/user-male-circle.png" alt="user-male-circle"/>&nbsp  Bio</a>
  <a href="#about" id="buttonss" style="border-radius:15px; background-color: blue; "><img width="20" height="20" src="https://img.icons8.com/material-rounded/24/user-male-circle.png" alt="user-male-circle"/>Education</a>
  <a href="#about" id="buttonss" style="border-radius:15px; background-color: blue; "><img width="20" height="20" src="https://img.icons8.com/material-rounded/24/user-male-circle.png" alt="user-male-circle"/>Projects</a>

 
</div>

        `
      }
     </script>
    </body>


</html>