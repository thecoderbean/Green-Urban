<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
  body{
    background-color: black;
    text-align: center;
  }
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  padding-right: 50%;
  padding-right: 50%;
  padding-bottom: 10px;
}

.switch input { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
h2{
color: whitesmoke;
}
h6{
  color: whitesmoke;
  padding-top: 40px;

}
</style>
</head>
<body>
<h2>Select Service</h2>
<form action="sevice.php" method="post">
  <div class="container">
  <label class="switch">
    <h6>DO YOU HAVE SEWAGE OR DRAIN WASTE</h6>
  <input name="drain" value="yes" type="checkbox">
  <span class="slider"></span>
</label>

<label class="switch">
  <h6>DO YOU HAVE KITCHEN WASTE</h6>
  <input name="kitchen" value="yes" type="checkbox" checked >
  <span class="slider"></span>
</label><br><br>

<label class="switch">
   <h6>DO YOU HAVE METALS TO RECYCLE</h6>
  <input name="metal" value="yes" type="checkbox">
  <span class="slider round"></span>
</label>

<label class="switch">
    <h6>DO YOU HAVE PLASTIC TO RECYCLE</h6>
  <input name="plastic" value="yes" type="checkbox" checked>
  <span class="slider round"></span>
</label>
</div>
<input type="submit" name="" value="REQUEST SERVICE">
</form>
</body>
</html> 
