<?php 
require('vendor/autoload.php'); //loads api
session_start();
$spotifySession = new SpotifyWebAPI\Session( // creates a session with app credentials 
    '98b88799d05c4a168ab881885bf1c5d9',
    '1e31ca5a614e4910b97e124c5ce4633a'
);
$spotifySession->requestCredentialsToken(); // requests access token to be used from Spotify
$accessToken = $spotifySession->getAccessToken(); // stores access token in php file
$api = new SpotifyWebAPI\SpotifyWebAPI(); // if app is valid, creates an instance of the web api
$api->setAccessToken($accessToken); // sets valid token that allows requests to Spotify
?>

<html>
    <head>
        <title>vgMusic</title>
        <meta charset="utf-8"/> 
        <meta name="description" content="A Video Game Music Suggestor" />
        <link rel="stylesheet" type="text/css" href="vgm.css"/>
        <link rel="icon" type="image/x-icon" href="favicon2.ico"/>
    </head>

    <body>
        <h1>vgMusic</h1>
        <h2>A Simple Music Suggestor</h2>
        <form action = "http://vgmusic.herokuapp.com/vgm_handler.php" method = "get">
            <button name = "mood" type = "submit" id = "redButton" class="button" value = "red">
                <span>Tense</span>
            </button>
            <button name = "mood" type = "submit" id = "greenButton" class="button" value = "green">
                <span>Adventurous</span>
            </button>
            <button name = "mood" type = "submit" id = "blueButton" class="button" value = "blue">
                <span>Calm</span>
            </button>
            <button name = "mood" type = "submit" id = "yellowButton" class="button" value = "yellow">
                <span>Content</span>
            </button>
        </form>
        <p>List of Suggested Songs</p>
        <div id = "songList">
        
            <div>
                <ul>
                <?php
                if(isset($_SESSION['moodColor'])) {
                    foreach($_SESSION['moodColor'] as $songID) {
                        echo "<li><iframe src='https://open.spotify.com/embed/track/{$songID}' width = '300' height= '80' frameborder='0' allowtransparency='true' allow='encrypted-media'></iframe></li>";
                    }
                }
            ?>
                </ul>
            </div>
        </div>
        <footer>
            <address>
                <p>Created by: Lionel Lopez</p>
                <p>Email: <a href="mailto:lionellopez@u.boisestate.edu">
                   lionellopez@u.boisestate.edu</a></p>
            </address>
        </footer>
    </body>
</html>