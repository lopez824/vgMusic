<?php 
require('vendor/autoload.php'); //loads api
header('Access-Control-Allow-Origin: *');
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/ajax.js"></script>
        <link rel="icon" type="image/x-icon" href="favicon2.ico"/>
    </head>

    <body>
        <h1>vgMusic</h1>
        <h2>A Simple Music Suggestor</h2>
        <form>
            <button id = "redButton" class="button" value = "red">
                <span>Tense</span>
            </button>
            <button id = "blueButton" class="button" value = "blue">
                <span>Calm</span>
            </button>
            <button id = "yellowButton" class="button" value = "yellow">
                <span>Happy</span>
            </button>
        </form>
        <p id = "listHeading">Click a Button for a mood!</p>
        <div id = "songList">
        
            <div>
                <ul id = "List1">
                <li></li>
                <li></li>
                <li></li>
                </ul>
                <ul id = "List2">
                <li></li>
                <li></li>
                <li></li>
                </ul>
                <ul id = "List3">
                <li></li>
                <li></li>
                <li></li>
                </ul>
            </div>
        </div>
        
        <footer>
            <address>
                <p>Created by: <a id = "funsies" href="https://vgmusic.herokuapp.com/login/login.php">Lionel Lopez</a></p>
                <p>Email: <a href="mailto:lionellopez@u.boisestate.edu">
                   lionellopez@u.boisestate.edu</a></p>
            </address>
        </footer>
    </body>
</html>
