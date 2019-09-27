<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
	body{
		background-image: url("sunflowers.jpg"); 
		background-repeat: no-repeat;		
		background-size: cover;
		background-attachment: fixed;
		background-position: center center;
		
		text-align: justify;
		font-family: "Trebuchet MS", Helvetica, sans-serif;
    
    
		height: 100vh;
		padding:0;
		margin:0;
	}
	h1{
			color: #808080;
			font-size:50px;
			font-weight: bold;
			font-family: "Georgia", Georgia, serif;
		}
	h2{
			color: #808080;
			font-size:30px;
			font-weight: bold;
			font-family: "Georgia", Georgia, serif;
			text-align: center;
		}
	/*NavBar*/
	ul {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	  overflow: hidden;
	  background-color: #000080;
	}

	li {
	  float: right;
	}

	li a, .dropbtn {
	  display: inline-block;
	  color: #FFEE75;
	  text-align: center;
	  padding: 16px 20px;
	  text-decoration: none;
	}

	li a:hover, .dropdown:hover .dropbtn {
	  background-color: red;
	}

	li.dropdown {
	  display: inline-block;
	}

	.dropdown-content {
	  display: none;
	  position: absolute;
	  background-color: #FFFFFF;
	  min-width: 160px;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
	}

	.dropdown-content a {
	  color: black;
	  padding: 12px 16px;
	  text-decoration: none;
	  display: block;
	  text-align: left;
	}

	.dropdown-content a:hover {background-color: #f1f1f1;}

	.dropdown:hover .dropdown-content {
	  display: block;
	  
	/*image set*/
	div.gallery {
		border: 1px solid #ccc;
	}

	div.gallery:hover {
	  border: 1px solid #777;
	}

	div.gallery img {
	  width: 100%;
	  height: auto;
	}

	div.desc {
	  padding: 15px;
	  text-align: center;
	}

	* {
	  box-sizing: border-box;
	}

	.responsive {
	  padding: 0 6px;
	  float: left;
	  width: 24.99999%;
	}

	@media only screen and (max-width: 700px) {
	  .responsive {
		width: 49.99999%;
		margin: 6px 0;
	  }
	}

	@media only screen and (max-width: 500px) {
	  .responsive {
		width: 100%;
	  }
	}

	.clearfix:after {
	  content: "";
	  display: table;
	  clear: both;
	}
	</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device=width", initial-scale="1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<title>USERDES</title>
</head>
<body>

<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">School Works</a>
    <div class="dropdown-content">
      <a href="Activities.html">Activities</a>
      <a href="Reflection.html">Reflection</a>
      <a href="Learning.html">Learning</a>
    </div>
  </li>
  <li><a href="aboutme.html">About Me</a></li>
  <li><a href="home.html">Home</a></li>
</ul>
	
	<br><br><br>
	<h1><center>Welcome to my web app</center></h1>
	<h2>Feel free to check out my credentials and school works</h2>
	
</body>
</html>
