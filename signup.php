<?php 
include("res[1].php;")   ?>
<html>
	
	<title></title>
	<head>
		
		<meta name="viewport" content="Facebook Style Homepage Design with Login Form registration for using html and CSS"/>
   <style>
nav{
height: 50px;
background-color:#3b5998;
width: 100%;
line-height: 50px;
color: white;
text-size-adjust : 40%;
font-family:serif;
}
*{
box-sizing:border-box;
}
body{
background:url("grid.png");
background-size:cover;
}
.Wrap{
max-width:400px;
margin:auto;
margin-top:50px;
padding:20px;
font-family:san-serif;
background:#93ccea;
border-radius:10px;
}
.wrap h2{
font-size:200%;
text-align:center;
}
button a{
text-decoration:none;
color:#fff;
}
button:nth-child(1){
background:#3b5998;
}
button:hover{
background:rgba(0,0,0,0.6);
}
.fa{
font-size:1.3em;
font-weight:bold;
}

form h1{
text-align:center;
font-size:20px;
text-decoration:none;
font-weight:bold;
margin-top:0px;
}
input[type=text],input[type=password],input[type=submit]{
width:100%;
padding:10px;
margin-bottom:15px;
font-size:17px;
border-radius:5px;
outline:none;
border:none;
border:2px solid gray;
}
label{
font-size:20px;
font-weight:bold;
}
input[type=submit]{
    background:#0000ff;
    border:none;
    color:#fff;
    font-size:20px;
    font-weight:bold;
    padding:15px; /* Added a semicolon here */
    margin-top: 20px; /* Added an equal sign here */
    cursor:pointer;
}

input[type=submit]:hover{
background:orange;
}
nav{
text-align:center;
font-size:40px;
}
.social-media{
text-align:center;
}
p{
text-align:center;
font-size:20px;
}
p a{
text-decoration:none;
font-weight:bold;
color:#0a8a0a;
font-size:20px;
}

</style>
</head>

<body>
<header>
     <nav> <h1>Chat Bot</h1> </nav>
</header>
<div class="wrap">
<h2> Sign in</h2>

<form>
<label>First Name</label>
<input type="firstname">
<label>Last Name</label>
<input type="lastname">
<label>Mobile number or email address:</label><br>
<input type="email">
<label>Password:</label><br>
<input type="password">
<!-- <label>Confirm Password</label>
<input type="password"> -->
<input type="submit" value="Sign In">
<hr>
</form>
<p>Already a Member ?<a href="login.html"> <b>Get a Account</b></a></p>
	</div>
</body>
</html>