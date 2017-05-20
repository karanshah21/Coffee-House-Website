<?php
 $username = "root";
 $password = "";
 $host = "localhost";
 $connector = mysqli_connect($host, $username, $password)
    or die("Unable to connect");
 $selected = mysqli_select_db($connector,"musicians")
    or die("Unable to connect");
 ?>
<!DOCTYPE html>
<html>
<head>

    <title>JavaJam Coffee House</title>
	<link rel="stylesheet" href="javajam.css"/>
	<script type="text/javascript" src="validation.js"></script>
</head>
<body>
	<div id="wrapper">
	<div id="icon"> <img src="javajamlogo.jpg" alt="coffee Icon" style="float:left;width:20%;height:96px;"></div>
		<h1>JavaJam Coffee House</h1>
		<div id="coverpic"> <img src="guitar.jpg" alt="coverpict" style="float:right;width:80%;height:230px;"> </div>
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
			<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Music at JavaJam</h2>
			<p class="margin">The first Friday night each month at JavaJam is a special night. 
			Join us form 8pm to 11pm for some music you won't want to miss! </p>
				<p id="months"> &nbsp&nbsp JANUARY</p>
					
				<p class="indent"><img src="melaniethumb.jpg" align="top" class="smallicon"/> &nbsp&nbsp  Melanie Morris entertains with her melodic folk style. </p>
				&nbsp&nbsp&nbsp&nbsp Other upcoming performances...
				<?php $result = mysqli_query($connector,"SELECT musician.name, musician.genre, performance.month_year FROM `musician` INNER JOIN performance ON musician.musianid=performance.musicianid 
																WHERE performance.month_year>='2017-01-01' AND performance.month_year<='2017-01-30';");?>
				<table align='center'>
					<thead>
						<tr>
							<th>Artist Name</th>
							<th>Genre</th>
							<th>Date of performance</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$link="artistdetails.html";
						while ($row = mysqli_fetch_assoc($result)) 
						{
							$name= $row['name'];
							$genre= $row['genre'];
							echo " <tr>
                                <td><a href='artistdetails.php?aname=". $name ."'>".$name."</a></td>
                                <td>".$genre."</td>
          					</tr>";
						}?>
					</tbody>
				</table>
				
				<p id="months"> &nbsp&nbsp FEBRUARY</p>
				<?php $result = mysqli_query($connector,"SELECT musician.name, musician.genre, performance.month_year FROM `musician` INNER JOIN performance ON musician.musianid=performance.musicianid 
																WHERE performance.month_year>='2017-02-01' AND performance.month_year<='2017-02-30';");?>						
				<p class="indent"><img src="gregthumb.jpg" align="top" class="smallicon"/>  &nbsp&nbsp Tahoe Greg is back from his tour. New songs. New stories. </p>
				 &nbsp&nbsp&nbsp&nbsp Other upcoming performances...
				<table align='center'>
					<thead>
						<tr>
							<th>Artist Name</th>
							<th>Genre</th>
							<th>Date of performance</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$link="artistdetails.html";
						while ($row = mysqli_fetch_assoc($result)) 
						{
							$name= $row['name'];
							$genre= $row['genre'];
							echo " <tr>
                                <td><a href='artistdetails.php?aname=". $name ."'>".$name."</a></td>
                                <td>".$genre."</td>
          					</tr>";
						}?>
					</tbody>
				</table>
		</div>
		<div id="footer">
			<footer><p>
				Copyright &#169; 2016 JavaJam Coffee House <br/><a href="/">karan@shah.com</a>
			</p></footer>
		</div>
	</div>
</body>
</html>
<?php mysqli_close($connector); ?>