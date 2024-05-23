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
		<h4><center>Likes engagement statistics</center></h4>
		<div class="container">
		<table>
        <center>
			<thead>
                
				<tr>
				    <th>Likes_id</th>
				    <th>Artists</th>
					<th>Songs</th>
					<th>Engagement stats</th>
					
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
				$sql = "SELECT * FROM likes";
				$result = mysqli_query($conn, $sql);
				
				// Display data
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row["Likes_id"] . "</td>";
						echo "<td>" . $row["artists_name"] . "</td>";
						echo "<td>" . $row["Song_name"] . "</td>";
						echo "<td>" . $row["Likes_stats"] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='4'>No data available</td></tr>";
				}
				
				// Close connection
				mysqli_close($conn);
				?>
			</tbody>
            <center>
		</table> 
</body>
</html>
