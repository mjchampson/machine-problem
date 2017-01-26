<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
img {
    border-radius: 100px;
}
</style>
</head>
<body>

<ul>
  <li><a  href="index2.php">Fav. Color</a></li>
  <li><a href="sports.php">Fav. Sports </a></li>
  <li><a class="active" href="aircraft.php">Fav. Aircraft</a></li>
  <li><a href="car.php">Fav. Car</a></li>
  <li><a href="shoes.php">Fav. Shoes</a></li> 
  <li><a href="food.php">Fav. Food</a></li>
  <li><a href="watch.php">Fav. Watch</a></li>
  <li><a href="cap.php">Fav. Cap</a></li> 
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2 align="center">MARK JOSEPH SAMSON</h2>
  <h3 align="center">FAVORITE AIRCRAFT</h3>
  <h1 style="color:BLUE" align="center">  AIRBUS A320 NEO  </h1>
   <img src="airbus.jpg"  width="400" height="300" align="center">
  
</div>

</body>
</html>
