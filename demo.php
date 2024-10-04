<!DOCTYPE html>
<html>
     <head>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <style>
      body {overflow: hidden;  background: #ccc;
  }
input {position: absolute; display: none}

* {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.menu {
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -25px;
  margin-top: -25px;
}

.btn {
  width: 70px;
  height: 70px;
  border-radius: 70px;
  position: absolute;
  overflow: hidden;
  cursor: pointer;
}

.material-icons.md-36 { font-size: 36px; color: #03A9F4 }

.btn {
  background: #ECEFF1;
  font-size: 15px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  
  -webkit-transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.btn:not(:first-child) {
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  z-index: -2;
  
  -webkit-transition: all 0.6s cubic-bezier(.87,-.41,.19,1.44);
  transition: all 0.6s cubic-bezier(.87,-.41,.19,1.44);
}

.btn:nth-child(2) {top:0px;-webkit-transition-delay: 0s;transition-delay: 0s}
.btn:nth-child(3) {top:0px;left:0px;-webkit-transition-delay: 0.1s;transition-delay: 0.1s}
.btn:nth-child(4) {left:0px;;-webkit-transition-delay: 0.2s;;transition-delay: 0.2s}
.btn:nth-child(5) {top:0px;left:0px;-webkit-transition-delay: 0.3s;transition-delay: 0.3s}
.btn:nth-child(6) {top:0px;-webkit-transition-delay: 0.4s;transition-delay: 0.4s}
.btn:nth-child(7) {top:0px;left:0px;-webkit-transition-delay: 0.5s;transition-delay: 0.5s}
.btn:nth-child(8) {left:0px;-webkit-transition-delay: 0.6s;transition-delay: 0.6s}
.btn:nth-child(9) {top:0px;left:0px;-webkit-transition-delay: 0.7s;transition-delay: 0.7s}

input#toggle:checked ~ #show-menu .btn:nth-child(2) {
  top:-150px;opacity:1;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input#toggle:checked ~ #show-menu .btn:nth-child(3) {
  top:-100px;left:100px;opacity:1;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input#toggle:checked ~ #show-menu .btn:nth-child(4) {
  left:150px;opacity:1;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input#toggle:checked ~ #show-menu .btn:nth-child(5) {
  top :100px;left:100px;opacity:1;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input#toggle:checked ~ #show-menu .btn:nth-child(6) {
  top:150px;opacity:1;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input#toggle:checked ~ #show-menu .btn:nth-child(7) {
  top:100px;left:-100px;opacity:1;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input#toggle:checked ~ #show-menu .btn:nth-child(8) {
  left:-150px;opacity:1;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input#toggle:checked ~ #show-menu .btn:nth-child(9) {
  top:-100px;left:-100px;opacity:1;-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

.menuBtn, .closeBtn {
  position: absolute;
  transition: all 0.3s ease;
}

.closeBtn {
  transform: translateY(50px);
  opacity: 0;
}

input#toggle:checked ~ #show-menu .btn .menuBtn {
  transform: translateY(-50px);
  opacity: 0;
}

input#toggle:checked ~ #show-menu .btn .closeBtn {
  transform: translateY(0px);
  opacity: 1;
}
</style>
     </head>

<body>
<div class="menu">
  <input type="checkbox" id="toggle" />
  <label id="show-menu" for="toggle">
    <div class="btn">
      <i class="material-icons md-36 toggleBtn menuBtn">menu</i>
      <i class="material-icons md-36 toggleBtn closeBtn">close</i>
    </div>
    <div class="btn">
      <i class="material-icons md-36">photo_camera</i>
    </div>
    <div class="btn">
      <i class="material-icons md-36">photo</i>
    </div>
    <div class="btn">
      <i class="material-icons md-36">music_note</i>
    </div>
    <div class="btn">
      <i class="material-icons md-36">chat_bubble</i>
    </div>
    <div class="btn">
      <i class="material-icons md-36">settings</i>
    </div>
    <div class="btn">
      <i class="material-icons md-36">phone</i>
    </div>
    <div class="btn">
      <i class="material-icons md-36">cloud</i>
    </div>
    <div class="btn">
      <i class="material-icons md-36">videocam</i>
    </div>
  </label>
</div>
</body>
</html>