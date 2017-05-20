
<!DOCTYPE html>
<html>
<head>
    <title>JavaJam Coffee House</title>	
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="javajam.css"/>
	<link rel = "stylesheet" type = "text/css" href = "music.css"/>
	<script type="text/javascript" src="validation.js"></script>
	<script type="text/javascript" src="music.js"></script>
	  
    <script type="text/javascript">
      function getName()
      {
        var regex = /[?&]([^=#]+)=([^&#]*)/g,
        url = window.location.href,
        parameters = {},
        match;
        while(match = regex.exec(url))
        {
          parameters[match[1]] = match[2];
        }
        sendRequest(parameters['aname']);
      }
    </script>
  </head>
  <body onload="getName();">
</head>
<body>

	<div id="wrapper">
		<div id="icon"> <img src="javajamlogo.jpg" alt="coffee Icon" style="float:left;width:20%;height:96px;"> </div>
		<h1>JavaJam Coffee House</h1>
		
		<div id="navbar">
			<nav>
			<table>
			<tr><td class="tdstyle"></td></tr>
			<tr><td class="tdstyle">
				<a href="index.html">Home</a> </td></tr>
			<tr><td class="tdstyle">
				<a href="menu.html">Menu</a> </td></tr>
			<tr><td class="tdstyle">
				<a href="music.php">Music</a> </td></tr>
			<tr><td class="tdstyle">
				<a href="jobs.html">Jobs</a> </td></tr>
			</table>
			</nav>		
		</div>	
	<div id="content">
		<div class="margin">
		</br>
    <div id="output">&nbsp;</div>
    <p id = "url">&nbsp;</p>  
    <div id = "outer" class = "artistStyle"></div>
    <div> 
    <div class="topAlbums"><ul id = "albums">&nbsp;</ul></div>
    <div id = "similar" class="similarArtist">&nbsp;</div>
  </div>
		</div>
	</div>
	<div id="footer">
			<footer><p>
				Copyright &#169; 2016 JavaJam Coffee House <br/><a href="/">karan@shah.com</a>
			</p></footer>
	</div>
	</div>
</body>
</html>