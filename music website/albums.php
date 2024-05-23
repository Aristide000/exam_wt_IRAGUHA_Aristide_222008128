<!DOCTYPE html>
<html>
<!--IRAGUHA Aristide 222008128 7th/05/2024 BIT GROUP A-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" title="style1" media="screen,tv,projection, handled, print" />
    <title>music streaming platform</title>
</head>
<body>
    <header>
        <nav>
            <div class="vertical-container">
                <div class="logo">
                    <p>Music streaming Platform</p>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Search by artists, songs or albums">
                </div>
            </div>
            
            <ul>
                <div class="vertical-container">
				<li><a href="index.php">Songs</a></li>
                    <li><a href="albums.php">Albums</a></li>
                    <li><a href="playlists.php">Playlists</a></li>
                    <li><a href="likes.php">Likes</a></li>
                    <li><a href="About us.php">About us</a></li>
                    <li class="dropdown">
				<a href="#">Users</a>
				<div class="dropdown-contents">
                <a href="users.php">Register</a>
					<a href="login.php">Login</a>
					<a href="logout.php">Logout</a>
                </div>
            </ul>
        </nav>
    </header>
    <section>
		<h4><center>Albums</center></h4>
		<div class="container">
		<table>
        <center>
			<thead>
                
				<tr>
				    <th>Album list</th>
				    <th>Artist/Band</th>
					<th>Album_title</th>
					<th>Plays</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
				// Connect to database
				$conn = mysqli_connect("localhost", "root", "", "musicstreaming");
				
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				
				// Fetch data from database
				$sql = "SELECT * FROM albums";
				$result = mysqli_query($conn, $sql);
				
				// Display data
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row["albumid"] . "</td>";
						echo "<td>" . $row["Artists"] . "</td>";
						echo "<td>" . $row["album_name"] . "</td>";
						echo "<td>" . $row["Plays"] . "</td>";
						echo "</tr>";
					
					}
				} else {
					echo "<tr><td colspan='4'>No data available</td></tr>";
				}
				
				// Close connection
				mysqli_close($conn);
				?>
			</tbody>
			</div>
            <center>
		</table> 
		</div>
		<div class="card-container-wrapper">
			<div class="card-container">
				<div class="card">
					<img src="images/856136_new-black-and-white-2016-drake-4k-wallpapers_1200x675_h.png" class="card-img-top" alt="...">
					<div class="card-body">
						<p><b>DRAKE</b></p>
						<p class="card-text">Listen to drake 's <i><b>Thank me later</b></i></p>
					</div>
				</div>
			</div>
			<div class="card-container">
				<div class="card">
					<img src="images/taylor_swift_in_red_lightning_background_wearing_glittering_dress_singing_4k_hd_celebrities-t2.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					<p><b>TYLOR SWIFT</b></p>
					<p class="card-text">Listen to tylor swift 's <i><b>Fearless</b></i></p>
					</div>
				</div>
			</div>
			<div class="card-container">
				<div class="card">
					<img src="images/images.jpg" class="card-img-top" alt="...">
					<div class="card-body">
					<p><b>GUNNA</b></p>
					<p class="card-text">Listen to gunna 's <i><b>Wun</b></i></p>
					</div>
				</div>
			</div>
			<div class="card-container">
				<div class="card">
					<img src="images/images (1).jpg" class="card-img-top" alt="...">
					<div class="card-body">
					<p><b>BURNABOY</b></p>
					<p class="card-text">Listen to burna 's <i><b>Love damini</b></i></p>
					</div>
				</div>
			</div>
		</div>
    
</section>
</body>
</html>
