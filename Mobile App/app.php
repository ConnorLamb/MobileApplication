<!DOCTYPE html>
<html>
<head>
    <title>TwitterApp</title>
	<link rel = "stylesheet" href = "style.css">
	<?php include ('Users/russelldaly/Downloads/tweet-2-json-master/tweet2json.php');?>
	<script src="things.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	
	<!--
<script type="text/javascript">
		function init() {
			$.getJSON("http://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=c2c7a3843669f5958de03a4cc553111d", function() {
			console.log('yo');
		});
	
}-->
</script>
	
</head>

<body onload="storage()">
<div>

    <div id="title"><h1>App</h1></div>
    <div id="history">
        <div id="topTen">
            <h4 class="headings">Top Ten Searches</h4>
            <ol id="topTenList">
            </ol>
        </div>
        <div id="lastThree">
            <h4 class="headings">Your Last Searches</h4>    
            <ol id="lastThreeList">
                
            </ol>
        </div>
    </div>

<div class="form">
<form>
    
    <!--
<div>
        <label for="oldest">Oldest:</label>
        <input type="date" name="oldest" id="oldest" required/>
    </div>
    
    <div>
        <label for="latest">Latest:</label>
        <input type="date" name="latest" id="latest" required/>
    </div>
-->
	
    <!--
<div>
        <label for="distance">Distance(miles):</label>
        <input type="number" name="distance" id="distance" placeholder="50" min="1" max="3000" required/>
    </div>
-->
	
    <div>
        <label for="name">Hash Tag 1:</label>
        <input type="text" name="Hash" id="Hash" placeholder="#doge" size="14" maxlength="140"/>
    </div>
    
    <div>
        <label for="name">Hash Tag 2:</label>
        <input type="text" name="Hash2" id="Hash2" placeholder="#KillaSwag" size="14" maxlength="140"/>
    </div>
    
    <!--<div>
        <label for="sentiment">Sentiment:</label>
        <select name="order" id="sentiment">
            <option value="1">Highest</option>
            <option value="2">Lowest</option>
        </select>
    </div>-->
    
    <input type="hidden" id="latitude" name="latitude" value=0>
    <input type="hidden" id="longitude" name="longitude" value=0>
    
    <div class="submit"><input type="button" onclick="run(Hash.value, Hash2.value)" id="submit" value="Go"></div>

	
</form>
</div>
<div id="history">
	<?php echo search_tweets('#obama', 1, FALSE, FALSE); ?>
</div>
</div>
<!--
<script>
	//var temp = search_tweets('#obama', 1, FALSE, FALSE);
	var history = document.getElementById("hashtag")
	localStorage.setItem("hashtag", '<?php echo search_tweets('#obama', 1, FALSE, FALSE); ?>');
</script>
-->
<!--
<script>
	dataType: "text",
	var json = $.parseJSON(tweet2json);
	$('#history').html('Text: ' + json.text);
</script>
-->
<!--
<script>

        //When DOM loaded we attach click event to button
        $(document).ready(function() {
            
            //after button is clicked we download the data
            $('.button').click(function(){

                //start ajax request
                $.ajax({
                    url: "tweet2json.json",
                    //force to handle it as text
                    dataType: "text",
                    success: function(data) {
                        
                        //data downloaded so we call parseJSON function 
                        //and pass downloaded data
                        var json = $.parseJSON(data);
                        //now json variable contains data in json format
                        //let's display a few items
                        $('#results').html('Plugin name: ' + json.name + '<br />Author: ' + json.author.name);
                    }
                });
            });
        });
    </script>
-->
</body>
</html>
