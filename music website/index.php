<!DOCTYPE html>
<html>
<!--IRAGUHA Aristide 222008128 7th/05/2024 BIT GROUP A-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" title="style1" media="screen,tv,projection, handled, print" />
    <title>music streaming platform</title>
    <style>
        .playlist-container {
            max-height: 400px; /* Adjust height as needed */
            overflow-y: auto;
            padding-right: 15px;
            border-radius: 10px; 
        }
    </style>
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
    <section id="main">
        <div class="content-wrapper">
            <div class="playlist-container">
                <center><h3>Songs</h3></center>
                <div class="audio-container" id="audio1">
                    <div class="audio-inner" onclick="playAudio('audio/Chris_Brown_-_Angel_Numbers___Ten_Toes__Visualizer_(256k).mp3')">
                        <span class="audio-title">Chris Brown - Angel Numbers & Ten Toes (Visualizer)</span>
                        <span class="indicator">▶</span>
                    </div>
                </div>
                <div class="audio-container" id="audio2">
                    <div class="audio-inner" onclick="playAudio('audio/Fireboy_DML___Asake_-_Bandana__Official_Video_(128k).mp3')">
                        <span class="audio-title">Fireboy DML & Asake - Bandana (Official Video)</span>
                        <span class="indicator">▶</span>
                    </div>
                </div>
                <div class="audio-container" id="audio3">
                    <div class="audio-inner" onclick="playAudio('audio/Qing_Madi,_BNXN_-_Ole__Official_Video_(256k).mp3')">
                        <span class="audio-title">Qing Madi & BNXN - Ole (Official Video)</span>
                        <span class="indicator">▶</span>
                    </div>
                </div>
                <div class="audio-container" id="audio4">
                    <div class="audio-inner" onclick="playAudio('audio/Patoranking_-_BABYLON_[Feat._Victony]__Official_Music_Video_(256k).mp3')">
                        <span class="audio-title">Patoranking - BABYLON [Feat. Victony] (Official Video)</span>
                        <span class="indicator">▶</span>
                    </div>
                </div>
                <div class="audio-container" id="audio5">
                    <div class="audio-inner" onclick="playAudio('audio/Tayc  Love Me Official Lyrics Video.mp3')">
                        <span class="audio-title">Tayc - Love Me (Official Lyrics Video)</span>
                        <span class="indicator">▶</span>
                    </div>
                </div>
                <div class="audio-container" id="audio6">
                    <div class="audio-inner" onclick="playAudio('audio/Tyla  Water Official Music Video.mp3')">
                        <span class="audio-title">Tyla - Water (Official Music Video)</span>
                        <span class="indicator">▶</span>
                    </div>
                </div>
                <div class="audio-container" id="audio7">
                    <div class="audio-inner" onclick="playAudio('audio/Victony_&_Tempoe_-_Soweto_(Official_Video)(256k).mp3')">
                        <span class="audio-title">Victony & Tempoe - Soweto (Official Video)</span>
                        <span class="indicator">▶</span>
                    </div>
                </div>
                <div class="audio-container" id="audio8">
                    <div class="audio-inner" onclick="playAudio('audio/Young_Wild_and_Free_-_Wiz_Khalifa__Lyrics_Vietsub_(256k).mp3')">
                        <span class="audio-title">Young, Wild and Free - Wiz Khalifa (Official Video)</span>
                        <span class="indicator">▶</span>
                    </div>
                </div>
            </div>
            
            <div class="main-sidebar-wrapper">
                <div class="main-content">
                    <h1>Listening to music to keep your mood</h1>
                    <p>This is a simple website designed by <i><b>IRAGUHA Aristide!</b></i></p>
                    <h2>Unlimited <i>hi-fi</i> music streaming anywhere, anytime!!!</h2>
                </div>

                <div id="sidebar-container">
                    <ul class="sidebar-links">
                        <li><a href="#">Favorite</a></li>
                        <li><a href="#">Listen Later</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Podcast</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                
                    <div class="image-card">
                        <img src="images/856136_new-black-and-white-2016-drake-4k-wallpapers_1200x675_h.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="audio-container-wrapper">
        <section id="audioPlayer">
            <audio controls id="audioControl">
                <source src="" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </section>
    </div>

    
    <script>
        function playAudio(audioSrc) {
            var audioControl = document.getElementById("audioControl");
            audioControl.src = audioSrc;
            audioControl.play();
            
            // Remove 'playing' class from all audio containers
            var audioContainers = document.querySelectorAll(".audio-container");
            audioContainers.forEach(function(container) {
                container.classList.remove("playing");
            });
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var menuItems = document.querySelectorAll("nav ul a");
            menuItems.forEach(function(menuItem) {
                menuItem.addEventListener("click", function() {
                    menuItems.forEach(function(item) {
                        item.classList.remove("active");
                    });
                    this.classList.add("active");
                });
            });
        });
    </script>
    
</body>
</html>
