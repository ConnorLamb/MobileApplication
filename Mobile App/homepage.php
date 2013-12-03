<link rel = "stylesheet" href = "style.css">
<html lang ="en">

<head>
<title> Twitter Application </title>

<script src="recent.js"> </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<?php include ('Users/russelldaly/Downloads/tweet-2-json-master/tweet2json.php');?>

<meta charset="utf-10">
</head>	
	<body onload="storage()">
		<header>
			<nav>
				<p> <a href = "homepage.html"> Home </a> </p>
				<a href = "search.html"> Search </a>
			</nav>
		</header>
		
		<br/>
		
		<div>
			<h1> Team Nameless Mobile App </h1>
		</div>
		
		<div>
			<h2> Homepage </h2>
		</div>
		
		<div>
		<h3> Recent Global Searches </h3>
		<ol id = "table1">
			
			<li>   </li>
			<li>   </li>
			<li>   </li>
			<li>   </li>
			<li>   </li>
			<li>   </li>
			<li>   </li>
			<li>   </li>
			<li>   </li>
			<li>   </li>
		</ol>
		</div>
		
		<div id="lastFour">
		<h3> Recent Searches </h3>
			<ol id="lastFourList">
			
			<li> </li>
			<li> </li>
			<li> </li>
			<li> </li>
			</ol>
		</div>
		<form>
			Hashtag 1: <input type = "text"  id = "htag1" placeholder="#CandyCorn" required> </br>
			Hashtag 2: <input type = "text" id = "htag2" placeholder="#Movies" required> </br>
			Mile Radius: <input type = "text"  id = "radius" placeholder="50" min ="1" max ="100"> </br>
			Sentiment: <select type = ""  id = "senti" > 
				<option value="1"> Highest </option>
				<option value="2"> Lowest </option> </select>
				<br>
			Start Date: <input type = "date" id = "date1"> <br>
			End Date: <input type = "date" id = "date2" > <br>
			
			<input type = "button" onclick="run(htag1.value, htag2.value)" id = "submit" value="Submit">
			<input type = "reset">
		</form>
		
	</body>
</html>